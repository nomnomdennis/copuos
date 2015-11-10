<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

	$treaty = "Outer Space Treaty";
	$num_ratified = 103; /* <? echo $num_ratified ?> */
  	$num_signed = 25; /* <? echo $num_signed ?> */
  	$num_nothing = 68; /* <? echo $num_nothing ?> */

  	require "$root/treaties/template.php";

  	require "$root/footer.php";
?>