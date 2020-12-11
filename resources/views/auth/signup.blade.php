<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Css/form/signup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <img class="background-img" src="https://ezcloud.vn/wp-content/uploads/2019/03/kinh-doanh-khach-san-1.jpg" />
    <div class="container-signup">
		<header>Đăng ký</header>
		<form method="POST" action="/sign-up">
            @csrf
            <div class="flex-container">
                <div class="input-field" >
                    <input type="text" required="" name="name">
                    <label>Họ và tên</label>
                </div>
                <div class="input-field" >
                    <select class="select-style-signup" style="margin-left: 20px; width: 220px; height: 42px;" name="gender">
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>
                </div>
            </div>
            <div class="flex-container">
                <div class="input-field">
                   <input type="date" required="" name="dateOfBirth">
                </div>
                <div class="input-field">
                    <input type="text" required="" class="input-style-signup" name="email">
                    <label>Email</label>
                </div>
            </div>
            <div class="flex-container">
                <div class="input-field">
                    <input type="text" required="" name="address">
                    <label>Địa chỉ</label>
                </div>
                <div class="input-field">
                    <input type="text" required="" class="input-style-signup" name="phone">
                    <label>Số điện thoại</label>
                </div>
            </div>
                <div class="input-field">
                    <input class="pswrd" type="password" required="" name="pass">
                    <span class="show">Hiện</span>
                    <label>Mật khẩu</label>
                </div>
                <div class="input-field">
                    <input class="pswrd" type="password" required="" name="confirmPass">
                    <span class="show">Hiện</span>
                    <label>Nhập lại mật khẩu</label>
                </div>
			<div class="button" >
				<div class="inner" >
                </div>
                <button type="submit" >Đăng ký</button>
			</div>
        </form>
	</div>
    <script>
        var input = document.querySelector('.pswrd');
        var show = document.querySelector('.show');
        show.addEventListener('click', active);
        function active(){
        if(input.type === "password"){
            input.type = "text";
            show.style.color = "#1DA1F2";
            show.textContent = "Ẩn";
        }else{
            input.type = "password";
            show.textContent = "Hiện";
            show.style.color = "#111";
        }
        }
    </script>
</body>
</html>
