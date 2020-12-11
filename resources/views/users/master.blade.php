<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mumcal Hotel</title>
    <!-- Link css cua user -->
    <link rel="stylesheet" href="Css/reset.css">
    <link rel="stylesheet" href="Css/user/master1.css">
    <link rel="stylesheet" href="Css/user/header.css">
    <link rel="stylesheet" href="Css/user/footer.css">
    <link rel="stylesheet" href="Css/user/homePage.css">
    <link rel="stylesheet" href="Css/user/ourRoom.css">
    <link rel="stylesheet" href="Css/user/showFreeRoom.css">
 
    <!-- Link bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- link cua icon trang web tren tab -->
    <link rel="shortcut icon" type="image/png" href="Img/favicon.ico">
    <!-- Link font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
    <div class="fullPage">
        
        @include('users.header')

       @yield('content')

        @include('users.footer') 
    </div>

</body>
<!-- Link js cua bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>

