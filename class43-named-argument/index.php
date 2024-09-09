<?php
function full_name($first_name , $last_name){
    echo $first_name . " " . $last_name;
}
full_name(last_name: "Hosen <br>" , first_name: "Shanto ");
?>

<?php
function my_full_details($first_name , $last_name, $address = "",$pin ="",$phone=""){
    echo "First Name - $first_name <br> Last Name - $last_name <br> Address - $address <br> Pin - $pin <br> Phone Number -  $phone";
}

// my_full_details("Shanto" , "Hosen","" , "", "011710458584");
my_full_details("Shanto" , "Hosen", phone: "011710458584");

?>