<?php
require 'include/init.php';
require 'header.php';
$db = new mysqli('localhost', 'root', '', 'newsletter');
$id = $_GET['id'];

$result = $db->query('SELECT title, text FROM addcontent WHERE id = '.$id);
$opinions = $result->fetch_assoc();

if (isPostMethod()) {
    if (isset($_POST['name'], $_POST['opinion'])) {
        $name = $_POST['name'];
        $opinion = $_POST['opinion'];

        $query = "INSERT INTO comment SET name='$name', opinion='$opinion'";
        $result = $db->query($query);
        if($result == false){
            echo $db->error;
            exit;
        }
        ?>
        <script>
            alert("نظر جدید با موفقیت اضافه شد.");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("نظر ثبت نشد!! لطفا فیلد های ضروری را پر کنید.");
        </script>
        <?php
    }
}
$ops = $result = $db->query('SELECT * FROM comment');
?>
<div class="div-col">
    <div class="div_cen2">
        <table style="text-align: center;" class="t_details">
        <?php
            echo "
                  <tr>
                        <th>عنوان:</th>
                        <td>$opinions[title]</td>
                  </tr>
                  <tr>
                        <th>متن:</th>
                        <td>$opinions[text]</td>
                  </tr>
                  
                  "; ?>
                  <tr>
                      <th style="padding-right: 30px;">
                          <form method="post" style="float: right;text-align: right;">
                              <label>
                                  نام:
                      </th>
                      <td style="width: 80%;">
                          <input type="text" name="name" value="<?= isset($name) ? $name:'' ?>">
                          </label><br><br>
                      </td>
                  </tr>

                  <tr>
                     <th>
                         نظر:
                     </th>
                     <td style="width: 80%;">
                     </td>
                  </tr>

                   <tr>
                      <th>
                          <label>
                      </th>
                      <td>
                          <textarea name="opinion" style="width: 90%; height: 100px;"><?= isset($_POST['opinion']) ? $_POST['opinion']:'' ?></textarea>
                          </label><br><br>

                          <input type="submit" class="btn_submit" style="margin-right: 70%;" value="ثبت نظر">
                      </td>
                      </form>
                  </tr>
        </table>
    </div>

    <div style="width: 30%;">

        <table class="t_content2" style="width: 80%;">
            <tr>
                <th>کاربر</th>
                <th>نظر</th>
            </tr>
            <?php
            foreach ($ops as $op){
                echo "<tr>
                    <td>$op[name]</td>
                    <td>$op[opinion]</td>
              </tr>";
            }

            ?>
        </table>

    </div>
</div>
<?php
require 'footer.php';
?>



