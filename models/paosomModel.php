<?php
class paosomModel{
    public $paosom_id;
    public $paosom_no;
    public $user_id;
    public $amount;
  



    public function __construct($paosom_id,$paosom_no,$user_id,$amount)
    {
        $this->paosom_id = $paosom_id;
        $this->paosom_no = $paosom_no;
        $this->user_id = $user_id;
         $this->amount = $amount;
    }

    public static function getAll(){
        $paosomList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM paosom" ;
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $paosom_id = $my_row['paosom_id'];
            $paosom_no = $my_row['paosom_no'];
            $user_id = $my_row['user_id'];
            $amount = $my_row['amount'];
 
    
            $paosomList[] = new paosomModel($paosom_id, $paosom_no,$user_id,$amount);
        }
        require("connection_close.php");
        return $paosomList;
    }

  


    public static function get($id)
    {
        
        require("connection_connect.php");
        $sql="SELECT * FROM paosom INNER JOIN user ON paosom.user_id = user.user_id  WHERE user.user_id='$id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        
        
        $paosom_id = $my_row['paosom_id'];
        $paosom_no = $my_row['paosom_no'];
        $user_id = $my_row['user_id'];
        $amount = $my_row['amount'];
        require("connection_close.php");
        return new paosomModel($paosom_id, $paosom_no,$user_id,$amount);

    }



    public static function Update($paosom_id,$amount)
    {
       require("connection_connect.php");
       $sql1="SELECT * FROM paosom INNER JOIN user ON paosom.user_id = user.user_id  WHERE user.user_id='$paosom_id'";
       $result1=$conn->query($sql1);
       $my_row=$result1->fetch_assoc();
       $oldamount = $my_row['amount'];
$newamount = $oldamount - $amount;
       $sql2="UPDATE `paosom` SET `amount`='$newamount' WHERE paosom_id = '$paosom_id'";
       $result2=$conn->query($sql2);
       require("connection_close.php");
       return ;
    }



    // public static function Add( $fname,$lname,$username,$password)

    // { 
   
    //    require("connection_connect.php");



    //    $sql = "INSERT INTO `user` (`user_id`, `fname`,`lname`,`username`,`password`) VALUES (NULL, '$fname','$lname','$username','$password')";

    //    $result = $conn->query($sql);

    //    require("connection_close.php");

    //    return  ;



    // }
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