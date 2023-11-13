<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.product_preferences.general.form_handler' shared service.

$this->services['prestashop.admin.product_preferences.general.form_handler'] = $instance = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\ProductPreferences\ProductPreferencesFormHandler(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()), ($this->services['prestashop.admin.product_preferences.general.data_provider'] ?? $this->load('getPrestashop_Admin_ProductPreferences_General_DataProviderService.php')), 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\ProductPreferences\\GeneralType', 'ProductPreferencesPageGeneral', 'general');

$instance->setCacheClearer(($this->services['prestashop.core.cache.clearer.product_cache_clearer_chain'] ?? $this->load('getPrestashop_Core_Cache_Clearer_ProductCacheClearerChainService.php')));

return $instance;
