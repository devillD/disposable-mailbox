<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit125dddd280a32cf75b181166154246ec
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PhpImap' => 
            array (
                0 => __DIR__ . '/..' . '/php-imap/php-imap/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit125dddd280a32cf75b181166154246ec::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}