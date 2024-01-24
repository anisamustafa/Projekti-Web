<?php
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST['submit'])){
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) ||
    empty($_POST['username']) || empty($_POST['password'] || empty($_POST['repeatPassword']))){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repeatPassword = $_POST['repeatPassword'];
        

        $user  = new User($id,$name,$surname,$email,$username,$password,$repeatPassword);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
        $id = $username.rand(0,999);
        header("loacation:orderOnline.php");


    }
}



?>