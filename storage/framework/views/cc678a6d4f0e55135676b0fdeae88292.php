<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo asset('app.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('bootstrap.rtl.min.css')?>" type="text/css">

        <!-- Styles -->

        <style>

            :root{
                font-family: "B Yekan+" !important;

            }

            .text{
             font-family: "B Yekan+";
            }


        </style>

    </head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary text-white">
        <div class="container-fluid text-white">
          <a class="navbar-brand text-white font text" href="#">دادگستر شرق </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 font" >
              <li class="nav-item">
                <a href="#" class=" nav-link text-white font text">درباره ما</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white font text" href="#">کتاب ها</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white font text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <button class="btn btn-outline-light text" type="submit">جستجو</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="navbar bg-info" data-bs-theme="dark">
        <!-- Navbar content -->
       <marquee behavior="scroll" width="100%"  direction="right" class="fs-3 text-dark text-right text"> ازمون حقوقیت با ما ! نگران نباش</marquee>



      </div>

    <div class="the__selector__wrapper">
    <div class="background-one"s>
        <div class="link-container">
            <a class="link-one font text-decoration-none text" width="20" href="/test/1">شروع ازمون <svg  width="100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="m-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                </svg>
            </a>
        </div>
    </div>
    <div class="background-two link-container">
        <a class="link-two font text-decoration-none text" href="https://jhancock532.gi/">
            منتشر کردن
            <svg width="100"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="m-auto">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
            </svg>

        </a>
    </div>
    <div class="background-three link-container">
        <a class="link-three font text-decoration-none text" href="/panel">

            پنل مدیریت<svg width="100"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="m-auto">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
            </svg>
        </a>
    </div>
    </div>

</body>

</html>
<?php /**PATH E:\laravel\quizzer\resources\views/welcome.blade.php ENDPATH**/ ?>