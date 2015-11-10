<?
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);

	require "$root/header.php";

  	$map_type = "Middle Africa"; /* <? echo $map_type ?> */
  	$map_string = "middle_africa"; /* <? echo $map_string ?> */
  	$map_id = "\"017\""; /* <? echo $map_id ?> */

  	require "$root/visualizations/template.php";

  	require "$root/footer.php";
?>