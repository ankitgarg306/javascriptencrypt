<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteee4abdd21e7d8270bebb5eb54f58119
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tholu\\Packer\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tholu\\Packer\\' => 
        array (
            0 => __DIR__ . '/..' . '/tholu/php-packer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteee4abdd21e7d8270bebb5eb54f58119::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteee4abdd21e7d8270bebb5eb54f58119::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}