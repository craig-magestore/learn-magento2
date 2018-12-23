<?php

namespace Craig\TodoCrud\Model;

class TodoItem
    extends \Magento\Framework\Model\AbstractModel
    implements \Craig\TodoCrud\Api\Data\TodoItemInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'craig_todocrud_todoitem';

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    protected function _construct()
    {
        $this->_init('Craig\TodoCrud\Model\ResourceModel\TodoItem');
    }
}
