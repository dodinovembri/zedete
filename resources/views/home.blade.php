@extends('layouts.app')

@section('content')
<div class="body">
    <header id="header" class="header-transparent header-transparent-dark-bottom-border header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0 bg-dark box-shadow-none">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="{{url('/')}}">
                                    <img alt="Logo Zedete" width="82" height="40" src="{{asset('tmp/img/logo-zedete-2.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li>
                                                <a class="nav-link active" href="#home" data-hash data-hash-offset="68">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="#about_us" data-hash data-hash-offset="68">
                                                    About Us
                                                </a>
                                            </li>
                                            <li class="dropdown dropdown-primary">
                                                <a class="nav-link" href="#expertise" data-hash data-hash-offset="68">
                                                    Expertise
                                                </a>                                            
                                            </li>
                                            <li>
                                                <a class="nav-link" href="#cases" data-hash data-hash-offset="68">
                                                    Cases
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="#testimonial" data-hash data-hash-offset="68">
                                                    Testimonials
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="#team" data-hash data-hash-offset="68">
                                                    Team
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="#product" data-hash data-hash-offset="68">
                                                    Products
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="#contact_us" data-hash data-hash-offset="68">
                                                    Contact Us
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">
        
        <div id="home" class="slider-container rev_slider_wrapper" style="height: 100%;">
            <div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
                <ul>
                    <?php foreach ($home_slides as $key => $value) { ?>
                    <li data-transition="fade">
                        <img src="{{asset('assets/img')}}/{{$value->photo}}"  
                            alt=""
                            data-bgposition="center center" 
                            data-bgfit="cover" 
                            data-bgrepeat="no-repeat" 
                            data-bgparallax="1" 
                            class="rev-slidebg">

                        <h1 class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                            data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                            data-y="center" data-voffset="['-80','-80','-80','-40']"
                            data-start="800"
                            data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 32px;">{{$value->text_title_one}}</h1>

                        <div class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                            data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                            data-y="center" data-voffset="['-42','-42','-42','2']"
                            data-start="800"
                            data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 42px;">{{$value->text_title_two}}</div>

                        <a href="#about-us" class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
                            data-hash
                            data-hash-offset="85"
                            data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                            data-y="center" data-voffset="['60','60','60','100']"
                            data-start="1500"
                            style="font-size: 12px; padding: 15px 6px;"
                            data-transform_in="y:[-300%];opacity:0;s:500;">Get Started</a>
                    </li>    
                    <?php } ?>
                </ul>
            </div>
        </div>

        <section  class="looking-for custom-position-1 custom-md-border-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <div class="looking-for-box">
                            <h2>- <span class="text-1 custom-secondary-font">{{$home->text_below_title_one}}</span><br>
                            {{$home->text_below_title_two}}</h2>
                            <p>{{$home->text_paragraph}}</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-md-end mb-4 mb-md-0">
                        <a class="text-decoration-none" href="tel:{{$home->call_us_now}}" target="_blank" title="Call Us Now">
                            <span class="custom-call-to-action">
                                <span class="action-title text-color-primary">Call Us Now</span>
                                <span class="action-info text-color-light">{{$home->call_us_now}}</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <a class="text-decoration-none" href="mail:{{$home->email_us_now}}" target="_blank" title="Email Us Now">
                            <span class="custom-call-to-action">
                                <span class="action-title text-color-primary">Email Us Now</span>
                                <span class="action-info text-color-light">{{$home->email_us_now}}</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="about_us" class="about-us custom-section-padding" id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <h2 class="font-weight-bold text-color-dark">- About Us</h2>
                        <p class="pl-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae.</p>
                        <div class="pl-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list list-icons list-icons-style-3 list-tertiary">
                                        <li><i class="fas fa-chevron-right"></i> Certified Professionals</li>
                                        <li><i class="fas fa-chevron-right"></i> Former Chief Executives</li>
                                        <li><i class="fas fa-chevron-right"></i> Real Estate Professionals</li>
                                    </ul>   
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list list-icons list-icons-style-3 list-tertiary">
                                        <li><i class="fas fa-chevron-right"></i> Nobel Laureate Economists</li>
                                        <li><i class="fas fa-chevron-right"></i> Former Political Leaders</li>
                                        <li><i class="fas fa-chevron-right"></i> Chartered Financial Analysts</li>
                                    </ul>
                                </div>
                            </div>
                            <a class="btn btn-outline custom-border-width btn-primary mt-3 mb-2 custom-border-radius font-weight-semibold text-uppercase" href="demo-business-consulting-about-us.html">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="content-grid custom-content-grid mt-5 mb-4">
                            <div class="row content-grid-row">
                                <div class="content-grid-item col-lg-6 bg-color-light p-4">
                                    <div class="counters">
                                        <div class="counter custom-sm-counter-style">
                                            <img class="counter-icon" src="{{asset('tmp/img/demos/business-consulting/icons/icon-1.png')}}" alt />
                                            <strong class="text-color-primary custom-primary-font" data-to="15" data-append="+">0</strong>
                                            <label>Years in Business</label>
                                        </div>
                                    </div>  
                                </div>
                                <div class="content-grid-item col-lg-6 p-4">
                                    <div class="counters">
                                        <div class="counter margin-style-2 custom-sm-counter-style">
                                            <img class="counter-icon" src="{{asset('tmp/img/demos/business-consulting/icons/icon-2.png')}}" alt />
                                            <strong class="text-color-primary custom-primary-font" data-to="2000" data-append="+">0</strong>
                                            <label>Successfull Cases</label>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="row content-grid-row">
                                <div class="content-grid-item col-lg-6 p-4">
                                    <div class="counters">
                                        <div class="counter custom-sm-counter-style">
                                            <img class="counter-icon" src="{{asset('tmp/img/demos/business-consulting/icons/icon-3.png')}}" alt />
                                            <strong class="text-color-primary custom-primary-font" data-to="240" data-append="+">0</strong>
                                            <label>Satisfied Clients</label>
                                        </div>
                                    </div>  
                                </div>
                                <div class="content-grid-item col-lg-6 bg-color-light p-4">
                                    <div class="counters">
                                        <div class="counter margin-style-2 custom-sm-counter-style">
                                            <img class="counter-icon" src="{{asset('tmp/img/demos/business-consulting/icons/icon-4.png')}}" alt />
                                            <strong class="text-color-primary custom-primary-font" data-to="130" data-append="+">0</strong>
                                            <label>Pro Consultants</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="expertise" class="section-secondary custom-section-padding">
            <div class="container">
                <div class="row mb-4">
                    <div class="col">
                        <h2 class="font-weight-bold text-color-dark mb-3">- Expertises</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="{{asset('tmp/img/demos/business-consulting/expertise/expertise-1.jpg')}}" alt="">
                                </div>
                                <div class="feature-box-info ml-3">
                                    <h4 class="font-weight-normal text-5">Corporate Finance</h4>
                                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="{{asset('tmp/img/demos/business-consulting/expertise/expertise-2.jpg')}}" alt="">
                                </div>
                                <div class="feature-box-info ml-3">
                                    <h4 class="font-weight-normal text-5">Corp Restructuring</h4>
                                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="{{asset('tmp/img/demos/business-consulting/expertise/expertise-3.jpg')}}" alt="">
                                </div>
                                <div class="feature-box-info ml-3">
                                    <h4 class="font-weight-normal text-5">Economic Consulting</h4>
                                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="{{asset('tmp/img/demos/business-consulting/expertise/expertise-4.jpg')}}" alt="">
                                </div>
                                <div class="feature-box-info ml-3">
                                    <h4 class="font-weight-normal text-5">Litigation Consulting</h4>
                                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="400">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="{{asset('tmp/img/demos/business-consulting/expertise/expertise-5.jpg')}}" alt="">
                                </div>
                                <div class="feature-box-info ml-3">
                                    <h4 class="font-weight-normal text-5">Strategic Consulting</h4>
                                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="500">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="{{asset('tmp/img/demos/business-consulting/expertise/expertise-6.jpg')}}" alt="">
                                </div>
                                <div class="feature-box-info ml-3">
                                    <h4 class="font-weight-normal text-5">Tech Consulting</h4>
                                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-3" href="demo-business-consulting-expertise.html" title="View All">View All</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="custom-section-padding">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h2 class="font-weight-bold text-color-dark">- Our Strategy</h2>
                        <div class="owl-carousel owl-theme nav-bottom rounded-nav numbered-dots pl-1 pr-1" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
                            <div>
                                <div class="custom-step-item">
                                    <span class="step text-uppercase">
                                        Step
                                        <span class="step-number text-color-primary">
                                            01
                                        </span>
                                    </span>
                                    <div class="step-content">
                                        <h4 class="mb-3">The first meeting<br> <strong>Understanding the Problem</strong></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="custom-step-item">
                                    <span class="step text-uppercase">
                                        Step
                                        <span class="step-number text-color-primary">
                                            02
                                        </span>
                                    </span>
                                    <div class="step-content">
                                        <h4 class="mb-3">The second meeting<br> <strong>Business Plan Consultant</strong></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="custom-step-item">
                                    <span class="step text-uppercase">
                                        Step
                                        <span class="step-number text-color-primary">
                                            03
                                        </span>
                                    </span>
                                    <div class="step-content">
                                        <h4 class="mb-3">The final meeting<br> <strong>Problem Solved</strong></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="font-weight-bold text-color-dark">- Frequently asked questions</h2>
                        <div class="accordion without-bg custom-accordion-style-1" id="accordion7">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion7" href="#collapse7One" aria-expanded="true">
                                            Praesent sit amet quam a lorem commodo tincidunt.
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7One" class="collapse show" aria-expanded="true">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Two" aria-expanded="false">
                                            Integer ac elit id est euismod pellentesque.
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7Two" class="collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Three" aria-expanded="false">
                                            Cras interdum neque sit amet justo maximus, ut sollicitudin eros.
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7Three" class="collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Four" aria-expanded="false">
                                            Pellentesque in ex molestie, convallis nulla ut, ornare erat.
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7Four" class="collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cases" class="section-secondary custom-section-padding-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-color-dark mb-3">- Our Cases</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel show-nav-title custom-both-sides-shadow custom-dots-position-2 custom-dots-style-1 custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 6, 'loop': false, 'dots': true, 'nav': false}">
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                        <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-0">
                                <img src="{{asset('tmp/img/demos/business-consulting/cases/case-1.jpg')}}" class="img-fluid" alt="">
                            </span>
                            <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                                <span class="custom-thumb-info-title">
                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Finance</span>
                                    <span class="custom-thumb-info-desc font-weight-light">Okler</span>
                                </span>
                                <span class="custom-arrow"></span>
                            </span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                        <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-0">
                                <img src="{{asset('tmp/img/demos/business-consulting/cases/case-2.jpg')}}" class="img-fluid" alt="">
                            </span>
                            <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                                <span class="custom-thumb-info-title">
                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Restructuring</span>
                                    <span class="custom-thumb-info-desc font-weight-light">Envato</span>
                                </span>
                                <span class="custom-arrow"></span>
                            </span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                        <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-0">
                                <img src="{{asset('tmp/img/demos/business-consulting/cases/case-3.jpg')}}" class="img-fluid" alt="">
                            </span>
                            <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                                <span class="custom-thumb-info-title">
                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Economic Consultanting</span>
                                    <span class="custom-thumb-info-desc font-weight-light">Porto</span>
                                </span>
                                <span class="custom-arrow"></span>
                            </span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                        <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-0">
                                <img src="{{asset('tmp/img/demos/business-consulting/cases/case-4.jpg')}}" class="img-fluid" alt="">
                            </span>
                            <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                                <span class="custom-thumb-info-title">
                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Tech Consulting</span>
                                    <span class="custom-thumb-info-desc font-weight-light">GetCustom</span>
                                </span>
                                <span class="custom-arrow"></span>
                            </span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                        <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-0">
                                <img src="{{asset('tmp/img/demos/business-consulting/cases/case-5.jpg')}}" class="img-fluid" alt="">
                            </span>
                            <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                                <span class="custom-thumb-info-title">
                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Strategic</span>
                                    <span class="custom-thumb-info-desc font-weight-light">Jet Orange</span>
                                </span>
                                <span class="custom-arrow"></span>
                            </span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                        <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-0">
                                <img src="{{asset('tmp/img/demos/business-consulting/cases/case-1.jpg')}}" class="img-fluid" alt="">
                            </span>
                            <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                                <span class="custom-thumb-info-title">
                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Litigation</span>
                                    <span class="custom-thumb-info-desc font-weight-light">Paradoxx</span>
                                </span>
                                <span class="custom-arrow"></span>
                            </span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                        <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-0">
                                <img src="{{asset('tmp/img/demos/business-consulting/cases/case-2.jpg')}}" class="img-fluid" alt="">
                            </span>
                            <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                                <span class="custom-thumb-info-title">
                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Consulting</span>
                                    <span class="custom-thumb-info-desc font-weight-light">iMessenger</span>
                                </span>
                                <span class="custom-arrow"></span>
                            </span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                        <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-0">
                                <img src="{{asset('tmp/img/demos/business-consulting/cases/case-3.jpg')}}" class="img-fluid" alt="">
                            </span>
                            <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                                <span class="custom-thumb-info-title">
                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Brand Consulting</span>
                                    <span class="custom-thumb-info-desc font-weight-light">Theme Forest</span>
                                </span>
                                <span class="custom-arrow"></span>
                            </span>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
                        <span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-0">
                                <img src="{{asset('tmp/img/demos/business-consulting/cases/case-4.jpg')}}" class="img-fluid" alt="">
                            </span>
                            <span class="thumb-info-caption bg-color-secondary p-4 pt-5 pb-5">
                                <span class="custom-thumb-info-title">
                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">Corporate Consulting</span>
                                    <span class="custom-thumb-info-desc font-weight-light">Tucson</span>
                                </span>
                                <span class="custom-arrow"></span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <section id="testimonial" class="custom-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-color-dark">- Testimonials</h2>
                    </div>
                </div>
                <div class="row">                       
                    <div class="col">
                        <div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                            <?php foreach ($testimoni as $key => $value) { ?>
                            <div class="row">
                                <div class="col-8 col-sm-4 col-lg-2 text-center pt-5">
                                    <img src="{{asset('tmp/img/demos/business-consulting/testimonials/testimonial-author-2.jpg')}}" alt class="img-fluid custom-rounded-image" />
                                </div>
                                <div class="col-12 col-sm-12 col-lg-10">
                                    <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
                                        <blockquote class="pb-2">
                                            <p>{{$value->testimoni}}</p>
                                        </blockquote>
                                        <div class="testimonial-author float-left">
                                            <p><strong>{{$value->name}}</strong><span class="text-color-primary">{{$value->position}}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="section-secondary custom-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-color-dark">- Our Team</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 4, 'margin': 20, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                            <?php foreach ($teams as $key => $value) { ?>
                                <div>
                                    <div class="team-item p-0">
                                        <a href="{{ $value->url_bio }}" target="_blank" class="text-decoration-none">
                                            <span class="image-wrapper">
                                                <img src="{{asset('assets/img')}}/{{$value->photo}}" alt="" class="img-fluid" />
                                            </span>
                                        </a>
                                        <div class="team-infos">
                                            <div class="share">
                                                <i class="fas fa-share-alt"></i>
                                                <div class="share-icons bg-color-light">
                                                    <a href="{{$value->facebook}}" target="_blank" class="text-decoration-none" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="{{$value->instagram}}" target="_blank" class="text-decoration-none" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
                                                    <a href="{{$value->linkedin}}" target="_blank" class="text-decoration-none" title="Share on Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                            <a href="demo-business-consulting-team-detail.html" class="text-decoration-none">
                                                <span class="team-member-name text-color-dark font-weight-semibold text-4">{{$value->name}}</span>
                                                <span class="team-member-desc font-weight-light">{{$value->position}}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>                                
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col">
                        <a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase" href="demo-business-consulting-team.html">View All</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="looking-for section-primary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <div class="looking-for-box">
                            <h2>- <span class="text-1 custom-secondary-font">{{$home->text_below_title_one}}</span><br>
                            {{$home->text_below_title_two}}</h2>
                            <p class="mb-4 mb-md-0">{{$home->text_paragraph}}</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-md-end mb-4 mb-md-0">
                        <a class="text-decoration-none" href="tel:{{$home->call_us_now}}" target="_blank" title="Call Us Now">
                            <span class="custom-call-to-action white-border text-color-light">
                                <span class="action-title">Call Us Now</span>
                                <span class="action-info">{{$home->call_us_now}}</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <a class="text-decoration-none" href="mail:{{$home->email_us_now}}" target="_blank" title="Email Us Now">
                            <span class="custom-call-to-action white-border text-color-light">
                                <span class="action-title">Email Us Now</span>
                                <span class="action-info">{{$home->email_us_now}}</span>
                            </span>
                        </a>
                    </div>
                </div> 
            </div>
        </section>

        <section id="product" class="section section-height-3 bg-color-grey m-0 border-0">
            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-color-dark">- Our Product</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 4, 'margin': 20, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                            <?php foreach ($products as $key => $value) { ?>
                                    <div class="portfolio-item">
                                        <a href="{{ $value->url_product }}" target="_blank">
                                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{asset('tmp/img/projects/project.jpg')}}" class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner">{{$value->name}}</span>
                                                        <span class="thumb-info-type">{{$value->category}}</span>
                                                    </span>
                                                    <span class="thumb-info-action">
                                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                        </div>
        </section>


        <section id="contact_us" class="section section-text-light section-background m-0" style="background: url({{asset('tmp/img/demos/business-consulting/contact/contact-background.jpg')}}); background-size: cover;">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="font-weight-bold">- Contact Us</h2>
                        <p class="custom-opacity-font">{{$contact_us->short_desc}}</p>
                        <div class="row">
                            <div class="col-md-6 custom-sm-margin-top">
                                <h4 class="mb-1">Call Us</h4>
                                <a href="tel:+1234567890" class="text-decoration-none" target="_blank" title="Call Us">
                                    <span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
                                        Phone
                                        <span class="info text-5">
                                            {{$home->call_us_now}}
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-6 custom-sm-margin-top">
                                <h4 class="mb-1">Our Location</h4>
                                <p class="custom-opacity-font">{{$contact_us->our_location}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 custom-sm-margin-top">
                                <h4 class="mb-1">Mail Us</h4>
                                <a href="mail:mail@example.com" class="text-decoration-none" target="_blank" title="Mail Us">
                                    <span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
                                        Email
                                        <span class="info text-5">
                                            mail@example.com
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-6 custom-sm-margin-top">
                                <h4 class="mb-1">Social Media</h4>
                                <ul class="social-icons social-icons-clean custom-social-icons-style-1 mt-2 custom-opacity-font">
                                    <li class="social-icons-facebook">
                                        <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-twitter">
                                        <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-instagram">
                                        <a href="http://www.instagram.com/" target="_blank" title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-linkedin">
                                        <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 custom-sm-margin-top">
                        <h2 class="font-weight-bold">- Write Us</h2>
                        <form id="contactForm" class="contact-form custom-contact-form-style-1" action="php/contact-form.php" method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                            </div>

                            <input type="hidden" name="subject" value="Contact Message Received" />
                            <div class="form-row">
                                <div class="form-group col">
                                    <div class="custom-input-box">
                                        <i class="icon-user icons text-color-primary"></i>
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <div class="custom-input-box">
                                        <i class="icon-envelope icons text-color-primary"></i>
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="Email*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <div class="custom-input-box">
                                        <i class="icon-bubble icons text-color-primary"></i>
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" placeholder="Message*" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="submit" value="Submit Now" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase" data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div> 

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center pb-4">
                    <p>2019 © zedete <span class="text-color-light">Business Consulting</span> - Copyright All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

</div>
@endsection
