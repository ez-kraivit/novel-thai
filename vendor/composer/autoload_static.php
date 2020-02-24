<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit679e7c76a436d8f12185c7014b17bb36
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Novels\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Novels\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
    );

    public static $classMap = array (
        'Novels\\Users' => __DIR__ . '/../..' . '/model/Users.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit679e7c76a436d8f12185c7014b17bb36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit679e7c76a436d8f12185c7014b17bb36::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit679e7c76a436d8f12185c7014b17bb36::$classMap;

        }, null, ClassLoader::class);
    }
}
