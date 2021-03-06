<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a580e63392ac1d12882a3c4f63dabc4
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'models\\' => 7,
        ),
        'c' => 
        array (
            'controller\\' => 11,
            'config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
        'config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a580e63392ac1d12882a3c4f63dabc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a580e63392ac1d12882a3c4f63dabc4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
