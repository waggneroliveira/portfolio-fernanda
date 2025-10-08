@extends('client.core.client')
@section('content')
	<div class="mry-app">



		<div  class="transition-fade">
			<div class="mry-content-frame" id="scroll">
				<canvas class="mry-dots"></canvas>

				<div class="swiper-container mry-main-slider">
					<div class="swiper-wrapper">
						@foreach($slides as $slide)							
							<div class="swiper-slide">
								<!-- project -->
								<div class="mry-project-slider-item">
									<div class="mry-project-frame mry-project-half">
										<div class="mry-cover-frame">
											<img class="mry-project-cover mry-position-right" src="{{asset('storage/' .$slide->path_image)}}" alt="Project" data-swiper-parallax="500"
												data-swiper-parallax-scale="1.4">
											<div class="mry-cover-overlay"></div>
											<div class="mry-loading-curtain"></div>
										</div>
										<div class="mry-main-title-frame">
											<div class="container">
												<div class="mry-main-title" data-swiper-parallax-x="30%" data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
													data-swiper-parallax-duration="1000">
													<div class="description">
														@if ($slide->type_project)															
															<div class="mry-subtitle mry-mb-20">{{$slide->type_project}}</div>
														@endif
														<h1 class="mry-mb-30">
															{{$slide->title}}
															<br><span class="mry-border-text">{{$slide->subtitle}}</span>
														</h1>
														@if ($slide->path_image_mobile)															
															<img src="{{asset('storage/' . $slide->path_image_mobile)}}" alt="Imagem Fernanda" class="image-persona">
														@endif
														<div class="mry-text text-white">{!!$slide->description!!}</div>
														<a class="mry-btn mry-default-link mry-anima-link text-white border mt-3" href="{{route('portfolio')}}">o que faço</a>
														<a class="mry-btn-text mry-default-link mry-anima-link text-white border mt-3" href="portfolio-grid-1.html">FALAR COMIGO</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- project end -->
							</div>
						@endforeach
					</div>
				</div>

				<div class="mry-slider-pagination-frame">
					<div class="mry-slider-pagination"></div>
				</div>

				<div class="mry-slider-nav-panel">
					<div class="container">
						<div class="mry-slider-progress-bar-frame">
							<div class="mry-slider-progress-bar">
								<div class="mry-progress"></div>
							</div>
						</div>
					</div>

					<div class="mry-slider-arrows">
						<div class="mry-label">Slider Navigation</div>
						<div class="mry-button-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
						<div class="mry-button-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
@endsection
