<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Css/user/user.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<body>
    <img class="background-img" src="https://ezcloud.vn/wp-content/uploads/2019/03/kinh-doanh-khach-san-1.jpg" />
    <div class="container" style="height: 300px">
        <header>Quên mật khẩu</header>
        @if (session('notification'))
        <div style="text-align: center" class="alert alert-danger">
            {{ session('notification') }}
        </div>
        @endif
        <form method="POST" action="/forgotPass">
            @csrf
            <div class="input-field" style="margin-top: 20px;">
                <input type="text" required="" name="email">
                <label>Email</label>
            </div>
            <div class="button">
                <div class="inner">
                </div>
                <button type="submit">Xác nhận</button>
            </div>
        </form>
        <div class="">Quay lại <a href="{{route('signIn')}}">Đăng nhập</a></div>
    </div>
</body>
</html>
