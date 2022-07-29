<?php
namespace App\Controllers\Admin\Users;

use System\Core\Controller;
use System\Core\Session;

 class LoginController extends Controller
 {
    public function index()
    {
        return $this->view('admin/users/login');
    }

    public function store() 
    {
       $this->isMethod('POST');
       $email = $this->input('email');
       $password = $this->input('password');

       if (is_null($email) || is_null($password)) 
       {
       Session::set('error', 'vui long nhap email va mat khau');

       return back();
       }
    }
 }
