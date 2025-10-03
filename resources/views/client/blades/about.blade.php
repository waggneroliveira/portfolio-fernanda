@extends('client.core.client')

@section('content')
    <div  class="transition-fade">
        <div class="mry-content-frame" id="scroll">
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
            <section class="mry-about mry-p-100-100">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="container">
                            <div class="col-lg-11 col-12">
                                <div class="mry-mb-100 mry-text-center">
                                    <div class="d-flex justify-content-between align-items-start w-100 flex-wrap">
                                        <div class="image col-lg-4 col-12">
                                            <img src="{{asset('build/client/images/fernanda.png')}}" alt="Fernanda" class="fernanda-about-image w-100">
                                        </div>
                                        <div class="description text-left col-lg-7 col-12">
                                            <div class="mry-numbering mry-fo text-left about-one">
                                                <div class="mry-border-text">01</div>
                                                <div class="mry-subtitle">Me conheça!</div>
                                            </div>
                                            <h3 class="mry-mb-20 mry-fo">Quem sou eu?</h3>
                                            <p class="mry-text mry-fo">
                                                Sou Fernanda, tenho 29 anos, formada pela Unifacs - Universidade Salvador há 5 anos. Especializada em arquitetura para ambientes pequenos. O que me move é criar projetos que abraçam quem você realmente é, tornando a arquitetura acessível e personalizada. Quero não apenas atender às suas necessidades, mas refletir a sua essência em qualquer ambiente. Sou apaixonada por desafios, então a sua satisfação será a minha maior conquista.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-12">
                                <div class="mry-mb-100 mry-text-center">
                                    <div class="mry-numbering mry-fo">
                                        <div class="mry-border-text">02</div>
                                        <div class="mry-subtitle">Por que arquitetura?</div>
                                    </div>
                                    <h3 class="mry-mb-40 mry-fo">Aqui, o meu relacionamento com você vem antes de tudo.</h3>
                                    <p class="mry-text mry-fo">
                                         Foco em manter um relacionamento sólido com cada cliente. Isso é o mais importante. Um projeto não é só sobre um contrato assinado, é sobre a confiança que podemos construir juntos. Minha missão é te orientar em cada passo desse processo, com paciência, transparência e conversas claras. Vamos tomar um café para conversarmos juntos sobre todos os detalhes?
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 p-0 position-relative">
                            <div class="mry-about-video mry-fo">
                                <div class="mry-video-cover-frame">
                                    <img class="mry-video-cover" src="{{asset('build/client/images/dark/content/video.jpg')}}" alt="banner">
                                    <div class="mry-cover-overlay"></div>
                                    <div class="mry-play-button mry-magnetic-link">
                                        <a class="mry-magnetic-object" data-fancybox href="https://www.youtube.com/watch?v=Ru9QU1ENgog"><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="mry-curtain"></div>
                                </div>
                            </div>

                        </div>
                        <div class="container mt-5">
                            <div class="col-lg-12">

                                <div class="mry-numbering mry-fo">
                                    <div class="mry-border-text">03</div>
                                    <div class="mry-subtitle">O que eu faço?</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">

                                        <div class="mry-text-center box-do">
                                            <h4 class="mry-mb-20 mry-fo">Design de Interiores</h4>
                                            <p class="mry-text mry-mb-20 mry-fo">
                                                Consigo criar espaços que funcionam para o seu dia a dia e trazem a sua personalidade à tona. Resumo praticidade, estética e, acima de tudo, essência.
                                            </p>
                                            
                                        </div>

                                    </div>
                                    <div class="col-lg-4">

                                        <div class="mry-text-center box-do">
                                            <h4 class="mry-mb-20 mry-fo">Projeto 3D</h4>
                                            <p class="mry-text mry-fo">Enxergue seu projeto antes dele sair do papel. Através da visualização em 3D, você pode ver e analisar cada detalhe, fazendo as escolhas certas e garantindo um resultado final mais assertivo!</p>
                                            
                                        </div>

                                    </div>
                                    <div class="col-lg-4">

                                        <div class="mry-text-center box-do">
                                            <h4 class="mry-mb-20 mry-fo">Marcenaria</h4>
                                            <p class="mry-text mry-fo">
                                                Crio móveis sob medida que unem beleza e funcionalidade. A marcenaria é a chave para otimizar espaços e ter peças únicas, pensadas e desenhadas de forma exclusiva.
                                            </p>
                                            
                                        </div>


                                    </div>
                                    <div class="col-lg-4">

                                        <div class="mry-text-center box-do">
                                            <h4 class="mry-mb-20 mry-fo">Vistoria de Imóvel</h4>
                                            <p class="mry-text mry-fo">
                                                Faço a vistoria completa do seu imóvel, do começo ao fim. Com um olhar técnico e cuidadoso, te ajudo a identificar pontos de atenção e garantir a segurança do seu investimento.
                                            </p>
                                            
                                        </div>

                                    </div>
                                    <div class="col-lg-4">

                                        <div class="mry-text-center box-do">
                                            <h4 class="mry-mb-20 mry-fo">Acompanhamento da obra</h4>
                                            <p class="mry-text mry-fo">
                                                Faço a vistoria completa do seu imóvel, do começo ao fim. Com um olhar técnico e cuidadoso, te ajudo a identificar pontos de atenção e garantir a segurança do seu investimento.
                                            </p>
                                            
                                        </div>

                                    </div>
                                    <div class="col-lg-4">

                                        <div class="mry-text-center box-do">
                                            <h4 class="mry-mb-20 mry-fo">Regularização de imóveis</h4>
                                            <p class="mry-text mry-fo">
                                                    Eu cuido da parte burocrática para você. A regularização do seu imóvel é um passo importante para evitar problemas futuros, e eu te ajudo a fazer todo o processo de forma simples e segura.
                                            </p>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-5">

                                <div class="mry-text-center">
                                    <div class="mry-numbering mry-fo">
                                        <div class="mry-border-text">04</div>
                                        <div class="mry-subtitle">Vamos projetar juntos</div>
                                    </div>
                                    <h3 class="mry-mb-40 mry-fo">Foque em imaginar o seu projeto, que eu faço acontecer</h3>
                                    <p class="mry-text mry-fo">
                                        Deixe a parte técnica e os detalhes comigo. Podemos transformar seus desejos e necessidades em um projeto incrível, porque a sua única preocupação deve ser a de sonhar com o seu novo espaço.
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-12 mt-5">

                                <div class="mry-main-title mry-title-center mry-p-0-40">
                                    <div class="mry-numbering mry-fo">
                                        <div class="mry-border-text">05</div>
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
            </section>
            <!-- about end -->

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