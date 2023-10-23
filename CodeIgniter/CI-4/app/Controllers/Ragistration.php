<?php 
namespace App\Controllers;
//use CodeIgniter\Files\File;
use TCPDF;
use App\Libraries\PDFReport; // Import library


class Ragistration extends BaseController
{	
	function __construct()
    {
        $this->Usermodel = new \App\Models\UserModel;
        $this->Ragistrationmodel = new \App\Models\RagistrationModel;
        $pdfReport = new PDFReport();
    }

	public function index()
    {   
        if(session()->get('logged_in')){
            $data['state_data'] = $this->Ragistrationmodel->getStateData();
            $data['city_data'] = $this->Ragistrationmodel->getCityData();
            return view('admin/ragistration',$data);
        }else{
            return redirect()->to('/');
        }
    }

    public function getUsersData()
    {   
        $aFilter = [
            'UserRole' => $this->request->getPost('user_role')
        ]; 
        $result = $this->Ragistrationmodel->getAllUsersData($aFilter);
        $json_data['data'] = $result;
        echo json_encode($json_data);
    } 

    public function getAllCityData()
    {
        $state_id = $this->request->getPost('state_id');
        $result = $this->Ragistrationmodel->getAllCityData($state_id);
        echo json_encode($result);
    }

    public function save()
    {   

        if ($this->request->getMethod() == 'post') {
            $files_name = array();
            $user_id = $this->request->getPost('user_id');
            $profile_photo = $this->request->getFile('profile_photo');
            $resume = $this->request->getFile('resume');
            $gallary_files = $this->request->getFiles('gallary');
            $userData = $this->Ragistrationmodel->getUserDataForEdit($user_id);
            $files_name = (!empty($userData->gallary_photos)) ? explode(",", $userData->gallary_photos) : $files_name;

            foreach ($gallary_files['gallary'] as $image) {
                if (!empty($image->getClientName())) {
                    $gallary_files_name = $image->getRandomName();
                    $image->move("uploads/gallary",$gallary_files_name);
                    array_push($files_name, $gallary_files_name);
                }
            }

            if (!empty($profile_photo->getClientName())) {

                $profile_photo_name = $profile_photo->getRandomName();
                $profile_photo->move("uploads/profile_images/",$profile_photo_name);

            }else{

                $profile_photo_name = $this->request->getPost('profile_photo_name');

            }

            if (!empty($resume->getClientName())) {

                $resume_name = $resume->getRandomName();
                $resume->move("uploads/resume/",$resume_name);

            }else{
                $resume_name = $this->request->getPost('resume_name');
            }

            $data = [
                'first_name' => $this->request->getPost('first_name'),
                'last_name' => $this->request->getPost('last_name'),
                'email' => $this->request->getPost('email'),
                'mobile_number' => $this->request->getPost('mobile_number'),
                'state' => $this->request->getPost('state'),
                'city' => $this->request->getPost('city'),
                'address' => $this->request->getPost('address'),
                'user_role' => $this->request->getPost('user_role'),
                'password' => $this->request->getPost('password'),
                'profile_photo' => $profile_photo_name,
                'resume' => $resume_name,
                'gallary_photos' => implode(",", $files_name)
            ];

            if (empty($user_id)) {
                $result = $this->Ragistrationmodel->saveUserData($data);
                echo json_encode($result);
            }else{
                $result = $this->Ragistrationmodel->updateUserData($data,$user_id);
                echo json_encode($result);
            }
        }
    }

    public function edit()
    {
       $user_id = $this->request->getPost('id');
       $result = $this->Ragistrationmodel->getUserDataForEdit($user_id);
       echo json_encode($result);
    }

    public function printUserData($id)
    {
        $result = $this->Ragistrationmodel->getUserDataForEdit($id);
        $data = [
            'user_data' => $result
        ]; 
        $this->response->setContentType('application/pdf');
        return view('admin/print_user_data',$data);
    }

    public function delete_images()
    {
        $images = $this->request->getPost('images');
        $user_id = $this->request->getPost('id');
        $result = $this->Ragistrationmodel->getAndDeleteImages($user_id,$images);
        echo json_encode($result);
    }

    public function delete()
    {   
        $user_id = $this->request->getPost('id');
        $profile_photo = $this->request->getPost('profile_photo');
        $resume = $this->request->getPost('resume');
        if (file_exists("uploads/profile_images/".$profile_photo)) {
            unlink("uploads/profile_images/".$profile_photo);
            unlink("uploads/resume/".$resume);
        }
        $result = $this->Ragistrationmodel->deleteUserData($user_id);
        echo json_encode($result);
    }
}