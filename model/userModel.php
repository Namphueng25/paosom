<?php
class usereModel{
    public $user_id;
    public $fname;
    public $lname;
    public $username;
    public $password;



    public function __construct($user_id,$fname,$lname,$username,$password)
    {
        $this->user_id = $user_id;
        $this->fname = $fname;
        $this->lname = $lname;
         $this->username = $username;
        $this->password = $password;
   
    
       

    }

    public static function getAll(){
        $userList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM user" ;
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $user_id = $my_row['user_id'];
            $fname = $my_row['fname'];
            $lname = $my_row['lname'];
            $username = $my_row['username'];
            $password = $my_row['password'];
    
            $userList[] = new usereModel($user_id, $fname,$lname,$username,$password);
        }
        require("connection_close.php");
        return $userList;
    }

  


//     public static function get($id)
//     {
        
//         require("connection_connect.php");
//         $sql="SELECT patients.studentID,patients.Title,patients.Firstname,patients.Lastname,disease.DisID,disease.DisNameENG,disease.DisNameTH,diagnose.id_diagnose,diagnose.patID
//         FROM queuecheck INNER JOIN patients ON queuecheck.CN = patients.CN  INNER JOIN diagnose ON diagnose.patID = queuecheck.qcID INNER JOIN disease ON diagnose.DisID =disease.DisID WHERE id_diagnose='$id'";
//         $result=$conn->query($sql);
//         $my_row=$result->fetch_assoc();
        
        
//         $id_diagnose = $my_row['id_diagnose'];
//         $DisID = $my_row['DisID'];
//         $patID = $my_row['patID'];
//         $DisNameENG = $my_row['DisNameENG'];
//         $DisNameTH = $my_row['DisNameTH'];
//         $Firstname = $my_row['Firstname'];
//         $Lastname = $my_row['Lastname'];
           
        
//         require("connection_close.php");
//         return new diagnoseModel($id_diagnose, $DisID,$patID,$DisNameENG,$DisNameTH,$Firstname,$Lastname);

//     }

    public static function Add( $fname,$lname,$username,$password)

    { 
   
       require("connection_connect.php");



       $sql = "INSERT INTO `user` (`user_id`, `fname`,`lname`,`username`,`password`) VALUES (NULL, '$fname','$lname','$username','$password')";

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