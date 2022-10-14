<?php
class transferModel{
    public $transfer_id;
    public $paosom_id;
    public $store_id;
    public $transfer_datetime;
    public $amount;
  



    public function __construct($transfer_id,$paosom_id,$store_id,$transfer_datetime,$amount)
    {
        $this->transfer_id = $transfer_id;
        $this->paosom_id = $paosom_id;
        $this->store_id = $store_id;
        $this->transfer_datetime = $transfer_datetime;
        $this->amount = $amount;
    }

   
    public static function getAll(){
        $transferList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM transfer" ;
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $transfer_id = $my_row['transfer_id'];
            $paosom_id = $my_row['paosom_id'];
            $transfer_datetime = $my_row['transfer_datetime'];
            $amount = $my_row['amount'];
 
    
            $transferList[] = new transferModel($transfer_id,$paosom_id,$store_id,$transfer_datetime,$amount);
        }
        require("connection_close.php");
        return $transferList;
    }

  


    public static function get($id)
    {
        
        require("connection_connect.php");
        $sql="SELECT * FROM transfer   WHERE transfer_id='$id' ";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();

        $transfer_id = $my_row['transfer_id'];
        $paosom_id = $my_row['paosom_id'];
        $transfer_datetime = $my_row['transfer_datetime'];
        $amount = $my_row['amount'];
        require("connection_close.php");

        return new transferModel($transfer_id,$paosom_id,$store_id,$transfer_datetime,$amount);

    }


    // public static function Update($store_id,$store_income)
    // {
    //    require("connection_connect.php");
    //    $sql="UPDATE `store` SET `store_income`='$store_income' WHERE store_id = '$store_id'";
    //    $result=$conn->query($sql);
    //    require("connection_close.php");
    //    return ;
    // }

    public static function Add($paosom_id,$store_id,$amount)

    { 
   
       require("connection_connect.php");



       $sql = "INSERT INTO `transfer` (`transfer_id`, `paosom_id`,`store_id`,`transfer_datetime`,`amount`) VALUES (NULL, '$paosom_id','$store_id',current_timestamp(),'$amount')";

       $result = $conn->query($sql);

       require("connection_close.php");

       return  ;



    }
//     public static function delete($id)

//     {

//         require("connection_connect.php");

//         $sql = "DELETE FROM diagnose WHERE id_diagnose = '$id'";

//         $result = $conn->query($sql);

//         require("connection_close.php");

//         return ;

//     }


   
}
?>