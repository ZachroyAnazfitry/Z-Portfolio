<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit671ba33d4a780acb2bdd1269372f7291
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit671ba33d4a780acb2bdd1269372f7291::$classMap;

        }, null, ClassLoader::class);
    }
}
