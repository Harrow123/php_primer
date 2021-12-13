<?php 
    $title = "Switch Statement";
    include 'includes/header.php'
?>
    <h1><?php echo $title?></h1>
    <?php
        $grade = 'A';

        switch($grade){
            case 'A';
                echo '<h2 style="color: green">You are a Superstar!</h2?';
                break;
            case 'B';
                echo '<h3 style="color: blue">You Did Well</h3>';
                break;
            default:
                echo '<h3 style="color: red">You Have Failed</h3>';
                break;
        }
    ?>
<?php require 'includes/footer.php' ?>