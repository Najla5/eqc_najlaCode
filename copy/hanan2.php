<?php
//if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $check_email = "SELECT * FROM student WHERE SEmail = '$email'";
        $res = mysqli_query($conn, $check_email);

        $check_email_sys = "SELECT * FROM systemadmin WHERE AEmail = '$email'";
        $res_sys = mysqli_query($conn, $check_email_sys);

        $check_email_Hr = "SELECT * FROM hr WHERE HrEmail = '$email'";
        $res_Hr = mysqli_query($conn, $check_email_Hr);
        
if(mysqli_num_rows($res_sys) > 0){
    $fetch = mysqli_fetch_assoc($res_sys);
            $fetch_pass = $fetch['APassword'];
            if(  $fetch_pass == $password){
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: home_admin.php');
}else{  $errors['email'] = "البريد أو كلمة مرور غير صحيحة!";}}

elseif(mysqli_num_rows($res_Hr) > 0){
    $fetch = mysqli_fetch_assoc($res_Hr);
    $fetch_pass = $fetch['HrPassword'];
    if( $fetch_pass == $password){
        $_SESSION['email'] = $email;
        $status = $fetch['status'];
        if($status == 'verified'){
          $_SESSION['email'] = $email;
          $_SESSION['password'] = $password;
            header('location: homeCompany.php');
        }else{
            $info = "لم تقم بتفعيل البريدالإلكتروني  - '$email'";
            $_SESSION['info'] = $info;
            header('location: user-otp.php');
        }
    }else{
        $errors['email'] = "البريد أو كلمة مرور غير صحيحة!";
    }}
        elseif(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['SPassword'];
            if($fetch_pass == $password){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                    header('location: home.php');
                }else{
                    $info = "لم تقم بتفعيل البريدالإلكتروني  - '$email'";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "البريد أو كلمة مرور غير صحيحة!";
            }
        }else{
            $errors['email'] = "يبدو أنك لست عضوًا بعد! انقر على الرابط السفلي للتسجيل";
        }
    }

