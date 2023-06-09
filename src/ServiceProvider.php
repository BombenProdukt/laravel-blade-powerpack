<?php

declare(strict_types=1);

namespace BombenProdukt\BladePowerPack;

use BombenProdukt\BladePowerPack\View\Components\BunnyFonts;
use BombenProdukt\BladePowerPack\View\Components\GoogleFonts;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;
use Illuminate\Support\Facades\Blade;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        Blade::component('bunny-fonts', BunnyFonts::class);
        Blade::component('google-fonts', GoogleFonts::class);
    }
}
