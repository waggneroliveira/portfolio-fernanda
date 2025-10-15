@extends('client.core.client')
@section('content')
	<section id="project">
		@php $counter = 1; @endphp

		<div class="banner-inner">
			<canvas class="mry-dots" style="display: none"></canvas>

			<div class="mry-head-bg">
				<img src="{{asset('build/client/images/portfolio.png')}}" alt="background">
				<div class="mry-bg-overlay"></div>
			</div>

			<div class="mry-banner mry-p-140-0">
				<div class="container">
					<div class="mry-main-title mry-title-center">
						<div class="mry-subtitle mry-mb-20 mry-fo">Projeto</div>
						<h1 class="mry-mb-20 mry-fo" style="color:#c27d0b;">{{$project->name_project}}<span class="mry-animation-el"></span></h1>
						<div class="mry-text mry-fo text-white">{{$project->category->title}}</div>
						<div class="mry-scroll-hint-frame">
							<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link-image mry-fo no-style" href="#mry-anchor">
								<span class="mry-magnetic-object"></span>
							</a>
							<div class="mry-label mry-fo">Scroll Down</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- project -->
		<div class="mry-about mt-5">
			<div class="container">
				<div class="row justify-content-center">

					<div class="col-lg-12">
						@if ($project->title || $project->text)									
							<div class="mry-mb-100 mry-text-center">
								<div class="mry-numbering mry-fo">
									<div class="mry-border-text">{{ str_pad($counter++, 2, '0', STR_PAD_LEFT) }}</div>
									<div class="mry-subtitle">Goal</div>
								</div>
								<h3 class="mry-mb-40 mry-fo">{{$project->title}}</h3>
								<div class="mry-text mry-fo">
									{!! $project->text !!}
								</div>
							</div>
						@endif

					</div>
					@if ($galleryInages->count() > 0)
						<div class="col-lg-12">

							<div class="mry-main-title mry-title-center mry-p-0-40">
								<div class="mry-numbering mry-fo">
									<div class="mry-border-text">{{ str_pad($counter++, 2, '0', STR_PAD_LEFT) }}</div>
									<div class="mry-subtitle">Project</div>
								</div>
								<h3 class="mry-mb-40 mry-fo">Project gallery</h3>
							</div>

						</div>
						
						<div class="col-lg-12">

							<div class="mry-portfolio-frame">
								<div class="mry-masonry-grid mry-without-descr mry-p-0-100 h-100">
									<div class="mry-grid-sizer"></div>

									<div class="gallery-grid">
										@foreach ($galleryInages as $gallery)
											<div class="gallery-item">
												<div class="mry-card-item">
													<div class="mry-card-cover-frame mry-mb-10 mry-fo">
														<img src="{{ asset('storage/' . $gallery->path_image) }}" alt="project">
														<div class="mry-cover-overlay"></div>
														<div class="mry-hover-links">
															<a href="{{ asset('storage/' . $gallery->path_image) }}" data-fancybox="works"
																class="mry-zoom mry-magnetic-link-image">
																<span class="mry-magnetic-object">
																	<i class="fas fa-expand"></i>
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					@endif
					@if ($relatedProjects->count() > 0)							
						<div class="col-lg-12">

							<div class="mry-main-title mry-title-center mry-p-0-40">
								<div class="mry-subtitle mry-mb-20 mry-fo">More projects</div>
								<h2 class="mry-mb-40 mry-fo">Similar projects</h2>
							</div>

						</div>
						<div class="col-lg-12">

							<div class="swiper-container mry-blog-slider">
								<div class="swiper-wrapper">
									@foreach ($relatedProjects as $relatedProject)										
										<div class="swiper-slide">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-badge">{{$relatedProject->category->title}}</div>
													<img src="{{asset('storage/'.$relatedProject->path_image)}}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{route('project', $relatedProject->slug)}}" class="mry-more mry-magnetic-link-image mry-anima-link"><span class="mry-magnetic-object"><i
																	class="fas fa-arrow-right"></i></span></a>
													</div>
												</div>
												<div class="mry-item-descr mry-fo">
													<h4 class="mry-fo mry-mb-20"><a href="{{route('project', $relatedProject->slug)}}">{{$relatedProject->title}}</a></h4>
													<div class="mry-text">{!! substr(strip_tags($relatedProject->text), 0, 60) !!}</div>
												</div>
											</div>

										</div>
									@endforeach
								</div>
							</div>
									
							<div class="mry-arrows mry-fo mry-mb-20 ">
								<div class="mry-label mry-fo text-center" style="color: #304E66;">Slider Navigation</div>
								<div class="mry-sl-nav d-flex justify-content-center">
									<div class="mry-prev mry-button-blog-prev w-auto"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
									<div class="mry-next mry-button-blog-next w-auto"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
								</div>
							</div>
						</div>
					@endif

				</div>
			</div>
		</div>
		<!-- project end -->

		@include('client.includes.footer')
	</section>
@endsection