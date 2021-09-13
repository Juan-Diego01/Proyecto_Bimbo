<?php
  // PHP code goes here
?>

<html>
    <head>
        <title> My first PHP Page</title>
    </head>
    <body>
        <?php
        echo "Hello World!";
        ?>
    </body>
</html>

<html>
  <head>
    <title>My First PHP Page</title>
  </head>
  <body>
  <script language="php">
    echo "Hello World!";
  </script>
  </body>
</html>

<?php
    echo "I love PHP!";
?>

<?php
    echo "A";
    echo "B";
    echo "C";
?>

<?php
echo "<strong>This is a bold text.</strong>";
?>

<?php
    echo "<p>Hello World</p>";
    //Esto es un comentario única-linea
    echo "<p>I am learning PHP!</p>";
    echo "<p>This is my first program!</p>";
?>

<?php
    echo "<p>Hello World</p>";
    /*
    This is a multi-line comment 
    block that spans over
    multiple lines
    */
    echo "<p>I am learning PHP!</p>";
    echo "<p>This is my first program!</p>";
?>

$variable_name = value;

<?php
    $name = 'John';
    $age = 25;
    echo $name;

    //Outputs 'John'
?>

define(name, value, case-insensitive)

<?php
    define("MSG ", "Hi Sololearners!");
    echo MSG;

    //Outputs "Hi Sololearners!"
?>

<?php
    define("MSG ", "Hi Sololearners!", true);
    echo MSG;

    //Outputs "Hi Sololearners!"
?>

<?php
  $string1 = "Hello world!"; //double quotes
  $string2 = 'Hello world!';  //single quotes
?>

<?php
  $int1 = 42; // positive number
  $int2 = -42; // negative number
?>

<?php
  $x = 42.168;
?>

<?php
  $x = true; $y = false;
?>

<?php
    $str = "10";
    $int = 20;
    $sum = $str + $int;
    echo ($sum);

    //Outputs 30
?>

<?php
    $name = "Davd";
    function getName() {
        echo $name;
    }

    //Error: Undefined variable: name
?>

<?php
    $name = "Davd";
    function getName() {
        global $name;
        echo $name;
    }

    //Outputs 'David'
?>

<?php
    $a = 'hello';
    $hello = "Hi!";
    echo $$a;

    //Outputs 'Hi!'
?>

<?php
    $num1 = 8;
    $num2 = 6;

    //Addition
    echo $num1 + $num2; //14

    //Subtraction
    echo $num1 - $num2; //2

    //Multiplication
    echo $num1 * $num2; //48

    //Division
    echo $num1 / $num2; //1.333333333333
?>

<?php
    $x = 14;
    $y = 3;
    echo $x % $y //2
?>

$x++; // equivalent to $x = $x+1;
$x--; // equivalent to $x = $x-1; 

$x++; // post-increment 
$x--; // post-decrement 
++$x; // pre-increment 
--$x; // pre-decrement

$a  = 2; $b = $a++; // $a=3,  $b=2
$a  = 2; $b = ++$a; // $a=3,  $b=3

$num1 = 5;
$num2 = $num1;

<?php  
    $x = 50;
    $x += 100;
    echo $x;
//Outputs: 150
?>

$name1 = "David"; 
$name2 = "Amy"; 
$name3 = "John"; 

$names = array("David", "Amy", "John");

$names[0] = "David";
$names[1] = "Amy";
$names[2] = "John";

echo $names[1]; //Outputs "Amy"

<?php
    $myArray[0] = "John";
    $myArray[1] = "<strong>PHP</strong>";
    $myArray[2] = 21;

    echo "myArray[0] is $myArray[2] and knows $myArray[1]";

    //Ouputs "John is 21 and knows PHP"
?>

$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
// or
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";

$people = array ("David"=>"27", "Amy"=>"21", "Jonn"=>"42");

echo $people['Amy']; // Outputs 21"

$people = array(
   'online'=>array('David', 'Amy'),
   'offline'=>array('John', 'Rob', 'Jack'),
   'away'=>array('Arthur', 'Daniel')
);

echo $people['online'][0]; //Outputs "David"

echo $people['away'][1]; //Outputs "Daniel"

if (condition) {
   code to be executed if condition is true;
} else {
   code to be executed if condition is false;
}

