<?php 
namespace App\Controllers;
use App\Models\LoginModel;
use App\Models\RegisterModel;
use App\Controllers\Home;
class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        echo view('v_login');
    }
    public function cek_login()
    {
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        $cek = $this->LoginModel->cek_login($email, $password);

        if ($cek) {
            session()->set('email',$cek['email']);
            session()->set('firstname',$cek['firstname']);
            session()->set('lastname',$cek['lastname']);
            session()->set('level',$cek['level']);

            return redirect()->to(base_url('home'));
        }else{
            session()->setFlashdata('gagal','Email atau password salah !!!'); 
            return redirect()->to(base_url('login'));
        }
        
    }
    public function Logout()
    {
            session()->remove('email');
            session()->remove('firstname');
            session()->remove('lastname');
            session()->remove('level');
            
            session()->setFlashdata('sukses','Anda berhasil Logout !!!'); 
            return redirect()->to(base_url('login'));
    }
    public function register(){
        $data = [
            'title'=> 'Form Register',
            'tampil' => 'register',
        ];
        echo view('register',$data);
    }

    public function regis(){
        $userData = new RegisterModel();

        $_POST['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);

        $userData->insert($_POST);
        return redirect()->to(base_url('login'));
    }
}
?>