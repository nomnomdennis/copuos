<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

	$treaty = "Registration Convention";
	$num_ratified = 62; /* <? echo $num_ratified ?> */
  	$num_signed = 4; /* <? echo $num_signed ?> */
  	$num_nothing = 130; /* <? echo $num_nothing ?> */

  	require "$root/treaties/template.php";

  	require "$root/footer.php";
?>