<?php
    $x = 10;
    $y = 20;
    if $x >= $y {
        echo $y;
    } else{
        echo $y;
    }
// Outputs "20"
?>

if (condition) {
  code to be executed if condition is true;
} elseif (condition) {
  code to be executed if condition is true;
} else {
   code to be executed if condition is false;
}

<?php
    $age = 21;

    if ($age<=13) {
        echo "Child.";
    } elseif ($age>13 && $age<19) {
        echo "Teenager";
    } else {
        echo "Adult";
    }

    //outputs "Adult"
    ?>

while (condition is true) {
   code to be executed;
}

$i = 1;
while ($i < 7) {
    echo "The value is $i <br />";
    $i++;
}

do {
  code to be executed;
} while (condition is true); 

$i = 5;
do {
echo "The number is " . $i . "<br/>";
$i++;
} while($i <= 7);
//Output
//The number is 5
//The number is 6
//The number is 7

for (init; test; increment) {
   code to be executed;
}

for ($a = 0; $a < 6; $a++) {
echo "Value of a : ". $a . "<br />";
}

foreach (array as $value) {
  code to be executed;
}
//or
foreach (array as $key => $value) {
   code to be executed;
}

$names = array("John", "David", "Amy");
foreach ($names as $name) {
echo $name.'<br />';
}
// John
// David
// Amy

switch (n) {
  case value1:
    //code to be executed if n=value1
    break;
  case value2:
     //code to be executed if n=value2
     break;
  ...
  default:
    // code to be executed if n is different from all labels
}

switch ($today) {
case "Mon":
echo "Today is Monday.";
break;
case "Tue":
echo "Today is Tuesday.";
break;
case "Wed":
echo "Today is Wednesday.";
break;
case "Thu":
echo "Today is Thursday.";
break;
case "Fri":
echo "Today is Friday.";
break;
case "Sat":
echo "Today is Saturday.";
break;
case "Sun":
echo "Today is Sunday.";
break;
default:
echo "Invalid day.";
}
//Outputs "Today is Tuesday."



switch ($today) {
case "Mon":
echo "Today is Monday.";
break;
case "Tue":
echo "Today is Tuesday.";
break;
case "Wed":
echo "Today is Wednesday.";
break;
case "Thu":
echo "Today is Thursday.";
break;
case "Fri":
echo "Today is Friday.";
break;
case "Sat":
echo "Today is Saturday.";
break;
case "Sun":
echo "Today is Sunday.";
break;
default:
echo "Invalid day.";
}
//Outputs "Today is Tuesday."



switch ($today) {
case "Mon":
echo "Today is Monday.";
break;
case "Tue":
echo "Today is Tuesday.";
break;
case "Wed":
echo "Today is Wednesday.";
break;
case "Thu":
echo "Today is Thursday.";
break;
case "Fri":
echo "Today is Friday.";
break;
case "Sat":
echo "Today is Saturday.";
break;
case "Sun":
echo "Today is Sunday.";
break;
default:
echo "Invalid day.";
}
//Outputs "Today is Tuesday."


<?php
  echo '<h1>Welcome</h1>';
?>

<html>
  <body>

  <?php include 'header.php'; ?>

  <p>Some text.</p>
  <p>Some text.</p>
  </body>
</html>

<html>
  <body>

  <?php include 'header.php'; ?>

  <p>This is a paragraph</p>
  </body>
</html>

function functionName() {    
   //code to be executed
}

function functionName() {    
   //code to be executed
}

function multiplyByTwo($number) {
$answer = $number * 2;
echo $answer;
}
multiplyByTwo(3);
//Outputs 6

function multiply($num1, $num2) {
echo $num1 * $num2;
}
multiply(3, 6);
//Outputs 18

function setCounter($num=10) {
echo "Counter is ".$num;
}
setCounter(42); //Counter is 42
setCounter(); //Counter is 10

<?php
echo $_SERVER['SCRIPT_NAME'];
//Outputs "/somefile.php"
?>

<?php
echo $_SERVER['HTTP_HOST'];
//Outputs "localhost"
?>

<?php
$host = $_SERVER['HTTP_HOST'];
$image_path = $host.'/images/';
?>

<?php
require 'config.php';
echo '<img src="'.$image_path.'header.png" />';
?>

