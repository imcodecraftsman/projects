<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{   
    function __construct()
    {
        $this->session = session();
        $this->Usermodel = new \App\Models\UserModel;
    }

    public function index()
    {   
        return view('login');
    }

    public function admin()
    {   
        if(session()->get('logged_in')){
            return view('admin/index');
        }else{
            return redirect()->to('/');
        }
    }

    public function login()
    {   
        $Username = $this->request->getPost('username');
        $Password = $this->request->getPost('password');
        $EmailVerification = $this->Usermodel->findByEmail($Username);
        $PasswordVerification = $this->Usermodel->authentication($Username,$Password);

        if ($EmailVerification && $PasswordVerification) {
            return redirect()->to('/admin')->with('info','Login was successful');
        }else{
            return redirect()->to('/')->with('info','Please Check Credentials');
        }

    }

    public function logout()
    {
        $this->Usermodel->logoutUser();
        return redirect()->to('/')->with('info','Logout successful');
    }
}
