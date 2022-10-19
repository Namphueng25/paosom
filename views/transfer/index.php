<?php
   require_once('views/transfer/php/component.php');
?>

<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="img/svg/logo.svg" type="image/x-icon">
</head>
<body bgcolor = "#f0fff0"><center>

<h2 style="font-family: 'Kanit', sans-serif; color:#FF8C00;"><center>ร้านค้าในโรงส้ม</center></h2><br>



<form method="get" action="" style=" right:200px;" >
        <input type="text" name="key" size = "30">
        <input type="hidden" name="controller" value="store"  />
        <button class="btn" type="submit" name="action" value="search"><i class="icon" data-feather="search"></i></button>

    </form>
    

<br>
</center>
<br><br>
<div class="container" >
   <section class="S1" style="font-family: 'Kanit', sans-serif;" >
   <div class="row text-center py-5" >
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
   .S1 img {
    width: 220px;
    height: 200px;
    background-color: #FFCC66;
    background: radial-gradient(white 30%, #FFCC66 70%);
    border-radius: 20px;
}

.icon {
   color: #FFCC66;
   position: center;
   
}

.btn {
   background-color: #F8F8FF;
   height: 50px;
   width: 50px;
   padding-left: 12px;
   padding-right: 18px;
}

.S1 .card {
    font-family: 'Kanit', sans-serif;
    margin-bottom: 30px;
    margin-left: 80px;
    background-color:#FFF;
    width: 220px;
    height: 350px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    text-align: center;
    border-radius: 14px;
}

.S1 h5{
    font-size: 20px;
    
    font-family: 'Kanit', sans-serif;
    margin-top: 8px;
    margin-bottom: 8px;
}
</style>