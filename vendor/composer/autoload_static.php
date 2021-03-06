<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf7e9e710f150ee70cb8fa73971386de
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf7e9e710f150ee70cb8fa73971386de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf7e9e710f150ee70cb8fa73971386de::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf7e9e710f150ee70cb8fa73971386de::$classMap;

        }, null, ClassLoader::class);
    }
}
