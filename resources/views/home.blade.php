@include('common.header')
    <!--============= Banner Section Starts Here =============-->
    <section class="banner-9 bg_img oh pos-rel" data-background="./assets/images/banner/banner-9-bg.jpg">
        <div class="container">
            <div class="banner-content-9 cl-white">
                <h1 class="title">Success Start With A Great Apps</h1>
                <p>The simple, intuitive and powerful app to manage your work.</p>
                <div class="banner-button-group">
                    <!-- <a href="#0" class="button-4">Start Using for Free</a> -->
                    <a href="/main" class="button-4 active">Get Start</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="pos-rel banner-9-video">
                        <a href="https://www.youtube.com/watch?v=ObZwFExwzOo" class="video-button popup">
                            <i class="flaticon-play"></i>
                        </a>
                        <img src="./assets/images/banner/banner-9.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape-9">
            <img src="./assets/css/img/banner-shape-9.png" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="contact-form" id="contact_form_submit" method="post" action="/order">
                    @csrf
                    <div class="form-group">
                        <label for="name">Domain name</label>
                        <input type="text" placeholder="Enter Domain Name" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Wallet Address</label>
                        <input type="text" placeholder="Enter Your Wallet Address" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="twitter">Twitter username</label>
                        <input type="text" placeholder="Enter Your Twitter Username " id="twitter" name="twitter" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="submit-btn" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--============= Feature Section Starts Here =============-->
    <div class="feature-section padding-top padding-bottom">
        <div class="container">
            <div class="owl-theme owl-carousel feature-item-2-slider mb--50">
                <div class="feature-item-2">
                    <div class="feature-thumb">
                        <img src="./assets/images/feature/featurei1.png" alt="feature">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Fast and Optimized</h4>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="feature-item-2">
                    <div class="feature-thumb">
                        <img src="./assets/images/feature/featurei2.png" alt="feature">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Easy Integration</h4>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="feature-item-2">
                    <div class="feature-thumb">
                        <img src="./assets/images/feature/featurei3.png" alt="feature">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Traffic Management</h4>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= Feature Section Ends Here =============-->


    <!--============= Feature Section Starts Here =============-->
    <section class="feature-section padding-top oh pos-rel padding-bottom pb-xl-0" id="feature">
        <div class="feature-shapes d-none d-lg-block">
            <img src="./assets/images/feature/feature-shape.png" alt="feature">
        </div>
        <div class="container">
            <div class="section-header mw-725">
                <h5 class="cate">Extra Crazy Features that will</h5>
                <h2 class="title">Boost Your Productivity </h2>
                <p>
                    In the process of making a app, the satisfaction of users is the most important and the focus is on usability and completeness
                </p>
            </div>
            <div class="row">
                <div class="col-lg-5 rtl">
                    <div class="feature--thumb style-two pr-xl-4 ltr">
                        <div class="feat-slider owl-carousel owl-theme" data-slider-id="1">
                            <div class="main-thumb">
                                <img src="./assets/images/feature/pro-main5.png" alt="feature">
                            </div>
                            <div class="main-thumb">
                                <img src="./assets/images/feature/pro-main6.png" alt="feature">
                            </div>
                            <div class="main-thumb">
                                <img src="./assets/images/feature/pro-main7.png" alt="feature">
                            </div>
                            <div class="main-thumb">
                                <img src="./assets/images/feature/pro-main6.png" alt="feature">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="feature-wrapper mb-30-none owl-thumbs" data-slider-id="1">
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="./assets/images/feature/pro5.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Latest Technology</h4>
                                <p>The satisfaction of users is the most important and the focus is on usability and completeness</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="./assets/images/feature/pro2.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Flexible Usability</h4>
                                <p>The satisfaction of users is the most important and the focus is on usability and completeness</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="./assets/images/feature/pro3.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Easy to Manage Your All Data</h4>
                                <p>The satisfaction of users is the most important and the focus is on usability and completeness</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="./assets/images/feature/pro4.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Designed for all devices</h4>
                                <p>The satisfaction of users is the most important and the focus is on usability and completeness</p>
                            </div>
                        </div>
                    </div>
                    <div class="feat-nav">
                        <a href="#0" class="feat-prev"><i class="flaticon-left"></i></a>
                        <a href="#0" class="feat-next active"><i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Feature Section Ends Here =============-->

    <!--============= Experience Section Starts Here =============-->
    <section class="experience-section padding-bottom padding-top bg_img top_center bg-max-lg-ash oh" data-background="./assets/images/feature/experience-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="section-header left-style">
                                <h5 class="cate">Better Experience</h5>
                                <h2 class="title">The only one template you need</h2>
                                <p>We spend a lot of time to research tons of different software website from top companies to collect all best practices and the most necessary experience in one place.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-30-none">
                        <div class="col-md-6">
                            <div class="ex-item">
                                <div class="ex-thumb">
                                    <img src="./assets/images/feature/ex1.png" alt="feature">
                                </div>
                                <div class="ex-content">
                                    <h4 class="title">Data Protection</h4>
                                    <p>We create a very clean and simple UI which is easily suitable for any project.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ex-item active">
                                <div class="ex-thumb">
                                    <img src="./assets/images/feature/ex2.png" alt="feature">
                                </div>
                                <div class="ex-content">
                                    <h4 class="title">Team Collaboration</h4>
                                    <p>We create a very clean and simple UI which is easily suitable for any project.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ex-item">
                                <div class="ex-thumb">
                                    <img src="./assets/images/feature/ex3.png" alt="feature">
                                </div>
                                <div class="ex-content">
                                    <h4 class="title">Auto Responder</h4>
                                    <p>We create a very clean and simple UI which is easily suitable for any project.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ex-item">
                                <div class="ex-thumb">
                                    <img src="./assets/images/feature/ex4.png" alt="feature">
                                </div>
                                <div class="ex-content">
                                    <h4 class="title">Easy Customize</h4>
                                    <p>We create a very clean and simple UI which is easily suitable for any project.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-none d-xl-block mt-xl-5">
                    <img src="./assets/images/feature/experience.png" alt="feature">
                </div>
            </div>
        </div>
    </section>
    <!--============= Experience Section Ends Here =============-->


    <!--============= Member Counter Section Starts Here =============-->
    <div class="member-counter-section oh">
        <div class="container">
            <div class="member-counter-area padding-bottom padding-top mt-0">
                <div class="member-bg">
                    <img src="./assets/images/how/how-much-bg.png" alt="how">
                </div>
                <div class="member-counter cl-white">
                    <h2 class="title"><span class="counter">455,326,234</span></h2>
                    <p>People Joined Already</p>
                    <a href="#0" class="custom-button">Download App</a>
                    <ul class="download-options">
                        <li>
                            <a href="#0"><i class="fab fa-windows"></i></a>
                        </li>
                        <li>
                            <a href="#0" class="active"><i class="fab fa-apple"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-android"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--============= Member Counter Section Ends Here =============-->


    <!--============= Addons Section Starts Here =============-->
    <section class="addon-section padding-bottom padding-top oh" id="addon">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header pb-30 mw-100">
                        <h5 class="cate">Easy Integration</h5>
                        <h2 class="title">Most Valuable Addons</h2>
                        <p>
                            In the process of making a app, the satisfaction of users is the most important and the focus is on usability and completeness
                        </p>
                    </div> 
                </div>
            </div>
            <div class="addon-wrapper">
                <div class="addon-center">
                    <img src="./assets/images/addon/center.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon1.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon2.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon3.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon4.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon5.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon6.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon7.png" alt="addon">
                </div>
            </div>
        </div>
    </section>
    <!--============= Addons Section Ends Here =============-->


    <!--============= Pricing Section Starts Here =============-->
    <section class="pricing-section padding-top oh padding-bottom pb-md-0 bg_img pos-rel" data-background="./assets/images/bg/pricing-bg.jpg" id="pricing">
        <div class="top-shape d-none d-md-block">
            <img src="./assets/css/img/top-shape.png" alt="css">
        </div>
        <div class="bottom-shape d-none d-md-block">
            <img src="./assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="ball-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="./assets/images/balls/1.png" alt="balls">
        </div>
        <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="./assets/images/balls/2.png" alt="balls">
        </div>
        <div class="ball-4" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="./assets/images/balls/3.png" alt="balls">
        </div>
        <div class="ball-5" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="./assets/images/balls/4.png" alt="balls">
        </div>
        <div class="ball-6" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="./assets/images/balls/5.png" alt="balls">
        </div>
        <div class="ball-7" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="./assets/images/balls/6.png" alt="balls">
        </div>
        <div class="container">
            <div class="section-header pb-30 cl-white">
                <h5 class="cate">Choose a plan that's right for you</h5>
                <h2 class="title">Simple Pricing Plans</h2>
                <p>
                    Mosto has plans, from free to paid, that scale with your needs. Subscribe to a plan that fits the size of your business.
                </p>
            </div>
            <div class="range-wrapper-2">
                <div class="pricing-range">
                    <div class="pricing-range-top pt-0">
                        <div class="tags-area">
                            <h3 class="tags">Eastimate Your Price</h3>
                        </div>
                        <div class="pricing-header">
                            <span class="cate">Pricing Options</span>
                            <div class="select-container">    
                                <select class="select-bar">
                                    <option value="basic">Basic</option>
                                    <option value="standard">Standard</option>
                                    <option value="premium">Premium</option>
                                    <option value="pro">Premium Pro</option>
                                </select>
                            </div>
                        </div>
                        <div class="amount-area">
                            <div class="item">
                                <h2 class="title"><sup>$</sup>15.00</h2>
                                <span class="info">Per Month</span>
                            </div>
                            <div class="item">
                                <h2 class="title"><sup>$</sup>199.00</h2>
                                <span class="info">Per Year</span>
                            </div>
                        </div>
                        <div class="invest-range-area">
                            <div class="invest-amount" data-min="1.00 USD" data-max="1000 USD">
                                <div id="usd-range" class="invest-range-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-range-bottom">
                        <div class="left">
                            <span class="cate">People Joined Already</span>
                            <h2 class="title">455,326,234</h2>
                        </div>
                        <div class="right">
                            <a href="#0" class="custom-button">Download App</a>
                            <ul class="download-options">
                                <li>
                                    <a href="#0" class="active"><i class="fab fa-windows"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-apple"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-android"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Pricing Section Ends Here =============-->


    <!--============= Coverage Section Starts Here =============-->
    <section class="coverage-section padding-top padding-bottom" id="coverage">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-header left-style coverage-header">
                        <h5 class="cate">Our stats say more than any words</h5>
                        <h2 class="title">Apps Without Borders</h2>
                        <p>
                            Mosta app are growing by 300% every year with a steady love from users around the world. We are also close to achieving 10 million cumulative downloads.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="coverage-right-area text-lg-right">
                        <div class="rating-area">
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <span class="average">5.0 / 5.0</span>
                        </div>
                        <h2 class="amount">312,921+</h2>
                        <a href="#0">Total User Reviews <i class="fas fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
            <div class="coverage-wrapper bg_img" data-background="./assets/images/bg/world-map.png">
                <div class="border-item-1">
                    <span class="name">North America</span>
                    <h2 class="title">70.7%</h2>
                </div>
                <div class="border-item-2">
                    <span class="name">Asia</span>
                    <h2 class="title">14.4%</h2>
                </div>
                <div class="border-item-3">
                    <span class="name">North Europe</span>
                    <h2 class="title">8.4%</h2>
                </div>
                <div class="border-item-4">
                    <span class="name">South America</span>
                    <h2 class="title">1.8%</h2>
                </div>
                <div class="border-item-5">
                    <span class="name">Africa</span>
                    <h2 class="title">1.8%</h2>
                </div>
                <div class="border-item-6">
                    <span class="name">Australia</span>
                    <h2 class="title">3%</h2>
                </div>
            </div>
        </div>
    </section>
    <!--============= Coverage Section Ends Here =============-->

@include('common.footer')