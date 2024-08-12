<?php
namespace Codx\Comic\Controller;

use Codx\Comic\Api;
use Codx\Comic\Auth;
use Codx\Comic\Model\Student;
use Codx\Comic\Model\User;
use Codx\Ralph\Engine as View;
use Codx\Comic\Request;

class AuthController extends Controller{

    public function __construct(){
    
    }

    public function login()
    {
       
        return View::view('auth.login');
    }

    public function loginAdmin()
    {
       
        return View::view('auth.admin.login');
    }

    public function authAdmin(Request $request)
    {
        $password = $request->password;
        try {
            $user = User::where(['password' => $password])->get()->firstOrFail();
            if($user)
            {
                Auth::login($user);
                $this->redirect('/dashboard');
            }
        } catch (\Throwable $th) {
            // die($th);
            return View::view('404');
        }
        
    }

    public function auth(Request $request)
    {
        $password = md5($request->password);
        $email = $request->email;
        try {
            $student = Student::where(['password' => $password, 'email' => $email])->get()->firstOrFail();
            if($student)
            {
                Auth::login($student);
                $this->redirect('/home');
            }
        } catch (\Throwable $th) {
            // die($th);
            return View::view('404');
        }
        
    }

    public function logout(){
        Auth::logout();
        $this->redirect('/');

    }

    public function register(Request $request)
    {
        return View::view('auth.register');
    }

    public function createUser(Request $request)
    {
        $student = new Student($request->all());
        $student->password = md5($request->password);
        if($student->save())
        {
            header('location: /login');
        }
        return;
    }

    
}