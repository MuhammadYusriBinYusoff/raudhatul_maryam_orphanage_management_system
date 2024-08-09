<?php

class Authentication extends Controller
{
    public function index()
    {
        $this->view('authentication/registration');
    }

    public function login()
    {
        $this->view('authentication/login');
    }

    public function addUser()
    {
        if ($this->model('User_model')->createUser($_POST) > 0) {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

    public function searchUser()
    {
        // Get user data by email and password
        $user = $this->model('User_model')->getUserByEmailAndPassword($_POST);

        // Check if user exists
        if ($user) {
            // Store user information in session
            $_SESSION["USER"] = $user['username'];
            $_SESSION["PASSWORD"] = $user['password'];
            $_SESSION["EMAIL"] = $user['email'];
            $_SESSION["CATEGORY"] = $user['category'];
            $_SESSION["USERID"] = $user['id'];
            $_SESSION["STATUS"] = $user['status'];
            $_SESSION["Login"] = "YES";
            // Redirect to login status page
            header('Location: ' . BASEURL . '/authentication/loginStatus');
            exit;
        } else {
            // Handle login failure (e.g., display an error message)
            echo 'Invalid email or password.';
        }
    }

    public function loginStatus()
    {
        $this->view('authentication/login_status');
    }

    public function logout()
    {
        unset($_SESSION["Login"]);
        unset($_SESSION["CATEGORY"]);
        unset($_SESSION["STATUS"]);
        header('Location: ' . BASEURL . '/authentication');
    }

    public function verificationStatus()
    {
        $user = $this->model('User_model')->getAllNullStatusUsers();
        $this->view('authentication/adminVerification', $user);
    }

    public function updateUserStatus($id)
    {
        if ($this->model('User_model')->updateUserStatus($id)>0){
            $this->view('authentication/verify');
        }
    }
}
