<?php defined('_EXEC') or die; ?>

        <footer>
            <div class="first">
                <div class="column">
                    <h2>{$lang.services}</h2>
                    <a href="/servicios/contables">{$lang.main_menu_servicios_contables}</a>
                    <a href="/servicios/fiscales">{$lang.main_menu_servicios_fiscales}</a>
                    <a href="/servicios/mercadotecnia">{$lang.main_menu_servicios_mercadotecnia}</a>
                    <a href="/servicios/software">{$lang.main_menu_servicios_software}</a>
                    <a href="/servicios/legales">{$lang.main_menu_servicios_legales}</a>
                    <a href="/servicios/recursos_humanos">{$lang.main_menu_servicios_rh}</a>
                    <a href="/servicios/psicologia">{$lang.main_menu_servicios_psicologia}</a>
                    <a href="/servicios/poligrafo">{$lang.main_menu_servicios_poligrafo}</a>
                    <a href="/servicios/medicina_del_trabajo">{$lang.main_menu_servicios_medicina}</a>
                    <!-- <a href="https://marbu.one-consultores.com">{$lang.main_menu_servicios_laboratorio}</a> -->
                </div>
                <div class="column">
                    <h2>{$lang.company}</h2>
                    <a href="/nosotros">{$lang.main_menu_nosotros}</a>
                    <!-- <a href="https://marbu.one-consultores.com">{$lang.main_menu_marbu}</a> -->
                    <a href="/id_one">{$lang.main_menu_id_one}</a>
                    <a href="/blog">{$lang.main_menu_blog}</a>
                    <a href="/administrator">{$lang.login}</a>
                </div>
                <div class="column">
                    <!-- <h2>{$lang.clients_atention}</h2>
                    <a href="/contact">{$lang.main_menu_contacto}</a>
                    <a href="mailto:info@one-consultores.com">info@one-consultores.com</a>
                    <a href="tel:+529984403302">+52 (998) 4403 302</a> -->
                </div>
                <div class="super_column">
                    <div class="rrss">
                        <!-- <a href="https://www.facebook.com/oneconsultoresmx" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/oneconsultoresmx/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/one-consultores-m%C3%A9xico/" target="_blank"><i class="fa fa-linkedin"></i></a> -->
                    </div>
                    <div class="lang">
                        <a href="?<?php echo Language::get_lang_url('es'); ?>" class="flag"><img src="{$path.images}es.png"></a>
                        <a href="?<?php echo Language::get_lang_url('en'); ?>" class="flag"><img src="{$path.images}en.png"></a>
                    </div>
                </div>
            </div>
            <div class="last">
                <p>Copyright © 2021 <strong>{$vkye_webpage}</strong> <i class="fas fa-heart"></i> Desarrollado por <a href="https://codemonkey.com.mx">Code Monkey</a></p>
                <a href="/aviso_de_privacidad">{$lang.privacy_notice}</a>
            </div>
        </footer>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="{$path.js}valkyrie.js?v=1.0"></script>
        <script src="{$path.js}scripts.js?v=2.1"></script>
        <script src="https://kit.fontawesome.com/743152b0c5.js"></script>
        {$dependencies.js}
        {$dependencies.other}

        <!-- Load Facebook SDK for JavaScript -->
        <!-- <div id="fb-root"></div>
        <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script> -->

        <!-- Your Chat Plugin code -->
        <!-- <div class="fb-customerchat"
        attribution=setup_tool
        page_id="100909121267300"
        logged_in_greeting="¡Hola! Gracias por ponerte en contacto con nosotros ¿En que te podemos ayudar?"
        logged_out_greeting="¡Hola! Gracias por ponerte en contacto con nosotros ¿En que te podemos ayudar?">
        </div> -->

        <!-- Smartsupp Live Chat script -->
        <!-- <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '1a30451532ce7c2b6950dcb2efd9a7e3e131d9d8';
        window.smartsupp||(function(d) {
          var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
          s=d.getElementsByTagName('script')[0];c=d.createElement('script');
          c.type='text/javascript';c.charset='utf-8';c.async=true;
          c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
        </script> -->
    </body>
</html>
