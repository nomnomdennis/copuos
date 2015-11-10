<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

	$treaty = "Moon Treaty";
	$num_ratified = 16; /* <? echo $num_ratified ?> */
  	$num_signed = 4; /* <? echo $num_signed ?> */
  	$num_nothing = 176; /* <? echo $num_nothing ?> */

  	require "$root/treaties/template.php";

  	require "$root/footer.php";
?>