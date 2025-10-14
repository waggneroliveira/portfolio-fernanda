<!-- footer -->
<footer class="mry-footer">
    <div class="bg-footer">
        <div class="container">
            <div class="mry-main-title mry-title-center">
                <div class="mry-subtitle mry-mb-20 mry-fo">Fale comigo</div>
                <h2 class="mry-h1 mry-mb-20 mry-fo">Precisa <span class="mry-border-text">de um projeto alto padrão?</span></h2>
                <div class="mry-text mry-mb-30  mry-fo text-white">Entre em contato com quem realmente entende e receba orientações inéditas, como nunca antes.</div>
                <div class="mry-fo">
                    <a href="{{route('contact')}}" class="mry-anima-link mry-btn mry-btn-color mry-default-link">Let's discuss</a>
                    <a href="{{route('portfolio')}}" class="mry-anima-link  mry-btn-text mry-default-link">Portfolio</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mry-footer-copy">
        <div class="container align-items-center">
            <ul class="mry-social mt-3">
                <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#."><i class="fab fa-instagram"></i></a></li>
            </ul>

            <div>
                <p id="footer-text" class="text-white mb-0"></p>
                <script defer>
                    const currentYear = (new Date).getFullYear();
                    document.getElementById("footer-text").innerHTML = `Fernanda Giacomini ©${currentYear} <span> todos os direitos reservados.</span>`
                </script>
            </div>

            <div>
                <a href="https://www.whi.dev.br/" class="mry-default-link" target="_blank">
                    <img src="{{asset('build/client/images/whi.svg')}}" alt="WHI - Web de Alta Inovação" title="WHI - Web de Alta Inovação">
                </a>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->