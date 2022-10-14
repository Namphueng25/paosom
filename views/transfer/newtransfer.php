<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUO6ad442Z5ebYopUDS4w_gtSQaP5f4s-tUNuqHZSe_2h7ePuYXrRLH_fOLyK21mboiHY&usqp=CAU"   ></center>
<center><font size = "5">
<form method = "GET" action = "">

 
    
    <label>ร้านค้าในโรงส้ม   <select name="store_id">
    <?php foreach($storeList as $s)
    {
        echo "<option value=$s->store_id > $s->store_name</option>";
    }?>
    </select></label><br>

    
    <label>เปอร์เซ็นต์มัดจำ   <input type="number" name="amount"/></label><br>

    <input type="hidden" name="controller" value="store"/><br>
    <button type="submit" name="action" value="update">โอนเงิน</button>
</form></center>

