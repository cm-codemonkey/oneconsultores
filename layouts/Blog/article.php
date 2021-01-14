<?php
defined('_EXEC') or die;

$this->dependencies->add(['other', '<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-542f10bf2e34ea7b"></script>']);
?>
<div id="page">
    <main id="main-content">
        <section class="p-t-50 p-b-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30" style="border: none;">
                            <img class="card-img-top img-fluid" src="{$path.uploads}<?= $article['image'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-20 m-t-0"><?= $article['title'][Configuration::$lang_default] ?></h4>
                                <p class="card-text font-14">
                                    <small class="text-muted">Publicado <?= Dates::formatted_date($article['publication_date'], 'formatted') ?></small>
                                </p>

                                <?= $value['article'][Configuration::$lang_default] ?>

                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <div class="addthis_inline_share_toolbox_phdt"></div>

                                <blockquote class="card-bodyquote">
                                    <footer class="blockquote-footer font-14"><?= $article['author'] ?></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
