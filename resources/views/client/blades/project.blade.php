@extends('client.core.client')
@section('content')
		<div  class="transition-fade">
			<div class="mry-content-frame" id="scroll">
				<div class="banner-inner">
					<canvas class="mry-dots" style="display: none"></canvas>

					<div class="mry-head-bg">
						<img src="{{asset('build/client/images/portfolio.png')}}" alt="background">
						<div class="mry-bg-overlay"></div>
					</div>

					<div class="mry-banner mry-p-140-0">
						<div class="container">
							<div class="mry-main-title mry-title-center">
								<div class="mry-subtitle mry-mb-20 mry-fo">Newsletter</div>
								<h1 class="mry-mb-20 mry-fo">Greenwell Yards<br><span class="mry-border-text">Country house</span><span class="mry-animation-el"></span></h1>
								<div class="mry-text mry-fo">Architecture, Interior Design</div>
								<div class="mry-scroll-hint-frame">
									<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
										<span class="mry-magnetic-object"></span>
									</a>
									<div class="mry-label mry-fo">Scroll Down</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- project -->
				<div class="mry-about mry-p-100-100">
					<div class="container">
						<div class="row justify-content-center">

							<div class="col-lg-8">

								<div class="mry-mb-100 mry-text-center">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">01</div>
										<div class="mry-subtitle">Goal</div>
									</div>
									<h3 class="mry-mb-40 mry-fo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, id!</h3>
									<p class="mry-text mry-fo">We has expertise in branding and brand strategy, website design, social media management, content marketing, pay-per-click advertising
										(PPC) and search engine optimization (SEO). As a leading
										website design company in Toronto we have expertise in WordPress design and development, e-commerce website design and development, Shopify website design and
										development and cater <br>to SMB and enterprise clients.</p>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="mry-main-title mry-title-center mry-p-0-40">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">02</div>
										<div class="mry-subtitle">Project</div>
									</div>
									<h3 class="mry-mb-40 mry-fo">Project gallery</h3>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="mry-portfolio-frame">
									<div class="mry-masonry-grid mry-without-descr mry-p-0-100">
										<div class="mry-grid-sizer"></div>

										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<img src="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="i{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
																	class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 mry-masonry-grid-item-h-x-2 repair">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-cover-overlay"></div>
													<img src="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" alt="project" >
													<div class="mry-hover-links">
														<a href="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
																	class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior repair">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<img src="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
																	class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 mry-masonry-grid-item-h-x-2 interior">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<img src="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
																	class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<img src="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
																	class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<img src="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
																	class="fas fa-expand"></i></span></a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">

								<div class="mry-mb-100 mry-text-center">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">03</div>
										<div class="mry-subtitle">Result</div>
									</div>
									<h3 class="mry-mb-40 mry-fo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, id!</h3>
									<p class="mry-text mry-fo">We has expertise in branding and brand strategy, website design, social media management, content marketing, pay-per-click advertising
										(PPC) and search engine optimization (SEO). As a leading
										website design company in Toronto we have expertise in WordPress design and development, e-commerce website design and development, Shopify website design and
										development and cater <br>to SMB and enterprise clients.</p>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="mry-main-title mry-title-center mry-p-0-40">
									<div class="mry-subtitle mry-mb-20 mry-fo">More projects</div>
									<h2 class="mry-mb-40 mry-fo">Similar projects</h2>
									<div class="mry-arrows mry-fo">
										<div class="mry-sl-nav">
											<div class="mry-prev mry-button-blog-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
											<div class="mry-next mry-button-blog-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
										</div>
										<div class="mry-label mry-fo">Slider Navigation</div>
									</div>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="swiper-container mry-blog-slider">
									<div class="swiper-wrapper">
										<div class="swiper-slide">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-badge">interior</div>
													<img src="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{asset('build/client/images/dark/projects/prjct-1/fs/1.jpg')}}" data-fancybox="works-slider" class="mry-zoom mry-magnetic-link"><span
																class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
														<a href="project.html" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																	class="fas fa-arrow-right"></i></span></a>
													</div>
												</div>
												<div class="mry-item-descr mry-fo">
													<h4 class="mry-fo mry-mb-20"><a href="project.html">Little Cottage</a></h4>
													<div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
												</div>
											</div>

										</div>
										<div class="swiper-slide">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-badge">interior</div>
													<img src="img/dark/projects/prjct-2/fs/1.jpg" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="img/dark/projects/prjct-2/fs/1.jpg" data-fancybox="works-slider" class="mry-zoom mry-magnetic-link"><span
																class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
														<a href="project.html" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																	class="fas fa-arrow-right"></i></span></a>
													</div>
												</div>
												<div class="mry-item-descr mry-fo">
													<h4 class="mry-fo mry-mb-20"><a href="project.html">Compact House</a></h4>
													<div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
												</div>
											</div>

										</div>
										<div class="swiper-slide">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-badge">interior</div>
													<img src="{{asset('build/client/images/dark/projects/prjct-3/fs/1.jpg')}}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{asset('build/client/images/dark/projects/prjct-3/fs/1.jpg')}}" data-fancybox="works-slider" class="mry-zoom mry-magnetic-link"><span
																class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
														<a href="project.html" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																	class="fas fa-arrow-right"></i></span></a>
													</div>
												</div>
												<div class="mry-item-descr mry-fo">
													<h4 class="mry-fo mry-mb-20"><a href="project.html">Greenwell Yards</a></h4>
													<div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
												</div>
											</div>

										</div>
										<div class="swiper-slide">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-badge">interior</div>
													<img src="{{asset('build/client/images/dark/projects/prjct-3/fs/1.jpg')}}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{asset('build/client/images/dark/projects/prjct-3/fs/1.jpg')}}" data-fancybox="works-slider" class="mry-zoom mry-magnetic-link"><span
																class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
														<a href="project.html" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																	class="fas fa-arrow-right"></i></span></a>
													</div>
												</div>
												<div class="mry-item-descr mry-fo">
													<h4 class="mry-fo mry-mb-20"><a href="project.html">Flat House</a></h4>
													<div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
												</div>
											</div>

										</div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
				<!-- project end -->

				<!-- footer -->
				<footer class="mry-footer">
					<div class="bg-footer">
						<div class="container">
							<div class="mry-main-title mry-title-center">
								<div class="mry-subtitle mry-mb-20 mry-fo">Fale comigo</div>
								<h2 class="mry-h1 mry-mb-20 mry-fo">Precisa <span class="mry-border-text">de um projeto alto padrão?</span></h2>
								<div class="mry-text mry-mb-30  mry-fo text-white">Entre em contato com quem realmente entende e receba orientações inéditas, como nunca antes.</div>
								<div class="mry-fo">
									<a href="contact.html" class="mry-anima-link mry-btn mry-btn-color mry-default-link">Let's discuss</a>
									<a href="portfolio-grid-1.html" class="mry-anima-link  mry-btn-text mry-default-link">Portfolio</a>
								</div>
							</div>
						</div>
					</div>
					<div class="mry-footer-copy">
						<div class="container">
							<div>Fernanda Giacomini © early 2021</div>
							<ul class="mry-social">
								<li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#."><i class="fab fa-instagram"></i></a></li>
								<li><a href="#."><i class="fab fa-behance"></i></a></li>
								<li><a href="#."><i class="fab fa-dribbble"></i></a></li>
							</ul>
							<div>By: <a href="https://themeforest.net/user/ultimatewebsolutions/" class="mry-default-link" target="_blank">UWS</a></div>
						</div>
					</div>
				</footer>
				<!-- footer end -->

			</div>
		</div>
@endsection