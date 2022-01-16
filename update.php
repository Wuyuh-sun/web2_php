<?
require('view/top.php');
?>
        <?php
        if(isset($_GET['id'])){
            echo "<a href='update.php?id={$_GET['id']}'>update</a>";
        }
        ?>
        <h2>
            <?php
            print_title();
            ?>
        </h2>
        <?php
        print_description();
        ?>

        <form action="update_process.php" method="post">
            <input type="hidden" name="old_title" value="<?=$_GET['id']?>"> 
            <p>
                <input type="text" name="title" placeholder="Title" value="<?print_title();?>">
            </p>
            <p>
                <textarea name="description" placeholder="Description"><?php print_description();?>
            </textarea>
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
        <?
    require('view/bottom.php');
    ?>