<?php class UserController{
    public function index()
    {
        $userList=usereModel::getAll();
        require_once("./view/paosom/index.php");
    }
    public function newregister(){
        echo 'Hi';
        // $customerList = customer::getAll();
        // $staffList = staff::getAll();
        require_once('./view/paosom/newregister.php');
    }
   
    public function addregister()
    {
        echo 'Hi';
        $fname = $_POST['fname'];
        echo $fname;
        $lname = $_POST['lname']; 
        $username = $_POST['username'];
        $password= $_POST['password'];
        usereModel::Add($fname,$lname,$username,$password);
        UserController::index();
    }

    // public function search()
    // {
    //     $key = $_GET['key'];
    //     $order_List = Order::search($key);
    //     require_once("./views/order/index_order.php");
    // }

    // public function deleteConform()

    // {
        

    //     $id=$_GET['id_order'];

    //     $order = Order::get($id);

    //     require_once("./views/order/deleteConform.php");

    // }

    // public function delete()

    // {
    

    //     $id=$_GET['id_order'];

    //     Order::delete($id);

    //     OrderController::index();

    // }
    
    // public function updateForm()
    // {
        
    //     $id=$_GET['id_order'];
    //     $order = Order::get($id);
    //     $staffList = staff::getAll();
    //     $customerList = customer::getAll();
    //     require_once("./views/order/updateForm.php");
    // }

    // public function update()
    // {
       
    //     $id_order=$_GET['id_order'];
        
    //     $date=$_GET['date'];
    //     $c_id=$_GET['c_id'];
    
    //     $s_id=$_GET['s_id'];
    //     $condition=$_GET['condition'];
    //     $เงื่อนไข=$_GET['เงื่อนไข'];
    //     $oldid=$_GET['oldid'];
    
    //     Order::Update($id_order,$date,$c_id,$s_id,$condition,$เงื่อนไข,$oldid);

    //     OrderController::index();
    // }
    


}
?>