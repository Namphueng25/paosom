<!DOCTYPE html>
<html>

<head>
</head>
<div class="container main-nav">
    <table style="padding: 30px;" border="0">
        <tr>
            <td valign="top"><img src="img/credit-card.png" width="150" height="150"></td>
            <td valign="center">
                <div>
                    <p5><?php echo "ยอดเงินคงเหลือ ";echo number_format($paosom->amount,2); echo " บาท "?></p5><br />
                    <p5><?php echo "เลขบัญชี $paosom->paosom_no"; ?></p5><br />
                </div>
            </td>
        </tr>
    </table>
</div>



</body>


</html>