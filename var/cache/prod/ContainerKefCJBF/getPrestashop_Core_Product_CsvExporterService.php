<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.product.csv_exporter' shared service.

return $this->services['prestashop.core.product.csv_exporter'] = new \PrestaShop\PrestaShop\Core\Product\ProductCsvExporter(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.core.admin.data_provider.product_interface'] ?? $this->load('getPrestashop_Core_Admin_DataProvider_ProductInterfaceService.php')));
