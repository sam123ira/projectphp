<?php
require 'include/init.php';
require 'header.php';
$db = new mysqli('localhost', 'root', '', 'newsletter');

if (isPostMethod()) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = sha1($_POST['password']);
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $education = $_POST['education'];
    if(isset($first_name,$last_name,$email,$password)){
        $query = "INSERT INTO user SET first_name='$first_name', last_name='$last_name', password='$password', email='$email', gender='$gender', education='$education'";
        $result = $db->query($query);
        ?>
        <script>
            alert("ثبت نام با موفقیت انجام شد.");
        </script>
        <?php
        $password = '';
        $first_name = '';
        $last_name = '';
        $email = '';
        $gender = '';
        $education = '';
   }
    else{
        ?>
        <script>
            alert("لطفا فیلد های ضروری را پر کنید.");
        </script>
        <?php
    }
}


?>
<form method="post" class="form-register">
    <fieldset>
        <legend>فرم ثبت نام</legend>
        <label>
            نام: <input type="text" name="first_name" value="<?= isset($firstName) ? $firstName : '' ?>">
        </label><br><br>
        <label>
            نام خانوادگی: <input type="text" name="last_name" value="<?= isset($last_name) ? $last_name : '' ?>">
        </label><br><br>
        <label>
            رمزعبور: <input type="password" name="password" value="<?= isset($password) ? $password : '' ?>">
        </label><br><br>
        <label>
            پست الکترونیکی: <input type="email" name="email" value="<?= isset($email) ? $email : '' ?>">
        </label><br><br>
        <label>
            جنسیت:
            زن<input type="radio" name="gender" <?= !isset($_POST['gender']) || $_POST['gender'] == "woman" ? 'checked' : '' ?> value="woman">
            مرد<input type="radio" name="gender" <?= isset($_POST['gender']) && $_POST['gender'] == "man" ? 'checked' : '' ?> value="man">
        </label><br><br>
        <label>
            تحصیلات: <input type="text" name="education" value="<?= isset($education) ? $education : '' ?>">
        </label><br><br>

        <input type="submit" class="btn_submit" value="ثبت نام در خبرنامه"><br><br>
        اگر قبلا ثبت نام کرده اید، روی <a href="login.php">ورود</a> کلیک کنید.

    </fieldset>
</form>

<?php
require 'footer.php';
?>