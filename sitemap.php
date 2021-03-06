<?php

header('Content-Type: text/xml');

$https = 'https://one-consultores.com';

$xml =
'<?xml version="1.0" encoding="iso-8859-1"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>' . $https . '</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/nosotros</loc>
        <changefreq>yearly</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios/contables</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios/fiscales</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios/mercadotecnia</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios/software</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios/legales</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios/recursos_humanos</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios/psicologia</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios/poligrafo</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios/medicina_del_trabajo</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/servicios/laboratorio</loc>
        <changefreq>yearly</changefreq>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>' . $https . '/contacto</loc>
        <changefreq>yearly</changefreq>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>' . $https . '/aviso_de_privacidad</loc>
        <changefreq>yearly</changefreq>
        <priority>0.60</priority>
    </url>
</urlset>';

echo $xml;
