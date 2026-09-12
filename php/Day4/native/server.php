<?php
require './connection.php';
require './navbar.php';


// register ====

if (isset($_POST['btnRegister'])) {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];

    //------------- pattern data --------------

    //*****************  name pattern */

    $namePattern = '/^[a-zA-Z]{3,}$/';
    if (!preg_match($namePattern, $userName)) {
        header("location:register.php?error_message= name must be characters at least 3 characters");
        exit;
    }
    //*****************  pasword pattern */

    $passwordPattern = '/^[0-9]{5,15}$/';
    if (!preg_match($passwordPattern, $userPassword)) {
        header("location:register.php?error_message= password must be numbers at least 5 numbers ");
        exit;
    }



    //*****************  email pattern */


    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        header("location:register.php?error_message= enter a valid email ");
        exit;
    }




    /// check email exist or not ===
    $sqlEmail = "select * from users where email=:email";
    $sqlQueryEmail = $connection->prepare($sqlEmail);
    $sqlQueryEmail->execute(
        [
            ":email" => $userEmail
        ]
    );
    $emailExist = $sqlQueryEmail->fetch(PDO::FETCH_ASSOC);
    if ($emailExist) {
        header("location:register.php?error_message=email already exist");
        exit;
    }


    //==============  hash password =============
    /**
     * md5
     * password_hash : $2y$10$k4XEAkZJTngNandMp4ewReinVRO95cR9lCd/anNfkUcbTVogSiruG
     * 
     */
    // $hashPassword=md5($userPassword);
    $hashPassword = password_hash($userPassword, PASSWORD_DEFAULT);

    try {
        // $sql = "insert into users(name,email,password)values(:name,:email,:password)"; // string
        $sql = "insert into users(name,email,password)values(?,?,?)"; // string

        $sqlQuery = $connection->prepare($sql); //  string ===> query string 

        // $sqlQuery->execute(
        //     [
        //         ':name'=>$userName,
        //         ':email'=>$userEmail,
        //         ':password'=>$hashPassword
        //     ]
        $sqlQuery->execute(
            [
                $userName,
                $userEmail,
                $hashPassword
            ]
        ); // run code 
        header("location:login.php?success_message=register Successfully");
        exit;
    } catch (Error $e) {
        echo $e->getMessage();
        //  $error=$e->getMessage();
        // header("location:register.php?error_message=$error");
        //         exit;

    }
}


//================= login ====================

if (isset($_POST['btnLogin'])) {

   $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    //  $hashPassword=md5( $userPassword);
    //------- 123456 ===> hash password

    //  $sqlEmail = "select * from users where email=:email and password=:password" ;
     $sqlEmail = "select * from users where email=:email" ;
    $sqlQueryEmail = $connection->prepare($sqlEmail);
    $sqlQueryEmail->execute(
        [
            ":email" => $userEmail,
            // ":password"=>$hashPassword
        ]
    );
    $data = $sqlQueryEmail->fetch(PDO::FETCH_ASSOC);  //  name , email , password(hash poassword)


    // === password ===
    $checkPassword=password_verify($userPassword ,$data['password']);

    // hash (algorith) ==> hash login password ==> check (userPasswordhashed === data password hashed  )
    /**
     * user --> 123456
     * data base ==> $2y$10$pcXIWeoBUiZeXFv6je56mO5j97V08rN6aPWgIrpcVHfmnxS.8YzpW ===> enrept (user password)
     * 
     * $2y$10$pcXIWeoBUiZeXFv6je56mO5j97V08rN6aPWgIrpcVHfmnxS.8YzpW === $2y$10$pcXIWeoBUiZeXFv6je56mO5j97V08rN6aPWgIrpcVHfmnxS.8YzpW
     * 
     * password_verify==> true (=====)
     * password_verify==> false (!=)
     */


    if($data && $checkPassword)
        {
        header("location:profile.php?success_message=login Successfully");
        exit;
        }else{
              header("location:login.php?error_message=check your email or password ");
        exit;
        }
}


