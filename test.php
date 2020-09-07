<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Works about PHP</title>
</head>
<body>


    <!-- <h4>Getting input from user</h4>
    <form action="test2.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["name"]; ?>.
    <br>
    Your age is <?php echo $_GET["age"]; ?>. -->



    <!-- <h4>Basic calculator (only plus operator)</h4>
    <form action="test2.php" method="get">
        Number 1: <input type="number" name="num1">
        <br>
        Number 2: <input type="number" name="num2">
        <input type="submit">
    </form>
    <br>
    Answer: <?php echo $_GET["num1"] + $_GET["num2"]; ?> -->



    <!-- <h4>Basic mad libs game</h4>
    <form action="test2.php" method="get">
        Color: <input type="text" name="color">
        <br>
        Plural Noun: <input type="text" name="pluralNoun">
        <br>
        Celebrity: <input type="text" name="celebrity">
        <input type="submit">
    </form>
    <br>
    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?> -->



    <!-- <h4>GET and POST</h4>
    <form action="test2.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
    <br><br>
    <?php
        echo $_POST["password"];
    ?> -->



    <!-- <h4>Using checkboxes</h4>
    <form action="test.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit">
    </form>
    <?php
        $fruits = $_POST["fruits"];
        echo $fruits;
    ?> -->



    <!-- <h4>Associative Arrays</h4>
    <form action="test.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
        $grades = array("Jim"=>"A+", "Pam"=>"A+", "Oscar"=>"C+");
        echo $grades[$_POST["student"]];
    ?> -->



    <!-- <h4>Functions</h4>
    <?php
        function sayHi($name, $age){
            echo "Hello $name, you are $age <br>";
        }

        sayHi("Jake",35);
        sayHi("Dave", 27);
        sayHi("Dorothy", 50);
    ?> -->



    <!-- <h4>Return Statements</h4>
    <?php
        function cube($num){
            echo "Hello <br>";
            return $num * $num * $num;
        }

        $cubeResult = cube(4);
        echo $cubeResult;
    ?> -->



    <!-- <h4>If Statements</h4>
    <?php
        $isMale = true;
        $isTall = false;
        if ($isMale && $isTall){
            echo "You are a tall male";
        } elseif ($isMale && !$isTall){
            echo "You are a short male";
        } elseif (!$isMale && $isTall){
            echo "You are a not male but are tall";
        } else {
            echo "You are not male and not tall";
        }
    ?> -->



    <!-- <h4>If Statements (con't)</h4>
    <?php
        function getMax($num1, $num2, $num3){
            if ($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            } elseif ($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            } else {
                return $num3;
            }
        }

        echo "Bigger is ".getMax(4300, 9000, 3010);
    ?> -->



    <!-- <h4>A Better Calculator</h4>
    <form action="test.php" method="post">
        First number: <input type="number" name="num1"><br>
        Operator: <input type="text" name="op"><br>
        Second number: <input type="number" name="num2"><br>
        <input type="submit">
    </form>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if ($op == "+"){
            echo $num1 + $num2;
        } elseif ($op == "-"){
            echo $num1 - $num2;
        } elseif ($op == "/"){
            echo $num1 / $num2;
        } elseif ($op == "*"){
            echo $num1 * $num2;
        } else {
            echo "Invalid Operator";
        }
    ?> -->



    <!-- <h4>Switch Statements</h4>
    <form action="test.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        switch ($grade) {
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did pretty good";
                break;
            case "C":
                echo "You did poorly";
                break;
            case "D":
                echo "You did very bad";
                break;
            case "F":
                echo "YOU FAIL!";
                break;
            default:
                echo "Invalid Grade";
        }
    ?> -->



    <!-- <h4>While Loops</h4>
    <?php
        $index = 1;
        while($index <= 5){
            echo "$index <br>";
            $index++;   // without increment, it become infinite loop
        }
    ?>
    <h4>Do-While Loops</h4>
    <?php
        $index = 6;
        do{
            echo "$index <br>";
            $index++;
        } while ($index <= 5);
    ?> -->



    <!-- <h4>For Loops</h4>
    <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "$i <br>";
        }
    ?>
    <br><br><hr><br><br>
    <?php
        $luckyNumbers = array(3, 7, 13, 19, 23, 47);
        for ($i = 0; $i <= count($luckyNumbers); $i++) {
            echo "$luckyNumbers[$i]<br>";
        }
    ?> -->


    <!-- <h4>Include HTML</h4>
    <hr><br><br>
    <?php include "header.html"; ?>
    <p>Hello World</p>
    <?php include "footer.html"; ?> -->


    
    <!-- <h4>Include PHP</h4>
    <?php
        $title = "My First Post";
        $author = "Henry";
        $wordCount = 400;
        include "article-header.php";
    ?>
    <br><br><hr><br><br>
    <?php
        include "useful-tools.php";
        echo $feetInMile;
    ?> -->


    <!-- <h4>Classes and Objects</h4>
    <?php
        class Book{
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book;
        $book1->title = "Harry Potter";
        $book1->author = "JK Rowling";
        $book1->pages = 500;

        $book2 = new Book;
        $book2->title = "Lord Of the Rings";
        $book2->author = "Tolkien";
        $book2->pages = 700;
        
        echo $book2->author;
    ?> -->



    <!-- <h4>Constructor</h4>
    <?php
        class Boook{
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages) {
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $boook1 = new Boook("Harry Potter", "JK Rowling", 500);

        $boook2 = new Boook("Lord Of the Rings", "Tolkien", 700);
        
        echo $boook1->author."<br>";
        echo $boook2->title;
    ?> -->



    <!-- <h4>Object Functions</h4>
    <?php
        class Student{
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors(){
                if($this->gpa >= 3.5){
                    return "true";
                }
                return "false";
            }
        }

        $student1 = new Student("Jim", "Business", 2.8);
        $student2 = new Student("Pam", "Art", 3.6);

        echo $student1->hasHonors();
        echo "<br>";
        echo $student2->hasHonors();
    ?> -->



    <!-- <h4>Getters and Setters</h4>
    <?php
        class Movie{
            public $title;
            private $rating;

            function __construct($title, $rating){
                $this->title = $title;
                $this->rating = $rating;
            }

            function getRating(){
                return $this->rating;
            }

            function setRating($rating){
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR" ){
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        } 
        
        $avengers = new Movie("Avengers", "PG-13");
                // G, PG, PG-13, R, NR
        $avengers->setRating("PG"); 
        echo $avengers->getRating();

    ?> -->



    <h4>Inheritance</h4>
    <?php
        class Chef{
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes salad <br>";
            }
            function makeSpecialDish(){
                echo "The chef makes bbq ribs <br>";
            }
        }

        class ItalianChef extends Chef {
            function makePasta(){
                echo "The chef makes pasta";
            }
            function makeSpecialDish(){
                echo "The chef makes chicken parm";
            }
        }

        $chef = new Chef();
        $chef->makeSpecialDish();

        $italianChef = new ItalianChef();
        $italianChef->makeSpecialDish()

    ?>


</body>
</html>