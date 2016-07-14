<?php

namespace Originalapp\Hideprice\Helper;

class Data  extends \Magento\Framework\App\Helper\AbstractHelper
{
	/**
	 * @var \Magento\Framework\App\Config\ScopeConfigInterface
	 */
	protected $_scopeConfig;
	
	/**
	 * status of feature config path
	 */
	const XML_PATH_HIDEPRICE_ENABLE = 'originalapp_hideprice/general/enabled';
	
	public function __construct(
			\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
			) {
				$this->_scopeConfig = $scopeConfig;
	}
	
	/**
	 * Get store scope configuration by path
	 *
	 * @return mixed
	 */
	public function getConfig($config_path)
	{
		return $this->_scopeConfig->getValue(
				$config_path,
				\Magento\Store\Model\ScopeInterface::SCOPE_STORE
				);
	}
	
    /**
     * Get store scope configuration  flag by path
     *
     * @return mixed
     */
    public function getConfigFlag($config_path)
    {
    	return !$this->_scopeConfig->isSetFlag(
    			$config_path,
    			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
    			);
    }
	
    /**
     * Check if the hide price feature is activated
     *
     * @return boolean
     */
    public function isActivated()
    {
    	return $this->getConfigFlag(self::XML_PATH_HIDEPRICE_ENABLE);
    }

}