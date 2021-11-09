<?php
require 'include/init.php';
$db = new mysqli('localhost', 'root', '', 'newsletter');
$name = $_SESSION['user']["first_name"];
$last = $_SESSION['user']["last_name"];

$query = "SELECT * FROM category";
$result = $db->query($query);
$categories = $result->fetch_all(MYSQLI_ASSOC);

if (isPostMethod()) {

    if (isset($_POST['title'], $_POST['text'], $_POST['category_id'])) {
        $title = $_POST['title'];
        $txt = $_POST['text'];
        $datetime = $_POST['datetime'] = date("Y/m/d");
        $the_writer = $_POST['the_writer'] = $name . $last;
        $category_id = empty($_POST['category_id'])?'NULL':$_POST['category_id'];
        $email = $_POST['email'] = $_SESSION['user']["email"];
        $query = "INSERT INTO addcontent SET title='$title', text='$txt', datetime='$datetime', the_writer='$the_writer', category_id='$category_id', email='$email'";
        $result = $db->query($query);
        if($result == false){
            echo $db->error;
            exit;
        }
        ?>
        <script>
            alert("مطلب جدید با موفقیت اضافه شد.");
        </script>
        <?php
        redirectToUrl('showcontent.php');
    } else {
        ?>
        <script>
            alert("لطفا فیلد های ضروری را پر کنید.");
        </script>
        <?php
    }
}
require 'header.php';
?>
<div class="div_cen">
    <form method="post" class="form-register" style="float: right;text-align: right;">
        <fieldset>
            <legend>افزودن مطلب</legend>

            <label>
                <?php echo "تاریخ: " . date("Y/m/d"); ?>
            </label><br><br>
            <label>
                <?php echo "نویسنده:  $name $last" ?>
            </label><br><br>
            <label>
                عنوان: <input type="text" name="title" value="<?= isset($title) ? $title:'' ?>">
            </label><br><br>
            <label>
                <p>متن:</p>
                <textarea name="text" style="margin-right: 8%; width: 60%; height: 100px;"><?= isset($_POST['text']) ? $_POST['text']:'' ?></textarea>
            </label><br><br>

            <label>
                دسته:
                <select name='category_id'>
                    <option value=""></option>
                    <?php
                    foreach ($categories as $category){
                        echo "<option value='$category[id]'>$category[name]</option>";
                    }
                    ?>
                </select>
            </label><br><br>

            <input type="submit" class="btn_submit" style="margin-right: 85%;" value="افزودن">
        </fieldset>
    </form>
</div>
<?php
require 'footer.php';
?>
