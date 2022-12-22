<?php require_once "hanan2.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form dir="rtl" action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">منصة التأهيل الوظيفي</h2>
                    <p class="text-center">تسجيل الدخول</p>
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
                        <input class="form-control" type="email" name="email" placeholder="البريد الالكتروني" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="كلمة المرور" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">نسيان  كلمة المرور</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="دخول">
                    </div>
                    <div class="link login-link text-center">لست مسجلَا بعد؟ <a href="choose-user.php">تسجيل جديد</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
