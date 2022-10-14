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
        <th>ข้อมูลเงิน</th>
        <th>จำนวนเงิน</th>


<?php foreach($transferList as $tran)
{
       

    
        echo "<tr><td>$tran->note</td>
       
        <td><center> -  $tran->amount </center><br>$tran->transfer_datetime</td>

     
       
      
        
        </tr>";
}

?>
<?php foreach($topupList as $tran1)
{
 
        echo "<tr><td>$tran1->note</td>
        <td><center> +  $tran1->topup_amount </center><br>$tran1->Topup_time</td>
     
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
