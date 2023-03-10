<?php

include './src/auth/cookie.php';

function register() {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');

    //print data from form
    // print_r(var_dump($_POST));

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $phone_number = $_POST['phone_number'];
    $user_role = "user";

    // if (!passwordTypeChecking($user_password)) {
    //     echo "<style>#message{display:unset !important;}</style>";
    //     header("Location: /signup");
    //     exit();
    // }
    
    //check if user exists
    $statement = $myPDO->prepare("SELECT * FROM users WHERE email = :email");
    $statement->bindParam(':email', $email);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo "<style>#message{display:unset !important;}</style>";
    } else {
        $banned = 0;
        $statement = $myPDO->prepare("INSERT INTO users (first_name, last_name, username, user_password, email, birthday, phone_number, user_role, banned) VALUES (:first_name, :last_name, :username, :user_password, :email, :birthday, :phone_number, :user_role, :banned)");
        $statement->bindParam(':first_name', $first_name);
        $statement->bindParam(':last_name', $last_name);
        $statement->bindParam(':username', $username);
        $statement->bindParam(':user_password', $user_password);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':birthday', $birthday);
        $statement->bindParam(':phone_number', $phone_number);
        $statement->bindParam(':user_role', $user_role);
        $statement->bindParam(':banned', $banned);
        $statement->execute();
        $myPDO == null;
        $row = getID($email);
        $lastC = date("j-n-Y");
        $pdo = new PDO('sqlite:./db/Scriptio.db');
        $sql = 'UPDATE users 
                SET last_connexion=:lastC 
                WHERE email =:email';
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':lastC', $lastC, PDO::PARAM_STR);
        $statement->bindParam(':email', $row['email'], PDO::PARAM_STR);
        $statement->execute();
        $statement == null;
        $pdo == null;
        sendCookie($row);
        header("Location: /");
        exit();
    }
}





?>