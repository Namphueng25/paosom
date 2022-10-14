<!DOCTYPE html>
<html>
<head>

</head>
<body bgcolor = "#f0fff0"><center>

<h2><center>Store TABLE</center></h2>


<table border=1 >


<form method="get" action="" style=" right:200px;">
        <input type="text" name="key" size = "30">
        <input type="hidden" name="controller" value="order"  />
        <button type="submit" name="action" value="search"> Search </button>
        <button type="submit" name="action" value="index">Back</button></br>
    </form>
    


    
    <br><tr>
        <th>ร้านค้าในโรงส้ม</th>
        <th>รหัสร้านค้า</th>

<?php foreach($storeList as $store)
{
        echo "<tr><td>$store->store_name</td>
        <td>$store->store_no</td>
   
       
      
        
        </tr>";

}

echo "</table>";
?>
<br>
</center>





</body>
<br>
<br>

</html>
