<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a84236abc16d42d561878925f0ba6a6
{
    public static $classMap = array (
        'ComposerAutoloaderInit9a84236abc16d42d561878925f0ba6a6' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit9a84236abc16d42d561878925f0ba6a6' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'controllers\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'core\\App' => __DIR__ . '/../..' . '/core/App.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9a84236abc16d42d561878925f0ba6a6::$classMap;

        }, null, ClassLoader::class);
    }
}
