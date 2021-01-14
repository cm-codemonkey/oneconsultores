<?php defined('_EXEC') or die; ?>
<div id="page">
    <main id="main-content">
        <section class="breadcrumbs" style="background-image: url('{$path.images}banner-blog.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title display-4">{$lang.blog_title_section}</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-t-50 p-b-50">
            <div class="container">
                <div class="row">
                    <?php foreach ( $articles as $value ): ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card m-b-30">
                                <img class="card-img-top img-fluid" src="{$path.uploads}<?= $value['image'] ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-20 m-t-0"><?= $value['title'][Configuration::$lang_default] ?></h4>
                                    <p class="card-text font-14">
                                        <small class="text-muted">Publicado <?= Dates::formatted_date($value['publication_date'], 'formatted') ?></small>
                                    </p>

                                    <p class="card-text"><?= substr(strip_tags($value['article'][Configuration::$lang_default]), 0, 150) ?>...</p>
                                    <blockquote class="card-bodyquote">
                                        <footer class="blockquote-footer font-14"><?= $value['author'] ?></footer>
                                    </blockquote>

                                    <a href="/blog/<?= $value['url'] ?>" class="btn btn-primary btn-block btn-secondary">Leer más</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
</div>
