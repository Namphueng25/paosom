<?php


if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];

}else
{
    $controller = 'paosom';
    $action = 'index';
}


    session_start();

    if (!$_SESSION['username']) {
        header("Location: index.php");
    } else {





?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style2.css">
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span ><img src="img/paosom.png" alt="User name" width="60px"></span>
                <div class="logo-text">
                    <span class="logo-title">PaoSom</span>
                    <span class="logo-subtitle">เป๋าของคุณ</span>
                </div>
               
            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="" href="?controller=paosom&action=index"><span class="icon home" aria-hidden="true"></span>เป๋าของฉัน</a>
                    
                </li>

                <li>
                    <a class="" href="?controller=store&action=newtransfer"><span class="icon document" ></span>โอนเงิน</a>
                    
                </li>

                <li>
                    <a class="" href="?controller=store&action=index"><span class="icon folder" ></span>ร้านค้าในโรงส้ม</a>
                    
                </li>
           
                <li>
                    <a class="" href="?controller=store&action=newtransecsion"><span class="icon folder" ></span>ประวัติการโอน</a>
                    
                </li>



          
            
        
         
       
            </ul>
       
            
            <ul class="sidebar-body-menu">
              
              
                    <ul class="cat-sub-menu">
                     
                    </ul>
                </li>

             
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><source srcset="img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="../../img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title"><?php echo $_SESSION['fname'];?></span>
                <span class="sidebar-user__subtitle"><?php echo $_SESSION['username'];?></span>
            </div>
        </a>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="../../img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a class="danger" href="logout.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
  <?php
require_once("routes.php");
?>
</nav>
    <!-- ! Main -->

    <!-- ! Footer -->
    
  </div>
</div>
<!-- Chart library -->
<script src="plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>


</body>

</html>
<?php } ?>
