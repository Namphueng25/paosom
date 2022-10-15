<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
</head>
<body bgcolor = "#f0fff0"><center>

<h2><center>ประวัติการโอน</center></h2>


<section class="S2">
        <table class="table">  
    
        <br><tr>
                <div class="container">
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

                </div>

        </div>
</section>
<br><br>

</center>





</body>
<br>
<br>

</html>
<style>
h2 {
        font-family: 'Kanit', sans-serif;  
}
table {
        font-family: 'Kanit', sans-serif;
    border-collapse: collapse;
    overflow: hidden;
    width: 50%;
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.23);
    border-radius: 10px;
    
}

th {
    background-color: #FF9933;
    height: 50px;
    font-family: ;
}
 
td, th {
    border-bottom: 1px solid gray;
    text-align: center;
    padding: 8px;
}


/*tr {
        background: linear-gradient(#eab676, #FFCC66);   
}*/

tr:nth-child(odd) {
        background: white;
}

tr:nth-child(even) {
    background: #F5F5F5;
}

</style>