<form action="first.php" method="post">
  <p>Name: <input type="text" name="name" /></p>
  <p>Age: <input type="text" name="age" /></p>
  <p><input type="submit" name="submit" value="Submit" /></p>
</form>

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br />
Your age: <?php echo $_POST["age"]; ?>

</body>
</html>

<form action="actionGet.php" method="get">
  Name: <input type="text" name="name" /><br /><br />
  Age: <input type="text" name="age" /><br /><br />
  <input type="submit" name="submit" value="Submit" />
</form>

<?php
echo "Hi ".$_GET['name'].". ";
echo "You are ".$_GET['age']." years old.";
?>

<?php
// Start the session
session_start();

$_SESSION['color'] = "red";
$_SESSION['name'] = "John";
?>

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "Your name is " . $_SESSION['name'];
// Outputs "Your name is John"
?>
</body>
</html>

setcookie(name, value, expire, path, domain, secure, httponly);

<?php
$value = "John";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: John"
?>

$myfile = fopen("file.txt", "w");

<?php
$myfile = fopen("names.txt", "w");

$txt = "John\n";
fwrite($myfile, $txt);
$txt = "David\n";
fwrite($myfile, $txt);

fclose($myfile);

/* File contains:
John
David
*/
?>

$myFile = "test.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, "Some text");
fclose($fh);

<?php
if(isset($_POST['text'])) {
  $name = $_POST['text'];
  $handle = fopen('names.txt', 'a');
  fwrite($handle, $name."\n");
  fclose($handle); 
}
?>
<form method="post">
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" />
</form>


$read = file('names.txt');
foreach ($read as $line) {
echo $line .", ";




$read = file('names.txt');
$count = count($read);
$i = 1;
foreach ($read as $line) {
echo $line;
if($i < $count) {
echo ', ';
}
$i++;
}




class Person {
  public $age; //property
  public function speak() { //method
    echo "Hi!"
  }
}



$bob = new Person();



echo $bob->age;



class Person {
public $age;
function speak() {
echo "Hi!";
}
}
$p1 = new Person(); //instantiate an object
$p1->age = 23; // assignment
echo $p1->age; // 23
$p1->speak(); // Hi!



class Dog {
public $legs=4;
public function display() {
echo $this->legs;
}
}
$d1 = new Dog();
$d1->display(); //4
$d2 = new Dog();
$d2->legs = 2;
$d2->display(); //2




class Person {
public function __construct() {
echo "Object created";
}
}
$p = new Person();




class Person {
public $name;
public $age;
public function __construct($name, $age) {
$this->name = $name;
$this->age = $age;
}
}
$p = new Person("David", 42);




class Person {
public function __destruct() {
echo "Object destroyed";
}
}
$p = new Person();



class Animal {
public $name;
public function hi() {
echo "Hi from Animal";
}
}
class Dog extends Animal {
}
$d = new Dog();
$d->hi();




<?php
interface AnimalInterface {
public function makeSound();
}
class Dog implements AnimalInterface {
public function makeSound() {
echo "Woof! <br />";
}
}
class Cat implements AnimalInterface {
public function makeSound() {
echo "Meow! <br />";
}
}
$myObj1 = new Dog();
$myObj1->makeSound();
$myObj2 = new Cat();
$myObj2->makeSound();
?>



class Demo implements AInterface, BInterface, CInterface {
  // Functions declared in interfaces must be defined here
}




Interface class implements play




<?php
abstract class Fruit {
private $color;
abstract public function eat();
public function setColor($c) {
$this->color = $c;
}
}
class Apple extends Fruit {
public function eat() {
echo "Omnomnom";
}
}
$obj = new Apple();
$obj->eat();
?>


<?php
class myClass {
static $myStaticProperty = 42;
}
echo myClass::$myStaticProperty;
?>


<?php
class myClass {
static $myProperty = 42;
static function myMethod() {
echo self::$myProperty;
}
}
myClass::myMethod();
?>



<?php
class myClass {
final function myFunction() {
echo "Parent";
}
}
// ERROR because a final method cannot be overridden
in child classes.
class myClass2 extends myClass {
function myFunction() {
echo "Child";
}
}
?>

<?php
final class myFinalClass {
}
// ERROR because a final class cannot be inherited.
class myClass extends myFinalClass {
}
?>

