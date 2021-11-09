<?php
require 'include/init.php';
$db = new mysqli('localhost', 'root', '', 'newsletter');
$id = $_GET['id'];
$name = $_SESSION['user']["first_name"];
$last = $_SESSION['user']["last_name"];

$query = "SELECT * FROM category";
$result = $db->query($query);
$categories = $result->fetch_all(MYSQLI_ASSOC);

if (isPostMethod()) {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $datetime = $_POST['datetime'] = date("Y/m/d");
    $the_writer = $_POST['the_writer'] = $name . $last;
    $category_id = $_POST['category_id'];

    $query = "UPDATE addcontent SET title='$title', text='$text', datetime='$datetime', the_writer= '$the_writer', category_id= '$category_id' WHERE id='$id'";
    $result = $db->query($query);

    redirectToUrl('showcontent.php');
}

$query = 'SELECT * FROM addcontent WHERE id= ' . $id;
$result = $db->query($query);
$content = $result->fetch_assoc();
require 'header.php';
?>
<div class="div_cen">
    <form method="post" class="form-register" style="float: right;text-align: right;">
        <fieldset>
            <legend>ویرایش مطلب</legend>
            <label>
                <?php echo "تاریخ: " . date("Y/m/d"); ?>
            </label><br><br>
            <label>
                <?php echo "نویسنده:  $name $last" ?>
            </label><br><br>
            <label>
                عنوان: <input type="text" name="title" value="<?= $content['title'] ?>">
            </label><br><br>

            <label>
                <p>متن:</p>
                <textarea name="text" style="margin-right: 8%; width: 60%; height: 100px;"><?= $content['text'] ?></textarea>
            </label><br><br>

            <label>
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
            </label><br>
            <input type="submit" class="btn_submit" style="margin-right: 85%;" value="ثبت تغییر">
        </fieldset>
    </form>
</div>
<?php
require 'footer.php';
?>
