<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Africa"; /* <? echo $map_type ?> */
  	$map_string = "africa"; /* <? echo $map_string ?> */
  	$map_id = "\"002\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>