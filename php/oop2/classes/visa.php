<?php 
include "payment.php";
include "pay.php";


class visaCard extends payment implements pay{
	function pay(){
		echo "paied from visa";
	}

	function checkSaldo(){
		echo "paied from visa";
	}
	function checkout(){
		echo "paied from visa";
	}

}

 ?>