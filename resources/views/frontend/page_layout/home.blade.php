@extends('frontend.page_layout.master')
@section('content')
<!--Full page Body Wrapper Start============================================= -->
<div id="wrapper" class="clearfix">
    <!-- Page Title ============================================= -->
    <section id="page-title">
        <div class="container clearfix">
            <h1>FrontEnd</h1>
            <span>This is the FrontEnd Section.</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FrontEnd</li>
            </ol>
        </div>
    </section>
    <!-- #page-title end -->
    <!--body Content start============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div id="portfolio-ajax-wrap">
                    <div id="portfolio-ajax-container"></div>
                </div>

                <!-- Portfolio Filter ============================================= -->
                <ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

                    <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                    <li><a href="#" data-filter=".pf-icons">Icons</a></li>
                    <li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
                    <li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
                    <li><a href="#" data-filter=".pf-media">Media</a></li>
                    <li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

                </ul>
                <!-- #portfolio-filter end -->

                <div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
                    <i class="icon-random"></i>
                </div>

                <div class="clear"></div>

                <!-- Portfolio Items ============================================= -->
                <div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-ajax clearfix">

                    <article id="portfolio-item-1" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-image.php') }}" class="portfolio-item pf-media pf-icons">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ url('public/frontend/images/portfolio/4/1.jpg') }}" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Open Imagination</a></h3>
                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                        </div>
                    </article>

                    <article id="portfolio-item-2" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-image.php') }}" class="portfolio-item pf-illustrations">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ url('public/frontend/images/portfolio/4/2.jpg') }}" alt="Locked Steel Gate">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Locked Steel Gate</a></h3>
                            <span><a href="#">Illustrations</a></span>
                        </div>
                    </article>

                    <article id="portfolio-item-3" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-video.php') }}" class="portfolio-item pf-graphics pf-uielements">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ url('public/frontend/images/portfolio/4/3.jpg') }}" alt="Mac Sunglasses">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Mac Sunglasses</a></h3>
                            <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                        </div>
                    </article>

                    <article id="portfolio-item-4" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-slider.php') }}" class="portfolio-item pf-icons pf-illustrations">
                        <div class="portfolio-image">
                            <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide"><a href="#"><img src="{{ url('public/frontend/images/portfolio/4/4.jpg') }}" alt="Morning Dew"></a></div>
                                        <div class="slide"><a href="#"><img src="{{ url('public/frontend/images/portfolio/4/4-1.jpg') }}" alt="Morning Dew"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-overlay" data-lightbox="gallery">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Morning Dew</a></h3>
                            <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                        </div>
                    </article>

                    <article id="portfolio-item-5" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-image.php') }}" class="portfolio-item pf-uielements pf-media">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ url('public/frontend/images/portfolio/4/5.jpg') }}" alt="Console Activity">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Console Activity</a></h3>
                            <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                        </div>
                    </article>

                    <article id="portfolio-item-6" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-gallery.php') }}" class="portfolio-item pf-graphics pf-illustrations">
                        <div class="portfolio-image">
                            <div class="fslider" data-arrows="false">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide"><a href="#"><img src="{{ url('public/frontend/images/portfolio/4/6.jpg') }}" alt="Shake It"></a></div>
                                        <div class="slide"><a href="#"><img src="{{ url('public/frontend/images/portfolio/4/6-1.jpg') }}" alt="Shake It"></a></div>
                                        <div class="slide"><a href="#"><img src="{{ url('public/frontend/images/portfolio/4/6-2.jpg') }}" alt="Shake It"></a></div>
                                        <div class="slide"><a href="#"><img src="{{ url('public/frontend/images/portfolio/4/6-3.jpg') }}" alt="Shake It"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-overlay" data-lightbox="gallery">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Shake It!</a></h3>
                            <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                        </div>
                    </article>

                    <article id="portfolio-item-7" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-video.php') }}" class="portfolio-item pf-uielements pf-icons">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ url('public/frontend/images/portfolio/4/7.jpg') }}" alt="Backpack Contents">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Backpack Contents</a></h3>
                            <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                        </div>
                    </article>

                    <article id="portfolio-item-8" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-image.php') }}" class="portfolio-item pf-graphics">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ url('public/frontend/images/portfolio/4/8.jpg') }}" alt="Sunset Bulb Glow">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Sunset Bulb Glow</a></h3>
                            <span><a href="#">Graphics</a></span>
                        </div>
                    </article>

                    <article id="portfolio-item-9" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-slider.php') }}" class="portfolio-item pf-illustrations pf-icons">
                        <div class="portfolio-image">
                            <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide"><a href="#"><img src="{{ url('public/frontend/images/portfolio/4/9.jpg') }}" alt="Bridge Side"></a></div>
                                        <div class="slide"><a href="#"><img src="{{ url('public/frontend/images/portfolio/4/9-1.jpg') }}" alt="Bridge Side"></a></div>
                                        <div class="slide"><a href="#"><img src="{{ url('public/frontend/images/portfolio/4/9-2.jpg') }}" alt="Bridge Side"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-overlay" data-lightbox="gallery">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Bridge Side</a></h3>
                            <span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
                        </div>
                    </article>

                    <article id="portfolio-item-10" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-video.php') }}" class="portfolio-item pf-graphics pf-media pf-uielements">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ url('public/frontend/images/portfolio/4/10.jpg') }}" alt="Study Table">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Study Table</a></h3>
                            <span><a href="#">Graphics</a>, <a href="#">Media</a></span>
                        </div>
                    </article>

                    <article id="portfolio-item-11" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-image.php') }}" class="portfolio-item pf-media pf-icons">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ url('public/frontend/images/portfolio/4/11.jpg') }}" alt="Workspace Stuff">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Workspace Stuff</a></h3>
                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                        </div>
                    </article>

                    <article id="portfolio-item-12" data-loader="{{ asset('public/frontend/include/ajax/portfolio-ajax-gallery.php') }}" class="portfolio-item pf-illustrations pf-graphics">
                        <div class="portfolio-image">
                            <div class="fslider" data-arrows="false" data-speed="700" data-pause="7000">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide"><a href="#"><img src="{{ url('public/frontend/images/portfolio/4/12.jpg') }}" alt="Fixed Aperture"></a></div>
                                        <div class="slide"><a href="#"><img src="{{ url('public/frontend/images/portfolio/4/12-1.jpg') }}" alt="Fixed Aperture"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-overlay" data-lightbox="gallery">
                                <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="#">Fixed Aperture</a></h3>
                            <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                        </div>
                    </article>

                </div>
                <!-- #portfolio end -->

            </div>

        </div>

    </section>
    <!-- body Content end -->
</div>
<!--Full page Body Wrapper Start end -->
@endsection