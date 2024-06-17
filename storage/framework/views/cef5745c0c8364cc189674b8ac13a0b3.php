<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo asset('app.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('bootstrap.rtl.min.css')?>" type="text/css">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">

<div class="col-12">
<form action="/lastProcess" method="HAED">
    <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
<h5 class="mb-4">گزینه درست رو انتخاب کن</h5>
    <select class="form-select col-6 m-auto" id="selector" aria-label="Default select example" name="selection">
        <option  id="option" value="1">گزینه 1</option>
        <option  id="option" value="2">گزینه2</option>
        <option  id="option" value="3">گزینه3</option>
      </select>


      <div class=" m-auto col-12 " id="inputPlace">
            <div class="form-floating mb-3 mt-5"  >
        <input type="text"  name="answer[]" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">گزینه 1 </label>
      </div>
    <div class="form-floating mb-3">
        <input type="text" name="answer[]"  class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput"> گزینه 2</label>
      </div>
    <div class="form-floating mb-3">
        <input type="text" name="answer[]"  class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput"> گزینه 3</label>
      </div>

<button class="btn btn-danger" type="submit">sub</button>

    </div>




</form>


<div class="row">
    <div class="col-6 mt-5">
        <div class="row"><button  onclick="RemoveClickBtn()" type="button" class="btn btn-danger">حذف کردن</button></div>
        <div class="row"><button onclick="AddClickBtn()" type="button" class="btn btn-success">اضافه کردن</button></div>
    </div>
</div>



</div>

        </div>
    </div>



</body>
</html>
<?php /**PATH E:\laravel\quizzer\resources\views/addAnswers.blade.php ENDPATH**/ ?>