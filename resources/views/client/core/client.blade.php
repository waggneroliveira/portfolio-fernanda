<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#0d0d0d">
    <meta name="description" content="Criação de sites, lojas virtuais e estratégias de marketing digital em Salvador. A WHI desenvolve soluções profissionais e personalizadas para o seu negócio crescer online.">
    <meta name="keywords" content="Agência de marketing Salvador, criação de sites Salvador, marketing digital, desenvolvimento web, loja virtual, SEO local, redes sociais, tráfego pago, Google Ads, branding, identidade visual, WHI">
    <title>Fernanda Giacomini | Arquiteta e Urbanista</title>
    @if(isset($blogInner))
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{ $blogInner->title }}">
        <meta property="og:description" content="{{ Str::limit(strip_tags($blogInner->text), 150) }}">
        <meta property="og:image" content="{{ asset('storage/' . $blogInner->path_image_thumbnail) }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ $blogInner->title }}">
        <meta name="twitter:description" content="{{ Str::limit(strip_tags($blogInner->text), 150) }}">
        <meta name="twitter:image" content="{{ asset('storage/' . $blogInner->path_image_thumbnail) }}">
    @else
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="WHI | Agência de Marketing Digital e Criação de Sites em Salvador">
        <meta property="og:description" content="Soluções digitais completas em Salvador: sites profissionais, marketing de performance, identidade visual e presença online com a WHI.">
        <meta property="og:image" content="{{asset('build/client/images/compartilhamento.png')}}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="WHI | Agência de Marketing Digital e Criação de Sites em Salvador">
        <meta name="twitter:description" content="Soluções digitais completas em Salvador: sites profissionais, marketing de performance, identidade visual e presença online com a WHI.">
        <meta name="twitter:image" content="{{asset('build/client/images/compartilhamento.png')}}">
    @endif
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="copyright" content="Direitos reservados WHI">
    <meta name="author" content="WHI">
    <link rel="shortcut icon" href="{{ asset('build/admin/images/favicon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap" onload="this.onload=null,this.rel='stylesheet'">
    <noscript>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    </noscript>

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"></noscript>    
    <link href="{{ asset('build/client/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />    
    <link rel="preload" href="{{ asset('build/admin/js/libs/sweetalert2/sweetalert2.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="{{ asset('build/admin/js/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"></noscript>
    <link href="{{ asset('build/client/css/bootstrap/fancybox.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('build/client/css/bootstrap/swiper.min.css') }}" rel="stylesheet" type="text/css" />    
    <link href="{{ asset('build/client/css/bootstrap/mapbox-style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('build/client/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('build/client/lgpd/style.css') }}" rel="stylesheet" type="text/css" />
        
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "@id": "https://whi.dev.br/#organization",
            "name": "WHI",
            "legalName": "WHI Agência Digital",
            "url": "https://whi.dev.br",
            "logo": "https://whi.dev.br/assets/images/logo.png",
            "image": "https://whi.dev.br/assets/images/logo.png",
            "description": "Agência de desenvolvimento web e marketing digital em Salvador - Criação de sites, lojas virtuais e estratégias digitais personalizadas.",
            "foundingDate": "2023",
            "email": "contato@whi.dev.br",
            "telephone": "+55-71-99276-8360",
            "sameAs": [
                "https://www.instagram.com/agenciawhi",
                "https://www.linkedin.com/company/106948313"
            ],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Rua Ápio Patrocínio, 148 - Boa Vista de São Caetano",
                "addressLocality": "Salvador",
                "addressRegion": "BA",
                "postalCode": "40386-050",
                "addressCountry": "BR"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+55-71-9276-8360",
                "contactType": "customer service",
                "email": "contato@whi.dev.br",
                "areaServed": "BR",
                "availableLanguage": ["Portuguese", "English"]
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                ],
                "opens": "09:00",
                "closes": "18:00"
            },
            "duns": "39.985.136/0001-33",
            "slogan": "Web de Alta Inspiração",
            "keywords": [
                "Criação de sites",
                "Lojas virtuais",
                "Marketing digital",
                "Agência WHI",
                "Salvador",
                "Desenvolvimento Web",
                "Google Ads",
                "Tráfego pago",
                "SEO",
                "Agência de Desenvolvimento Web em Salvador",
                "WHI",
            ]
        }
    </script>
