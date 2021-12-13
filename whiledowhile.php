<?php 
    $title = "While Do While";
    include 'includes/header.php'
?>
    <h1><?php echo $title?></H1>
    <?php
        $grade = 0;
        //Infinite Loop
        //    while($grade < 10){
        //      echo '<p>I am less than 10</p>';
        //}
        //Pre-Condition Loop
        while($grade < 10){
            echo '<p>I am less than 10</p>';
            $grade++;
        }
        echo 'Exit Loop!';
    ?>

    <h1>Do-While Loop</h1>
    <?php
    //Post-Condition Loop
        $grade = 0;
        do{
            echo '<p>I am do while loop</p>';
            $grade++;
        }while ($grade < 10);
        echo "Exit Loop";
    ?>

<?php require 'includes/footer.php' ?>