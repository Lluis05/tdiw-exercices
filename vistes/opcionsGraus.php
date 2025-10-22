<?php
    foreach($rows_graus as $row){
        //echo "<option value='".$row['id'].">".$row['nom']."</option";
?>
    <option value ="<?=$row['id']?>"><?=$row['nom']?></option>
<?php      
    }
?>