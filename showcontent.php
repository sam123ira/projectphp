<?php
require 'include/init.php';
$db = new mysqli('localhost', 'root', '', 'newsletter');

$contents = $result = $db->query('SELECT * FROM addcontent');

$query = "SELECT * FROM category";
$result = $db->query($query);
$categories = $result->fetch_all(MYSQLI_ASSOC);
require 'header.php';
?>
<section id="line2">
    <div class="container" style="display: flex;">
        <?php foreach ($contents as $content){  ?>
        <div class="card" style="margin: 2%;border: 1px #000 solid;padding: 2%;">
            <figure class="">
                <img src="./img/Layer 6.png" alt="user">
                <div class="tag tag-tech">
                    <p><?php echo "<a style='color: #FFF;' href='details.php?id=$content[id]'> $content[title] </a></p>";?>
                </div>
            </figure>
            <h6 class="card-headline" style="margin-right: 72%;">
                <?php
                if($_SESSION['user']["email"] == $content['email']) {
                    echo "<a style='margin-left: 10px;' href='edit.php?id=$content[id]'>ویرایش</a>
                           <a href='delete.php?id=$content[id]'>حذف</a>";
                }
                ?>
            </h6>
            <div class="author-date">
                <div class="author">
                    <a href="#">
                       <?php echo "$content[the_writer]"; ?>
                    </a>
                </div>
                <div class="date">
                    <p>
                        <?php echo "$content[datetime]"; ?>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php
require 'footer.php';
?>

