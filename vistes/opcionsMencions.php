<?php
    foreach($rows as $row):
        //echo "<option value='".$row['id'].">".$row['nom']."</option";
?>
    <option value ="<?=$row['id']?>"><?=$row['nom']?></option>
<?php      
    endforeach;
?>