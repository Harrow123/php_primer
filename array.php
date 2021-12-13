<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php'
?>
    <h1><?php echo $title?></h1>
    <?php
        //A variable
        $num = 3;

        //An array
        //Only one data type
        $numbers = array(1,2,3,4,5,14,7,8,9,100,61,6,161,4,44,94,1,154,8484,41,511,548,4884,99,77);

        echo $numbers[5];

        echo "<p>$numbers[9]</p>";
        
        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p?";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
            echo'<p>End of Array</p>';

    ?>
<?php require 'includes/footer.php' ?>