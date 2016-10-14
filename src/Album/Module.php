<?php

namespace Album;

class Module
{
    public function __invoke()
    {
        return [

            'dependencies' => [
                'factories' => [
                    Controller\AlbumController::class => Controller\AlbumControllerFactory::class,
                ],
            ],

            'routes' => [
                [
                    'name' => 'album',
                    'path' => '/album',
                    'middleware' => Controller\AlbumController::class,
                    'allowed_methods' => ['GET'],
                ],
            ],

            'templates' => [
                'paths' => [
                    'album'    => [ __DIR__ . '/View/album'],
                ],
            ],
        ];
    }
}