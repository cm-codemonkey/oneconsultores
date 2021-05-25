<?php defined('_EXEC') or die; ?>

<div id="page">
    <main id="main-content">
        <section class="breadcrumbs" style="background-image: url('{$path.images}banner-servicios.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title display-4">{$lang.servicios_title_page}</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-yellow-gray p-t-50 p-b-50 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong>{$lang.servicios_figure_circle_one}</strong></h4>
                        <figure class="figure-img">
                            <img class="img-fluid m-b-10" src="{$path.images}servicio-asesoria.png" alt="servicio-asesoria">
                        </figure>
                    </div>
                    <div class="col-md-3">
                        <h4><strong>{$lang.servicios_figure_circle_two}</strong></h4>
                        <figure class="figure-img">
                            <img class="img-fluid m-b-10" src="{$path.images}servicio-auditoria.png" alt="servicio-auditoria">
                        </figure>
                    </div>
                    <div class="col-md-3">
                        <h4><strong>{$lang.servicios_figure_circle_three}</strong></h4>
                        <figure class="figure-img">
                            <img class="img-fluid m-b-10" src="{$path.images}servicio-gestoria.png" alt="servicio-gestoria">
                        </figure>
                    </div>
                    <div class="col-md-3">
                        <h4><strong>{$lang.servicios_figure_circle_four}</strong></h4>
                        <figure class="figure-img">
                            <img class="img-fluid m-b-10" src="{$path.images}servicio-investigacion.png" alt="servicio-investigacion">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray p-b-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 suffix-lg-2 text-center m-b-50">
                        <p class="font-18">{$lang.servicios_text}</p>
                        <div class="services_buttons">
                            <div>
                                <a href="/servicios/contables"><img src="{$path.images}icon_contables_lp.png" alt="Service"></a>
                                <span>{$lang.main_menu_servicios_contables}</span>
                            </div>
                            <div>
                                <a href="/servicios/fiscales"><img src="{$path.images}icon_fiscals_lp.png" alt="Service"></a>
                                <span>{$lang.main_menu_servicios_fiscales}</span>
                            </div>
                            <div>
                                <a href="/servicios/mercadotecnia"><img src="{$path.images}icon_mercadotecnia_lp.png" alt="Service"></a>
                                <span>{$lang.main_menu_servicios_mercadotecnia}</span>
                            </div>
                            <div>
                                <a href="/servicios/legales"><img src="{$path.images}icon_legales_lp.png" alt="Service"></a>
                                <span>{$lang.main_menu_servicios_legales}</span>
                            </div>
                            <div>
                                <a href="/servicios/recursos_humanos"><img src="{$path.images}icon_rh_lp.png" alt="Service"></a>
                                <span>{$lang.main_menu_servicios_rh}</span>
                            </div>
                            <div>
                                <a href="/servicios/psicologia"><img src="{$path.images}icon_psicologia_lp.png" alt="Service"></a>
                                <span>{$lang.main_menu_servicios_psicologia}</span>
                            </div>
                            <div>
                                <a href="/servicios/poligrafo"><img src="{$path.images}icon_poligrafo_lp.png" alt="Service"></a>
                                <span>{$lang.main_menu_servicios_poligrafo}</span>
                            </div>
                            <div>
                                <a href="/servicios/medicina_del_trabajo"><img src="{$path.images}icon_medicina_lp.png" alt="Service"></a>
                                <span>{$lang.main_menu_servicios_medicina}</span>
                            </div>
                            <div>
                                <a href="/servicios/laboratorio"><img src="{$path.images}icon_laboratorio_lp.png" alt="Service"></a>
                                <span>{$lang.main_menu_servicios_laboratorio}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
