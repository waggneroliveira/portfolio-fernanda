<!DOCTYPE html>
<html lang="pt_BR">
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
        <meta property="og:description" content="{{ Str::limit(strip_tags($blogInner->content), 150) }}">
        <meta property="og:image" content="{{ asset('storage/' . $blogInner->path_image_thumbnail) }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ $blogInner->title }}">
        <meta name="twitter:description" content="{{ Str::limit(strip_tags($blogInner->content), 150) }}">
        <meta name="twitter:image" content="{{ asset('storage/' . $blogInner->path_image_thumbnail) }}">
    @else
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Sindacs Bahia - Sindicato dos ACS e ACE da Bahia">
        <meta property="og:description" content="O Sindacs Bahia representa os Agentes Comunitários de Saúde (ACS) e Agentes de Combate às Endemias (ACE) da Bahia, lutando por direitos e valorização.">
        <meta property="og:image" content="{{asset('build/client/images/compartilhamento.png')}}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="Sindacs Bahia - Sindicato dos ACS e ACE da Bahia">
        <meta name="twitter:description" content="O Sindacs Bahia representa os Agentes Comunitários de Saúde (ACS) e Agentes de Combate às Endemias (ACE) da Bahia, lutando por direitos e valorização.">
        <meta name="twitter:image" content="{{asset('build/client/images/compartilhamento.png')}}">
    @endif
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="copyright" content="Direitos reservados WHI">
    <meta name="author" content="WHI">
    <link rel="shortcut icon" href="{{ asset('build/admin/images/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap" onload="this.onload=null,this.rel='stylesheet'">
    <noscript>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap">
