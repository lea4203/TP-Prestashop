<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.shop.url.category_image_folder_provider' shared service.

return $this->services['prestashop.adapter.shop.url.category_image_folder_provider'] = new \PrestaShop\PrestaShop\Adapter\Shop\Url\ImageFolderProvider(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->link, 'img/c');
