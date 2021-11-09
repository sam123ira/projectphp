<?php
require 'include/init.php';

$db = new mysqli('localhost', 'root', '', 'newsletter');

if (isPostMethod()) {
    $email = $db->real_escape_string($_POST['email']);
    $password = sha1($_POST['password']);

    $query = "SELECT first_name, last_name, password, email FROM user WHERE email='$email' AND password='$password'";
    $result = $db->query($query);

    if($result == false){
        echo $db->error;
        exit;
    }
    if ($result->num_rows > 0) {
        $user=$result->fetch_assoc();
        $_SESSION['user'] = $user;
        redirectToUrl('login-index.php');
    } else {
        echo "Oh! Incorrect Email and password";

    }

}
require 'header.php';
?>
<form method="post" class="form-register">
    <fieldset>
        <legend>ورود به خبرنامه</legend>
        <label>
            ایمیل: <input type="email" name="email">
        </label><br><br>
        <label>
            پسورد: <input type="password" name="password">
        </label><br><br>
        <input type="submit" class="btn_submit" style="margin-right: 80%;" value="ورود به پنل"><br>
        اگر قبلا ثبت نام نکرده اید، روی <a href="register.php">ثبت نام</a> کلیک کنید.
    </fieldset>
</form>
<?php
require 'footer.php';
?>