</noscript>
    <link rel="preload" as="image" href="{{asset('build/client/images/banner.webp')}}">
    <link rel="preload" as="image" href="{{asset('build/client/images/banner-mob.webp')}}">

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"></noscript>
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"></noscript>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"></noscript>
    <link rel="preload" href="{{ asset('build/admin/js/libs/sweetalert2/sweetalert2.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="{{ asset('build/admin/js/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"></noscript>
    <link rel="preload" href="{{ asset('build/admin/js/libs/dropzone/min/dropzone.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="{{ asset('build/admin/js/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css"></noscript>
    <link rel="preload" href="{{ asset('build/admin/js/libs/dropify/css/dropify.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="{{ asset('build/admin/js/libs/dropify/css/dropify.min.css') }}" rel="stylesheet" type="text/css"></noscript>
    <link href="{{ asset('build/client/lgpd/style.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('build/client/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="preload" href="{{ asset('build/client/css/bootstrap-icons/bootstrap-icons.css') }}" as="style" onload="this.rel='stylesheet'">
    <link href="{{ asset('build/client/css/style.css') }}" rel="stylesheet" type="text/css" />
        
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
            "telephone": "+55-71-99648-3853",
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
                "telephone": "+55-71-99648-3853",
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
    <div id="organization" hidden></div>
    <header id="header" class="py-4 py-sm-5 position w-100 d-flex align-items-center justify-content-between flex-row max-width m-auto">
        <div class="logo-img">
            <a href="{{route('index')}}">
                <img src="{{asset('build/client/images/logo.png')}}" alt="WHI -Web de Alta Inovação" title="WHI -Web de Alta Inovação" class="img-fluid" loading="lazy">
            </a>
        </div>
        <div class="social-links superior d-flex justify-content-center gap-4 text-center">
            <a href="https://www.linkedin.com/company/106948313/admin/dashboard/" aria-label="Visite nosso LinkedIn" target="_blank" class="linkedin rounded-circle d-flex justify-content-center align-items-center"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.instagram.com/agenciawhi" aria-label="Visite nosso Instagram" target="_blank" class="instagram rounded-circle d-flex justify-content-center align-items-center"><i class="bi bi-instagram"></i></a>
            <a href="https://wa.me/5571996483853" aria-label="Converse no WhatsApp" target="_blank" class="whatsapp rounded-circle d-flex justify-content-center align-items-center"><i class="bi bi-whatsapp"></i></a>
        </div>
    </header>
    @include('client/includes/lgpd/lgpd')
    <!-- Modal de Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content header-color">

                <div class="modal-header green-color">
                    <h5 class="modal-title text-uppercase rethink-sans-bold font-22 text-p" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>

                <div class="modal-body">
                    <form action="{{route('client.user.authenticate')}}" method="POST">
                        <!-- CSRF token (Laravel) -->
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label rethink-sans-bold font-15 text-white">E-mail</label>
                            <input type="email" class="form-control rethink-sans-regular font-15" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label rethink-sans-bold font-15 text-white">Senha</label>
                            <input type="password" class="form-control rethink-sans-regular font-15" id="password" name="password" required>
                        </div>

                        <div class="d-flex justify-content-center mt-3 mb-4">
                            <button type="submit" class="btn px-5 background-red rounded-3 text-white rethink-sans-bold font-15">Entrar</button>
                        </div>

                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <p class="rethink-sans-regular font-15 text-white text-center">
                                Ainda não tem uma conta?
                                <a href="#" class="text-decoration-underline rethink-sans-bold ms-1 under" 
                                data-bs-dismiss="modal"
                                data-bs-toggle="modal"
                                data-bs-target="#registerModal">Registre-se</a>
                                aqui <br>
                                <a href="#" 
                                class="text-decoration-underline rethink-sans-bold ms-1 under" 
                                data-bs-dismiss="modal"
                                data-bs-toggle="modal"
                                data-bs-target="#forgotPasswordModal">
                                Esqueceu sua senha?
                                </a>
                            </p>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Modal de Cadastro -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content header-color">

                <div class="modal-header green-color">
                    <h5 class="modal-title text-uppercase rethink-sans-bold font-22 text-p" id="registerModalLabel">Cadastro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>

                <div class="modal-body">
                    <form action="{{route('register-client')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label rethink-sans-bold font-15 text-white">Nome</label>
                            <input type="text" class="form-control rethink-sans-regular font-15" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="emailRegister" class="form-label rethink-sans-bold font-15 text-white">E-mail</label>
                            <input type="email" class="form-control rethink-sans-regular font-15" id="emailRegister" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="passwordRegister" class="form-label rethink-sans-bold font-15 text-white">Senha</label>
                            <input type="password" class="form-control rethink-sans-regular font-15" id="passwordRegister" name="password" required>
                        </div>

                        <div class="d-flex justify-content-center my-2">
                            <button type="submit" class="btn px-4 background-red rounded-3 text-white rethink-sans-bold font-15">Cadastrar</button>
                        </div>

                        <div class="d-flex justify-content-center">
                            <p class="rethink-sans-regular font-15 text-white text-center">
                                Já tem uma conta?
                                <a href="#" class="text-decoration-underline rethink-sans-bold ms-1 under"
                                data-bs-dismiss="modal"
                                data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                                Fazer login
                                </a>
                            </p>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    @if (Auth::guard('client')->check())
        @php
            $user = Auth::guard('client')->user();
            $defaultImage = $user && $user->path_image ? url('storage/'.$user->path_image) : '';
        @endphp
        <!-- Modal de Edição -->
        <div class="modal fade" id="editClientModal-{{Auth::guard('client')->user()->id}}" tabindex="-1" aria-labelledby="editClientModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content header-color">

                    <div class="modal-header green-color">
                        <h5 class="modal-title text-uppercase rethink-sans-bold font-22 text-p" id="editClientModalLabel">Editar Informações</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('client.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label rethink-sans-bold font-15 text-white">Nome</label>
                                <input type="text" class="form-control rethink-sans-regular font-15" id="name" name="name" value="{{Auth::guard('client')->user()->name}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="emailRegister" class="form-label rethink-sans-bold font-15 text-white">E-mail</label>
                                <input type="email" class="form-control rethink-sans-regular font-15" id="emailRegister" name="email" value="{{Auth::guard('client')->user()->email}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="passwordRegister" class="form-label rethink-sans-bold font-15 text-white">Senha</label>
                                <input type="password" class="form-control rethink-sans-regular font-15" id="passwordRegister" name="password">
                            </div>
                            <div class="col-lg-12">
                                <div class="mt-3">
                                    <label for="title" class="form-label rethink-sans-regular font-15">Imagem de perfil </label>
                                    <input 
                                        type="file" 
                                        name="path_image" 
                                        data-plugins="dropify" 
                                        data-default-file="{{ $defaultImage }}" 
                                    />
                                    <p class="rethink-sans-regular text-white font-12 mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn bg-secondary rounded-3 text-white rethink-sans-bold font-15" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn px-4 background-red rounded-3 text-white rethink-sans-bold font-15">Salvar alterações</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>        
        </div>
    @endif

    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content header-color">

                <div class="modal-header green-color">
                    <h5 class="modal-title text-uppercase rethink-sans-bold font-22 text-p" id="forgotPasswordModalLabel">
                        Recuperar Senha
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>

                <div class="modal-body">
                    {{-- {{ route('client.password.email') }} --}}
                    <form action="{{ route('client.password.email') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="recover_email" class="form-label rethink-sans-bold font-15 text-white">Digite seu e-mail</label>
                            <input type="email" class="form-control rethink-sans-regular font-15" id="recover_email" name="email" required>
                        </div>

                        <div class="d-flex justify-content-center mt-3 mb-4">
                            <button type="submit" class="btn px-5 background-red rounded-3 text-white rethink-sans-bold font-15">
                                Enviar link de recuperação
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <main>
        @yield('content') 
    </main>

    <footer id="footer" class="footer position-relative dark-background" data-aos="fade-up" data-aos-delay="150">
        <div class="container py-5">
            <div class="sitemap mt-2 mb-5 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 g-3 justify-content-between align-items-center">
                <div class="logo logo-footer">
                    <a href="{{route('index')}}">
                        <img src="{{asset('build/client/images/logo.png')}}" alt="WHI - Web de Alta Inovação" title="WHI - Web de Alta Inovação" loading="lazy">
                    </a>
                </div>
                <ul class="list-unstyled text-center">
                    <li class="rethink-sans-semiBold mb-2"><a href="#transformed">Quem Somos</a></li>
                    <li class="rethink-sans-semiBold mb-2"><a href="#what-we-do">O que fazemos</a></li>
                    <li class="rethink-sans-semiBold mb-2"><a href="#portfolio">Cases</a></li>
                </ul>
                <ul class="list-unstyled text-center">
                    <li class="rethink-sans-semiBold mb-2"><a href="#proccess">Etapas</a></li>
                    <li class="rethink-sans-semiBold mb-2"><a href="#trust-whi">Depoimentos</a></li>
                    <li class="rethink-sans-semiBold mb-2"><a href="#faq">Perguntas Frequentes</a></li>
                </ul>
                <div class="d-flex justify-content-end flex-column w-auto">
                    <div class="social-links d-flex justify-content-end gap-4 text-center">
                        <a href="https://www.linkedin.com/company/106948313/admin/dashboard/" aria-label="Visite nosso LinkedIn" target="_blank" class="linkedin rounded-circle d-flex justify-content-center align-items-center"><i class="bi bi-linkedin"></i></a>
                        <a href="https://www.instagram.com/agenciawhi" aria-label="Visite nosso Instagram" target="_blank" class="instagram rounded-circle d-flex justify-content-center align-items-center"><i class="bi bi-instagram"></i></a>
                        <a href="https://wa.me/5571996483853" target="_blank" aria-label="Converse no WhatsApp" class="whatsapp rounded-circle d-flex justify-content-center align-items-center"><i class="bi bi-whatsapp"></i></a>
                    </div>
                    <a href="https://wa.me/5571996483853" target="_blank" rel="noopener noreferrer" class="mt-4 rethink-sans-regular ps-5 pe-0 text-p call-to-action d-flex justify-content-between align-items-center">
Fale com a gente!
<i class="bi bi-whatsapp rounded-circle d-flex justify-content-center text-white align-items-center"></i>
</a>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-5">
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
    </footer>
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdn.ckeditor.com/4.22.1/basic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('build/admin/js/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('build/admin/js/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('build/admin/js/libs/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('build/admin/js/pages/form-fileuploads.init.js') }}"></script>
    <script src="{{ asset('build/client/css/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('build/client/css/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('build/client/lgpd/script.js') }}"></script>
    <script src="{{ asset('build/client/js/default.js') }}"></script>


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