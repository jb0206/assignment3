<?php

if ($_SERVER["REQUEST_METHODD" === "POST"]){
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    try{
        require_once 'db.php';
        require_once 'login_model.php';
        require_once 'login_contr.php';

        // error handlers
        $errors = [];

        if (is_input_empty($username, $pwd, $email)){
            $errors["empty_input"] = "Fill in all the fields!";
        }

        $result = get_user($pdo ,$username);

        if(is_username_wrong($result)){
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        if(!is_username_wrong($result) && is_password_wrong($pwd, $result[$pwd])){
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        require_once 'config_session.php';

        if($errors){
            $_SESSION["errors_login"] = $errors;

            header("Location: ../signup.php?signup_error");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../login.php?login=success");
        $pdo = null;
        $statement = null;

        die();
    } catch(PDOException $e) {
        die("Query failed!!: " . $e->getMessage());
    }

} else{
    header("Location: ../signup.php");
    die();
}
