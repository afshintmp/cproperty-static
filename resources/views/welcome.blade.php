<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main-style.css')}}">

    <link rel="stylesheet" href="{{asset('font/font-face.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <link rel="stylesheet" href="{{asset('css/mob-index.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

</head>
<body class="home-page">

<div id="nav-menu" style="z-index: 20">
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-auto ">
                <div class="logo align-items-center">
                    <img src="{{asset('img/Logo 1.png')}}" height="31" width="159"/>
                </div>
            </div>
            <div class="d-none d-md-block col">
                <div>
                    <ul class="in-top menu-list">
                        <li class="menu-active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Cities</a>
                        </li>
                        <li>
                            <a href="#">Articles</a>

                        </li>
                        <li>
                            <a href="#">Professionals</a>

                        </li>

                    </ul>


                </div>
            </div>
            <div class="float-end d-none d-md-block col-auto ">
                <div>
                    <button class="c-btn-one h-40 img-control">

                        <img src="{{asset('img/search-normal.png')}}"></button>

                </div>
            </div>
        </div>
    </div>
</div>


<div id="main-menu" style="display: none">
    <div class="container">

        <div class="menu-wrapper d-flex ">
            <div>
                <div class="logo">
                    <img src="{{asset('img/Logo 1.png')}}" height="31" width="159"/>
                </div>
            </div>
            <div class="d-none d-md-block">
                <div>
                    <ul id="" class="in-top menu-list">
                        <li class="menu-active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Cities</a>
                        </li>
                        <li>
                            <a href="#">Articles</a>

                        </li>
                        <li>
                            <a href="#">Professionals</a>

                        </li>

                    </ul>


                </div>
            </div>
            <div class="float-end d-none d-md-block">
                <div>
                    <button class="c-btn-one h-40 img-control">

                        <img src="{{asset('img/search-normal.png')}}"/></button>
                    <button class="c-btn-one">
                        login/sign in
                    </button>
                </div>
            </div>

            <span class="bar-menu d-md-none" onclick="collapseMenu()">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.125 10.0104H3.875C3.34542 10.0104 2.90625 9.57125 2.90625 9.04167C2.90625 8.51208 3.34542 8.07292 3.875 8.07292H27.125C27.6546 8.07292 28.0938 8.51208 28.0938 9.04167C28.0938 9.57125 27.6546 10.0104 27.125 10.0104Z"
                            fill="white"/>
                        <path
                            d="M27.125 16.4688H3.875C3.34542 16.4688 2.90625 16.0296 2.90625 15.5C2.90625 14.9704 3.34542 14.5312 3.875 14.5312H27.125C27.6546 14.5312 28.0938 14.9704 28.0938 15.5C28.0938 16.0296 27.6546 16.4688 27.125 16.4688Z"
                            fill="white"/>
                        <path
                            d="M27.125 22.9271H3.875C3.34542 22.9271 2.90625 22.4879 2.90625 21.9583C2.90625 21.4288 3.34542 20.9896 3.875 20.9896H27.125C27.6546 20.9896 28.0938 21.4288 28.0938 21.9583C28.0938 22.4879 27.6546 22.9271 27.125 22.9271Z"
                            fill="white"/>
                        </svg>

            </span>


        </div>
    </div>
</div>

<div class="mob-menu" style="display: none">

    <div class="position-relative h-100">
        <div class="mob-menu-close" onclick="closeMenu()">
            <svg width="44" height="44" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.7489 12.1037L6.15203 16.7006L4.91531 15.4639L9.51221 10.867L4.91531 6.27008L6.1287 5.05668L10.7256 9.65358L15.3225 5.05668L16.5592 6.29341L11.9623 10.8903L16.5592 15.4872L15.3458 16.7006L10.7489 12.1037Z"
                    fill="#4A5568"/>
            </svg>

        </div>
        <ul class="mob-menu-ul">
            <li class="menu-active"><a href="">home</a></li>
            <li><a href="">Cities </a></li>
            <li><a href="">Professionals</a></li>
            <li><a href="">Articles</a></li>
        </ul>

    </div>
</div>
<style>
    .main-cover {
        position: absolute;
        z-index: 10;
    }

    .swiper {
        width: 100%;
        /* height: 300px; */
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .mySwiper2 {
        height: 100%;
        width: 100%;
    }

    .mySwiper {
        height: 100vh;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .mySwiper .swiper-slide {
        width: 25%;
        height: 100%;
      
    }

    .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
    }

    .main-slide .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .textSwiper {
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100vh;
        z-index: 15;
        color: #fff;
    }

    .picSwiper {
        height: 100vh;
    }
    .vertical-controller{
        margin-top: 50vh;
        transform: translateY(-50%);
    }
    .slider-info{
        padding-left: 118px;
    }
    .slider-info h3 > span{
        color: #B3865D!important;
    }
    .slider-info h3{
        color: #fff!important;
        
        font-family: 'mazzard_m_bold';
        font-size: 53px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        text-transform: capitalize;
    }
    .slider-info p{
        color: #FFF!important;
        font-family: Inter;
        font-size: 23px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .swiper-pagination.swiper-pagination-fraction.swiper-pagination-horizontal {
  display: inline-block;
  width: unset;
  margin-left: 60px;
  color: #FFF;
  font-family: Arial;
  font-size: 31px;
  font-style: normal;
  font-weight: 400;
  line-height: 154%;
 
}
.swiper-pagination-current {
  color: #FFF;
  font-family: Arial;
  font-size: 31px;
  font-style: normal;
  font-weight: 400;
  line-height: 154%;
  vertical-align: top;

}
.swiper-pagination-total {
  color: #FFF;
  font-family: Arial;
  font-size: 47px;
  font-style: normal;
  font-weight: 700;
  line-height: 154%;
  vertical-align: top;
 

}
.swiper-button-next, .swiper-button-prev{
    position: relative;
}
.swiper-pagination {
  position: unset;
  text-align: left;
}
.cursors--{
    position: absolute;
    bottom: 45px;
    left: 0;
}


.swiper-button-next,
.swiper-button-prev{
    display: inline-block;
    margin-left: 18px;
    left: unset;
    right: unset;
    top: unset;
    text-align: center
}
.swiper-button-next::after, 
.swiper-button-prev::after{
    content: " "!important;
} 
.mouse-icon{
    position: absolute;
    right: 81px;
    bottom: 81px;
    width: unset!important;
    height: unset!important;
    z-index: 15;
}
</style>
<div class="main-slide" style="width: 100%;direction: ltr">
    <img src="{{asset('img/IMG.png')}}" class="main-cover" alt="">
    <img src="{{asset('img/vuesax-outline-mouse.svg')}}" class="mouse-icon" alt="">
    <div class="picSwiper">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('img/main-slide/new.png')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('img/main-slide/Unity_SouthLangley_Aerial_WIDE_Website-min-scaled-1.webp')}}"
                         alt="">

                </div>

            </div>
           
        </div>
    </div>
    <div class="textSwiper">
        <div thumbsSlider="" class="swiper mySwiper ">
            <div class="cursors--">
               
                <div class="swiper-pagination"></div>
                
                <div class="swiper-button-prev">
                        <img src="{{asset('img/vuesax-outline-arrow-left.svg')}}" alt="">


                </div>
                <div class="swiper-button-next">
                    <img src="{{asset('img/vuesax-outline-arrow-right.svg')}}" alt="">


                </div>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="vertical-controller">
                        <div class="slider-info">
                            <h3>
                               <span>ELEMENTS</span> 
                            </h3>
                            <p>
                                Experience refined European living in our latest apartment condo, perfectly situated in
                                the
                                scenic and vibrant neighbourhood of Burquitlam. Register your interest today and elevate
                                your
                                expectations for a new standard of modern living at ELEMENTS
                            </p>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="vertical-controller">
                        <div class="slider-info">
                            <h3>
                                <span> Unity </span> South Langley
                            </h3>
                            <p>
                                Unity South Langley welcomes you to the vibrant and flourishing neighbourhood of
                                Downtown
                                Langley! This exquisite new condo development features five floors of stunning
                                residencies
                                with
                                commercial retail space below and an array of lifestyle amenities for you and your
                                guests to
                                enjoy. A bright, sleek, modern stand-out development, destined to catch eyes and turn
                                heads.
                                Located just steps from the city’s core, Unity South Langley is truly a central hub
                                connecting
                                you to shopping malls, entertainment, and the rest of the Lower Mainland via the rapidly
                                developing Surrey-Langley Skytrain.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>

        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 0,
            slidesPerView: 1,
            // freeMode: true,

        });
        var swiper = new Swiper(".mySwiper", {
            loop: true,

            watchSlidesProgress: true, thumbs: {
                swiper: swiper2,
            },
            pagination: {
            el: ".swiper-pagination",
            type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</div>
<script>
    // var swiper = new Swiper(".mySwiper", {});
</script>
<style>
    .main-loc-cart a{
        text-decoration: none
    }
    .img-w-unset .icon{
        width: unset!important;
    }
    .loc-cart-info > img{
        width: unset!important;
    } 
    .latest-project-slider .swiper-slide {
      width: 22%;
      padding-right: 20px;
      padding-left: 20px;
    }
    .latest-project-slider .swiper-slide-active{
        width: 34%
    }
    .latest-project-slider .swiper-slide-active .loc-cart-small{
        display: none!important
    }
    .latest-project-slider .swiper-slide-active .main-loc{
        display: block!important;
        
    }
    .latest-project-slider{
        overflow: initial!important
    }
    .navigator-- {
        position: absolute;
        top: 15px;
        right: 0;
    }
</style>
<div class="latest-project" style="background-image: url('assets/img/Mask group.png')">
 
    <div class="container">

        <div class="block-title text-center mb-61 mob-mb-31">
            <div class="text-center  ">
                <h3 class="position-relative">
                    latest projects
                    <span class="block-title-vector">
                        <img src="{{asset('img/Vector.png')}}" height="23" width="37"/>
                    </span>
                </h3>

            </div>
            <span class="text-center bloc-title-description">
            commonly used in the graphic, print, and publishing industries for
            </span>
        </div>





            <div class="swiper mySwiper3 latest-project-slider">
                <div class="navigator--">
                    <div class="swiper-button-next">
                        <img src="{{asset('img/vuesax-outline-arrow-right-small.svg')}}" alt="">

                    </div>
                    <div class="swiper-button-prev">
                        <img src="{{asset('img/vuesax-outline-arrow-right--small.svg')}}" alt="">

                    </div>
                </div>




                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                  
                    <div class=" main-loc" style="width: 100%">
                        <div class="c-cart-shadow main-loc-cart">
                            
                            <div class="main-loc-cart-img" style="background-image: url({{asset('img/main-slide/new.png')}});">
                                <!-- <img class="h-100" src="assets/img/sing.png"/> -->
                            </div>
        
                            <div class="p-s-e-23">
                                <h2 class="c-card-title">
                                    <img src="{{asset('img/Vectorloc.svg')}}" height="20" style="width: unset!important;display:inline-block">
                                    Vancouver
                                </h2>
                                <p class="mb-0 color-97 main-loc-info">
                                    Experience refined European living in our latest apartment condo, perfectly situated in the scenic and vibrant neighbourhood of Burquitlam. Register your interest today and elevate your expectations for a new standard of modern living at ELEMENTS. 
                                </p>
        
                            </div>
                            <div class="p-s-e-23">
                                <p class=" c-cart-price color-green d-inline-block mb-0">
                                    Mid 500's
                                    -
                                    1.260's
                                    
                                </p>
        
                                <div class="clear-fix"></div>
                            </div>
                    
        
                        </div>
                    </div>
                  
                    <div class="loc-cart loc-cart-small " style="display:none;margin-top:81px;width: 100%">
    
                        <img src="{{asset('img/Rectangle 4364.png')}}" height="294" width="248"/>
    
    
                        <div class="loc-cart-info ">
    
                            <img src="{{asset('img/VectorWhite.png')}}" height="39" class="icon" width="33"/>
    
                            <p>New York</p>
                        </div>
                    </div>
                 
               
                </div>


                <div class="swiper-slide">
                    
                    <div class="main-loc" style="display:none;width: 100%">
                        <div class="c-cart-shadow main-loc-cart">
                            <a href="">
                            <div class="main-loc-cart-img" style="background-image: url({{asset('img/main-slide/Unity_SouthLangley_Aerial_WIDE_Website-min-scaled-1.webp')}});">
                                <!-- <img class="h-100" src="assets/img/sing.png"/> -->
                            </div>
        
                            <div class="p-s-e-23">
                                <h2 class="c-card-title">
                                    <img src="{{asset('img/Vectorloc.svg')}}" height="20" style="width: unset!important;display:inline-block">
                                    Vancouver
                                </h2>
                                <p class="mb-0 color-97 main-loc-info">
                                    Experience refined European living in our latest apartment condo, perfectly situated in the scenic and vibrant neighbourhood of Burquitlam. Register your interest today and elevate your expectations for a new standard of modern living at ELEMENTS. 
                                </p>
        
                            </div>
                            <div class="p-s-e-23">
                                <p class=" c-cart-price color-green d-inline-block mb-0">
                                    Mid 500's
                                    -
                                    1.260's
                                    
                                </p>
        
                                <div class="clear-fix"></div>
                            </div>
                        </a>
        
                        </div>
                    </div>
                    
                    <div class="loc-cart loc-cart-small " style="margin-top:81px;width: 100%">
    
                        <img src="{{asset('img/main-slide/Unity_SouthLangley_Aerial_WIDE_Website-min-scaled-1.webp')}}" height="294" width="248"/>
    
    
                        <div class="loc-cart-info ">
    
                            <img src="{{asset('img/VectorWhite.png')}}" height="39" class="icon" width="33"/>
    
                            <p>Vancouver</p>
                        </div>
                    </div>
                  
                </div>




                <div class="swiper-slide">
                    
                    <div class="main-loc" style="display:none;width: 100%">
                        <div class="c-cart-shadow main-loc-cart">
                            <a href="">
                            <div class="main-loc-cart-img" style="background-image: url({{asset('img/main-slide/new.png')}});">
                                <!-- <img class="h-100" src="assets/img/sing.png"/> -->
                            </div>
        
                            <div class="p-s-e-23">
                                <h2 class="c-card-title">
                                    <img src="{{asset('img/Vectorloc.svg')}}" height="20" style="width: unset!important;display:inline-block">
                                    Vancouver
                                </h2>
                                <p class="mb-0 color-97 main-loc-info">
                                    Experience refined European living in our latest apartment condo, perfectly situated in the scenic and vibrant neighbourhood of Burquitlam. Register your interest today and elevate your expectations for a new standard of modern living at ELEMENTS. 
                                </p>
        
                            </div>
                            <div class="p-s-e-23">
                                <p class=" c-cart-price color-green d-inline-block mb-0">
                                    Mid 500's
                                    -
                                    1.260's
                                    
                                </p>
        
                                <div class="clear-fix"></div>
                            </div>
                        </a>
        
                        </div>
                    </div>
                    
                    <div class="loc-cart loc-cart-small " style="margin-top:81px;width: 100%">
    
                        <img src="{{asset('img/Rectangle 4364.png')}}" height="294" width="248"/>
    
    
                        <div class="loc-cart-info ">
    
                            <img src="{{asset('img/VectorWhite.png')}}" height="39" class="icon" width="33"/>
    
                            <p>New York</p>
                        </div>
                    </div>
                  
                </div>
                

                <div class="swiper-slide">
                    
                    <div class="main-loc" style="display:none;width: 100%">
                        <div class="c-cart-shadow main-loc-cart">
                            <a href="">
                            <div class="main-loc-cart-img" style="background-image: url({{asset('img/main-slide/new.png')}});">
                                <!-- <img class="h-100" src="assets/img/sing.png"/> -->
                            </div>
        
                            <div class="p-s-e-23">
                                <h2 class="c-card-title">
                                    <img src="{{asset('img/Vectorloc.svg')}}" height="20" style="width: unset!important;display:inline-block">
                                    Vancouver
                                </h2>
                                <p class="mb-0 color-97 main-loc-info">
                                    Experience refined European living in our latest apartment condo, perfectly situated in the scenic and vibrant neighbourhood of Burquitlam. Register your interest today and elevate your expectations for a new standard of modern living at ELEMENTS. 
                                </p>
        
                            </div>
                            <div class="p-s-e-23">
                                <p class=" c-cart-price color-green d-inline-block mb-0">
                                    Mid 500's
                                    -
                                    1.260's
                                    
                                </p>
        
                                <div class="clear-fix"></div>
                            </div>
                        </a>
        
                        </div>
                    </div>
                    
                    <div class="loc-cart loc-cart-small " style="margin-top:81px;width: 100%">
    
                        <img src="{{asset('img/Rectangle 4364.png')}}" height="294" width="248"/>
    
    
                        <div class="loc-cart-info ">
    
                            <img src="{{asset('img/VectorWhite.png')}}" height="39" class="icon" width="33"/>
    
                            <p>New York</p>
                        </div>
                    </div>
                  
                </div>




                <div class="swiper-slide">
                    
                    <div class="main-loc" style="display:none;width: 100%">
                        <div class="c-cart-shadow main-loc-cart">
                            <a href="">
                            <div class="main-loc-cart-img" style="background-image: url({{asset('img/main-slide/new.png')}});">
                                <!-- <img class="h-100" src="assets/img/sing.png"/> -->
                            </div>
        
                            <div class="p-s-e-23">
                                <h2 class="c-card-title">
                                    <img src="{{asset('img/Vectorloc.svg')}}" height="20" style="width: unset!important;display:inline-block">
                                    Vancouver
                                </h2>
                                <p class="mb-0 color-97 main-loc-info">
                                    Experience refined European living in our latest apartment condo, perfectly situated in the scenic and vibrant neighbourhood of Burquitlam. Register your interest today and elevate your expectations for a new standard of modern living at ELEMENTS. 
                                </p>
        
                            </div>
                            <div class="p-s-e-23">
                                <p class=" c-cart-price color-green d-inline-block mb-0">
                                    Mid 500's
                                    -
                                    1.260's
                                    
                                </p>
        
                                <div class="clear-fix"></div>
                            </div>
                        </a>
        
                        </div>
                    </div>
                    
                    <div class="loc-cart loc-cart-small " style="margin-top:81px;width: 100%">
    
                        <img src="{{asset('img/Rectangle 4364.png')}}" height="294" width="248"/>
    
    
                        <div class="loc-cart-info ">
    
                            <img src="{{asset('img/VectorWhite.png')}}" height="39" class="icon" width="33"/>
    
                            <p>New York</p>
                        </div>
                    </div>
                  
                </div>




                </div>
                
              </div>
        
        <script>
            var swiper = new Swiper(".mySwiper3", {
            //   loop: true,
              watchSlidesProgress: true,
              slidesPerView: "auto",
              spaceBetween: 0,
            
              navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
              },
            });
          </script>


       
       
    </div>
</div>

<div class="building-new-home">

    <div class="building-new-home-cart" style="background-image: url({{asset('img/rectangle-9733.png')}});">
        <div class="position-relative h-100">
            <!-- <img src="public//images/rectangle-9733.png"/> -->
            <div class="building-new-home-cart-cover"></div>
            <div>
                <span class="building-new-home-cart-num">01</span>
                <div class="building-new-home-cart-text">
                    <p class="building-new-home-cart-p-large">
                        <span class="color-brown">Building</span>
                        new home

                        dreamsTM
                    </p>
                    <p class="building-new-home-cart-p-small">
                        Find your new construction home
                    </p>
                </div>

            </div>
        </div>
    </div>
 
    <div class="building-new-home-cart" style="background-image: url({{asset('img/rectangle-9733.png')}});">
        <div class="position-relative h-100">
            <!-- <img src="public//images/rectangle-9733.png"/> -->
            <div class="building-new-home-cart-cover"></div>
            <div>
                <span class="building-new-home-cart-num">01</span>
                <div class="building-new-home-cart-text">
                    <p class="building-new-home-cart-p-large">
                        <span class="color-brown">Building</span>
                        new home

                        dreamsTM
                    </p>
                    <p class="building-new-home-cart-p-small">
                        Find your new construction home
                    </p>
                </div>

            </div>
        </div>
    </div>
  
    <div class="building-new-home-cart" style="background-image: url({{asset('img/rectangle-9733.png')}});">
        <div class="position-relative h-100">
            <!-- <img src="public//images/rectangle-9733.png"/> -->
            <div class="building-new-home-cart-cover"></div>
            <div>
                <span class="building-new-home-cart-num">01</span>
                <div class="building-new-home-cart-text">
                    <p class="building-new-home-cart-p-large">
                        <span class="color-brown">Building</span>
                        new home

                        dreamsTM
                    </p>
                    <p class="building-new-home-cart-p-small">
                        Find your new construction home
                    </p>
                </div>

            </div>
        </div>
    </div>
   
    <div class="building-new-home-cart" style="background-image: url({{asset('img/rectangle-9733.png')}});">
        <div class="position-relative h-100">
            <!-- <img src="public//images/rectangle-9733.png"/> -->
            <div class="building-new-home-cart-cover"></div>
            <div>
                <span class="building-new-home-cart-num">01</span>
                <div class="building-new-home-cart-text">
                    <p class="building-new-home-cart-p-large">
                        <span class="color-brown">Building</span>
                        new home

                        dreamsTM
                    </p>
                    <p class="building-new-home-cart-p-small">
                        Find your new construction home
                    </p>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="dreamstm">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 ps-5 pe-5">

                <img src="{{asset('img/Group 1000004577.png')}}" class="w-100"/></div>
            <div class="col-lg-6 col-12  d-flex align-items-center p-5">
                <div class="align-items-center">
                    <h2 class="dreamstm-title">
                        Building new home dreamsTM
                    </h2>
                    <p class="dreamstm-prag">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>

            </div>
        </div>
    </div>

</div>
<?php if (0 == 1) { ?>
 <div class="locations">
    <div class="container ">
        <div class="block-title text-center mb-61 mob-mb-10">
            <div class="text-center  ">
                <h3 class="position-relative">
                    latest projects
                    <span class="block-title-vector">
                    <img src="assets/img/Vector.png" height="23" width="37"/>
                </span>
                </h3>

            </div>
            <span class="text-center bloc-title-description">
        commonly used in the graphic, print, and publishing industries for
        </span>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="locations-cart position-relative">

                            <img src="assets/img/Rectangle 18.png"/>
                            <div class="layer"></div>
                            <div class="locations-cart-info">
                                <h3 class="location-cart-title">
                                    langley
                                </h3>
                                <p class="location-cart-p">
                                    commonly used in the graphic
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-6 ">
                        <div class="locations-cart position-relative">

                            <img src="assets/img/Rectangle 18.png"/>
                            <div class="layer"></div>
                            <div class="locations-cart-info">
                                <h3 class="location-cart-title">
                                    langley
                                </h3>
                                <p class="location-cart-p">
                                    commonly used in the graphic
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="locations-cart position-relative">

                            <img src="assets/img/Rectangle 18.png"/>
                            <div class="layer"></div>
                            <div class="locations-cart-info">
                                <h3 class="location-cart-title">
                                    langley
                                </h3>
                                <p class="location-cart-p">
                                    commonly used in the graphic
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="row h-100">
                    <div class="col-12  h-100 pb-c">
                        <div class="locations-cart position-relative h-100">

                            <img src="assets/img/Rectangle 18.png"/>
                            <div class="layer"></div>
                            <div class="locations-cart-info">
                                <h3 class="location-cart-title">
                                    langley
                                </h3>
                                <p class="location-cart-p">
                                    commonly used in the graphic
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="row">

                    <div class="col-6 ">
                        <div class="locations-cart position-relative">

                            <img src="assets/img/Rectangle 18.png"/>
                            <div class="layer"></div>
                            <div class="locations-cart-info">
                                <h3 class="location-cart-title">
                                    langley
                                </h3>
                                <p class="location-cart-p">
                                    commonly used in the graphic
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="locations-cart position-relative">

                            <img src="assets/img/Rectangle 18.png"/>
                            <div class="layer"></div>
                            <div class="locations-cart-info">
                                <h3 class="location-cart-title">
                                    langley
                                </h3>
                                <p class="location-cart-p">
                                    commonly used in the graphic
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div class="locations-cart position-relative">

                            <img src="assets/img/Rectangle 18.png"/>
                            <div class="layer"></div>
                            <div class="locations-cart-info">
                                <h3 class="location-cart-title">
                                    langley
                                </h3>
                                <p class="location-cart-p">
                                    commonly used in the graphic
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?php } ?>


<footer>
    <div class="back-17 mt-4">
        <div class="container">
            <div class="footer-menu d-flex justify-content-between">
                <div>
                    <img src="assets/img/Logo 2.png" alt="">
                </div>
                <div class="d-none d-md-block">
                    <div>
                        <ul class="in-footer menu-list">
                            <li class="menu-active">
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Cities</a>
                            </li>
                            <li>
                                <a href="#">Articles</a>

                            </li>
                            <li>
                                <a href="#">Professionals</a>

                            </li>

                        </ul>


                    </div>
                </div>
                <div>
                    <ul class="footer-social-ul">
                        <li>
                            <a href=""><img src="assets/img/Facebook Icon.svg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="assets/img/Linkedin Icon.svg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="assets/img/Twitter Icon.svg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    {{--    <script src="assets/lib/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>--}}
    {{--    <script src="https://code.jquery.com/jquery-1.12.4.min.js"--}}
    {{--            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>--}}
    {{--    <script src="assets/js/script.js"></script>--}}
</footer>
</body>
</html>
