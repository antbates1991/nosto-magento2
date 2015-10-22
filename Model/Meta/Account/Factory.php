<?php

namespace Nosto\Tagging\Model\Meta\Account;

use Magento\Framework\ObjectManagerInterface;

class Factory
{
    /**
     * @var ObjectManagerInterface
     */
    protected $_objectManager;

    /**
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
    }

    /**
     * Create new product object.
     *
     * @param array $data
     * @return \Nosto\Tagging\Model\Meta\Account
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create(
            'Nosto\Tagging\Model\Meta\Account',
            $data
        );
    }
}
