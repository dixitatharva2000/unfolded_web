@extends('web.partials.layouts.wrapper')
@section('title', 'Home Page')

@section('content')


    <!--===== HERO AREA START=======-->

    <div class="hero1">
        <div class="container">
            <div class="hero1-bg bg-cover" style="background-image: url({{ asset('web/assets/img/bg/hero1-bg.jpg') }})">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="main-image reveal">
                            <img src="{{ asset('web/assets/img/hero/hero_new-bg.png') }}" alt="vexon" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="main-heading1">
                            <h2 class="text-anime-style-2">Unlocking the Future of Software Solutions</h2>
                            <p class="mt-16 paragraph" data-aos="fade-left" data-aos-duration="400" data-aos-delay="100">
                                Technology is more than just code—it’s the backbone of innovation, efficiency, and growth.
                                At Unfolded Software Services, we deliver cutting-edge software solutions that empower
                                businesses to streamline operations, enhance performance, and stay ahead in the digital era.
                                With our expertise, you gain the tools and strategies needed to transform challenges into
                                opportunities.
                            </p>
                            <div class="form-area">
                                <form action="#" data-aos="fade-left" data-aos-duration="400" data-aos-delay="100">
                                    <input type="email" placeholder="Enter Your Email" />
                                    <div class="button">
                                        <button class="theme-btn1">Get Started</button>
                                    </div>
                                </form>
                            </div>
                            <p class="bottom-content" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="100">❊
                                Connect, engage, & inspire—social media success starts here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== HERO AREA END=======-->

    <!--===== ABOUT US AREA START=======-->

    <div class="blog1-cetegorys">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading1">
                        <h2 class="text-anime-style-2" id="aboutus">About Us</h2>
                    </div>
                </div>
            </div>

            <div class="row mt-30 sm:mt-0 md:mt-0">
                <div class="col-lg col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400"
                    data-aos-delay="450">
                    <p class="paragraph ">
                        We are a global marketing and technology agency that transforms businesses for the digital age. We
                        exist to help brands embrace the creative and technological changes revolutionising all aspects of
                        their business.

                        Our expertise across insight, brand building, creative storytelling and real-time distribution
                        enables brands to get fit for the future, no matter where we join them on their digital journey
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--===== ABOUT US AREA END=======-->

    <!--===== BLOG CETEGORYS START=======-->
    <div class="blog1-cetegorys sp" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading1">
                        <h2 class="text-anime-style-2">Our Services</h2>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400" data-aos-delay="350">
                    <div class="text-end md:text-start sm:text-start sm:mt-20 md:mt-20">
                        <a class="theme-btn1" href="categories.html">Explore All Topic </a>
                    </div>
                </div>
            </div>

            <!-- Service Tabs -->
            <!-- Service Tabs -->
            <div class="service-tabs text-center my-5">
                <ul class="nav justify-content-center" id="serviceTab" role="tablist">
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link active commoncolor" data-bs-toggle="tab" data-bs-target="#civil"
                            type="button">
                            <div class="tab-icon"><i class="fas fa-drafting-compass"></i></div>
                            <span>Civil Engineering</span>
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#webdev" type="button">
                            <div class="tab-icon"><i class="fas fa-code"></i></div>
                            <span>Web Development</span>
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pharma" type="button">
                            <div class="tab-icon"><i class="fas fa-pills"></i></div>
                            <span>DME Pharmacy</span>
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#recruit" type="button">
                            <div class="tab-icon"><i class="fas fa-user-tie"></i></div>
                            <span>Recruitment & Staffing</span>
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#lop" type="button">
                            <div class="tab-icon"><i class="fas fa-briefcase"></i></div>
                            <span>LOP Services</span>
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content mt-4" id="serviceTabContent">

                <!-- Civil Engineering Tab -->
                <div class="tab-pane fade show active" id="civil">
                    <!-- Core Services -->
                    <div class="service-category p-4 mb-4 shadow-sm rounded bg-white">
                        <h5 class="fw-bold commontextcolor border-bottom pb-2 mb-3">🏗️ Core Civil Engineering Services
                        </h5>
                        <div class="row g-3">
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Structural Design &
                                Analysis</div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Building Construction &
                                Supervision</div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Roads, Highways &
                                Expressways</div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Bridges & Flyovers</div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Railway Infrastructure
                            </div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Airports & Runways</div>
                        </div>
                    </div>

                    <!-- Infrastructure -->
                    <div class="service-category p-4 mb-4 shadow-sm rounded bg-white">
                        <h5 class="fw-bold commontextcolor border-bottom pb-2 mb-3">🌍 Infrastructure & Urban Development
                        </h5>
                        <div class="row g-3">
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Urban Planning & Smart
                                City Solutions</div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Water Supply &
                                Distribution Systems</div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Sewage & Drainage Systems
                            </div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Solid Waste Management
                            </div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Stormwater Management
                            </div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Public Utility
                                Infrastructure</div>
                        </div>
                    </div>

                    <!-- Water Resources -->
                    <div class="service-category p-4 mb-4 shadow-sm rounded bg-white">
                        <h5 class="fw-bold commontextcolor border-bottom pb-2 mb-3">🌊 Water Resources & Environmental
                            Engineering</h5>
                        <div class="row g-3">
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Dams & Reservoirs</div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Irrigation Systems &
                                Canals</div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> River Training & Flood
                                Control</div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Coastal Protection &
                                Marine Structures</div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Environmental Impact
                                Assessment (EIA)</div>
                            <div class="col-md-4"><i class="fas fa-check text-success me-2"></i> Sustainability & Green
                                Building Solutions</div>
                        </div>
                    </div>
                </div>

                <!-- Other Tabs (empty for now) -->
                <!-- Web Development Tab -->
                <div class="tab-pane fade" id="webdev">
                    <div class="service-category p-3 mb-3 shadow-sm rounded bg-white">
                        <h5 class="fw-bold commontextcolor border-bottom pb-2 mb-3">
                            💻 Web Development Services
                        </h5>
                        <div class="row g-2 small">
                            <div class="col-md-6 col-lg-4">
                                <i class="fas fa-check text-success me-2"></i> Custom Website Development
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <i class="fas fa-check text-success me-2"></i> E-Commerce Solutions
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <i class="fas fa-check text-success me-2"></i> Web Applications & Portals
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <i class="fas fa-check text-success me-2"></i> UI/UX Design & Optimization
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pharma">
                    <div class="service-category p-3 mb-3 shadow-sm rounded bg-white">
                        <h5 class="fw-bold commontextcolor border-bottom pb-2 mb-3">
                            💊 DME Pharmacy Services
                        </h5>
                        <div class="row g-2 small">
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> Durable Medical Equipment (DME) Supply
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> Pharmacy Services
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> Home Health Care Solutions
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> Insurance & Billing Assistance
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="recruit">
                    <div class="service-category p-3 mb-3 shadow-sm rounded bg-white">
                        <h5 class="fw-bold commontextcolor border-bottom pb-2 mb-3">
                            👥 Recruitment & Staffing Services
                        </h5>
                        <div class="row g-2 small">
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> Talent Acquisition & Hiring
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> Temporary & Contract Staffing
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> Executive Search & Head-Hunting
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> HR Consulting & Workforce Management
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="lop">
                    <div class="service-category p-3 mb-3 shadow-sm rounded bg-white">
                        <h5 class="fw-bold commontextcolor border-bottom pb-2 mb-3">
                            📊 LOP (Loss of Pay) Services
                        </h5>
                        <div class="row g-2 small">
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> Leave Management Solutions
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> Payroll Processing & Compliance
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> Employee Attendance Integration
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <i class="fas fa-check text-success me-2"></i> Reporting & Analytics
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== BLOG CETEGORYS END=======-->

    <!--===== OWL CAROUSEL END=======-->

    <div class="blog2-meets bg-cover sp bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading2">
                        <h2 class="text-anime-style-2">Our Partners</h2>
                    </div>
                </div>
                <div class="col-lg-6" data-aos-offset="50" data-aos="fade-up" data-aos-duration="400"
                    data-aos-delay="100">
                    <div class="blog2-meets-btns text-end md:text-start sm:text-start sm:mt-20 md:mt-20">
                        <button class="blog2-slider-prev"><i class="fa-solid fa-angle-left"></i></button>
                        <button class="blog2-slider-next"><i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="row" data-aos-offset="50" data-aos="fade-up" data-aos-duration="400" data-aos-delay="100">
                <div class="col-lg-12">
                    <div class="blog2-meets-slider mt-60">
                        <div class="blog2-meets-single">
                            <div class="image">
                                <img src="{{ asset('web/assets/img/partners/partner1.png') }}" alt="vexon" />
                            </div>
                        </div>

                        <div class="blog2-meets-single">
                            <div class="image">
                                <img src="{{ asset('web/assets/img/partners/partner2.png') }}" alt="vexon" />
                            </div>
                        </div>

                        <div class="blog2-meets-single">
                            <div class="image">
                                <img src="{{ asset('web/assets/img/partners/partner3.png') }}" alt="vexon" />
                            </div>
                        </div>

                        <div class="blog2-meets-single">
                            <div class="image">
                                <img src="{{ asset('web/assets/img/partners/partner4.png') }}" alt="vexon" />
                            </div>
                        </div>

                        <div class="blog2-meets-single">
                            <div class="image">
                                <img src="{{ asset('web/assets/img/partners/partner5.png') }}" alt="vexon" />
                            </div>
                        </div>

                        <div class="blog2-meets-single">
                            <div class="image">
                                <img src="{{ asset('web/assets/img/partners/partner6.png') }}" alt="vexon" />
                            </div>
                        </div>

                        <div class="blog2-meets-single">
                            <div class="image">
                                <img src="{{ asset('web/assets/img/partners/partner7.png') }}" alt="vexon" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--===== OWL CAROUSEL END=======-->


    <!--===== CTA AREA START=======-->

    <div class="cta1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos-offset="50" data-aos="fade-right" data-aos-duration="400"
                    data-aos-delay="300">
                    <div class="heading1-w">
                        <p class="mt-16 paragraph fs-5">The UNFOLDED is managed by an entrepreneur with experience of 14
                            years in maximum
                            sectors as individual.</p>
                        <p class="paragraph fs-5">
                            The flagship company, UnFolded, is the supporting company for most of the service sectors; each
                            sector is treated as an individual business module for specific service deliverance for any
                            business type. Backward vertical integration has been the cornerstone of the evolution and
                            growth of UnFolded.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image text-end sm:text-start md:text-start sm:mt-30 md:mt-30">
                        <img src="{{ asset('web/assets/img/hero/whoweare.png') }}" alt="vexon" />
                    </div>
                </div>
            </div>

            <hr>

            <div class="row align-items-center ">
                <div class="col-lg-6">
                    <div class="image text-end sm:text-start md:text-start sm:mt-30 md:mt-30 ">
                        <img src="{{ asset('web/assets/img/hero/whatwedo.png') }}" alt="vexon" />
                    </div>
                </div>
                <div class="col-lg-6" data-aos-offset="50" data-aos="fade-left" data-aos-duration="400"
                    data-aos-delay="300">
                    <div class="heading1-w">
                        <p class="mt-16 paragraph fs-5">Unfolded delivered events, business management and media services
                            in the past
                            decade, Unfolded pursued a strategy of backward vertical integration – In education, IT
                            solutions, production house, brand management, strategy marketing designing, product launch,
                            hunting sponsorship, event stall booking concepts development, finance solutions, social
                            integrity and leadership - to be fully integrated along the business services and modular value
                            chain.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog1-cetegorys sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading1">
                        <h5 class="text-anime-style-2 commontextcolor">Our Members</h5>
                        <h1 class="text-anime-style-1">Meet Our Team</h1>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="carousel-container">
                    <button class="nav-arrow left">‹</button>
                    <div class="carousel-track">
                        <div class="card" data-index="0">
                            <img src="{{ asset('web/assets/img/members/member1.jpg') }}" alt="Team Member 1">
                        </div>
                        <div class="card" data-index="1">
                            <img src="{{ asset('web/assets/img/members/member2.jpg') }}" alt="Team Member 2">
                        </div>
                        <div class="card" data-index="2">
                            <img src="{{ asset('web/assets/img/members/member3.jpg') }}" alt="Team Member 3">
                        </div>
                        <div class="card" data-index="3">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cHJvZmVzc2lvbmFsJTIwcGVvcGxlfGVufDB8fDB8fHww"
                                alt="Team Member 4">
                        </div>
                        <div class="card" data-index="4">
                            <img src="https://images.unsplash.com/photo-1655249481446-25d575f1c054?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjh8fHByb2Zlc3Npb25hbCUyMHBlb3BsZXxlbnwwfHwwfHx8MA%3D%3D"
                                alt="Team Member 5">
                        </div>
                        <div class="card" data-index="5">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=3687&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Team Member 6">
                        </div>
                    </div>
                    <button class="nav-arrow right">›</button>
                </div>

                <div class="member-info">
                    <h2 class="member-name">David Kim</h2>
                    <p class="member-role">Founder</p>
                </div>

                <div class="dots">
                    <div class="dot active" data-index="0"></div>
                    <div class="dot" data-index="1"></div>
                    <div class="dot" data-index="2"></div>
                </div>
            </div>
        </div>
    </div>


    <!--===== CTA AREA END=======-->


    <div class="cta1">
        <div class="container">
            <section id="counter-stats">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-6 stats">
                            <div class="counting" data-count="820">0</div>
                            <h5 class="teammembersname">Happy clients</h5>
                        </div>

                        <div class="col-lg-3 col-6 stats">
                            <div class="counting" data-count="182">0</div>
                            <h5 class="teammembersname">Complete Projects</h5>
                        </div>

                        <div class="col-lg-3 col-6 stats">
                            <div class="counting" data-count="20">0</div>
                            <h5 class="teammembersname">World Factory</h5>
                        </div>

                        <div class="col-lg-3 col-6 stats">
                            <div class="counting" data-count="487">0</div>
                            <h5 class="teammembersname">Contractors</h5>
                        </div>


                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->

            </section>

            <!-- end cont stats -->
        </div>
    </div>

    <div class="blog1-cetegorys sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading1">
                        <h1 class="text-anime-style-1">What Client Saw?</h1>
                    </div>
                </div>
            </div>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row mt-30 sm:mt-0 md:mt-0">
                            <div class="col-lg-5 col-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="blog1-cetegory-box mt-30 text-center">
                                    <div class="image-anime rounded-circle">
                                        <img src="{{ asset('web/assets/img/clients/client1.jpg') }}"
                                            class="teammembersimage" alt="vexon" />
                                    </div>
                                    <div class="heading1 mt-16 teammembersname">
                                        <h4>Parker Jimenez</h4>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="customer-card">
                                    <h4 class="mb-3">Parker Jimenez Says:</h4>
                                    <p class="card-text">
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mt-30 sm:mt-0 md:mt-0">
                            <div class="col-lg-5 col-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="blog1-cetegory-box mt-30 text-center">
                                    <div class="image-anime rounded-circle">
                                        <img src="{{ asset('web/assets/img/clients/client2.jpg') }}"
                                            class="teammembersimage" alt="vexon" />
                                    </div>
                                    <div class="heading1 mt-16 teammembersname">
                                        <h4>Reid E Butt</h4>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="customer-card">
                                    <h4 class="mb-3">Reid E Butt Says:</h4>
                                    <p class="card-text">
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mt-30 sm:mt-0 md:mt-0">
                            <div class="col-lg-5 col-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="blog1-cetegory-box mt-30 text-center">
                                    <div class="image-anime rounded-circle">
                                        <img src="{{ asset('web/assets/img/clients/client3.jpg') }}"
                                            class="teammembersimage" alt="vexon" />
                                    </div>
                                    <div class="heading1 mt-16 teammembersname">
                                        <h4>Gordon D Novak</h4>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="customer-card">
                                    <h4 class="mb-3">Gordon D Novak Says:</h4>
                                    <p class="card-text">
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mt-30 sm:mt-0 md:mt-0">
                            <div class="col-lg-5 col-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="blog1-cetegory-box mt-30 text-center">
                                    <div class="image-anime rounded-circle">
                                        <img src="{{ asset('web/assets/img/clients/client4.jpg') }}"
                                            class="teammembersimage" alt="vexon" />
                                    </div>
                                    <div class="heading1 mt-16 teammembersname">
                                        <h4>Sylvia H Green</h4>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="customer-card">
                                    <h4 class="mb-3">Sylvia H Green Says:</h4>
                                    <p class="card-text">
                                        There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
    </div>

    <div class="blog1-cetegorys sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading1">
                        <h1 class="text-anime-style-1">FAQ's</h1>
                    </div>
                </div>
                <div class="col-12 my-3">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed accbtn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Why People Choose Us?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto suscipit dicta aut quod. Qui, perferendis odit rem sint explicabo esse
                                    assumenda ut repellat? Similique voluptatem debitis, deleniti aut magnam saepe?</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed accbtn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Our Working Method
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto suscipit dicta aut quod. Qui, perferendis odit rem sint explicabo esse
                                    assumenda ut repellat? Similique voluptatem debitis, deleniti aut magnam saepe?</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed accbtn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Our Approach
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto suscipit dicta aut quod. Qui, perferendis odit rem sint explicabo esse
                                    assumenda ut repellat? Similique voluptatem debitis, deleniti aut magnam saepe?</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .carousel-container {
            width: 100%;
            height: 450px;
            position: relative;
            perspective: 1000px;
            margin-top: 80px;
        }

        .carousel-track {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .card {
            position: absolute;
            width: 280px;
            height: 380px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            cursor: pointer;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .card.center {
            z-index: 10;
            transform: scale(1.1) translateZ(0);
        }

        .card.center img {
            filter: none;
        }

        .card.left-2 {
            z-index: 1;
            transform: translateX(-400px) scale(0.8) translateZ(-300px);
            opacity: 0.7;
        }

        .card.left-2 img {
            filter: grayscale(100%);
        }

        .card.left-1 {
            z-index: 5;
            transform: translateX(-200px) scale(0.9) translateZ(-100px);
            opacity: 0.9;
        }

        .card.left-1 img {
            filter: grayscale(100%);
        }

        .card.right-1 {
            z-index: 5;
            transform: translateX(200px) scale(0.9) translateZ(-100px);
            opacity: 0.9;
        }

        .card.right-1 img {
            filter: grayscale(100%);
        }

        .card.right-2 {
            z-index: 1;
            transform: translateX(400px) scale(0.8) translateZ(-300px);
            opacity: 0.7;
        }

        .card.right-2 img {
            filter: grayscale(100%);
        }

        .card.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .member-info {
            text-align: center;
            margin-top: 40px;
            transition: all 0.5s ease-out;
        }

        .member-name {
            color: rgb(8, 42, 123);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        .member-name::before,
        .member-name::after {
            content: "";
            position: absolute;
            top: 100%;
            width: 100px;
            height: 2px;
            background: rgb(8, 42, 123);
        }

        .member-name::before {
            left: -120px;
        }

        .member-name::after {
            right: -120px;
        }

        .member-role {
            color: #848696;
            font-size: 1.5rem;
            font-weight: 500;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            padding: 10px 0;
            margin-top: -15px;
            position: relative;
        }

        .dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 60px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(8, 42, 123, 0.2);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background: rgb(8, 42, 123);
            transform: scale(1.2);
        }

        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(8, 42, 123, 0.6);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 20;
            transition: all 0.3s ease;
            font-size: 1.5rem;
            border: none;
            outline: none;
            padding-bottom: 4px;
        }

        .nav-arrow:hover {
            background: rgba(0, 0, 0, 0.8);
            transform: translateY(-50%) scale(1.1);
        }

        .nav-arrow.left {
            left: 20px;
            padding-right: 3px;
        }

        .nav-arrow.right {
            right: 20px;
            padding-left: 3px;
        }

        @media (max-width: 768px) {
            .about-title {
                font-size: 4.5rem;
            }

            .card {
                width: 200px;
                height: 280px;
            }

            .card.left-2 {
                transform: translateX(-250px) scale(0.8) translateZ(-300px);
            }

            .card.left-1 {
                transform: translateX(-120px) scale(0.9) translateZ(-100px);
            }

            .card.right-1 {
                transform: translateX(120px) scale(0.9) translateZ(-100px);
            }

            .card.right-2 {
                transform: translateX(250px) scale(0.8) translateZ(-300px);
            }

            .member-name {
                font-size: 2rem;
            }

            .member-role {
                font-size: 1.2rem;
            }

            .member-name::before,
            .member-name::after {
                width: 50px;
            }

            .member-name::before {
                left: -70px;
            }

            .member-name::after {
                right: -70px;
            }
        }
    </style>
    <script>
        const teamMembers = [{
                name: "Malissa Fie",
                role: "Poultry Farmer"
            },
            {
                name: "Arron Rodri",
                role: "Poultry Farmer"
            },
            {
                name: "Chad Smith",
                role: "Poultry Farmer"
            },
            {
                name: "Julia Gimmel",
                role: "UX Designer"
            },
            {
                name: "Lisa Anderson",
                role: "Marketing Manager"
            },
            {
                name: "James Wilson",
                role: "Product Manager"
            }
        ];

        const cards = document.querySelectorAll(".card");
        const dots = document.querySelectorAll(".dot");
        const memberName = document.querySelector(".member-name");
        const memberRole = document.querySelector(".member-role");
        const leftArrow = document.querySelector(".nav-arrow.left");
        const rightArrow = document.querySelector(".nav-arrow.right");
        let currentIndex = 0;
        let isAnimating = false;

        function updateCarousel(newIndex) {
            if (isAnimating) return;
            isAnimating = true;

            currentIndex = (newIndex + cards.length) % cards.length;

            cards.forEach((card, i) => {
                const offset = (i - currentIndex + cards.length) % cards.length;

                card.classList.remove(
                    "center",
                    "left-1",
                    "left-2",
                    "right-1",
                    "right-2",
                    "hidden"
                );

                if (offset === 0) {
                    card.classList.add("center");
                } else if (offset === 1) {
                    card.classList.add("right-1");
                } else if (offset === 2) {
                    card.classList.add("right-2");
                } else if (offset === cards.length - 1) {
                    card.classList.add("left-1");
                } else if (offset === cards.length - 2) {
                    card.classList.add("left-2");
                } else {
                    card.classList.add("hidden");
                }
            });

            dots.forEach((dot, i) => {
                dot.classList.toggle("active", i === currentIndex);
            });

            memberName.style.opacity = "0";
            memberRole.style.opacity = "0";

            setTimeout(() => {
                memberName.textContent = teamMembers[currentIndex].name;
                memberRole.textContent = teamMembers[currentIndex].role;
                memberName.style.opacity = "1";
                memberRole.style.opacity = "1";
            }, 300);

            setTimeout(() => {
                isAnimating = false;
            }, 800);
        }

        leftArrow.addEventListener("click", () => {
            updateCarousel(currentIndex - 1);
        });

        rightArrow.addEventListener("click", () => {
            updateCarousel(currentIndex + 1);
        });

        dots.forEach((dot, i) => {
            dot.addEventListener("click", () => {
                updateCarousel(i);
            });
        });

        cards.forEach((card, i) => {
            card.addEventListener("click", () => {
                updateCarousel(i);
            });
        });

        document.addEventListener("keydown", (e) => {
            if (e.key === "ArrowLeft") {
                updateCarousel(currentIndex - 1);
            } else if (e.key === "ArrowRight") {
                updateCarousel(currentIndex + 1);
            }
        });

        let touchStartX = 0;
        let touchEndX = 0;

        document.addEventListener("touchstart", (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        document.addEventListener("touchend", (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    updateCarousel(currentIndex + 1);
                } else {
                    updateCarousel(currentIndex - 1);
                }
            }
        }

        updateCarousel(0);
    </script>
    <script>
        $('.counting').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');

            $({
                countNum: $this.text()
            }).animate({
                    countNum: countTo
                },

                {

                    duration: 3000,
                    easing: 'linear',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });


        });
    </script>
@endsection
