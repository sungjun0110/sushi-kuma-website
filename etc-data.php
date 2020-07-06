<?php
  $dbhost = '148.72.17.14:3313';
  $dbname = 'l37343129124732';
  $dbuser = 'l37343129124732';
  $dbpass = 'pM.G8lPFDg';
  $data_world = array();

  $link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
  mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

  $etc_query = "SELECT * FROM `Etc`";
  $result_etc = mysqli_query($link, $etc_query);


  while($values = mysqli_fetch_array($result_etc)) {
    $data_etc[] = $values;
  }

  echo json_encode($data_etc, true);
  mysqli_close($link);
?>
