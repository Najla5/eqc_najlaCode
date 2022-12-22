<?php 
require_once "login.php"; 
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    

</head>

<body>

    <h2 id="pageTitle">منصة التأهيل الوظيفي</h2>
    
<div class="cont">
<form  action="login.php" method="POST" autocomplete="">

<p class="TitleP">تسجيل الدخول</p>
<div class ="theInput">
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
</div>
</form>
</div>

</body>
</html>