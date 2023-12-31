@extends('app')
@section('content')
 
    @parent

    <div class="">
        <div class="">
            <img class="w-100 category-baner" src="{{asset('img/Rectangle 1.png')}}" height="498" width="1440"/>
        </div>
        <div class="container c-mt-categ">
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-12 mb-3 d-md-none">

                            <div class="bg-white c-cart-shadow p-3">
                                <div class="mob-filter-title" onclick="mobFilterColapse()">
                                    <h3 class="text-4a d-inline-block mb-0">
                                        filter
                                    </h3>
                                    <span class="d-inline-block float-end">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9995 16.8C11.2995 16.8 10.5995 16.53 10.0695 16L3.54953 9.48001C3.25953 9.19001 3.25953 8.71001 3.54953 8.42001C3.83953 8.13001 4.31953 8.13001 4.60953 8.42001L11.1295 14.94C11.6095 15.42 12.3895 15.42 12.8695 14.94L19.3895 8.42001C19.6795 8.13001 20.1595 8.13001 20.4495 8.42001C20.7395 8.71001 20.7395 9.19001 20.4495 9.48001L13.9295 16C13.3995 16.53 12.6995 16.8 11.9995 16.8Z"
                                    fill="#292D32"/>
                                </svg>

                                </span>
                                </div>
                                <div class="mob-filter-body" style="display: none">
                                    <div class="cat-section">
                                        <p class="cat-title">
                                            <img class="cat-vector" src="{{asset('img/CategoryVector.svg')}}" alt="">
                                            Location
                                        </p>
                                        <ul>

                                            <li>
                                                <label class="custom-check-box">Langley
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="custom-check-box">Vancouver
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>


                                        </ul>

                                    </div>

                                    <div class="cat-section close-cat-sec">
                                        <p class="cat-title">
                                            <img class="cat-vector" src="assets/img/CategoryVector.svg" alt="">
                                            Location
                                        </p>
                                        <ul>

                                            <li>
                                                <label class="custom-check-box">Langley
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="custom-check-box">Vancouver
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>


                                        </ul>

                                    </div>

                                    <div class="cat-section">
                                        <p class="cat-title">
                                            <img class="cat-vector" src="assets/img/CategoryVector.svg" alt="">
                                            Location
                                        </p>
                                        <ul>

                                            <li>
                                                <label class="custom-check-box">Langley
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="custom-check-box">Vancouver
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>


                                        </ul>

                                    </div>


                                </div>
                            </div>

                        </div>
                   
                            <div class="col-12 col-md-4">
                                <div class="c-cart-shadow mb-4">
                                    <a class="cart-info--link" href="{{route('build.element.show')}}">
                                        <div class="show-build-project-image">
                                            <img class="" height="180" width="270"
                                                 src="{{asset('img/main-slide/new.png')}}"/>
                                    
                                        </div>

                                        <div class="ps-2 pe-2 pt-2">
                                            <h2 class="c-card-title">
                                                <img src="{{asset('img/Vectorloc.svg')}}" height="20" alt="">
                                                Vancouver
                                            </h2>
                                            <p class="cart-info-- mb-0 color-97">
                                               ELEMENTS 
                                            </p>

                                        </div>
                                        <div class="ps-2 pe-2 mt-8 p-sc---">
                                                                                                                 
                                            <p class=" c-cart-price-from color-green d-inline-block  pb-11">
                                                Mid $500's
                                            </p>

                                            <span class="c-cart-price-dash">
                                                -
                                            </span>
                                            <p class=" c-cart-price-to color-green d-inline-block  pb-11">

                                                $1,260's 
                                             
                                            </p>
                                        
                                            <div class="clear-fix"></div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        
                            <div class="col-12 col-md-4">
                                <div class="c-cart-shadow mb-4">
                                    <a class="cart-info--link" href="{{route('build.UnitySouthLangley.show')}}">
                                        <div class="show-build-project-image">
                                            <img class="" height="180" width="270"
                                                 src="{{asset('img/main-slide/Unity_SouthLangley_Aerial_WIDE_Website-min-scaled-1.webp')}}"/>

                                        </div>

                                        <div class="ps-2 pe-2 pt-2">
                                            <h2 class="c-card-title">
                                                <img src="{{asset('img/Vectorloc.svg')}}" height="20" alt="">
                                                Vancouver
                                            </h2>
                                            <p class="cart-info-- mb-0 color-97">
                                                 
                                                 Unity South Langley
                               
                                            </p>

                                        </div>
                                        <div class="ps-2 pe-2 mt-8 p-sc---">
                                            
                                            <p class=" c-cart-price-from color-green d-inline-block  pb-11">
                                                $399,900

                                            </p>

              

                                            <span class="c-cart-price-dash">
                                                -
                                             </span>
                                            <p class=" c-cart-price-to color-green d-inline-block  pb-11">
                                                $619,900 

                                             
                                            </p>
                                           
                                            <div class="clear-fix"></div>
                                        </div>

                                    </a>
                                </div>
                            </div>


                      
                    </div>


                </div>
                <div class="col-3 d-none d-md-block">
                    <form action="">

                        <div class="c-cart-shadow p-4 cat-main">

                            <div class="cat-section">
                                <p class="cat-title">
                                    <img class="cat-vector" src="{{asset('img/Vectorblack.svg')}}" alt="">
                                    Location
                                </p>
                                <ul>
                                    
                                        <li>
                                            <label class="custom-check-box">Vancouver
                                                <input type="checkbox" name="city[]" value="" checked="checked" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                

                                </ul>
                            </div>

                            <div class="cat-section">
                                <p class="cat-title">
                                    <img class="cat-vector closed-cat-list-icon" src="{{asset('img/Vectorblack.svg')}}"
                                         alt="">
                                    Completion Date
                                </p>
                                <ul>
                                    <li>
                                        <div class="slider"></div>
                                        <span class="slider-start">2023</span>
                                        <span class="slider-end">2033</span>

                                        <input type="hidden" id="start_completion_date" name="start_completion_date"
                                               value="2023">
                                        <input type="hidden" id="end_completion_date" name="end_completion_date"
                                               value="2033">
                                    </li>
                                </ul>
                                <script>
                                    let slider = new RangeSlider('.slider', {
                                        values: [500, 2033],
                                        min: 2023,
                                        max: 2033,
                                        step: 1,
                                        pointRadius: 10,
                                        railHeight: 1,
                                        trackHeight: 1,
                                        colors: {
                                            points: "#B3865D",
                                            rail: "#000",
                                            tracks: "#B3865D"
                                        }

                                    }).onChange(function (val) {
                                        document.getElementById('start_completion_date').value = val[0]
                                        document.getElementById('end_completion_date').value = val[1]

                                    });

                                </script>


                            </div>
                            <style>
                                .slider-start {
                                    color: #000;
                                    font-size: 14px;
                                    font-weight: 400;
                                    font-family: 'mazzard_m_light';
                                }

                                .slider-end {
                                    float: right;
                                    color: #000;
                                    font-size: 14px;
                                    font-weight: 400;
                                    font-family: 'mazzard_m_light';
                                }

                                .range-slider__container {
                                    margin-bottom: 2px !important;
                                }
                            </style>

                            <div class="cat-section">
                                <p class="cat-title">
                                    <img class="cat-vector" src="{{asset('img/Vectorblack.svg')}}" alt="">
                                    Deposit
                                </p>
                                <ul>

                                    <li>
                                        <label class="custom-check-box">Below 5%
                                            <input type="checkbox" <?php if (isset($_GET['sum_deposit'])) {
                                                if (in_array('a', $_GET['sum_deposit'])) echo 'checked="checked"';
                                            }else{ ?> checked="checked" <?php } ?> name="sum_deposit[]" value="a">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-check-box">6% - 10%
                                            <input type="checkbox"
                                                   <?php if (isset($_GET['sum_deposit'])) {
                                                       if (in_array('b', $_GET['sum_deposit'])) echo 'checked="checked"';
                                                   }else{ ?> checked="checked" <?php } ?>
                                                   name="sum_deposit[]" value="b">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-check-box">11% - 15%
                                            <input type="checkbox" <?php if (isset($_GET['sum_deposit'])) {
                                                if (in_array('c', $_GET['sum_deposit'])) echo 'checked="checked"';
                                            }else{ ?> checked="checked" <?php } ?>  name="sum_deposit[]" value="c">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="custom-check-box">16% - 25%
                                            <input type="checkbox" <?php if (isset($_GET['sum_deposit'])) {
                                                if (in_array('d', $_GET['sum_deposit'])) echo 'checked="checked"';
                                            }else{ ?> checked="checked" <?php } ?>  name="sum_deposit[]" value="d">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-check-box">Above 25%
                                            <input type="checkbox" <?php if (isset($_GET['sum_deposit'])) {
                                                if (in_array('e', $_GET['sum_deposit'])) echo 'checked="checked"';
                                            }else{ ?> checked="checked" <?php } ?>  name="sum_deposit[]" value="e">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>


                                </ul>

                            </div>

                            <input class="c-btn-one menu-btn-padding w-100" type="submit" value="filter">
                        </div>
                    </form>


                </div>


            </div>
        </div>

    </div>

@endsection


@section('custom-head')
    <script src="https://unpkg.com/@spreadtheweb/multi-range-slider@1.0.2/dist/range-slider.main.min.js"></script>

@endsection

