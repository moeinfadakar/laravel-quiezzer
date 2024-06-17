<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo asset('app.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('test.js')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('bootstrap.rtl.min.css')?>" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        :root{

            --row: <?php echo e($question->id); ?>


        }

body{

font-family: "B Yekan+" !important;
}
.font{
font-family: "B Yekan+" !important;

}
</style>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-primary text-white">
        <div class="container-fluid text-white">
          <a class="navbar-brand text-white font" href="#">دادگستر شرق </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 font" >
              <li class="nav-item">
                <a class="nav-link active text-white font" style=""aria-current="page" href="#">درباره ما </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white font" href="#">کتاب ها</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white font" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  شاخه های دیگر حقوق
                </a>
                <ul class="dropdown-menu text-white">
                  <li><a class="dropdown-item font fs-6" href="#">عمومی</a></li>
                  <li><a class="dropdown-item font fs-6" href="#">خصوصی</a></li>
                  <li><a class="dropdown-item font fs-6" href="#">بین الملل</a></li>
                </ul>
              </li>

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="جستجو" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">جستجو</button>
            </form>
          </div>
        </div>
      </nav>

<div class="row mt-4">
    <div class="row d-flex justify-content-center align-items-center mb-5 text-center">
        <h3 class="text-dark"><?php echo e($question->name); ?></h3>
    </div>


<div class="col-9 m-auto">

<div class="row">




</div>

<div class="row">




</div>

<div class="row">
<div class="col-4"> <h4 id="Timer">60 ثانیه</h4></div>
<div class="col-4 d-flex justify-content-center align-content-center"><h4>
                                                   سوال
                                       <?php echo e($question->id); ?>

                                                    از
                                      <?php echo e(Session::get("allme")); ?>  
</h4></div>
<div class="col-4 d-flex justify-content-end align-items-center "> <div class="progress" dir="ltr" style="width:<?php echo e(Session::get("allme")); ?>rem">
        <div dir="ltr" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($question->id); ?>rem  "></div>
    </div></div>


</div>



    <br>

<div class="row d-flex justify-content-center align-items-center">
    <form action="/send" method="head">
        <?php $__currentLoopData = $question->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input name="questionId" value="<?php echo e($question->id); ?>" type="hidden">
<input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
<div class="row-3 mx-auto d-flex justify-content-center align-content-center">
  <input type="radio" class="btn-check " name="userAnswer" value="<?php echo e($Answer->id); ?>" id="option<?php echo e($Answer->id); ?>" >
<label class="btn " for="option<?php echo e($Answer->id); ?>">
    <?php echo e($Answer->text); ?></label>

</div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<div class="row d-flex justify-content-center align-content-center mt-5">
    <div class="col-6 d-flex ">
         <button type="submit" id="moein" class="btn btn-danger" onclick="click()">ارسال</button>
    </div>


</div>

    </form>
</div>


</div>




</div>

<script>
    let timer = document.getElementById("Timer")

    let x = 60



let time = setInterval( function (){
  x--

timer.innerHTML = x + "ثانیه"

    if (x === 0){

      timer.innerHTML = "TIME OUT"
         clearInterval(time);
        document.getElementById("moein").click();
    }

} ,1000 )


    console.log(timer.innerText)

</script>


</body>
</html>

<?php /**PATH E:\laravel\quizzer\resources\views/test.blade.php ENDPATH**/ ?>