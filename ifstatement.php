<?php 
    $title = "If Statement";
    include 'includes/header.php'
?>
    <h1><?php echo $title?></h1>
    <?php
    //An if statement that will carry out an action based on the value of the variable

    echo "<h2>If statement</h2>";

    $grade = 50;
    //==,>,<,<=,>=,===,
    if($grade >= 50){
        echo '<h3 style="color: green">You Have Passed</h3>';
    }
    else{
        echo '<h3 style="color: red">You Have Failed</h3>';
    }
    $grade = 'B';
    //If=Else If=Else
    if($grade == 'A'){
        echo '<h2 style="color: green">You are a superstar!</h2>';
    }
    elseif ($grade == 'B'){
        echo '<h2 style="color: Blue">You did well!</h2>';
    }
    else{
        echo '<h2 style="color: Red">You have failed...!</h2>';
    }        

    ?>
<?php require 'includes/footer.php' ?>