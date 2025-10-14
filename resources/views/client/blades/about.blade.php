@extends('client.core.client')

@section('content')
    <section id="about">
        @php $counter = 1; @endphp

        <div class="banner-inner position-relative">
            <canvas class="mry-dots" style="display: none"></canvas>

            <div class="mry-head-bg">
                <img src="{{asset('build/client/images/about.png')}}" alt="background">
                <div class="mry-bg-overlay"></div>
            </div>

            <div class="mry-banner mry-p-140-0">
                <div class="container">
                    <div class="mry-main-title mry-title-center">
                        <div class="mry-subtitle mry-mb-20 mry-fo">Sobre mim</div>
                        <h1 class="mry-mb-20 mry-fo">Você está aqui para conhecer <br><span class="mry-border-text">a minha história.</span><span class="mry-animation-el"></span></h1>
                        <div class="mry-text mry-fo text-white"><b>Fernanda Giacomini</b> - Arquiteta e Urbanista, há 5 anos.</div>
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

        <!-- about -->
        <div class="mry-about mry-p-100-100">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="container">
                        @foreach ($abouts as $about)                                
                            <div class="about-box col-12">
                                <div class="mry-mb-100 mry-text-center">
                                    <div class="d-flex justify-content-between align-items-start w-100 flex-wrap">
                                        @php
                                            $hasImage = !empty($about->path_image);
                                        @endphp

                                        <div class="about-content row align-items-center justify-content-between {{ $hasImage ? 'has-image' : 'no-image' }}">
                                            @if ($hasImage)
                                                <div class="col-lg-4 col-12 p-0">
                                                    <img src="{{ asset('storage/' . $about->path_image) }}" 
                                                        alt="{{ $about->title }}" 
                                                        class="fernanda-about-image w-100">
                                                </div>
                                            @endif

                                            <div class="{{ $hasImage ? 'col-lg-7 text-left' : 'col-12 text-center' }} p-0">
                                                <div class="mry-numbering mry-fo about-one {{ $hasImage ? 'text-left' : 'text-center' }}">
                                                    <div class="mry-border-text">
                                                        {{ str_pad($counter++, 2, '0', STR_PAD_LEFT) }}
                                                    </div>
                                                    <div class="mry-subtitle">{{ $about->subtitle }}</div>
                                                </div>
                                                <h3 class="mry-mb-20 mry-fo">{{ $about->title }}</h3>
                                                <div class="mry-text mry-fo">
                                                    {!! $about->text !!}
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            .has-image .about-one.mry-numbering .mry-subtitle::before {
                                                transform: inherit !important;
                                                left: 0 !important;
                                            }

                                            .no-image .about-one.mry-numbering .mry-subtitle::before {
                                                transform: translateX(-50%) !important;
                                                left: 50% !important;
                                            }

                                            .no-image .description,
                                            .no-image .description .mry-numbering {
                                                width: 100% !important;
                                                max-width: 100% !important;
                                                flex: 100% !important;
                                                text-align: center !important;
                                            }
                                        </style>


                                
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if (isset($video))                            
                        <div class="col-lg-12 p-0 position-relative">
                            <div class="mry-about-video mry-fo">
                                <div class="mry-video-cover-frame">
                                    <img class="mry-video-cover" src="{{asset('build/client/images/dark/content/video.jpg')}}" alt="banner">
                                    <div class="mry-cover-overlay"></div>
                                    <div class="mry-play-button mry-magnetic-link">
                                        <a class="mry-magnetic-object" data-fancybox href="{{$video->link}}"><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="mry-curtain"></div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="container">
                        @if ($topics->count() > 0)                                
                            <div class="col-lg-12">

                                <div class="mry-numbering mry-fo">
                                    <div class="mry-border-text">{{ str_pad($counter++, 2, '0', STR_PAD_LEFT) }}</div>
                                    <div class="mry-subtitle">O que eu faço?</div>
                                </div>

                                <div class="row">
                                    @foreach ($topics as $topic)                                        
                                        <div class="col-lg-4">
                                            <div class="mry-text-center box-do">
                                                <h4 class="mry-mb-20 mry-fo">{{$topic->title}}</h4>
                                                <div class="mry-text mry-mb-20 mry-fo">
                                                {!!$topic->description!!}
                                                </div>                                            
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="col-lg-12 mt-5">

                            <div class="mry-main-title mry-title-center mry-p-0-40">
                                <div class="mry-numbering mry-fo">
                                    <div class="mry-border-text">{{ str_pad($counter++, 2, '0', STR_PAD_LEFT) }}</div>
                                    <div class="mry-subtitle">Depoimentos</div>
                                </div>
                                <h3 class="mry-mb-20 mry-fo">O que os clientes dizem sobre mim</h3>
                            </div>

                        </div>
                        <div class="col-lg-12">

                            <div class="swiper-container mry-testimonials-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">

                                        <div class="mry-title-center">
                                            <img src="{{asset('build/client/images/dark/clients/c-1.jpg')}}" alt="client" class="mry-reviewer mry-mb-20 mry-fo">
                                            <h4 class="mry-mb-20 mry-fo">Emma Newman</h4>
                                            <div class="mry-subtitle mry-mb-20 mry-fo">Creative director</div>
                                            <p class="mry-text mry-fo">We evaluated numerous marketing firms and selected Fernanda Giacomini due to their experience in the solar industry, and the clear
                                                understanding of our business objectives that they demonstrated during the
                                                evaluation
                                                process. </p>
                                            <ul class="mry-star-rate mry-fo">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="swiper-slide">

                                        <div class="mry-title-center">
                                            <img src="{{asset('build/client/images/dark/clients/c-2.jpg')}}" alt="client" class="mry-reviewer mry-mb-20 mry-fo">
                                            <h4 class="mry-mb-20 mry-fo">Paul Trueman</h4>
                                            <div class="mry-subtitle mry-mb-20 mry-fo">Creative director</div>
                                            <p class="mry-text mry-fo">We were very impressed with the progressive campaign and thought it spoke volumes to the reality of businesses. We have been
                                                working our way into the Toronto area for almost a year now and ready to
                                                gain
                                                some traction in that city.</p>
                                            <ul class="mry-star-rate mry-fo">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li class="mry-empty"><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="swiper-slide">

                                        <div class="mry-title-center">
                                            <img src="{{asset('build/client/images/dark/clients/c-3.jpg')}}" alt="client" class="mry-reviewer mry-mb-20 mry-fo">
                                            <h4 class="mry-mb-20 mry-fo">Viktoria Freeman</h4>
                                            <div class="mry-subtitle mry-mb-20 mry-fo">Creative director</div>
                                            <p class="mry-text mry-fo">We were very impressed with the progressive campaign and thought it spoke volumes to the reality of businesses. We have been
                                                working our way into the Toronto area for almost a year now and ready to
                                                gain
                                                some traction in that city.</p>
                                            <ul class="mry-star-rate mry-fo">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li class="mry-empty"><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="mry-arrows">
                                <div class="mry-sl-nav mry-fo">
                                    <div class="mry-prev mry-button-testimonials-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
                                    <div class="mry-next mry-button-testimonials-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about end -->

        @include('client.includes.footer')
    </section>
@endsection