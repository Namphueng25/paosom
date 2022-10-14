
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Sign-up </title>
  <!-- Boootrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" href="style.css">


</head>

<body>
<form action="signin.php" method="post">

  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                  <form class="mx-1 mx-md-4">

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>

                      <div class="form-floating mb-3 w-100">
                        <input type="text" name="fname" class="form-control"  >
                        <label  >Your Name</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>

                      <div class="form-floating mb-3 w-100">
                        <input type="text" name="lname" class="form-control" >
                        <label >Your LastName</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-floating mb-3 w-100">
                        <input type="text" name="username" class="form-control" />
                        <label >Your Username</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-floating mb-3 w-100">
                        <input type="password" name="password" class="form-control" />
                        <label >Password</label>
                        <!-- <span class="password-info mt-2">
                          ต้องมีตัวอักษรผสมอยู่ในรหัส และมี 8 ตัว
                        </span> -->
                      </div>
                    </div>

                  

              
                 
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="hidden"name="controller"value="user"/><br><br>
                    <input type="submit" class="btn" name = 'submit ' value="SIGNIN">&nbsp; &nbsp;
                      <button type="submit" class="btn btn-primary btn-lg" href="">ย้อนกลับ</button>
                    </div>

                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;
                  <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/KU_Logo.png" class="img-fluid" alt="Sample image" width="200px" >

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  </form>
</body>






</html>
