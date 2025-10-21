
<?php
  include_once __DIR__."/connectaBD.php";
  $con=connectaBD();

  //standard way
  /*
  if(isset($_REQUEST['grau'])){
    $grau = $_REQUEST['grau'];
  }else{
    $grau = 1;
  }
  */

  //ternary operator -> same as If else but compact
  //$grau = (isset($_REQUEST['grau'])) ? $_REQUEST['grau'] : 1;

  //nullish operator
  $grau = $_REQUEST['grau'] ?? 1;

  $query = "SELECT * FROM mencions WHERE grau=".$grau;
  $resultSet = pg_query($con, $query) or die("Error sql graus");
  $rows = pg_fetch_all($resultSet);
  foreach($rows as $row):
      //echo "<option value='".$row['id'].">".$row['nom']."</option";
?>
  <option value =<?=$row['id']?>><?=$row['nom']?></option>
<?php      
  endforeach;
?>
