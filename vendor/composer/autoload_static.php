<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ea4b2bb20f5bb883fbdb6dd3afbfada
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pf\\arr\\' => 7,
        ),
        'P' => 
        array (
            'Phpml\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pf\\arr\\' => 
        array (
            0 => __DIR__ . '/..' . '/nancheng/pfinal-array/src',
        ),
        'Phpml\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ai/php-ml/src/Phpml',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ea4b2bb20f5bb883fbdb6dd3afbfada::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ea4b2bb20f5bb883fbdb6dd3afbfada::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
