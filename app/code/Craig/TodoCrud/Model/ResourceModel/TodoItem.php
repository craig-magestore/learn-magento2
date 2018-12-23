<?php

namespace Craig\TodoCrud\Model\ResourceModel;
class TodoItem extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('craig_todocrud_todoitem', 'todoitem_id');
    }
}
