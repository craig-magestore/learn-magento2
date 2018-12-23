<?php

namespace Craig\Repository\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Examples extends Command
{
    protected $objectManager;

    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Magento\Framework\App\State $appState,
        ?string $name = null)
    {
        $this->objectManager = $objectManager;
        $appState->setAreaCode('frontend');
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName("ps:examples");
        $this->setDescription("A command the programmer was too lazy to enter a description for.");
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $repo = $this->objectManager->get('Magento\Catalog\Model\ProductRepository');
        $page = $repo->getById(1);
        echo get_class($page), "\n";

        $repo = $this->objectManager->get('Magento\Cms\Model\PageRepository');
        $page = $repo->getById(1);
        echo $page->getTitle(), "\n";
//        $page->setTitle($page->getTitle() . ', Edited by code!');
//        $repo->save($page);
        //Filter
        $filter = $this->objectManager->create('\Magento\Framework\Api\Filter');
        $filter->setData('field', 'sku');
        $filter->setData('value', 'WSH11%');
        $filter->setData('condition_type', 'like');

        // Add filter to group
        $filter_group = $this->objectManager->create('\Magento\Framework\Api\Search\FilterGroup');
        $filter_group->setData('filters', [$filter]);


        $search_criteria = $this->objectManager->create(
            'Magento\Framework\Api\SearchCriteriaInterface'
        );
        $search_criteria->setFilterGroups([$filter_group]);

        $repo = $this->objectManager->get('Magento\Catalog\Model\ProductRepository');
        $result = $repo->getList($search_criteria);
        $products = $result->getItems();
        foreach ($products as $product) {
            echo $product->getSku(), "\n";
        }
    }
} 