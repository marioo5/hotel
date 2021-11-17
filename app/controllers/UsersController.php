<?php

class UsersController extends Controller{

    public function register(){

        if($_SERVER['REQUEST_METHOD'] == 'GET'){

            $this->view('register.html', []);

        }elseif($_SERVER['REQUEST_METHOD'] == 'POST'){

            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $user = new Users();
            $post['password'] = password_hash($post['password'], PASSWORD_BCRYPT);
            $user -> loadData($post);
            if($user->validate()){
                $user->save();
                Messages::setMsg('Correct Register', 'success');
                header("Location: " . ROOT_URL . "users/login");
            }else{
                Messages::setMsg('Incorrect Register', 'error');
            }

        }
    }

    public function login(){

        if($_SERVER['REQUEST_METHOD'] == 'GET'){

            $this->view('login.html', []);

        }elseif($_SERVER['REQUEST_METHOD'] == 'POST'){

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $user = new Users();
        $user = $user->where('email', '=' ,$post['email'])->first();
        if(password_verify($post['password'] , $user['password'])){
            $_SESSION['is_logged_in'] = true;
            $_SESSION['user_data'] = array(
                "id" => $user->id,
                "name" => $user->name,
                "email" => $user->email,
                "role" => $user->role,
            );
            Messages::setMsg('Correct Login', 'success');
            header("Location: " . ROOT_URL);
        }else{
            Messages::setMsg('Incorrect Login', 'error');
            header("Location: " . ROOT_URL. "users/login");
        }
        
        }

    }

    public function logout(){
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        header('Location: '.ROOT_URL);

    }

}