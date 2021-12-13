<?php 
    $title = "String Manipulation";
    include 'includes/header.php'
?>
     <h1><?php echo $title?></h1>
     <?php
            //Concatenation of Strings
            $phrase1 = "student who came late";
            $phrase2 = "in class, stand with rock";
            $name = "kenroy harrow";
            echo $phrase1 . ", named tiffany, ". $phrase2;
            echo '<br/>';

            //String Transformation
            echo 'Uppercase first letter: ' . ucfirst($name). '<br/>'; 
            echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';
            echo 'Upper case: ' . strtoupper($name). '<br/>';
            echo 'Lower case: ' . strtolower('THIS WAS ALL UPPER CASE'). '<br/>';
            echo '<hr/>';
            echo 'Repeat String:' . str_repeat('a',10). '<br/>';
            echo 'Repeat String - Nested Function:' . strtoupper(str_repeat('a',10)) . '<br/>';
            echo 'Get a Substring:' . substr($name, 3, 5). '<br/>';
            
            echo 'Get position of string:'. strpos($name,'y'). '<br/>';
            
            //return null
            echo 'Find Character "Y":'. strchr($name, 'h'). '<br/>';
            echo 'Find Character "E":'. strchr($name, 'e'). '<br/>';
            echo 'Find Character "O":'. strchr($name, 'o'). '<br/>';
            echo 'Find Character "W":'. strchr($name, 'w'). '<br/>';

            echo 'Find Length of String: ' . strlen($name) . '<br/>';

            echo 'Without Trim: '. "A" . " B C D " . "E" . '<br/>';
            echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
            echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
            echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

            echo 'Replace string with another: '. str_replace("stand", "sit", $phrase2) . '<br/>';
            



        ?>
<?php require 'includes/footer.php' ?>