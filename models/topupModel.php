
<?php class topupModel{
     public $topup_id;
     public $bank_id;
     public $paosom_id;
     public $topup_amount;
     public $Topup_time;
     public $note;
  

    public function __construct($topup_id,$bank_id,$paosom_id,$topup_amount,$Topup_time,$note)
    {
        $this->topup_id = $topup_id;
        $this->bank_id = $bank_id;
        $this->paosom_id = $paosom_id;
        $this->topup_amount = $topup_amount;
        $this->Topup_time = $Topup_time;
        $this->note = $note;
    }
    public static function getAll()
    {
        $topupList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM topup INNER JOIN paosom ON topup.paosom_id =paosom.paosom_id INNER JOIN bank ON bank.bank_id =topup.bank_id  WHERE paosom_id='$id'";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $topup_id = $my_row['topup_id'];
            $bank_id = $my_row['bank_id'];
            $paosom_id = $my_row['paosom_id'];
            $topup_amount = $my_row['topup_amount'];
            $Topup_time = $my_row['Topup_time'];
            $note = $my_row['note'];
    
            $topupList[] = new topupModel($topup_id,$bank_id,$paosom_id,$topup_amount,$Topup_time,$note);
        }
        require("connection_close.php");
        return $topupList;

    }



    public static function get($id)
    {
        $topupList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM topup INNER JOIN paosom ON topup.paosom_id =paosom.paosom_id INNER JOIN bank ON bank.bank_id =topup.bank_id where paosom.paosom_id = $id ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $topup_id = $my_row['topup_id'];
            $bank_id = $my_row['bank_id'];
            $paosom_id = $my_row['paosom_id'];
            $topup_amount = $my_row['topup_amount'];
            $Topup_time = $my_row['Topup_time'];
            $note = $my_row['note'];
    
            $topupList[] = new topupModel($topup_id,$bank_id,$paosom_id,$topup_amount,$Topup_time,$note);
        }
        require("connection_close.php");
        return $topupList;

    }
    // public static function Add($bank_id,$paosom_id,$topup_amount)

    // { 

    //    require("connection_connect.php");

      

    //    $sql = "INSERT INTO `topup` (`topup_id`, `bank_id`, `paosom_id`, `topup_amount`, `Topup_time`, `note`) VALUES (NULL, '$bank_id', '$paosom_id', '$topup_amount',current_timestamp(),'เงินเข้า')";

    //    $result = $conn->query($sql);

    //    require("connection_close.php");

    //    return  ;

    // }



    // public static function get($id)
    // {
        
    //     require("connect_database.php");
    //     $sql="SELECT * FROM customer_order  INNER JOIN customer ON customer.c_id = customer_order.id_cus INNER JOIN staff ON customer_order.Staff_id=staff.s_id WHERE id_order='$id'";
    //     $result=$conn->query($sql);
    //     $my_row=$result->fetch_assoc();
        
        
    //         $id_order = $my_row[id_order];
    //         $date = $my_row[date];
    //         $condition = $my_row[condition ];
    //         $id_cus = $my_row[id_cus];
    //         $Staff_id = $my_row[Staff_id];
    //         $เงื่อนไข = $my_row[เงื่อนไข];
    //         $c_Fname = $my_row[c_Fname];
    //         $s_name = $s_name[s_name];
           
        
    //     require("connection_close.php");
    //     return new Order($id_order,$date,$condition,$c_Fname,$id_cus,$s_name,$Staff_id,$เงื่อนไข);

    // }


    // public static function Update($id_order,$date,$c_id,$s_id,$condition,$เงื่อนไข,$oldid)
    //  {
    //     require("connect_database.php");
    //     $sql="UPDATE `customer_order` SET `id_order`='$id_order',`date`='$date',
    //     `id_cus`='$c_id',`Staff_id`='$s_id',`condition`='$condition',`เงื่อนไข`='$เงื่อนไข' WHERE id_order = '$oldid'";
    //     $result=$conn->query($sql);
    //     require("connection_close.php");
    //     return ;
    //  }
    // public static function delete($id)

    // {

    //     require("connect_database.php");

    //     $sql = "DELETE FROM customer_order WHERE id_order = '$id'";

    //     $result = $conn->query($sql);

    //     require("connection_close.php");

    //     return ;

    // }






}

