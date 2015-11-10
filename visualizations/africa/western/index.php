<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Western Africa"; /* <? echo $map_type ?> */
  	$map_string = "western_africa"; /* <? echo $map_string ?> */
  	$map_id = "\"011\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>