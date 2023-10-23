<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{   
    protected $db;
    protected $table = 'mst_users';
    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'password',
        'user_role',
        'last_updated'
    ];

    public function isLoggedIn()
    {
        return session()->get('logged_in');
    }

    public function getUserFullName($id)
    {
       $result = $this->where('id',$id)->first();
       return $result['first_name']." ".$result['last_name'];
    }

    public function findByEmail($email)
    {
        return $this->where('email',$email)->first();
    }

    public function authentication($email,$password)
    {
        $user = $this->findByEmail($email);

        if ($user == null) {
            return false;
        }
        if ($password !== $user['password']) {
            return false;
        }

        $session = session();
        $session->regenerate();
        $session_data = [
            'user_id'   => $user['id'],
            'username'  => $user['email'],
            'logged_in' => true,
        ];

        $session->set($session_data);
        return true;
    }

    public function logoutUser()
    {
        session()->destroy();
    }

}