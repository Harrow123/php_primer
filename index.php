<?php 
    $title = "Index";
    include 'includes/header.php'
?>
    <!-- Basic HTML -->
    <h1><?php echo $title?></h1>
    <br/>
   <?php
   /*Basic PHP*/
    echo "Hello PHP";
    echo "<br/>";
    echo "Second Line";
    echo "<br/>";
    
    //Declare variable
        $name = "Kenroy Harrow";
        $age = 30;
        /*Echo Variable*/
        echo $name;
        echo "<h1>My Name Is: ".$name." </h1>";
        echo "<h1>My Age Is: ".$age." </h1>";

        echo "<h1> My Name is: $name </h1>"

?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
<?php require 'includes/footer.php' ?>