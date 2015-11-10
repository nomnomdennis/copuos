<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

	$treaty = "Liability Agreement";
	$num_ratified = 92; /* <? echo $num_ratified ?> */
  	$num_signed = 21; /* <? echo $num_signed ?> */
  	$num_nothing = 83; /* <? echo $num_nothing ?> */

  	require "$root/treaties/template.php";

  	require "$root/footer.php";
?>