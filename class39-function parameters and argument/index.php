<?php
my_name();
print_name("Md Shanto Hosen");
print_name ("Raju ahamme");

print_addres('Md Shanto','Singra','1234');
print_addres('Md Raju','Singra','123456');

function my_name(){
    echo "Shanto Hosen <br>";

}

function print_name($name){
    echo $name . "<br>";

}

function print_addres ($vill , $PO, $phone){
    echo "vill - $vill , P.O - $PO , P.H - $phone <br>";
}

?>