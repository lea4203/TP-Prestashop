<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.pack.command_handler.set_pack_products_handler' shared service.

return $this->services['prestashop.adapter.product.pack.command_handler.set_pack_products_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Pack\CommandHandler\SetPackProductsHandler(($this->services['prestashop.adapter.product.pack.update.product_pack_updater'] ?? $this->load('getPrestashop_Adapter_Product_Pack_Update_ProductPackUpdaterService.php')));