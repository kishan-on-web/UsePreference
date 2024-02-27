<?php
namespace KK\UsePreference\Model;

class Product extends \Magento\Catalog\Model\Product{

    public function getName()
    {
        $originalName = parent::getName();
        $modifiedName = "Modified by KK " . $originalName;
        return $modifiedName;
    }

    // public function getName()
    // {
    //     return 'Task Done';
    // }
}