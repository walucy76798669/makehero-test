<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a47a54bde3b2601956565db6fbf5dc3
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a47a54bde3b2601956565db6fbf5dc3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a47a54bde3b2601956565db6fbf5dc3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
