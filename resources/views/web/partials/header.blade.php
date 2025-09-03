	<!-- search popup start -->
	<div class="search__popup">
		<div class="container">
			<div class="row">
				<div class="col-xxl-12">
					<div class="search__wrapper">
						<div class="search__top d-flex justify-content-between align-items-center">
							<div class="search__logo">
								<a href="index.html">
									<img src="{{ asset('web/assets/img/logo/white-logo.png') }}"
                                    style="height: 100px;" alt="vexon" />
								</a>
							</div>
							<div class="search__close">
								<button type="button" class="search__close-btn search-close-btn">
									<svg width="18" height="18" viewBox="0 0 18 18" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5"
											stroke-linecap="round" stroke-linejoin="round" />
										<path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5"
											stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</button>
							</div>
						</div>
						<div class="search__form">
							<form action="#">
								<div class="search__input">
									<input class="search-input-field" type="text"
										placeholder="Type here to search..." />
									<span class="search-focus-border"></span>
									<button type="submit">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
												stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor"
												stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- search popup end -->

	<!--=====HEADER START=======-->
	<header>
		<div class="header-area header-area1 d-none d-lg-block" id="header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header-elements">
							<div class="site-logo">
								<a href="index.html">
									<img src="{{ asset('web/assets/img/logo/logo1.png') }}" alt="vexon" />
								</a>
							</div>

							<div class="main-menu-ex main-menu-ex1">
								<ul>
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="#aboutus">About us</a>
                                    </li>
                                    <li>
                                        <a href="#services">Services</a>
                                    </li>
                                    <li>
                                        <a href="#gallery">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="#faqs">FAQ's</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('web.contact') }}">Contact us</a>
                                    </li>
								</ul>
							</div>

							<div class="header1-buttons">
								<div class="vl-search-top">
									<button class="search-open-btn"><i
											class="fa-regular fa-magnifying-glass"></i></button>
								</div>
								<a class="theme-btn1" href="sigup.html">Get in Touch</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!--=====HEADER END=======-->

	<!--=====Mobile header start=======-->
	<div class="mobile-header mobile-header-main d-block d-lg-none">
		<div class="container-fluid">
			<div class="col-12">
				<div class="mobile-header-elements">
					<div class="mobile-logo">
						<a href="index1.html"><img src="{{ asset('web/assets/img/logo/logo1.png') }}" alt="vexon" /></a>
					</div>
					<div class="mobile-nav-icon">
						<i class="fa-duotone fa-bars-staggered"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mobile-sidebar d-block d-lg-none">
		<div class="logo-m">
			<a href="index.html"><img src="{{ asset('web/assets/img/logo/logo1.png') }}" alt="vexon" /></a>
		</div>
		<div class="menu-close">
			<i class="fa-solid fa-xmark"></i>
		</div>
		<div class="mobile-nav">
			<ul>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>

			<div class="mobile-button">
				<a class="theme-btn1" href="contact.html">Get A Quote <i class="fa-solid fa-arrow-right"></i></a>
			</div>

			<div class="footer-contact-area1 md:pl-0 pl-20 sm:pl-0 mt-30">
				<h3 class="text-24 leading-26 font-semibold title1 pb-10">Get in touch</h3>
				<div class="contact-box d-flex">
					<div class="icon">
						<img src="assets/img/icons/footer1-icon1.svg" alt="vexon" />
					</div>
					<div class="text">
						<a href="mailto:contact@vexon.com">contact@vexon.com</a>
					</div>
				</div>

				<div class="contact-box d-flex">
					<div class="icon">
						<img src="assets/img/icons/footer1-icon2.svg" alt="vexon" />
					</div>
					<div class="text">
						<a href="#">123 Innovation Drive,<br />
							Tech City, ST 12345, USA</a>
					</div>
				</div>

				<div class="contact-box d-flex">
					<div class="icon">
						<img src="assets/img/icons/footer1-icon3.svg" alt="vexon" />
					</div>
					<div class="text">
						<a href="tel:123-456-7890">123-456-7890</a>
					</div>
				</div>
			</div>

			<div class="contact-infos">
				<h3>Our Social Network</h3>
				<ul class="social-icon">
					<li>
						<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa-brands fa-youtube"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!--=====Mobile header end=======-->
