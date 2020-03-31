<?php

namespace Laravel\Ui\Presets;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;

class Tailwindcss extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::ensureComponentDirectoryExists();
        static::updatePackages();
        static::updateWebpackConfiguration();
        static::updateBootstrapping();
        static::removeNodeModules();
        static::updateTailwindcssConfiguration();
        static::updateSass();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            'resolve-url-loader' => '^2.3.1',
            'sass' => '^1.20.1',
            'sass-loader' => '^8.0.0',
            'popper.js' => '^1.12',
            'tailwindcss' => '^1.2.0',
        ] + Arr::except($packages, [
            'bootstrap',
            'jquery',
        ]);
    }

    /**
     * Update the Webpack configuration.
     *
     * @return void
     */
    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__.'/tailwind-stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/tailwind-stubs/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    /**
     * Update the Webpack configuration.
     *
     * @return void
     */
    protected static function updateTailwindcssConfiguration()
    {
        copy(__DIR__.'/tailwind-stubs/tailwind.config.js', base_path('tailwind.config.js'));
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        copy(__DIR__.'/tailwind-stubs/app.scss', resource_path('sass/app.scss'));
    }
}
