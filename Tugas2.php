  <?php

  $json_string = file_get_contents("http://api.wunderground.com/api/9506a6b0b3836cc0/astronomy/q/Indonesia/Manokwari.json");
  $parsed_json = json_decode($json_string);
  $name= $parsed_json->moon_phase->hemisphere;
   $age= $parsed_json->moon_phase->ageOfMoon;
  $clock= $parsed_json->sun_phase->sunrise->hour;
    $clock2= $parsed_json->sun_phase->sunset->hour;
 
 
  echo
  "Belahan bumi : $name </br>
  Fase Bulan : $age </br>
  Matahari Terbit jam : $clock </br>
  Matahari Tenggelam jam : $clock </br>";

 
  
 
  
?>
