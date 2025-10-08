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
                            <div class="mry-subtitle mry-mb-20 mry-fo">Portfolio</div>
                            <h1 class="mry-mb-20 mry-fo">Explore Our Amazing<br><span class="mry-border-text">Professional Cases</span><span class="mry-animation-el"></span></h1>
                            <div class="mry-text mry-fo text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
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


            <!-- portfolio -->
            <div class="mry-portfolio mry-p-100-100">
                <div class="container">
                    @if (isset($projectCategories) && $projectCategories->count() > 0)                        
                        <div class="mry-filter mry-mb-40 mry-fo">
                            <a href="#" data-filter="*" class="mry-card-category mry-default-link mry-current">All Categories</a>
                            @foreach ($projectCategories as $projectCategory)                            
                                <a href="#" data-filter=".{{$projectCategory->slug}}" class="mry-card-category mry-default-link">{{$projectCategory->title}}</a>
                            @endforeach
                        </div>
                    @endif

                    <div class="mry-portfolio-frame">
                        <div class="mry-masonry-grid mry-3-col">
                            <div class="mry-grid-sizer"></div>
                            @foreach ($projects as $project)                                
                                <div class="mry-masonry-grid-item mry-masonry-grid-item-33 mry-masonry-grid-item-h-x-2 {{$project->category->slug}}">

                                    <div class="mry-card-item">
                                        <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                            <div class="mry-badge">{{$project->category->title}}</div>
                                            <img src="{{asset('storage/' . $project->path_image)}}" alt="project" >
                                            <div class="mry-cover-overlay"></div>
                                            <div class="mry-hover-links">
                                                <a href="{{asset('storage/' . $project->path_image)}}" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
                                                            class="fas fa-expand"></i></span></a>
                                                <a href="{{route('project', $project->slug)}}" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="mry-item-descr mry-fo">
                                            <h4 class="mry-mb-10" style="color: #304E66;"><a href="{{route('project', $project->slug)}}">{{$project->name_project}}</a></h4>
                                            <div class="mry-text">{!! substr(strip_tags($project->text), 0, 60) !!}...</div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- portfolio end -->

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