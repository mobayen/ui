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
        static::updateComponent();
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
            'tailwindcss' => '^1.2.0',
        ] + Arr::except($packages, [
            '@babel/preset-react',
            'react',
            'react-dom',
            'bootstrap',
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
     * Update the example component.
     *
     * @return void
     */
    protected static function updateComponent()
    {
        // TODO check if these files exist copy a tailwind css version

        // (new Filesystem)->delete(
        //     resource_path('js/components/Example.js')
        // );

        // copy(
        //     __DIR__.'/vue-stubs/ExampleComponent.vue',
        //     resource_path('js/components/ExampleComponent.vue')
        // );
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        // TODO remove the bootstrap from "bootstrap.js"

        // copy(__DIR__.'/vue-stubs/app.js', resource_path('js/app.js'));
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
        // TODO remove the _variables.scss
        // copy(__DIR__.'/bootstrap-stubs/_variables.scss', resource_path('sass/_variables.scss'));

        copy(__DIR__.'/tailwind-stubs/app.scss', resource_path('sass/app.scss'));
    }
}
