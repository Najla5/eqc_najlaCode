<?php 
require_once "login.php"; 
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" type="text/css" href="/eqc/css/login_n.css" />

</head>
<body>

<div class="container">

<form  action="login.php" method="POST" autocomplete="">
<h2 class="text-center">منصة التأهيل الوظيفي</h2>
<p class="text-center">تسجيل الدخول</p>
<div class="form-group">
<input class="form-control" type="email" name="email" placeholder="البريد الالكتروني" required value="<?php echo $email ?>">
</div> 

<?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
<div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="كلمة المرور" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">نسيان  كلمة المرور</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="دخول">
                    </div>
                    <div class="link login-link text-center">لست مسجلَا بعد؟ <a href="signup-user.php">تسجيل جديد</a></div>                              
</form>

<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_email_sys = "SELECT * FROM systemadmin WHERE AEmail = '$email'";
    $res_sys = mysqli_query($conn,$check_email_sys);
 
if(mysqli_num_rows($res_sys) > 0){
$fetch = mysqli_fetch_assoc($res_sys);
        $fetch_pass = $fetch['APassword'];
        if($fetch_pass == $password){
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location:adminIndex.php');
}else{  $errors['email'] = "البريد أو كلمة مرور غير صحيحة!";}
}

}
?>
</div>

</body>
</html>