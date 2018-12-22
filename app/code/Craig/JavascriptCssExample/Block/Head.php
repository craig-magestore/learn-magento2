<?php
/**
 * Created by PhpStorm.
 * User: Craig
 * Date: 12/22/2018
 * Time: 7:45 PM
 */

namespace Craig\JavascriptCssExample\Block;


use Magento\Framework\View\Element\Template;

class Head extends \Magento\Framework\View\Element\Template
{
    public $assetRepository;

    public function __construct(
        Template\Context $context,
        \Magento\Framework\View\Asset\Repository $assetRepository,
        array $data = []
    )
    {
        $this->assetRepository = $assetRepository;
        parent::__construct($context, $data);
    }

}