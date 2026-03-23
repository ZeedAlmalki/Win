<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
    include './inc/db_close.php';

?>


<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>زيد المالكي 445160332</title>
</head>
<body>

    <div class="container">
    <div class="position-relative overflow-hidden p-3 p-md-5 text-center">
        <img src="images/tvtc.png">
      <h1 class="display-4 fw-normal">اربح مع زيد </h1>
      <p class="lead fw-normal">تبقى على فتح التسجيل</p>
      <h3 id="countdown">
           <p class="lead fw-normal">للسحب على نسخة مجانية</p>
      <a class="btn btn-outline-secondary" href="#">قريبا</a>
</div>

 <div class="position-relative text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3> الرجاء أدخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الأسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName"  value="<?php echo $firstName?>">
    <div  class="form-text error"> <?php echo $errors['firstNameError']?></div>
  </div>

    <div class="mb-3">
    <label for="lastName" class="form-label">الأسم الأخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName"  value="<?php echo $lastName?>">
    <div  class="form-text error"><?php echo $errors['lastNameError']?></div>
  </div>

    <div class="mb-3">
    <label for="email" class="form-label">البريد الإلكتروني</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1"  value="<?php echo $email?>">
    <div  class="form-text error"><?php echo $errors['emailError']?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">ارسال</button>
</form>
    </div>
  </div>
</div>

<div class="loader-con">


<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>




</form>
<!-- Button trigger modal -->
 <div class="d-grid gap-2 col-6 mx-auto">

<button type="button" id="winner" class="btn btn-primary">
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
الرابح في المسابقة
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
  <?php foreach($users as $user): ?>
        <h3 class="display-1 text-center modal-title" id="modalLabel">
              <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']); ?>
        </h3>
        <?php endforeach; ?>    </div>
      <div class="modal-footer">
      

  </div>
</div>
<!-- <div id="cards" class="row mb-5 pb-5">
    <div class="col-sm-6">
        <div class="card my-2 bg-light">
            <div class="card-body">
                <h5 class="card-title mb-1">
                  
                </h5>
                <p class="card-text text-muted mb-0">
                    <?php echo htmlspecialchars($user['email']); ?>
                </p>
            </div>
        </div>
    </div>
</div> -->
    <script src="./js/bootstrap.bundle.min.js" ></script>
<script src="./js/script.js"></script>
<script src="./js/loader.js"></script>
</body>
</html>