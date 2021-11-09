<?php
require 'include/init.php';
$db = new mysqli('localhost', 'root', '', 'newsletter');
$id = $_GET['id'];

if (isPostMethod()) {
    $password = sha1($_POST['password']);

    $query = "UPDATE user SET password='$password' WHERE email='$id'";
    $result = $db->query($query);

    redirectToUrl('login-index.php');
}
require 'header.php';
?>
<div class="div_cen">
    <form method="post" class="form-register" style="text-align: right;">
        <fieldset>
            <legend>تغییر رمزعبور</legend>
            <label>
                 پسورد جدید:  <input type="password" name="password" <?= isset($password) ? $_POST['password']: ''?> value="">
            </label><br>
            <input type="submit" class="btn_submit" value="تغییر رمز عبور">
        </fieldset>
    </form>
</div>
<?php
require 'footer.php';
?>