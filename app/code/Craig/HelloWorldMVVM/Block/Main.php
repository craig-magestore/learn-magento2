<?php
/**
 * Created by PhpStorm.
 * User: Craig
 * Date: 12/22/2018
 * Time: 4:30 PM
 */

namespace Craig\HelloWorldMVVM\Block;

use Magento\Framework\View\Element\Template;

class Main extends Template
{
    public function getGoodbyeMessage()
    {
        return 'Goodbye World';
    }

    protected function _prepareLayout()
    {
        $this->setMessage('Hello Again World');
        $this->setName($this->getRequest()->getParam('name'));
    }
}