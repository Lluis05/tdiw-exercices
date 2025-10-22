<?php
    foreach($rows_grus as $row){
        //echo "<option value='".$row['id'].">".$row['nom']."</option";
?>
    <option value ="<?=$row['id']?>"><?=$row['nom']?></option>
<?php      
    }
?>