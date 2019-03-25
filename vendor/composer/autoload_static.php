<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdac046fe83bfc63797ac2c4be78dfb5b
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdac046fe83bfc63797ac2c4be78dfb5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdac046fe83bfc63797ac2c4be78dfb5b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}