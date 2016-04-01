<?php
/**
 * Copyright © 2016 Rouven Alexander Rieker
 * See LICENSE.md bundled with this module for license details.
 */
namespace Semaio\Base\Block\Adminhtml\Shop;

use Magento\Backend\Block\Template;
use Magento\Framework\App\DeploymentConfig as AppDeploymentConfig;
use Magento\Framework\App\State as AppState;

/**
 * Class ApplicationMode
 *
 * @package Semaio\Base\Block\Adminhtml\Shop
 */
class ApplicationMode extends Template
{
    /**
     * @var string
     */
    protected $_template = 'shop/application_mode.phtml';

    /**
     * @var AppDeploymentConfig
     */
    private $deploymentConfig;

    /**
     * ApplicationMode constructor.
     *
     * @param AppDeploymentConfig $deploymentConfig
     * @param Template\Context    $context
     * @param array               $data
     */
    public function __construct(
        AppDeploymentConfig $deploymentConfig,
        Template\Context $context,
        array $data
    ) {
        $this->deploymentConfig = $deploymentConfig;
        parent::__construct($context, $data);
    }

    /**
     * Retrieve the application mode
     *
     * @return string
     */
    public function getApplicationMode()
    {
        return $this->deploymentConfig->get(AppState::PARAM_MODE);
    }
}
