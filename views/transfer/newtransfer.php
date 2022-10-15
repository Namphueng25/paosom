<?php
   require_once('views/transfer/php/component.php');
?>
<link rel="stylesheet" href="transferstyle.css">
<link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
<center><font size = "5">
<form method = "GET" action = "">
<center>
<div class="container">
   <section class="S1">
   <div class="row text-center">
   <div class="col">
            <form action="index.php" method="post">
            <div class="card">
                <div>
                    <img widtg=50px height=60px src="img/cash-back.png" alt="image1" class="img-fluid card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">ร้านค้าในโรงส้ม</h5><br><select name="store_id" class="drop">
                            <br>
                            <?php foreach($storeList as $s)
                            {
                                echo "<option value=$s->store_id > $s->store_name</option>";
                            }?>
                            </select></label><br>
                        <br>
                        <p class="card-text">
                            <label><p5>จำนวนเงิน </p5>  <input type="number" name="amount" class="number"/>
                            </label><br><input type="hidden" name="controller" value="store"/>
                            <div>
                                <button type="submit" name="action" class="btn" value="update" style="font-family: 'Kanit', sans-serif;">โอนเงิน</button>
                                <button type="submit" name="action" class="btn" value="" style="font-family: 'Kanit', sans-serif;">บิล</button>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            </form>
        </div>
   </div>
   </section>
</div>
</center>
</form></center>

