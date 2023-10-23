<?php
namespace App\Models;
use CodeIgniter\Model;

class RagistrationModel extends Model
{   
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function saveUserData($data)
    {   
        $result = $this->db->table('mst_users')->insert($data);
        return $result ? true : false;
    }

    public function updateUserData($data,$user_id)
    {   
        $result = $this->db->table("mst_users")->where('id', $user_id)->update($data);
        return $result ? true : false;
    }

    public function getAllUsersData($aFilter)
    {   
        $builder = $this->db->table('mst_users');
        if ($aFilter['UserRole'] != '') {
            $builder->where('user_role',$aFilter['UserRole']);
        }
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getUserDataForEdit($id)
    {   
        $builder = $this->db->table("mst_users");
        $builder->select('*');
        $builder->where('id', $id);
        $query = $builder->get();
        return $query->getRow();
        //return $result = $this->where('id',$id)->find();
    }

    public function getStateData()
    {
        $builder = $this->db->table('mst_states');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getCityData()
    {
        $builder = $this->db->table('mst_cities');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getAllCityData($state_id)
    {   
        $builder = $this->db->table('mst_cities')->where('state_id',$state_id);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function deleteUserData($id)
    {      
        $result = $this->db->table("mst_users")->where('id', $id)->delete();
        return $result ? true : false;
    }

    public function getAndDeleteImages($user_id,$images)
    {
       $builder = $this->db->table('mst_users')->select('`gallary_photos`')->where('id',$user_id);
       $query = $builder->get();
       $result = $query->getRowArray();

        $dbImages = explode(",", $result['gallary_photos']);
        $getSelectedImages = [];
        foreach ($images as $key => $value) {
            array_push($getSelectedImages,$value['img']);
        }

        $updatedImages = [];
        foreach ($dbImages as $key => $img) {
            if (in_array($img, $getSelectedImages)) {
                unlink("uploads/gallary/".$img);
            }else{
                array_push($updatedImages,$img);
            }           
        } 
        $updatedImage = implode(",", $updatedImages);
        $updateResult = $this->db->table("mst_users")->set('gallary_photos', $updatedImage)->where('id', $user_id)->update();
        return $updateResult ? true : false;
    }
}