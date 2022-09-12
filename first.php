<?php
$option = $_GET['option'];
$string = "A man, a plan, a canal, Panama";
function check_plaindrome($string) {
    //remove all spaces
    $string = str_replace(' ', '', $string);

    //remove special characters
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

    //change case to lower
    $string = strtolower($string);

    //reverse the string
    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "<p>It is Palindrome</p>";
    } 
    else {
        echo "</p>Not Palindrome</p>";
    }
}

$string = "A man, a plan, a canal, Panama";
check_plaindrome($string); 


header('Content-type: application/json');
echo json_encode($string); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    function addNumbers(int $a, int $b ,int $c) {
        return a^3 + b*c - a/b;
      }
       
}
echo addNumbers(5,3,8);



?>