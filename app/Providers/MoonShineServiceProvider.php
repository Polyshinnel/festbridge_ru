<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\PageImagesResource;
use App\MoonShine\Resources\PageTextResource;
use App\MoonShine\Pages\MainPage;
use App\MoonShine\Resources\MainPageTextResource;
use App\MoonShine\Resources\MainPageImagesResource;
use App\MoonShine\Resources\MainPageGalleryResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                PageResource::class,
                PageImagesResource::class,
                PageTextResource::class,
                MainPageTextResource::class,
                MainPageImagesResource::class,
                MainPageGalleryResource::class,
            ])
            ->pages([
                ...$config->getPages(),
                MainPage::class,
            ])
        ;
    }
}
