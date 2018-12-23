<?php

namespace Craig\TodoCrud\Model\ResourceModel\TodoItem;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Craig\TodoCrud\Model\TodoItem', 'Craig\TodoCrud\Model\ResourceModel\TodoItem');
    }
}
