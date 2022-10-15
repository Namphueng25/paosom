<!DOCTYPE html>
<html>

<head>
<link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
</head>
<center>

    <div id="container" >
        <div>
            <img src="img/card.png" width="150" height="150">
                <p><br><?php echo "ยอดเงินคงเหลือ ";?><br><br><?php echo number_format($paosom->amount,2); echo " บาท "?><br><br><br>
                <?php echo "เลขบัญชี $paosom->paosom_no"; ?></p>
        </div>
    </ก>

</center>


</body>


</html>

<style>

    #container {
        width: 600px;
        position: relative;
        overflow: hidden;
    }

    #container img{
        width: 550px;
        height: 350px;
        
    }

    #container p{
        position: absolute;
        color: black;
        font-size: 20px;
        top: 40%;
        text-align: left;
        font-weight: bold;    
        width: 100%;
        font-family: 'Kanit', sans-serif;
        padding-left: 80px;
        
    }
</style>