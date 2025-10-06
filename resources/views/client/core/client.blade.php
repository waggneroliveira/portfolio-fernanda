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
    <title>WHI | Agência de Marketing Digital e Criação de Sites em Salvador</title>
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
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" onload="this.onload=null,this.rel='stylesheet'">
    <noscript>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    </noscript>

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"></noscript>    
    <link href="{{ asset('build/client/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />    
    <link href="{{ asset('build/client/css/bootstrap/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('build/client/css/bootstrap/swiper.min.css') }}" rel="stylesheet" type="text/css" />    
    <link href="{{ asset('build/client/css/bootstrap/mapbox-style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('build/client/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('build/client/lgpd/style.css') }}" rel="stylesheet" type="text/css" />
        
    <script defer src="https://cdn.userway.org/widget.js" data-account="qSpdtrySSt"></script>
    <link rel="preconnect" href="https://vlibras.gov.br" crossorigin>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6RXZ6TZT0V"></script>
    <script defer>
        function gtag() {
            dataLayer.push(arguments)
        }
        window.dataLayer = window.dataLayer || [], gtag("js", new Date), gtag("config", "G-6RXZ6TZT0V")
    </script>
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
                    <div class="mry-label">Please wait</div>
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
                    <a href="index.html" class="mry-default-link mry-anima-link">
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
                                    <li class="menu-item menu-item-has-children current-menu-item"><a href="#." class="mry-default-link">Home</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="index.html" class="mry-anima-link mry-default-link">Half slider</a></li>
                                            <li class="menu-item"><a href="fs-slider.html" class="mry-anima-link mry-default-link">Full width slider</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="about.html" class="mry-anima-link mry-default-link">About</a></li>
                                    <li class="menu-item menu-item-has-children"><a href="#." class="mry-default-link">Works</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="portfolio-grid-1.html" class="mry-anima-link mry-default-link">Portfolio grid 1</a></li>
                                            <li class="menu-item"><a href="portfolio-grid-2.html" class="mry-anima-link mry-default-link">Portfolio grid 2</a></li>
                                            <li class="menu-item"><a href="portfolio-box-1.html" class="mry-anima-link mry-default-link">Portfolio boxed 1</a></li>
                                            <li class="menu-item"><a href="portfolio-box-2.html" class="mry-anima-link mry-default-link">Portfolio boxed 2</a></li>
                                            <li class="menu-item"><a href="project.html" class="mry-anima-link mry-default-link">Single project</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="contact.html" class="mry-anima-link mry-default-link">Contact</a></li>
                                    <li class="menu-item menu-item-has-children"><a href="#." class="mry-default-link">Blog</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="blog.html" class="mry-anima-link mry-default-link">Blog list</a></li>
                                            <li class="menu-item"><a href="publication.html" class="mry-anima-link mry-default-link">Publication</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
    
                        </div>
                        <div class="col-md-4 right-image">
                            <div class="mry-info-box-frame">							
                                <div class="mry-info-box">
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">Country:</div>
                                        <div class="mry-text text-white">Canada</div>
                                    </div>
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">City:</div>
                                        <div class="mry-text text-white">Toronto</div>
                                    </div>
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">Adress:</div>
                                        <div class="mry-text text-white">HTGS 4456 North Av.</div>
                                    </div>
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">Email:</div>
                                        <a class="mry-text text-white" href="mailto:Fernanda Giacomini.inbox@mail.com">Fernanda Giacomini.inbox@mail.com</a>
                                    </div>
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">Phone:</div>
                                        <a class="mry-text text-white" href="#.">+4 9(054) 996 84 25</a>
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
        <style>
            .whatsapp-float{
                position: fixed;
                bottom: 38.4%;
                right: 10px;
                transform: translateY(-30%);
                width: 43px;
                height: 43px;
                border-radius: 9999px;
                background: #25D366;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                box-shadow: 0 10px 25px rgba(0,0,0,.15);
                z-index: 9999;
                transition: transform .15s ease, filter .15s ease, box-shadow .15s ease;
            }
            .whatsapp-float svg{
                width: 32px;
                height: 32px;
                fill: #fff;
                display: block;
            }
            .whatsapp-float:hover{
                transform: translateY(-30%) scale(1.05);
                filter: brightness(1.05);
                box-shadow: 0 14px 32px rgba(0,0,0,.2);
            }
            /* Ajuste em telas menores */
            @media (max-width: 768px){
                .whatsapp-float{
                right: 12px;
                width: 52px;
                height: 52px;
                }
                .whatsapp-float svg{ width: 35px; height: 35px; }
            }
            /* Não mostrar na impressão */
            @media print{
                .whatsapp-float{ display: none; }
            }
            /* Respeita usuários com redução de movimento */
            @media (prefers-reduced-motion: reduce){
                .whatsapp-float{ transition: none; }
                .whatsapp-float:hover{ transform: translateY(-50%); }
            }
        </style>
    
    
        <main>
            @yield('content') 
        </main>
    
        {{-- <footer id="footer" class="footer position-relative dark-background" data-aos="fade-up" data-aos-delay="150">
            <div class="container py-5">
                <div class="sitemap mt-2 mb-5 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 g-3 justify-content-between align-items-center">
                    <div class="logo logo-footer">
                        <a href="{{route('index')}}">
                            <img src="{{asset('build/client/images/logo.png')}}" alt="WHI - Web de Alta Inovação" title="WHI - Web de Alta Inovação" loading="lazy">
                        </a>
                    </div>
                    <ul class="list-unstyled text-center">
                        <li class="rethink-sans-semiBold mb-2">
                            <a href="{{ request()->routeIs('index') ? '#transformed' : route('index') . '#transformed' }}">
                                Quem Somos
                            </a>
                        </li>
                        <li class="rethink-sans-semiBold mb-2">
                            <a href="{{ request()->routeIs('index') ? '#what-we-do' : route('index') . '#what-we-do' }}">
                                O que fazemos
                            </a>
                        </li>
                        <li class="rethink-sans-semiBold mb-2">
                            <a href="{{ request()->routeIs('index') ? '#portfolio' : route('index') . '#portfolio' }}">
                                Cases
                            </a>
                        </li>
                    </ul>
    
                    <ul class="list-unstyled text-center">
                        <li class="rethink-sans-semiBold mb-2">
                            <a href="{{ request()->routeIs('index') ? '#proccess' : route('index') . '#proccess' }}">
                                Etapas
                            </a>
                        </li>
                        <li class="rethink-sans-semiBold mb-2">
                            <a href="{{ request()->routeIs('index') ? '#trust-whi' : route('index') . '#trust-whi' }}">
                                Depoimentos
                            </a>
                        </li>
                        <li class="rethink-sans-semiBold mb-2">
                            <a href="{{ request()->routeIs('index') ? '#faq' : route('index') . '#faq' }}">
                                Perguntas Frequentes
                            </a>
                        </li>
                    </ul>
    
                    <div class="d-flex justify-content-end flex-column w-auto">
                        <div class="social-links d-flex justify-content-end gap-4 text-center">
                            <a href="https://www.linkedin.com/company/106948313/admin/dashboard/" aria-label="Visite nosso LinkedIn" target="_blank" class="linkedin rounded-circle d-flex justify-content-center align-items-center"><i class="bi bi-linkedin"></i></a>
                            <a href="https://www.instagram.com/agenciawhi" aria-label="Visite nosso Instagram" target="_blank" class="instagram rounded-circle d-flex justify-content-center align-items-center"><i class="bi bi-instagram"></i></a>
                            <a href="https://wa.me/5571992768360" target="_blank" aria-label="Converse no WhatsApp" class="whatsapp rounded-circle d-flex justify-content-center align-items-center"><i class="bi bi-whatsapp"></i></a>
                        </div>
                        <a href="https://wa.me/5571992768360" target="_blank" rel="noopener noreferrer" class="mt-4 rethink-sans-regular ps-4 pe-0 text-p call-to-action d-flex justify-content-between align-items-center">
                        Fale com a gente!
                        <i class="bi bi-whatsapp rounded-circle d-flex justify-content-center text-white align-items-center"></i>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-5">
                    <div class="privacy-politic">
                        <a href="https://policies.google.com/privacy?hl=pt-BR" target="_blank" rel="noopener noreferrer" class="text-white">Política de Privacidade</a>
                    </div>
                    <div class="copyright text-center">
                        <p id="footer-text"></p>
                        <script defer>
                            const currentYear = (new Date).getFullYear();
                            document.getElementById("footer-text").innerHTML = `WHI© ${currentYear} <span> todos os direitos reservados.</span>`
                        </script>
                    </div>
                    <div class="credits">
                        <a href="https://whi.dev.br/">
                        <img src="{{asset('build/client/images/developed.svg')}}"  alt="WHI - Web de Alta Inovação" title="WHI - Web de Alta Inovação" loading="lazy">
                        </a>
                    </div>
                </div>
            </div>
        </footer> --}}
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
    <script src="{{ asset('build/client/js/main.js') }}"></script>  
    <script src="{{ asset('build/client/lgpd/script.js') }}"></script>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", (function() {
            const o = document.createElement("script");
            o.src = "https://vlibras.gov.br/app/vlibras-plugin.js", o.onload = function() {
                window.VLibras && window.VLibras.Widget ? (new window.VLibras.Widget("https://vlibras.gov.br/app")) : console.warn("VLibras não foi carregado corretamente.")
            }, document.body.appendChild(o)
        }))
    </script>
</body>
</html>