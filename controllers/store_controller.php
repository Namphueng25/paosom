<?php class storeController
{
    public function index(){
         $storeList=storeModel::getAll();

        require_once('views/transfer/index.php');
    }

    public function report(){
        $id=$_SESSION['paosom_id'];
        $transferList = transferModel:: getnowbill();
        require_once('report.php');
    }

    public function search(){
        $key = $_GET['key'];
        $storeList = storeModel::search($key);
        require_once('views/transfer/index.php');
    }
  


   public function newtransecsion()
   {
       $paosom_id=$_SESSION['paosom_id'];
       $transferList = transferModel::get($paosom_id);

       $topupList = topupModel::get($paosom_id);
       require_once("./views/transfer/transecsion.php");
   }

   public function newtransfer()
   {
       
       $storeList = storeModel::getAll();
       require_once("./views/transfer/newtransfer.php");
   }


   public function update()
   {
       $paosom_id=$_SESSION['paosom_id'];    
       $store_id=$_GET['store_id'];
       $amount=$_GET['amount'];
     
      
   
       transferModel::Add($paosom_id,$store_id,$amount);
    
       storeModel::Update($store_id,$amount);
       paosomModel::Update($paosom_id,$amount);
       storeController::newtransfer();
   }
   

   

}?>