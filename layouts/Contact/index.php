<?php

defined('_EXEC') or die;

$this->dependencies->add(['js', '{$path.js}Contact/index.js']);

?>

<div id="page">
    <main id="main-content">
        <section class="breadcrumbs" style="background-image: url('{$path.images}banner-contacto.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title display-4">{$lang.contacto_title_section}</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-t-50 p-b-50">
            <div class="container">
                <div class="col-lg-8 offset-lg-2 suffix-lg-2 text-center">
                    <p class="font-18">{$lang.contacto_description_section}</p>
                </div>
                <form name="contact" class="col-lg-10 offset-lg-1 suffix-lg-1 m-t-50">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="label">
                                <label>
                                    <p>{$lang.contacto_input_name} <span class="text-danger"><small>*</small></span></p>
                                    <input type="text" name="name">
                                    <p class="description">{$lang.contacto_input_name_description}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="label">
                                <label>
                                    <p>{$lang.contacto_input_tel} <span class="text-danger"><small>*</small></span></p>
                                    <input type="tel" name="phone">
                                    <p class="description">{$lang.contacto_input_tel_description}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="label">
                                <label>
                                    <p>{$lang.contacto_input_email} <span class="text-danger"><small>*</small></span></p>
                                    <input type="email" name="email">
                                    <p class="description">{$lang.contacto_input_email_description}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="label">
                                <label>
                                    <p>{$lang.contacto_input_company}</p>
                                    <input type="text" name="company">
                                    <p class="description">{$lang.contacto_input_company_description}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">
                                <label>
                                    <p>{$lang.contacto_input_comments}</p>
                                    <textarea name="comment" rows="8" cols="80"></textarea>
                                    <p class="description">{$lang.contacto_input_comments_description}</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <label>
                                <input type="checkbox" name="privacy_notice">
                                <a href="/aviso_de_privacidad" target="_blank">{$lang.privacy_notice}</a>
                            </label>
                        </div>
                        <div class="col-md-6 offset-md-3 suffix-md-3 m-t-20">
                            <div class="g-recaptcha" data-sitekey="6LdglrcZAAAAALsoHXxohbDO1XXsmCU6KSQvo2Lz"></div>
                            <button type="submit" class="btn btn-warning btn-block btn-lg">{$lang.contacto_button_submit}</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>
