<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <link rel="stylesheet" href="Css/user/user.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<style>
    #form-verify{
        height: 300px !important;
    }
</style>
<body>
    <img class="background-img" src="https://ezcloud.vn/wp-content/uploads/2019/03/kinh-doanh-khach-san-1.jpg" />
    <div id="form-verify"  class="container">
        <header>Xác nhận email</header>
        @if (session('notification'))
        <div style="text-align: center" class="alert alert-danger">
            {{ session('notification') }}
        </div>
        @endif
        <form method="POST" action="/verifychangepass">
            @csrf
            <p>{{$userEmail}}</p>
            <input type="text" hidden value="{{$userId}}" name="userId"/>
            <div class="input-field" style="margin-top: 20px;">
                <input type="text" required="" name="code">
                <label>Mã của bạn</label>
            </div>
            <div class="button">
                <div class="inner">
                </div>
                <button type="submit">Xác nhận</button>
            </div>
        </form>
    </div>
</body>
</html>
