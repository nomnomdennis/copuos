<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

	$treaty = "Rescue Agreement";
	$num_ratified = 94; /* <? echo $num_ratified ?> */
  	$num_signed = 24; /* <? echo $num_signed ?> */
  	$num_nothing = 78; /* <? echo $num_nothing ?> */

  	require "$root/treaties/template.php";

  	require "$root/footer.php";
?>