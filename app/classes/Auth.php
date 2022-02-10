<?php


namespace App\classes;
use App\classes\User;
use App\classes\Home;


class Auth
{

    protected $email;
    protected $password;

    protected $user;
    protected $users;

    protected $messege;

    protected  $home;

    public function __construct($post = null)
    {
        $this->email = $post['email'];
        $this->password = $post['password'];
    }


    public function login(){
        header('Location: action.php?pages=login');
    }

    public function verify(){
//        echo $this->email;
//        echo $this->password;
        $this->user = new User();
        $this->users = $this->user->getAllUser();

        foreach($this->users as $data){
            if($data['email'] == $this->email && $data['password'] == $this->password){
//                echo "OK";
//                break;

                session_start();
                $_SESSION['id'] = $data['id'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['password'] = $data['password'];


                $this->home = new Home();
                $this->home->index();
            }
//            else {
////                echo "Not OK";
////                break;
//                $this->messege = "Sorry!! Email or Password invalid";
//            }
        }
        return "Sorry!! Email or Password invalid";

    }

    public function logout(){
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        $this->login();
    }


}