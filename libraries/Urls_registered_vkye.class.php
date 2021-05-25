<?php

defined('_EXEC') or die;

class Urls_registered_vkye
{
    static public $home_page_default = '/';

    static public function urls()
    {
        return [
            '/' => [
                'controller' => 'Index',
                'method' => 'index'
            ],
            '/nosotros' => [
                'controller' => 'About',
                'method' => 'index'
            ],
            '/servicios' => [
                'controller' => 'Services',
                'method' => 'index'
            ],
            '/servicios/contables' => [
                'controller' => 'Services',
                'method' => 'accountants'
            ],
            '/servicios/fiscales' => [
                'controller' => 'Services',
                'method' => 'fiscals'
            ],
            '/servicios/mercadotecnia' => [
                'controller' => 'Services',
                'method' => 'marketing'
            ],
            '/servicios/software' => [
                'controller' => 'Services',
                'method' => 'software'
            ],
            '/servicios/legales' => [
                'controller' => 'Services',
                'method' => 'legals'
            ],
            '/servicios/recursos_humanos' => [
                'controller' => 'Services',
                'method' => 'human_resources'
            ],
            '/servicios/psicologia' => [
                'controller' => 'Services',
                'method' => 'psychology'
            ],
            '/servicios/poligrafo' => [
                'controller' => 'Services',
                'method' => 'polygraph'
            ],
            '/servicios/medicina_del_trabajo' => [
                'controller' => 'Services',
                'method' => 'work_medicine'
            ],
            '/servicios/laboratorio' => [
                'controller' => 'Services',
                'method' => 'laboratory'
            ],
            '/contacto' => [
                'controller' => 'Contact',
                'method' => 'index'
            ],
            '/aviso_de_privacidad' => [
                'controller' => 'Privacy',
                'method' => 'index'
            ]
        ];
    }
}
