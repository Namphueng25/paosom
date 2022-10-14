<?php
class storeModel{
    public $store_id;
    public $store_no;
    public $store_name;
    public $store_income;
  



    public function __construct($store_id,$store_no,$store_name,$store_income)
    {
        $this->store_id = $store_id;
        $this->store_no = $store_no;
        $this->store_name = $store_name;
         $this->store_income = $store_income;
    }

    public static function getAll(){
        $storeList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM store" ;
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $store_id = $my_row['store_id'];
            $store_no = $my_row['store_no'];
            $store_name = $my_row['store_name'];
            $store_income = $my_row['store_income'];
 
    
            $storeList[] = new storeModel($store_id,$store_no,$store_name,$store_income);
        }
        require("connection_close.php");
        return $storeList;
    }

  


    public static function get($id)
    {
        
        require("connection_connect.php");
        $sql="SELECT * FROM store   WHERE store_id='$id' ";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $store_id = $my_row['store_id'];
        $store_no = $my_row['store_no'];
        $store_name = $my_row['store_name'];
        $store_income = $my_row['store_income'];
        require("connection_close.php");
        return new paosomModel($store_id,$store_no,$store_name,$store_income);

    }


    public static function Update($store_id,$amount)
    {
       require("connection_connect.php");
       $sql1="SELECT * FROM store   WHERE store_id='$store_id'";
       $result1=$conn->query($sql1);
       $my_row=$result1->fetch_assoc();
       $store_income = $my_row['store_income'];
$newincome =$store_income+$amount;
       $sql="UPDATE `store` SET `store_income`='$newincome' WHERE store_id = '$store_id'";
       $result=$conn->query($sql);
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
