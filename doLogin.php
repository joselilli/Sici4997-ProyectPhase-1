<?php

$users = [
    ['email'=>'omar.soto', 'username'=>'omar', 'password' => 'test1'],
    ['username'=>'frances', 'password' => 'test2'],
    ['username'=>'shutup', 'password' => 'test3']
];

function checkLoginData(){
    global $users;
    
    $user= strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    
    foreach ($users as $u) {
        $user = strtolower(trim($u['username']));
    
    if ($inputUser == $user) {
        if ($password == $u['password']){
            return true;
        }
        
        break;
    }
    }
    return false;
}

if (checkLoginData()){
    //echo 'OK';
    session_start();
    
    $_SESSION['username']= strtolower(trim($_POST['username']));
    
    header('Location: news.php');
} else {
    header('Location: news.php?p=login&e=1');
    //echo 'ERROR';
}

?>