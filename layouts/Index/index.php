<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}owl_carousel/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}owl_carousel/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}owl_carousel/owl.carousel.min.js']);
$this->dependencies->add(['js', '{$path.js}Index/index.js']);

?>

<div id="page">
    <div class="home_services">
        <figure>
            <img src="{$path.images}servicio-laboratorio.jpg" alt="Background">
            <a href="https://marbu.one-consultores.com"><img src="{$path.images}marbuu.png" alt="Marbu"><br>{$lang.main_menu_servicios_laboratorio}</a>
        </figure>
        <figure>
            <img src="{$path.images}servicio-contable.jpg" alt="Background">
            <a href="/servicios/contables">{$lang.main_menu_servicios_contables}</a>
        </figure>
        <figure>
            <img src="{$path.images}servicio-fiscal.jpg" alt="Background">
            <a href="/servicios/fiscales">{$lang.main_menu_servicios_fiscales}</a>
        </figure>
        <figure>
            <img src="{$path.images}servicio-mercadotecnia.jpg" alt="Background">
            <a href="/servicios/mercadotecnia">{$lang.main_menu_servicios_mercadotecnia}</a>
        </figure>
        <figure>
            <img src="{$path.images}servicio-software.jpg" alt="Background">
            <a href="/servicios/software">{$lang.main_menu_servicios_software}</a>
        </figure>
        <figure>
            <img src="{$path.images}servicio-legal.jpg" alt="Background">
            <a href="/servicios/legales">{$lang.main_menu_servicios_legales}</a>
        </figure>
        <figure>
            <img src="{$path.images}servicio-rh.jpg" alt="Background">
            <a href="/servicios/recursos_humanos">{$lang.main_menu_servicios_rh}</a>
        </figure>
        <figure>
            <img src="{$path.images}servicio-psicologia.jpg" alt="Background">
            <a href="/servicios/psicologia">{$lang.main_menu_servicios_psicologia}</a>
        </figure>
        <figure>
            <img src="{$path.images}servicio-poligrafo.jpg" alt="Background">
            <a href="/servicios/poligrafo">{$lang.main_menu_servicios_poligrafo}</a>
        </figure>
        <figure>
            <img src="{$path.images}servicio-medicina.jpg" alt="Background">
            <a href="/servicios/medicina_del_trabajo">{$lang.main_menu_servicios_medicina}</a>
        </figure>
    </div>
    <div id="home_ads" class="owl-carousel owl-theme">
        <div class="item id_one">
            <div>
                <h4 class="display-4 text-center text-uppercase m-t-50 m-b-40">{$lang.know_id_one}</h4>
                <p>{$lang.id_one_text}</p>
                <a href="/id_one">{$lang.know_more}</a>
            </div>
            <figure>
                <img src="{$path.images}hand_id_one.png" alt="ID One">
            </figure>
        </div>
        <div class="item antigeno">
            <h4>Antígeno</h4>
            <div>
                <div>
                    <figure>
                        <img src="{$path.images}antigeno_icon_1.svg" alt="Icon">
                    </figure>
                    <div>
                        <h5>Muestra:</h5>
                        <h6>Nasofaríngea</h6>
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="{$path.images}antigeno_icon_2.svg" alt="Icon">
                    </figure>
                    <div>
                        <h5>Día de tomas:</h5>
                        <h6>1-3 Días</h6>
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="{$path.images}antigeno_icon_3.svg" alt="Icon">
                    </figure>
                    <div>
                        <h5>Resultados:</h5>
                        <h6>15-20 min</h6>
                    </div>
                </div>
            </div>
            <h6>Prueba para <strong>Covid 19</strong></h6>
            <!-- <a data-button-modal="cotiza_antigeno">Cotizar</a> -->
            <a href="https://marbu.one-consultores.com">Saber más</a>
        </div>
        <div class="item anticuerpo">
            <h4>Anticuerpo</h4>
            <div>
                <div>
                    <figure>
                        <img src="{$path.images}antigeno_icon_4.svg" alt="Icon">
                    </figure>
                    <div>
                        <h5>Muestra:</h5>
                        <h6>Sangre</h6>
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="{$path.images}antigeno_icon_2.svg" alt="Icon">
                    </figure>
                    <div>
                        <h5>Día de tomas:</h5>
                        <h6>1-5 Días</h6>
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="{$path.images}antigeno_icon_3.svg" alt="Icon">
                    </figure>
                    <div>
                        <h5>Resultados:</h5>
                        <h6>15-20 min</h6>
                    </div>
                </div>
            </div>
            <h6>Prueba para <strong>Covid 19</strong></h6>
            <!-- <a data-button-modal="cotiza_anticuerpo">Cotizar</a> -->
            <a href="https://marbu.one-consultores.com">Saber más</a>
        </div>
        <div class="item socio_economico">
            <figure>
                <img src="{$path.images}socioeconomico_reclutados.png" alt="Background">
            </figure>
            <div>
                <h4>Estudios <strong>Socioeconómicos</strong></h4>
                <h5>Incluyen:</h5>
                <h6>Verificación de documentación</h6>
                <h6>Integración de cuadro familiar</h6>
                <h6>Evidencia fotográfica</h6>
                <h6>Referencias personales, laborales y vecinales</h6>
                <h6>Investigación de ingresos/egresos</h6>
                <!-- <a data-button-modal="cotiza_socioeconomico">Cotizar</a> -->
            </div>
        </div>
    </div>
    <div class="home_videos">
        <div class="item">
            <h6>¿Qué es la <strong class="text-one-consultores">Nom 35</strong>?</h6>
            <video src="{$path.images}nom_35_que_es.mp4" controls></video>
        </div>
        <div class="item">
            <h6>{$lang.know_one_consultores}</h6>
            <video src="{$path.images}one_consultores.mp4" controls></video>
        </div>
        <div class="item">
            <h6>{$lang.know_marbu}</h6>
            <video src="{$path.images}marbu.mp4" controls></video>
        </div>
        <div class="item">
            <h6>{$lang.know_id_one}</h6>
            <video src="{$path.images}id_one.mp4" controls></video>
        </div>
        <div class="item">
            <h6>{$lang.pedro_maria}</h6>
            <video src="{$path.images}pedro_maria.mp4" controls></video>
        </div>
        <div class="item">
            <h6>{$lang.seguimos_contigo}</h6>
            <video src="{$path.images}seguimos_contigo.mp4" controls></video>
        </div>
        <div class="button">
            <a href="/blog">¡Leé nuestro blog!</a>
        </div>
    </div>
    <div class="home_clients">
        <h4 class="display-4 text-center text-uppercase m-t-50 m-b-40">{$lang.our_clients}</h4>
        <div id="home_clients" class="owl-carousel owl-theme">
            <figure class="item hor">
                <img src="{$path.images}clients/cancun_sailing.png" alt="Logotype">
            </figure>
            <!-- <figure class="item hor">
                <img src="{$path.images}clients/moontravel.png" alt="Logotype">
            </figure> -->
            <!-- <figure class="item hor">
                <img src="{$path.images}clients/majestic.png" alt="Logotype">
            </figure> -->
            <figure class="item hor">
                <img src="{$path.images}clients/westin.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/excellence_collection.png" alt="Logotype">
            </figure>
            <!-- <figure class="item ver">
                <img src="{$path.images}clients/dos_playas.png" alt="Logotype">
            </figure> -->
            <figure class="item hor">
                <img src="{$path.images}clients/icebar.png" alt="Logotype">
            </figure>
            <figure class="item hor">
                <img src="{$path.images}clients/sobmex.png" alt="Logotype">
            </figure>
            <figure class="item hor">
                <img src="{$path.images}clients/lyrba.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/GOMART.png" alt="Logotype">
            </figure>
            <!-- <figure class="item ver">
                <img src="{$path.images}clients/mexico_planner.png" alt="Logotype">
            </figure> -->
            <figure class="item hor">
                <img src="{$path.images}clients/kreatravel.png" alt="Logotype">
            </figure>
            <!-- <figure class="item hor">
                <img src="{$path.images}clients/imperial_perlas.png" alt="Logotype">
            </figure> -->
            <figure class="item hor">
                <img src="{$path.images}clients/belo.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/cancun_bay.png" alt="Logotype">
            </figure>
            <figure class="item hor">
                <img src="{$path.images}clients/yellow.png" alt="Logotype">
            </figure>
            <figure class="item hor">
                <img src="{$path.images}clients/MAPLA.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/travel_assistant.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/cenacolo.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/bookolis.png" alt="Logotype">
            </figure>
            <figure class="item hor">
                <img src="{$path.images}clients/arqcocun.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/flordeliz.png" alt="Logotype">
            </figure>
            <figure class="item hor">
                <img src="{$path.images}clients/gobe_cafe.png" alt="Logotype">
            </figure>
            <!-- <figure class="item hor">
                <img src="{$path.images}clients/greenkids.png" alt="Logotype">
            </figure> -->
            <figure class="item hor">
                <img src="{$path.images}clients/kolekaabal.png" alt="Logotype">
            </figure>
            <figure class="item hor">
                <img src="{$path.images}clients/royalresorts.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/whaton.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/hola.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/URBIS.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/tipstravel.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/congresocadenafria.png" alt="Logotype">
            </figure>
            <figure class="item hor">
                <img src="{$path.images}clients/logitics.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/notaria_62.png" alt="Logotype">
            </figure>
            <!-- <figure class="item hor">
                <img src="{$path.images}clients/24.png" alt="Logotype">
            </figure> -->
            <figure class="item hor">
                <img src="{$path.images}clients/jc.png" alt="Logotype">
            </figure>
            <figure class="item hor">
                <img src="{$path.images}clients/mbm.png" alt="Logotype">
            </figure>
            <figure class="item hor">
                <img src="{$path.images}clients/cardona.png" alt="Logotype">
            </figure>
        </div>
        <a href="/nosotros">{$lang.know_more}</a>
    </div>
