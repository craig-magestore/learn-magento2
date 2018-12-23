<?php

namespace Craig\TodoCrud\Block;

use Magento\Framework\View\Element\Template;

class Main extends Template
{
    protected $todoFactory;

    public function __construct(
        Template\Context $context,
        \Craig\TodoCrud\Model\TodoItemFactory $todoFactory
    )
    {
        $this->todoFactory = $todoFactory;
        parent::__construct($context);
    }

    function _prepareLayout()
    {
        $todo = $this->todoFactory->create();
//        $todo->setData('item_text', 'Finish my magento article');
//        $todo->save();
        $collection = $todo->getCollection();
        foreach ($collection as $item) {
            \Zend_Debug::dump('Item_ID ' . $item->getId());
            \Zend_Debug::dump($item->getData());
        }
        exit;
    }
}
