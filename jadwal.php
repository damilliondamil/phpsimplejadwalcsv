<?php
 
$dir = "file/".$_POST['jadwal'];
$file_to_read = fopen($dir, "r");
 
if($file_to_read !== FALSE){
     
       while(($data = fgetcsv($file_to_read, 100, ',')) !== FALSE){
        echo "<tr>";
        for($i = 0; $i < count($data); $i++) {
            echo "<td>".$data[$i]."</td>";
        }
        echo "</tr>\n";
    }
    
    fclose($file_to_read);
    header('Location: index.php');
}
 
?>