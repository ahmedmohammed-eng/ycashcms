<?php return array (
  'name' => 'Laravel',
  'env' => 'production',
  'debug' => false,
  'url' => 'http://localhost:808/microweber-master/',
  'asset_url' => NULL,
  'timezone' => 'UTC',
  'locale' => 'ar_SA',
  'fallback_locale' => 'en',
  'key' => 'base64:TG1wT29LbE9TQlBSQU1vU0x6NVBSeDFMakZiSzVHMk8=',
  'cipher' => 'AES-256-CBC',
  'log' => 'daily',
  'providers' => 
  array (
    0 => 'MicroweberPackages\\App\\Providers\\AppServiceProvider',
    1 => 'MicroweberPackages\\App\\Providers\\EventServiceProvider',
    2 => 'MicroweberPackages\\App\\Providers\\RouteServiceProvider',
  ),
  'manifest' => storage_path().DIRECTORY_SEPARATOR.'framework',
);