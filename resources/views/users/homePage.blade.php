@extends('users/master')
@section('content')

<div class="content">
    <div class="content__top--bookRoom padding20">
        <div class="content__top--title">
        <center>
            <h3 class="hotel__name">welcome to mumcal hotel</h3>
            <h2 class="hotel__slogan">Experience the greatest for your holidays.</h2>
        </center>
        </div>
        <!-- Start form check rooms free -->
        <div class="form__checkRoom">
            <form action="{{ route('checkFreeRoom') }}" method="POST">
                @csrf
                <div class="form__infor">
                    <div class="time_to form__check" >
                        <label for="time_From">Check in</label>
                        <input type="date" name="time_from" id="time_from"  value="" min="">
                    </div>
                    <div class="time_to form__check">
                        <label for="time_to">Check out</label>
                        <input type="date" name="time_to" id="time_to"  value="" min="">
                    </div>
                    <div class="typeRoom form__check">
                        <label for="typeRoom">Type Room</label>
                        <select name="typeRoom" id="typeRoom">
                                <option value="all">All type rooms</option>
                            @if(isset($type_room))
                                @foreach($type_room as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            @endif
                            
                        </select>
                    </div>
            </div>
           
            <input type="submit" value="Book Now" class="form__btn--submit">
            </form>
        </div>
        <!-- End form check rooms free -->
    </div>
    <div class="content__aboutUs padding20">
        <div class="aboutUs__intro--infor">
            <div class="welcome">
                <h3>About Us</h3>
                <h6><b>Welcome to Mumcal Hotel in Le Huu Trac Street</b></h6>
                <p>We are wery happy when you come to us website, we always work with full energy to bring good things for customers.</p>
                <p>Come to us to experience the luxury rooms and the best customer care services in Da Nang.</p>
            </div>
            <div class="image">
                <img src="./Img/homePage/home-about.png" alt="">
            </div>
        </div>

        <div class="aboutUS__intro--service">
            <div class="service__wifi service">
                <li><img src="./Img/service/wifi.png" alt=""></li>
                <li class="service__name">Free Wi-Fi</li>
                <p class="service__desc">The massive investment in a hotel or resort requires constant reviews and control in order to make it a successful investment.</p>
            </div>
            <div class="service__pool service">
                <li><img src="./Img/service/pool.png" alt=""></li>
                <li class="service__name">Premium Pool</li>
                <p class="service__desc">Choose from 4 unique ready made concepts, let us help you create the concept perfect for you or let HCA.</p>
            </div>
            <div class="service__coffee service">
                <li><img src="./Img/service/coffee.png" alt=""></li>
                <li class="service__name">Coffee Maker</li>
                <p class="service__desc">HCA's Owner's Representation is taking care of just these important factors, may it be through regular site visits and spot checks.</p>
            </div>
          
            <div class="service__bar service">
                <li><img src="./Img/service/bar.png" alt=""></li>
                <li class="service__name">Bar Wine</li>
                <p class="service__desc">For properties with third party management companies, HCA Consultants will as well administer the terms and conditions.</p>
            </div>
            <div class="service__tv service">
                <li><img src="./Img/service/tv.png" alt=""></li>
                <li class="service__name">TV HD</li>
                <p class="service__desc">We provide a critical analysis of a hotel's marketing strategy, bench-marking it against industry and competitive practices.</p>
            </div>
            <div class="service__restaurant service">
                <li><img src="./Img/service/restaurant.png" alt=""></li>
                <li class="service__name">Restaurant</li>
                <p class="service__desc">A hotel and restaurant investment deserves careful and market oriented financial planning and projections.</p>
            </div>
        </div>
    </div>
    <div class="content__ourRoom ">
        <div class="ourRoom__intro--typeRoom">
            <div class="intro__typeRoom--title">
                <center>
                    <p>Our Room</p>
                    <h1>Explore Our Hotel</h1>
                </center>
            </div>
            <div class="intro__typeRoom--image">
                <div class="typeRoom__image--cart">
                    <img src="./Img/typeRoom/hr-1.jpg" alt="">
                    <section class="infor__room">
                        <h1>Deluxe Room</h1>
                        <span>94$</span>/day
                    </section>
                    <section class="booking">
                        <a href="">Booking Now</a>
                        <span><hr></span>
                    </section>                </div>
                <div class="typeRoom__image--cart">
                    <img src="./Img/typeRoom/hr-2.jpg" alt="">
                    <section class="infor__room">
                        <h1>Deluxe Room</h1>
                        <span>94$</span>/day
                    </section>
                    <section class="booking">
                        <a href="">Booking Now</a>
                        <span><hr></span>
                    </section>
                </div>
                <div class="typeRoom__image--cart">
                    <img src="./Img/typeRoom/hr-3.jpg" alt="">
                    <section class="infor__room">
                        <h1>Deluxe Room</h1>
                        <span>94$</span>/day
                    </section>
                    <section class="booking">
                        <a href="">Booking Now</a>
                        <span><hr></span>
                    </section>                </div>
                <div class="typeRoom__image--cart">
                    <img src="./Img/typeRoom/hr-4.jpg" alt="">
                    <section class="infor__room">
                        <h1>Deluxe Room</h1>
                        <span>94$</span>/day
                    </section>
                    <section class="booking">
                        <a href="">Booking Now</a>
                        <span><hr></span>
                    </section>                
                </div>
            </div>
            <div class="intro__typeRoom--advance padding20">
                <h3>Planning your next trip? Save up to 25% on your hotel</h3>
                <a href=""><button>Explorer more</button></a>
            </div>
        </div>
        <div class="ourRoom__intro--comments padding20">
            <img src="./Img/comment/background.jpg" alt="">
            <div class="show__comments--customer">
                <h2 class="comment__title">
                    What do customers say about us?
                </h2>
                <div class="slideShow__container">
                    <div class="all__comment--customer fade">
                        <div class="vote">
                            <h5>Detailed Review</h5>
                            <h6>*****</h6>
                        </div>
                        <p class="detail__comment">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.                    </p>
                        <h3>Naha</h3>
                        <br>
                        <span class="date__comment">2019/12/23</span><br>
                        <span>01</span>
                        <span class="number__comment">01</span>
                    </div>
                    <div class="all__comment--customer fade">
                        <div class="vote">
                            <h5>Detailed Review</h5>
                            <h6>*****</h6>
                        </div>
                        <p class="detail__comment">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.                    </p>
                        <h3>Jacky</h3>
                        <br>
                        <span class="date__comment">2020/08/15</span><br>
                        <span>01</span>
                        <span class="number__comment">02</span>
                    </div>
                    <div class="all__comment--customer fade">
                        <div class="vote">
                            <h5>Detailed Review</h5>
                            <h6>*****</h6>
                        </div>
                        <p class="detail__comment">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.                    </p>
                        <h3>Newbies</h3>
                        <br>
                        <span class="date__comment">2020/07/13</span><br>
                        <span>01</span>
                        <span class="number__comment">03</span>
                    </div>
                    <div class="all__comment--customer fade">
                        <div class="vote">
                            <h5>Detailed Review</h5>
                            <h6>*****</h6>
                        </div>
                        <p class="detail__comment">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.                    </p>
                        <h3>Share</h3>
                        <br>
                        <span class="date__comment">2019/09/03</span>
                        <br>              
                        <span>01</span>
                        <span class="number__comment">04</span>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                  
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <span class="dot" onclick="currentSlide(4)"></span> 

                </div>
                            
                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                    showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                    showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("fade");
                    var dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                    }
                </script>
            </div>
        </div>
    </div>
    <div class="content__reason">
        <div class="content__reason--why">
            <center>
                <h3>why choose us</h3>
                <p>Contact us now to get the lastest deals and for the next booking</p>
                <a href=""><button>Booking Now</button></a>
            </center>
        </div>
    </div>
    <div class="content__gallery ">
        <div class="content__gallery--infor padding20">
            <div class="gallery__infor--title">
                <p>Our gallery</p>
                <h3>Explore The Most Beautiful In The Hotel</h3>
            </div>
            <div class="gallery__infor--description">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Sunt in culpa qui officia deserunt mollit anim.</p>
                <a href=""><button>View Gallery <i class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
        <div class="content__gallery--image">
            <div class="image">
                <img src="./Img/gallery/gallery-1.jpg" alt="">
            </div>
            <div class="image">
                <img src="./Img/gallery/gallery-2.jpg" alt="">
            </div>
            <div class="image">
                <img src="./Img/gallery/gallery-3.jpg" alt="">
            </div>
            <div class="image">
                <img src="./Img/gallery/gallery-4.jpg" alt="">
            </div>
            
            
        </div>
    </div>

</div>
@endsection