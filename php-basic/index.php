<?php

// Variables
$myname = "Robiul Awal"; //String
$age = 35; // Integer
$weight = 54.34; // Float
$check = true; // Boolean

//var_dump($myname)  . '<br>';
//var_dump($age)  . '<br>';
//echo $weight . '<br>';
//echo $check;

//echo 'My name is ' . $myname . '. I am ' . $age . ' years old';

//echo "my name is $myname. I am $age years old";

/*


*/

//Index Array
$person = array( 'robiul awal', 35, 54.34 );
// echo '<pre>';
// print_r($person);
// echo '</pre>';

// echo $person[0] . '<br>';
// echo $person[1] . '<br>';
// echo $person[2] 

foreach( $person as $item ) {
    echo $item . '<br>';
}

//Associative Arry

$person_asoc = array( 
    'name' => 'robiul awal',
    'age' => 35, 
    'weight' => 54.34 
    );

    // echo $person_asoc['name'] . '<br>';
    // echo $person_asoc['age'] . '<br>';
    // echo $person_asoc['weight'];

    // foreach( $person_asoc as $key => $item ) {
    //     //echo "$key . $item <br>";
    //     echo ucfirst($key) . ": $item <br>";
    // }

/**
 * Function
 * 
 */

function my_function() {
    //echo "Hello World";
    return "Hello World";
}

//echo my_function();

function calculate( $x, $y = 30 ) {
    echo $x + $y;
}

calculate( 20, 100); // 20, 100 = Argument

function my_site_title( $before = "", $after) {
    echo $before . 'this is my first site' . $after;
}

$url = "https://www.facebook.com/";

my_site_title( '<h1 class="title"><a href=" '.$url.' ">', '</a></h1>' ); 
my_site_title( '<h2>', '</h2>' );
my_site_title( '<h3>', '</h3>' );


?>