<?php 
include_once "user.php";
include_once "adminuser.php";
include_once "classes/visa.php";
include_once "classes/credit.php";
include_once "classes/pay.php";



$user1 = new user("mikel", 33,"mikel@mail.com");
// $user1->name = "mikel";
// $user1->email = "mikel@gmail.com";
// echo $user1->name;
echo "<br>";

$user1->print();
echo "<br>";


$name = $user1->getName();
echo "the name is: $name";
echo "<br>";

echo "the email is: {$user1->getEmail()}";
echo "<br>";

// set new mail
$user1->setEmail("newmailgmail.com");
// echo "The new email is: {$user1->getEmail()}";
$user1->add10years();
$user1->print();

// $admin1 = new admin("kokoadmin", 44, "koko@admin.com");
// $admin1 = new admin("koko", 2);

// $admin1->print();
// echo $admin1->getName();
// echo "<br>" . $admin1->adminLevel;



$admin2 = new admin("abed", 44, "abed@gmail.com", 3);
 echo "<br>";
$admin2->print();



// make a pay method
$myVisa = new visaCard();
$myCredit = new CreditCard();
// $myPayment = new payment();

function paywithcard(pay $objecttopaywith){
	#code
	echo "<br>";
	$objecttopaywith->pay();
}

paywithcard($myVisa);
// echo $myVisa->getBank();



 ?>