</div>
<!-- <section class="modal" data-modal="cotiza_antigeno">
    <div class="content">
        <main>
            <form name="cotiza_antigeno">
                <h4 class="m-b-20">Cotiza | Prueba Antígeno</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>Nombre de la empresa <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="company_name">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>Dirección de la empresa <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="company_address">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>Nombre de contacto <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="contact_name">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>Teléfono de contacto <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="contact_phone">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>Email de contacto <span class="text-danger"><small>*</small></span></p>
                                <input type="email" name="contact_email">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>Cant. de pruebas <span class="text-danger"><small>*</small></span></p>
                                <input type="number" name="tests_quantity">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 suffix-md-3 m-t-20">
                        <input type="hidden" name="recaptcha_2" id="recaptcha_2">
                        <button type="submit" class="btn btn-warning btn-block btn-lg m-b-5">Enviar</button>
                        <a button-close class="btn btn-warning btn-block btn-lg">Cancelar</a>
                    </div>
                </div>
            </form>
        </main>
    </div>
</section>
<section class="modal" data-modal="cotiza_anticuerpo">
    <div class="content">
        <main>
            <form name="cotiza_anticuerpo">
                <h4 class="m-b-20">Cotiza | Prueba Anticuerpo</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>Nombre de la empresa <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="company_name">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>Dirección de la empresa <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="company_address">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>Nombre de contacto <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="contact_name">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>Teléfono de contacto <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="contact_phone">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>Email de contacto <span class="text-danger"><small>*</small></span></p>
                                <input type="email" name="contact_email">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>Cant. de pruebas <span class="text-danger"><small>*</small></span></p>
                                <input type="number" name="tests_quantity">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 suffix-md-3 m-t-20">
                        <input type="hidden" name="recaptcha_3" id="recaptcha_3">
                        <button type="submit" class="btn btn-warning btn-block btn-lg m-b-5">Enviar</button>
                        <a button-close class="btn btn-warning btn-block btn-lg">Cancelar</a>
                    </div>
                </div>
            </form>
        </main>
    </div>
</section>
<section class="modal" data-modal="cotiza_socioeconomico">
    <div class="content">
        <main>
            <form name="cotiza_socioeconomico">
                <h4 class="m-b-20">Cotiza | Estudio socioeconómico</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>Nombre de la empresa <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="company_name">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>RFC de la empresa <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="company_rfc">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>Dirección de la empresa <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="company_address">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>Rotación de empleados por mes <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="company_rot">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>Nombre de contacto <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="contact_name">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>Teléfono de contacto <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="contact_phone">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>Email de contacto <span class="text-danger"><small>*</small></span></p>
                                <input type="email" name="contact_email">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 suffix-md-3 m-t-20">
                        <input type="hidden" name="recaptcha_4" id="recaptcha_4">
                        <button type="submit" class="btn btn-warning btn-block btn-lg m-b-5">Enviar</button>
                        <a button-close class="btn btn-warning btn-block btn-lg">Cancelar</a>
                    </div>
                </div>
            </form>
        </main>
    </div>
</section> -->
