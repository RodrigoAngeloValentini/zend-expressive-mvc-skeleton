<?php

namespace App;

class Module
{
    public function __invoke()
    {
        return [

            'dependencies' => [
                'factories' => [
                    Action\HomePageAction::class => Action\HomePageFactory::class,
                ],
            ],

            'routes' => [
                [
                    'name' => 'home',
                    'path' => '/',
                    'middleware' => Action\HomePageAction::class,
                    'allowed_methods' => ['GET'],
                ]
            ],

            'templates' => [
                'paths' => [
                    'app'    => [ __DIR__ . '/templates/app'],
                ],
            ],
        ];
    }
}