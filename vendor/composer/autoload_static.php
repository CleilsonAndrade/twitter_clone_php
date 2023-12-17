<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit557a976e1dde11c3f9619d6e6d3c659f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit557a976e1dde11c3f9619d6e6d3c659f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit557a976e1dde11c3f9619d6e6d3c659f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
