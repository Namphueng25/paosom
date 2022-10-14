<center><div class="img">
			<img src="img/cash-back.png" width="80" height="80">
		</div></center><br><br>
<center><font size = "5">
<form method = "GET" action = "">

    
    <label><p5>ร้านค้าในโรงส้ม   </p5><select name="store_id">
    <br>
    <?php foreach($storeList as $s)
    {
        echo "<option value=$s->store_id > $s->store_name</option>";
    }?>
    </select></label><br>
    <br>
    
    <label><p5>จำนวนเงิน </p5>  <input type="number" name="amount"/></label><br>
    <input type="hidden" name="controller" value="store"/><br>
    
    <button type="submit" name="action" class="btn" value="update">โอนเงิน</button>
</form></center>

