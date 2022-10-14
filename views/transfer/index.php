<?php
   require_once('views/transfer/php/component.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="storestyle.css">

</head>
<body bgcolor = "#f0fff0"><center>

<h2><center>Store In The Central Canteen</center></h2><br>



<form method="get" action="" style=" right:200px;">
        <input type="text" name="key" size = "30">
        <input type="hidden" name="controller" value="store"  />
        <button type="submit" name="action" value="search"> Search </button>
        <button type="submit" name="action" value="index">Back</button></br>
    </form>
    

<br>
</center>

<center>
<!--<div class="table-users">  
   <table cellspacing="0" border=1>
      <tr>
      <th width="230">logo</th>
         <th width="230">ร้านค้าในโรงส้ม</th>
         <th width="230">รหัสร้านค้า</th>
      </tr>
      <tr></tr>
<?php foreach($storeList as $store)
{ 

        echo "<tr>
        <td><img src=img/$store->store_image></td>
        <td> $store->store_name </td>
        <td> $store->store_no </td>
      </tr>";

}
?>
   </table>
</div>-->
</center>
<br><br>
<div class="container">
   <section class="S1">
   <div class="row text-center py-5">
      <?php foreach($storeList as $store){
         component($store->store_name,$store->store_no,$store->store_image);
      }

      ?>
   </div>
   </section>
</div>

</body>
<br>
<br>

</html>

<style>

/*img {
   height: 60px;
   width: 60px;
}

body {
   text-align: center;     
}

table {
   width: 50%;
   border-color: #FFCC00;
}

td, th {
      text-align: center;
      vertical-align: middle;
      padding: 10px;
      background: #FFFFCC;
   }*/
</style>