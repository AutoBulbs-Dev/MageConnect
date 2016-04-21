<?php
namespace ABDirect\MageConnect\Model;

use ABDirect\MageConnect\Api\Data\ConnectionInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Connection extends \Magento\Framework\Model\AbstractModel implements ConnectionInterface, IdentityInterface
{
	 /**
     * CMS page cache tag
     */
	const CACHE_TAG = 'mageconnect_connection';

    /**
     * @var string
     */
	protected $cache_tag = 'mageconnect_connection';

    /**
     * @var string
     */
	protected $_eventPrefix = 'mageconnect_connection';

    /**
     * Initialize resource model
     *
     * @return void
     */
	protected function _construct()
	{
		$this->_init('ABDirect\MageConnect\Model\ResourceModel\Connection');
	}
}