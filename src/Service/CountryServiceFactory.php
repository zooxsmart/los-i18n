<?php

declare(strict_types=1);

namespace LosI18n\Service;

use Psr\Container\ContainerInterface;

class CountryServiceFactory
{
    public function __invoke(ContainerInterface $container): CountryService
    {
        $config      = $container->get('config');
        $path        = $config['los_i18n']['path'] ?? 'vendor/zooxsmart/los-i18n-data/data';
        $defaultLang = $config['los_i18n']['default_lang'] ?? 'en';

        return new CountryService($path, $defaultLang);
    }
}
