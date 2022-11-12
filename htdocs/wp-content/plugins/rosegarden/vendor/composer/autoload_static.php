<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacd4c7e114a343ab0ab2d4769878b99c
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Rosegarden\\Controllers\\Action' => __DIR__ . '/../..' . '/inc/controllers/class-action.php',
        'Rosegarden\\Controllers\\CustomPostType' => __DIR__ . '/../..' . '/inc/controllers/class-customposttype.php',
        'Rosegarden\\Controllers\\Page' => __DIR__ . '/../..' . '/inc/controllers/class-page.php',
        'Rosegarden\\Controllers\\Settings' => __DIR__ . '/../..' . '/inc/controllers/class-settings.php',
        'Rosegarden\\Controllers\\Shortcode' => __DIR__ . '/../..' . '/inc/controllers/class-shortcode.php',
        'Rosegarden\\Controllers\\Translation' => __DIR__ . '/../..' . '/inc/controllers/class-translation.php',
        'Rosegarden\\Controllers\\Widget' => __DIR__ . '/../..' . '/inc/controllers/class-widget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitacd4c7e114a343ab0ab2d4769878b99c::$classMap;

        }, null, ClassLoader::class);
    }
}
