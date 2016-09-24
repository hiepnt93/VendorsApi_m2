<?php
namespace Vnecoms\VendorsApi\Observer;
class VendorSaveBefore implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer){exit(__FILE__);}
}
