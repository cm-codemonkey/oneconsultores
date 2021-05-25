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
        <figure>
            <img src="{$path.images}servicio-laboratorio.jpg" alt="Background">
            <a href="/servicios/laboratorio">{$lang.main_menu_servicios_laboratorio}</a>
        </figure>
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
    </div>
    <!-- <div class="home_clients">
        <h4 class="display-4 text-center text-uppercase m-t-50 m-b-40">{$lang.our_clients}</h4>
        <div id="home_clients" class="owl-carousel owl-theme">
            <figure class="item hor">
                <img src="{$path.images}clients/cancun_sailing.png" alt="Logotype">
            </figure>
            <figure class="item hor">
                <img src="{$path.images}clients/westin.png" alt="Logotype">
            </figure>
            <figure class="item ver">
                <img src="{$path.images}clients/excellence_collection.png" alt="Logotype">
            </figure>
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
            <figure class="item hor">
                <img src="{$path.images}clients/kreatravel.png" alt="Logotype">
            </figure>
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
    </div> -->
    <div id="home_ads" class="owl-carousel owl-theme">
        <div class="item id_one">
            <div>
                <h4 class="display-4 text-center text-uppercase m-t-50 m-b-40">{$lang.know_id_one}</h4>
                <p>{$lang.id_one_text}</p>
                <a href="https://idone.mx" target="_blank">{$lang.know_more}</a>
            </div>
            <figure>
                <img src="{$path.images}hand_id_one.png" alt="ID One">
            </figure>
        </div>
        <div class="item antigeno">
            <h4>PCR</h4>
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
                        <h6>1 Día</h6>
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="{$path.images}antigeno_icon_3.svg" alt="Icon">
                    </figure>
                    <div>
                        <h5>Resultados:</h5>
                        <h6>12-24 horas</h6>
                    </div>
                </div>
            </div>
            <h6>Prueba para <strong>Covid 19</strong></h6>
            <a href="https://skylabs.mx" target="_blank">{$lang.know_more}</a>
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
                        <h6>1 Día</h6>
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
            <a href="https://skylabs.mx" target="_blank">{$lang.know_more}</a>
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
                        <h6>1 Día</h6>
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
            <a href="https://skylabs.mx" target="_blank">{$lang.know_more}</a>
        </div>
    </div>
</div>
