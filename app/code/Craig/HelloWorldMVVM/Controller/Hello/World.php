<?php
/**
 * Created by PhpStorm.
 * User: Craig
 * Date: 12/22/2018
 * Time: 4:05 PM
 */

namespace Craig\HelloWorldMVVM\Controller\Hello;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class World extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $page_object = $this->pageFactory->create();
        return $page_object;
    }
}