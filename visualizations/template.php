    <script src=
    "https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['geochart']}]}"
    type="text/javascript">
    </script>

    <script>
      google.setOnLoadCallback(drawRegionsMap);

      $('.modal-trigger').leanModal();
      // begin drawing maps
      function drawRegionsMap() {
      

        // nation + # of treaties 
        var treatyquant_data = google.visualization.arrayToDataTable([
          ['Country/Area', 'Ratified/Signed'],
          ["Afghanistan",1],
          ["Albania",0],
          ["Algeria",3],
          ["Andorra",0],
          ["Angola",0],
          ["Antigua and Barbuda",4],
          ["Argentina",4],
          ["Armenia",0],
          ["Australia",5],
          ["Austria",5],
          ["Azerbaijan",0],
          ["Bahamas",2],
          ["Bahrain",0],
          ["Bangladesh",1],
          ["Barbados",2],
          ["Belarus",4],
          ["Belgium",5],
          ["Belize",0],
          ["Benin",2],
          ["Bhutan",0],
          ["Bolivia",2],
          ["Bosnia and Herzegovina",2],
          ["Botswana",3],
          ["Brazil",4],
          ["Brunei Darussalam",0],
          ["Bulgaria",4],
          ["Burkina Faso",1],
          ["Burundi",3],
          ["Cambodia",1],
          ["Cameroon",2],
          ["Canada",4],
          ["Cape Verde",0],
          ["Central African Republic",2],
          ["Chad",0],
          ["Chile",5],
          ["China",4],
          ["Colombia",4],
          ["Comoros",0],
          ["Congo",0],
          ["Cook Islands",0],
          ["Costa Rica",3],
          ["Cote d'Ivoire",0],
          ["Croatia",2],
          ["Cuba",4],
          ["Cyprus",4],
          ["Czech Republic",4],
          ["Democratic People's Republic of Korea",2],
          ["Democratic Republic of the Congo",3],
          ["Denmark",4],
          ["Djibouti",0],
          ["Dominica",0],
          ["Dominican Republic",3],
          ["Ecuador",3],
          ["Egypt",3],
          ["El Salvador",3],
          ["Equatorial Guinea",1],
          ["Eritrea",0],
          ["Estonia",1],
          ["Ethiopia",1],
          ["Fiji",3],
          ["Finland",3],
          ["France",5],
          ["Gabon",2],
          ["Gambia",3],
          ["Georgia",1],
          ["Germany",4],
          ["Ghana",3],
          ["Greece",4],
          ["Grenada",0],
          ["Guatemala",2],
          ["Guinea",0],
          ["Guinea-Bissau",2],
          ["Guyana",2],
          ["Haiti",3],
          ["Holy See",1],
          ["Honduras",2],
          ["Hungary",4],
          ["Iceland",3],
          ["India",5],
          ["Indonesia",4],
          ["Iran",4],
          ["Iraq",3],
          ["Ireland",3],
          ["Israel",3],
          ["Italy",4],
          ["Jamaica",2],
          ["Japan",4],
          ["Jordan",3],
          ["Kazakhstan",5],
          ["Kenya",2],
          ["Kiribati",0],
          ["Kuwait",5],
          ["Kyrgyzstan",0],
          ["Lao People's Democratic Republic",3],
          ["Latvia",0],
          ["Lebanon",5],
          ["Lesotho",2],
          ["Liberia",0],
          ["Libya",4],
          ["Liechtenstein",2],
          ["Lithuania",4],
          ["Luxembourg",3],
          ["Madagascar",2],
          ["Malawi",0],
          ["Malaysia",2],
          ["Maldives",1],
          ["Mali",2],
          ["Malta",2],
          ["Marshall Islands",0],
          ["Mauritania",0],
          ["Mauritius",2],
          ["Mexico",5],
          ["Micronesia",0],
          ["Monaco",1],
          ["Mongolia",4],
          ["Montenegro",3],
          ["Morocco",5],
          ["Mozambique",0],
          ["Myanmar",2],
          ["Namibia",0],
          ["Nauru",0],
          ["Nepal",3],
          ["Netherlands",5],
          ["New Zealand",3],
          ["Nicaragua",4],
          ["Niger",4],
          ["Nigeria",4],
          ["Norway",4],
          ["Oman",1],
          ["Pakistan",5],
          ["Palau",0],
          ["Panama",2],
          ["Papua New Guinea",3],
          ["Paraguay",0],
          ["Peru",5],
          ["Philippines",4],
          ["Poland",4],
          ["Portugal",2],
          ["Qatar",4],
          ["Republic of Korea",4],
          ["Republic of Moldova",0],
          ["Romania",4],
          ["Russian Federation",4],
          ["Rwanda",3],
          ["Saint Kitts and Nevis",0],
          ["Saint Lucia",0],
          ["Saint Vincent and the Grenadines",4],
          ["Samoa",0],
          ["San Marino",2],
          ["Sao Tome and Principe",0],
          ["Saudi Arabia",4],
          ["Senegal",2],
          ["Serbia",4],
          ["Seychelles",4],
          ["Sierre Leone",3],
          ["Singapore",4],
          ["Slovakia",4],
          ["Slovenia",2],
          ["Soloman Islands",0],
          ["Somalia",2],
          ["South Africa",4],
          ["South Sudan",0],
          ["Spain",4],
          ["Sri Lanka",2],
          ["Sudan",0],
          ["Suriname",0],
          ["Swaziland",1],
          ["Sweden",4],
          ["Switzerland",4],
          ["Syrian Arab Republic",3],
          ["Tajikistan",0],
          ["Thailand",2],
          ["The former Yugoslav Republic of Macedonia",0],
          ["Timor-Leste",0],
          ["Togo",2],
          ["Tonga",2],
          ["Trinidad and Tobago",2],
          ["Tunisia",3],
          ["Turkey",5],
          ["Turkmenistan",0],
          ["Tuvalu",0],
          ["Uganda",1],
          ["Ukraine",4],
          ["United Arab Emirates",3],
          ["United Kingdom",4],
          ["Tanzania",1],
          ["United States",4],
          ["Uruguay",5],
          ["Uzbekistan",0],
          ["Vanuatu",0],
          ["Venezuela",3],
          ["Vietnam",2],
          ["Yemen",2],
          ["Zambia",3],
          ["Zimbabwe",0],
          ["Palestine",0],
        ]);

        var <? echo $map_string ?>_options = {
          region: <? echo $map_id ?>,
          colorAxis: {
            colors: ['#EBF0FA', '#050A14']
          },
          legend: 'none',
          tooltip: {
            textStyle: {
              fontName: 'Roboto'
            },
          },
        };

        // region maps
        var <? echo $map_string ?> = new google.visualization.GeoChart(document.getElementById('<? echo $map_string ?>_div'));

        // draw everything function
        function create_everything() {
            <? echo $map_string ?>.draw(treatyquant_data, <? echo $map_string ?>_options);
        };

        
        // draw it and make it responsive
        create_everything();
        window.addEventListener('resize', create_everything);


        // When you click a country in the <? echo $map_string ?> map
        google.visualization.events.addListener(<? echo $map_string ?>, 'select', function() {
          
          
          var selection = <? echo $map_string ?>.getSelection();

          // get the nation and the number of treaties they've ratified/signed
          var nation = treatyquant_data.getValue(selection[0].row, 0);
          var value = treatyquant_data.getValue(selection[0].row, 1);
          
          var modal = nation.replace(/ /g, "_").replace(/'/g, "_");
          console.log(nation);
          console.log(modal);
          hash = "#";
          $(hash.concat(modal)).openModal();

        });
        
      }
      // end drawing maps
    </script>

<main class="container">


      <div class="row section">
        
 
      <h3><? echo $map_type ?></h3>
      <p>Click on a nation to see its actions regarding each treaty or agreement.</p>
      <div class="divider"></div>
      <div class="section">
        <div id="<? echo $map_string ?>_div" class="center-align" style="height: 100%; width:100%"></div>
      </div>

<?
  $raw_json = file_get_contents("$root/data/all.json");
  $decoded = json_decode($raw_json, true);

  foreach ($decoded as $nation) {
    echo "<div id=\"";
    $korea = str_replace(" ", "_", $nation['AREA']);
    echo str_replace("'", "_", $korea);
    echo "\"class=\"modal\"><div class=\"modal-content\">";
    echo "<ul class=\"collection with-header\"><li class=\"collection-header\"><h5 class=\"center-align\" style=\"text-transform: uppercase;\">";
    echo $nation['AREA'];
    echo "</h5></li><li class=\"collection-item\">Outer Space Treaty (1967) <span class=\"badge flow-text\">";
    if ($nation["OST"] == R) {
      echo "Ratified <i class=\"tiny material-icons\">done_all</i>";
    }
    elseif ($nation["OST"] == S) {
      echo "Signed <i class=\"tiny material-icons\">done</i>";
    }
    else {
      echo "Not Ratified or Signed <i class=\"tiny material-icons\">not_interested</i>";
    }
    echo "</span></li><li class=\"collection-item\">Rescue Agreement (1968)<span class=\"badge flow-text\">";
    if ($nation["ARRA"] == R) {
      echo"Ratified <i class=\"tiny material-icons\">done_all</i>";
    }
    elseif ($nation["ARRA"] == S) {
      echo"Signed <i class=\"tiny material-icons\">done</i>";
    }
    else {
      echo"Not Ratified or Signed <i class=\"tiny material-icons\">not_interested</i>";
    }
    echo "</span></li><li class=\"collection-item\">Liability Convention (1972)<span class=\"badge flow-text\">";
    if ($nation["LIAB"] == R) {
      echo"Ratified <i class=\"tiny material-icons\">done_all</i>";
    }
    elseif ($nation["LIAB"] == S) {
      echo"Signed <i class=\"tiny material-icons\">done</i>";
    }
    else {
      echo"Not Ratified or Signed <i class=\"tiny material-icons\">not_interested</i>";
    }
    echo "</span></li><li class=\"collection-item\">Registration Convention (1976)<span class=\"badge flow-text\">";
    if ($nation["REG"] == R) {
      echo"Ratified <i class=\"tiny material-icons\">done_all</i>";
    }
    elseif ($nation["REG"] == S) {
      echo"Signed <i class=\"tiny material-icons\">done</i>";
    }
    else {
      echo"Not Ratified or Signed <i class=\"tiny material-icons\">not_interested</i>";
    }
    echo "</span></li><li class=\"collection-item\">Moon Agreement (1984)<span class=\"badge flow-text\">";
    if ($nation["MOON"] == R) {
      echo"Ratified <i class=\"tiny material-icons\">done_all</i>";
    }
    elseif ($nation["MOON"] == S) {
      echo"Signed <i class=\"tiny material-icons\">done</i>";
    }
    else {
      echo"Not Ratified or Signed <i class=\"tiny material-icons\">not_interested</i>";
    }
    echo "</span></li></ul>";
    echo "</div><div class=\"modal-footer\"><a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">Close</a></div></div>";
    echo "<a class=\"hide waves-effect waves-light btn modal-trigger\" href=\"#";
    echo str_replace(" ", "_", $nation['AREA']);
    echo "\">";
    echo $nation['AREA'];
    echo "</a>";
  }
?>
          


    </main>


  

  
  