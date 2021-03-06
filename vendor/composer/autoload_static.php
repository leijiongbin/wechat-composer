<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit798ed45139bee77b4cd3a48e86e9fcdc
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wechat\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wechat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit798ed45139bee77b4cd3a48e86e9fcdc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit798ed45139bee77b4cd3a48e86e9fcdc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
