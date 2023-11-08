# LosI18n

## Introduction
This middleware provides list of Languages, Countries and Regions translated to all languages.

## Requirements
PHP 7.4 | 8.0 and any container-interopt compatible project.

## Installation
```
composer require zooxsmart/los-i18n
```

Optionally, copy the config file to your project.

## I18n Data

This module needs data from [los-i18n-data](https://github.com/zooxsmart/los-i18n-data.git). So you need either to add the module to you project:

### Adding the los-i18n-data
```
composer require zooxsmart/los-i18n-data
```

### File format
There are 3 formats: php, json and csv. If you need to import the json file, it's located:
vendor/zooxsmart/los-i18n-data/data/<language>/languages.json
vendor/zooxsmart/los-i18n-data/data/<language>/countries.json
vendor/zooxsmart/los-i18n-data/data/<language>/regions.json

## Usage

### Language list
```php
$languagesService = $sm->get('losi18n-countries');
// All languages translated to pt_BR
$languages = $countriesService->getAllLanguages('pt_BR');
// All languages in their native names
$languages = $countriesService->getNativeLanguages();
// Brazilian Portuguese in English
$language = $countriesService->getLanguage('pt_BR', 'en);
```

### Country list
```php
$countriesService = $sm->get('losi18n-countries');
// All officially assigned countries translated to English
$countries = $countriesService->getAllCountries('en');
// All countries translated to English
$countries = $countriesService->getAllCountries('en', false);
// United States translated to Brazilian Portuguese
$country = $countriesService->getCountry('US','pt_BR');
```

### Region list
```php
$regionsService = $sm->get('losi18n-regions');
$regions = $countriesService->getAllRegions('pt_BR');
```
