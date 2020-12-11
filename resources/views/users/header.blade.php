
<div class="header">
    <div class="header__top padding20">
        <div class="header__top--infor">
            <ul>
                <li><i class="fas fa-map-marker-alt"></i>  99 To Hien Thanh, ST, DN</li>
                <li><i class="fas fa-phone"></i> (+84) 918 203 106</li>
            </ul>
        </div>
        <div class="header__top--accept">
            <ul>
                <!-- Test dung bootstrap de code cho phan account -->
                <!-- <li><i class="fas fa-user-circle"></i>  Account</li> -->
                @if(Auth::user())
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Information</a>
                            <a class="dropdown-item" href="{{ route('signOut') }}">Sign Out</a>
                            </div>
                        </div>
                    </li>
                @else
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('signIn') }}">Sign In</a>
                                <a class="dropdown-item" href="{{ route('signUp') }}">Register</a>
                            </div>
                        </div>
                    </li>
                @endif

                <!-- Xong phan test cho account -->
       
            </ul>
        </div>
    </div>
    <div class="header__content">
        <div class="header__content--sidebar">
            <a href=""><img src="./Img/logoPNG.png" alt="" style="height:8.8rem; width: 15rem;"></a>
            <ul>
                <a href="{{ route('homePage') }}"><li class="link">Home</li></a>
                <a href="{{ route('ourRoom') }}"><li class="link">Rooms</li></a>
                <a href=""><li class="link">About Us</li></a>
                <a href=""><li class="link">Page</li></a>
                <a href=""><li class="link">New</li></a>
                <a href=""><li class="link">Contact</li></a>
            </ul>
        </div>
    </div>
</div>