</head>
<body>
    <div class="mry-app">
        <div id="organization" hidden></div>
        <header id="header">
            <!-- preloader -->
            <div class="mry-preloader mry-active">
                <div class="mry-preloader-content">
                    <img class="mry-logo mry-mb-20" src="{{asset('build/client/images/dark/logo.svg')}}" alt="Fernanda Giacomini">
                    <div class="mry-loader-bar">
                        <div class="mry-loader"></div>
                    </div>
                    <div class="mry-label">Carregando</div>
                </div>
            </div>
            <!-- preloader end -->
    
            <!-- cursor -->
            <div class="mry-magic-cursor">
                <div class="mry-ball">
                    <div class="mry-loader">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 50 50"
                            style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <path d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
                                <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite" />
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- cursor end -->
    
            <!-- top panel -->
            <div class="mry-top-panel">
                <div class="mry-logo-frame">
                    <a href="{{route("index")}}" class="mry-default-link mry-anima-link">
                        <img class="mry-logo" src="{{asset('build/client/images/dark/logo.svg')}}" alt="Fernanda Giacomini">
                    </a>
                </div>
                <div class="mry-menu-button-frame">
                    <div class="mry-label">Menu</div>
    
                    <div class="mry-menu-btn mry-magnetic-link">
                        <div class="mry-burger mry-magnetic-object">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top panel end -->
    
            <!-- menu -->
            <div class="mry-menu">
                <img src="{{asset('build/client/images/4.png')}}" alt="">
    
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-4">
                            <nav id="mry-dynamic-menu">
                                <ul>
                                    <li class="menu-item"><a href="{{route('index')}}" class="mry-anima-link mry-default-link">Home</a></li>
                                    <li class="menu-item"><a href="{{route('about')}}" class="mry-anima-link mry-default-link">Sobre</a></li>
                                    <li class="menu-item"><a href="{{route('portfolio')}}" class="mry-anima-link mry-default-link">Portfólio</a></li>
                                    <li class="menu-item"><a href="{{route('contact')}}" class="mry-anima-link mry-default-link">Contato</a></li>
                                </ul>
                            </nav>
    
                        </div>
                        <div class="col-md-4 right-image">
                            <div class="mry-info-box-frame">							
                                <div class="mry-info-box">
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">País:</div>
                                        <div class="mry-text text-white">Brasil</div>
                                    </div>
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">Cidade:</div>
                                        <div class="mry-text text-white">Lauro de Freitas</div>
                                    </div>
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">Endereço:</div>
                                        <div class="mry-text text-white">HTGS 4456 North Av.</div>
                                    </div>
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">Email:</div>
                                        <a class="mry-text text-white" href="mailto:gernandagiacomini.inbox@mail.com">gernandagiacomini.inbox@mail.com</a>
                                    </div>
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">Telefone:</div>
                                        <a class="mry-text text-white" href="#.">(71) 9 9999-9999</a>
                                    </div>
                                </div>
                            </div>						
                        </div>
                    </div>
                </div>
            </div>
            <!-- menu end -->
        </header>
    
        @include('client/includes/lgpd/lgpd')
    
        <a
            href="https://wa.me/555571992768360?text=Olá! Encontrei seu site e gostaria de conhecer mais sobre os planos disponíveis.%0A"
            class="whatsapp-float"
            aria-label="Fale conosco no WhatsApp"
            target="_blank"
            rel="noopener noreferrer"
            >
            <!-- Ícone SVG do WhatsApp -->
            <svg viewBox="0 0 32 32" aria-hidden="true">
                <path d="M19.11 17.27c-.23-.12-1.37-.67-1.58-.75-.21-.08-.36-.12-.52.12-.16.23-.6.74-.74.89-.14.15-.27.17-.5.06-.23-.12-.97-.36-1.85-1.12-.68-.6-1.14-1.34-1.27-1.57-.13-.23-.01-.35.1-.47.1-.1.23-.27.35-.4.12-.13.16-.23.24-.39.08-.16.04-.3-.02-.42-.06-.12-.52-1.25-.71-1.72-.19-.46-.38-.4-.52-.4h-.45c-.16 0-.42.06-.64.3-.22.23-.84.82-.84 2 0 1.18.86 2.32.98 2.48.12.16 1.69 2.58 4.1 3.61.57.25 1.01.4 1.35.52.57.18 1.1.16 1.52.1.46-.07 1.37-.56 1.57-1.1.19-.54.19-1 .13-1.1-.06-.1-.21-.16-.44-.27zM16 3.2c-7.06 0-12.8 5.73-12.8 12.8 0 2.26.61 4.36 1.67 6.17L3.2 28.8l6.78-1.6c1.74.95 3.74 1.5 5.87 1.5 7.07 0 12.8-5.73 12.8-12.8S23.07 3.2 16 3.2zm0 22.94c-1.98 0-3.81-.58-5.35-1.57l-.38-.24-4.02.95.95-3.92-.25-.4a10.58 10.58 0 0 1-1.64-5.62c0-5.86 4.77-10.62 10.63-10.62S26.62 9.38 26.62 15.24 21.86 26.14 16 26.14z"/>
            </svg>
        </a>
        
        @if (!request()->routeIs('index'))
            <style>
                .mry-app .mry-top-panel .mry-logo-frame{
                    background: #304e66;
                }
            </style>
        @endif
    
        <main>
            <div  class="transition-fade">
		        <div class="mry-content-frame" id="scroll">
                    @yield('content') 
                </div>
            </div>
        </main>
    </div>
    
    
    <script src="{{ asset('build/client/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('build/client/js/plugins/tween-max.min.js') }}"></script>
    <script src="{{ asset('build/client/js/plugins/scroll-magic.js') }}"></script>
    <script src="{{ asset('build/client/js/plugins/scroll-magic-gsap-plugin.js') }}"></script>
    <script src="{{ asset('build/client/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('build/client/js/plugins/isotope.min.js') }}"></script>
    <script src="{{ asset('build/client/js/plugins/fancybox.min.js') }}"></script>
    <script src="{{ asset('build/client/js/plugins/mapbox.min.js') }}"></script>
    <script src="{{ asset('build/client/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('build/client/js/plugins/overscroll.min.js') }}"></script>
    <script src="{{ asset('build/client/js/plugins/canvas.js') }}"></script>
    <script src="{{ asset('build/client/js/plugins/parsley.min.js') }}"></script>
    <script src="{{ asset('build/admin/js/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('build/client/js/main.js') }}"></script>  
    <script src="{{ asset('build/client/lgpd/script.js') }}"></script>
    
    {{-- Modais alert --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let successMessage = @json(session('success'));
            let errorMessage = @json(session('error'));

            if (successMessage) {
                Swal.fire({
                    title: 'Sucesso!',
                    text: successMessage,
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });
            }

            if (errorMessage) {
                Swal.fire({
                    title: 'Erro!',
                    text: errorMessage,
                    icon: 'error',
                    timer: 2500,
                    showConfirmButton: false
                });
            }
        });
    </script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                Swal.fire({
                    title: 'Erro!',
                    text: @json($error),
                    icon: 'error',
                    timer: 2500,
                    showConfirmButton: false
                });
            </script>
        @endforeach
    @endif
</body>
</html>