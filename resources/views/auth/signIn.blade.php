<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Css/form/signin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<body>
    <img class="background-img" src="https://ezcloud.vn/wp-content/uploads/2019/03/kinh-doanh-khach-san-1.jpg" />
    <div class="container">
        <header>Sign In to continue</header>
        @if (session('notification'))
        <div style="text-align: center" class="alert alert-danger">
            {{ session('notification')}}
        </div>
        @endif
        <form method="POST" action="">
            @csrf
            <div class="input-field" style="margin-top: 20px;">
                <input type="text" required="" name="email">
                <label>Email</label>
            </div>
            <div class="input-field">
                <input class="pswrd" type="password" required="" name="password">
                <span class="show">Show</span>
                <label>Password</label>
            </div>
            <div class="button">
                <div class="inner">
                </div>
                <button type="submit">Sign In</button>
            </div>
        </form>
        <div class=""><a href="{{route('quenmatkhau')}}">Forgot your password?</a></div>
        <div class="auth">
            Sign in with</div>
        <div class="links">
            <div class="facebook">
                <i class="fab fa-facebook-square"><span>Facebook</span></i>
            </div>
            <div class="google">
                <i class="fab fa-google-plus-square"><span>Google</span></i>
            </div>
        </div>
        <div class="signup">
            Haven't an account? <a href="{{route('signUp')}}">Sign Up now</a>
        </div>
    </div>
    <script>
        var input = document.querySelector('.pswrd');
        var show = document.querySelector('.show');
        show.addEventListener('click', active);

        function active() {
            if (input.type === "password") {
                input.type = "text";
                show.style.color = "#1DA1F2";
                show.textContent = "Hide";
            } else {
                input.type = "password";
                show.textContent = "Show";
                show.style.color = "#111";
            }
        }
    </script>
</body>

</html>