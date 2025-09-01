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
                            <h1 class="text-anime-style-3">Unlocking the Future of Software Solutions</h1>
                            <p class="mt-16" data-aos="fade-left" data-aos-duration="400" data-aos-delay="100">
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

    <!--===== BLOG AREA START=======-->

    <div class="blog1 sp bg1 _relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog1-posts-area">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400"
                                data-aos-delay="0">
                                <div class="blog1-single-box">
                                    <div class="thumbnail image-anime">
                                        <img src="{{ asset('web/assets/img/blog/blog1-image1.png') }}" alt="vexon" />
                                    </div>
                                    <div class="heading1">
                                        <div class="social-area">
                                            <a href="social-media.html" class="social">Social Media</a>
                                            <a href="categories.html" class="time"><img
                                                    src="{{ asset('web/assets/img/icons/time1.svg') }}" alt="vexon" /> 3
                                                min read</a>
                                        </div>
                                        <h4><a href="blog-single.html">The Art of Building a Strong Personal Brand on
                                                Social Media</a></h4>
                                        <p class="mt-16">This post explores strategies to help create an authentic and
                                            memorable brand presence on social media that resonates with audience.</p>
                                        <div class="author-area">
                                            <div class="author">
                                                <div class="author-tumb">
                                                    <img src="{{ asset('web/assets/img/blog/blog1-author1.png') }}"
                                                        alt="vexon" />
                                                </div>
                                                <a href="author.html" class="author-text">Kimberly Mastrangelo</a>
                                            </div>
                                            <div class="date">
                                                <a href="#"><img src="{{ asset('web/assets/img/icons/date1.svg') }}"
                                                        alt="vexon" /> Oct 26,
                                                    2024 </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400"
                                data-aos-delay="100">
                                <div class="blog1-single-box sm:mt-30">
                                    <div class="thumbnail image-anime">
                                        <img src="{{ asset('web/assets/img/blog/blog1-image2.png') }}" alt="vexon" />
                                    </div>
                                    <div class="heading1">
                                        <div class="social-area">
                                            <a href="social-media.html" class="social">Social Media</a>
                                            <a href="categories.html" class="time"><img
                                                    src="{{ asset('web/assets/img/icons/time1.svg') }}" alt="vexon" /> 3
                                                min read</a>
                                        </div>
                                        <h4><a href="blog-single.html">Proven Strategies to Boost Your Social Media
                                                Metrics</a></h4>
                                        <p class="mt-16">Engagement is key to building a loyal following. Learn
                                            techniques for crafting posts that invite interaction, encouraging shares.
                                        </p>
                                        <div class="author-area">
                                            <div class="author">
                                                <div class="author-tumb">
                                                    <img src="{{ asset('web/assets/img/blog/blog1-author2.png') }}"
                                                        alt="vexon" />
                                                </div>
                                                <a href="author.html" class="author-text">Kathy Pacheco</a>
                                            </div>
                                            <div class="date">
                                                <a href="#"><img src="{{ asset('web/assets/img/icons/date1.svg') }}"
                                                        alt="vexon" /> Oct 21,
                                                    2024 </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space60"></div>
                        <div class="row" data-aos-offset="50" data-aos="fade-up" data-aos-duration="400">
                            <div class="col-12 m-auto">
                                <div class="theme-pagination text-center">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-angle-left"></i></a>
                                        </li>
                                        <li><a class="active" href="#">01</a></li>
                                        <li><a href="#">02</a></li>
                                        <li>...</li>
                                        <li><a href="#">12</a></li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog1-sidebar-area ml-30 sm:ml-0 md:ml-0 md:mt-30 sm:mt-30">
                        <div class="sidebar-widget_1 _recent-posts mt-40">
                            <h3>Recent Post</h3>

                            <div class="blog1-recent-box">
                                <div class="">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('web/assets/img/blog/blog1-recent1.png') }}" alt="vexon" />
                                    </div>
                                </div>
                                <div class="heading">
                                    <a href="#" class="date"><img
                                            src="{{ asset('web/assets/img/icons/date1.svg') }}" alt="vexon" /> Oct
                                        13, 2024</a>
                                    <h5><a href="blog-single.html">The Power of Storytelling: How Make Your Brand’s
                                            Voice...</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-slider-widget mt-40">
                            <div class="sidebar-single-slider">
                                <div class="social-top">
                                    <a href="#" class="social">Social Media</a>
                                    <a href="#" class="time"><img
                                            src="{{ asset('web/assets/img/icons/time1.svg') }}" alt="vexon" /> 3 min
                                        read</a>
                                </div>
                                <div class="heading-area">
                                    <div class="_author-area">
                                        <div class="author">
                                            <div class="author_thumb">
                                                <img src="{{ asset('web/assets/img/blog/blog1-author2.png') }}"
                                                    alt="vexon" />
                                            </div>
                                            <span class="author-name">Lorri Warf</span>
                                        </div>
                                        <span class="date"><img src="{{ asset('web/assets/img/icons/date1.svg') }}"
                                                alt="vexon" /> Oct 21,
                                            2024</span>
                                    </div>
                                    <h4><a href="blog-single.html">Handling Negative Feedback: Maintaining Brand
                                            Reputation on Social Media</a></h4>
                                </div>
                            </div>

                            <div class="sidebar-single-slider">
                                <div class="social-top">
                                    <a href="#" class="social">Social Media</a>
                                    <a href="#" class="time"><img
                                            src="{{ asset('web/assets/img/icons/time1.svg') }}" alt="vexon" /> 3 min
                                        read</a>
                                </div>
                                <div class="heading-area">
                                    <div class="_author-area">
                                        <div class="author">
                                            <div class="author_thumb">
                                                <img src="{{ asset('web/assets/img/blog/blog1-author2.png') }}"
                                                    alt="vexon" />
                                            </div>
                                            <span class="author-name">Lorri Warf</span>
                                        </div>
                                        <span class="date"><img src="{{ asset('web/assets/img/icons/date1.svg') }}"
                                                alt="vexon" /> Oct 21,
                                            2024</span>
                                    </div>
                                    <h4><a href="blog-single.html">Handling Negative Feedback: Maintaining Brand
                                            Reputation on Social Media</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget_1 mt-70 _experience">
                            <h3>Work Experience</h3>
                            <div class="_experience-box divider">
                                <p class="bold-text">Product Design</p>
                                <p class="normal-text">2020 - Now</p>
                            </div>
                        </div>

                        <div class="sidebar-widget_1 instagram-feed mt-40">
                            <h3>Instagram Posts</h3>

                            <div class="feed-all">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="feed-single">
                                            <div class="image">
                                                <img src="{{ asset('web/assets/img/blog/blog1-feed1.png') }}"
                                                    alt="vexon" />
                                                <a href="#" class="insta"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="insta-btn">View on Instagram <span><i
                                        class="fa-regular fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== BLOG AREA END=======-->

    <!--===== BLOG CETEGORYS START=======-->
    <div class="blog1-cetegorys sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading1">
                        <h2 class="text-anime-style-3">All Blog Post Categories</h2>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400"
                    data-aos-delay="350">
                    <div class="text-end md:text-start sm:text-start sm:mt-20 md:mt-20">
                        <a class="theme-btn1" href="categories.html">Explore All Topic </a>
                    </div>
                </div>
            </div>

            <div class="row mt-30 sm:mt-0 md:mt-0">
                <div class="col-lg col-md-6" data-aos="fade-up" data-aos-offset="50" data-aos-duration="400"
                    data-aos-delay="450">
                    <div class="blog1-cetegory-box mt-30 text-center">
                        <div class="image image-anime">
                            <img src="{{ asset('web/assets/img/blog/blog1-cetegroy-post1.png') }}" style="height: 100px !important; width: 100px !important;" alt="vexon" />
                        </div>
                        <div class="heading1 mt-16">
                            <h4><a href="social-media.html">Social Media </a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== BLOG CETEGORYS END=======-->

    <!--===== CTA AREA START=======-->

    <div class="cta1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading1-w">
                        <h2>Ready to Elevate Your Social Media Game?</h2>
                        <p class="mt-16">Unlock the tools and insights you need to thrive on social media with Vexon.
                            Join our community for expert tips, trending strategies, and resources that empower you to
                            stand out and succeed.</p>
                        <div class="form-area">
                            <form action="#">
                                <input type="email" placeholder="Enter Your Email" />
                                <div class="button">
                                    <button class="theme-btn1">Get Started</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image text-end sm:text-start md:text-start sm:mt-30 md:mt-30">
                        <img src="{{ asset('web/assets/img/hero/hero_new-bg.png') }}" alt="vexon" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== CTA AREA END=======-->




@endsection
