<?
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  require "$root/header.php";
?>
<main class="container">
  <h3 class="center-align"> Treaty Signatory/Party by Location </h3>
  <div class="divider"></div>
  <p>Click on a map to view the geographical distribution of treaty ratification/signature.</p>
  <div class="center-align">
    <a class="waves-effect waves-light btn"href="/visualizations/world">WORLD</a>
  </div>
  <div class="section">
    <ul class="pagination">
      <li class="waves-effect active"><a href="/visualizations/africa">Africa</a></li>
      <li class="waves-effect"><a href="/visualizations/africa/eastern">Eastern Africa</a></li>
      <li class="waves-effect"><a href="/visualizations/africa/middle">Middle Africa</a></li>
      <li class="waves-effect"><a href="/visualizations/africa/northern">Northern Africa</a></li>
      <li class="waves-effect"><a href="/visualizations/africa/southern">Southern Africa</a></li>
      <li class="waves-effect"><a href="/visualizations/africa/western">Western Africa</a></li>
    </ul>
    <div class="divider"></div>
    <ul class="pagination">
      <li class="waves-effect active"><a href="/visualizations/americas">Americas</a></li>
      <li class="waves-effect"><a href="/visualizations/americas/caribbean">Caribbean</a></li>
      <li class="waves-effect"><a href="/visualizations/americas/central">Central America</a></li>
      <li class="waves-effect"><a href="/visualizations/americas/northern">Northern America</a></li>
      <li class="waves-effect"><a href="/visualizations/americas/south">South America</a></li>
    </ul>
    <div class="divider"></div>
    <ul class="pagination">
      <li class="waves-effect active"><a href="/visualizations/asia">Asia</a></li>
      <li class="waves-effect"><a href="/visualizations/asia/central">Central Asia</a></li>
      <li class="waves-effect"><a href="/visualizations/asia/eastern">Eastern Asia</a></li>
      <li class="waves-effect"><a href="/visualizations/asia/south-eastern">South-Eastern Asia</a></li>
      <li class="waves-effect"><a href="/visualizations/asia/southern">Southern Asia</a></li>
      <li class="waves-effect"><a href="/visualizations/asia/western">Western Asia</a></li>
    </ul>
    <div class="divider"></div>
    <ul class="pagination">
      <li class="waves-effect active"><a href="/visualizations/europe">Europe</a></li>
      <li class="waves-effect"><a href="/visualizations/europe/eastern">Eastern Europe</a></li>
      <li class="waves-effect"><a href="/visualizations/europe/northern">Northern Europe</a></li>
      <li class="waves-effect"><a href="/visualizations/europe/southern">Southern Europe</a></li>
      <li class="waves-effect"><a href="/visualizations/europe/western">Western Europe</a></li>
    </ul>
    <div class="divider"></div>
    <ul class="pagination">
      <li class="waves-effect active"><a href="/visualizations/oceania">Oceania</a></li>
      <li class="waves-effect"><a href="/visualizations/oceania/australia">Australia</a></li>
      <li class="waves-effect"><a href="/visualizations/oceania/melanesia">Melanesia</a></li>
      <li class="waves-effect"><a href="/visualizations/oceania/micronesia">Micronesia</a></li>
      <li class="waves-effect"><a href="/visualizations/oceania/polynesia">Polynesia</a></li>
    </ul>
  </div>
  </div>
</main>

<?
  require "$root/footer.php";
?>

<? /*

<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">

<main class="container">

<table class="responsive bordered" id="all">
  <thead>
    <tr>
      <th>Area/Nation</th>
      <th>Outer Space Treaty</th>
      <th>Rescue Agreement</th>
      <th>Liability Convention</th>
      <th>Registration Convention</th>
      <th>Moon Treaty</th>
    </tr>
  </thead>
  <tbody>
<?
  $raw_json = file_get_contents("$root/data/all.json");
  $decoded = json_decode($raw_json, true);

  foreach ($decoded as $nation) {
    echo "<tr>";

    echo "<td>";
    echo $nation['AREA'];
    echo "</td>";


    echo"<td>";
    if ($nation["OST"] == R) {
      echo "Ratified";
    }
    elseif ($nation["OST"] == S) {
      echo "Signed";
    }
    else {
      echo "Not Ratified or Signed";
    }
    echo"</td>";


    echo"<td>";
    if ($nation["ARRA"] == R) {
      echo "Ratified";
    }
    elseif ($nation["ARRA"] == S) {
      echo "Signed";
    }
    else {
      echo "Not Ratified or Signed";
    }
    echo"</td>";


    echo"<td>";
    if ($nation["LIAB"] == R) {
      echo "Ratified";
    }
    elseif ($nation["LIAB"] == S) {
      echo "Signed";
    }
    else {
      echo "Not Ratified or Signed";
    }
    echo"</td>";


    echo"<td>";
    if ($nation["REG"] == R) {
      echo "Ratified";
    }
    elseif ($nation["REG"] == S) {
      echo "Signed";
    }
    else {
      echo "Not Ratified or Signed";
    }
    echo"</td>";
    

    echo"<td>";
    if ($nation["MOON"] == R) {
      echo "Ratified";
    }
    elseif ($nation["MOON"] == S) {
      echo "Signed";
    }
    else {
      echo "Not Ratified or Signed";
    }
    echo"</td>";

    echo "</tr>";
  }
?>      
  </tbody>
</table>

</main>
<script type="text/javascript">
  $(document).ready( function () {
    $('#all').DataTable();
} );
</script>

*/?>