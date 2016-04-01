<?php
/**
 * Copyright © 2015 Rouven Alexander Rieker
 * See LICENSE.md bundled with this module for license details.
 */
namespace Semaio\Base\Block\Adminhtml\Shop;

use Magento\Backend\Block\Template;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Filesystem\Driver\File as FilesystemDriver;

/**
 * Class Version
 *
 * @package Semaio\Base\Block\Adminhtml\Shop
 */
class Version extends Template
{
    /**
     * @var string
     */
    protected $_template = 'shop/version.phtml';

    /**
     * @var FilesystemDriver
     */
    private $filesystemDriver;

    /**
     * ApplicationMode constructor.
     *
     * @param FilesystemDriver $filesystemDriver
     * @param Template\Context $context
     * @param array            $data
     */
    public function __construct(
        FilesystemDriver $filesystemDriver,
        Template\Context $context,
        array $data
    ) {
        $this->filesystemDriver = $filesystemDriver;
        parent::__construct($context, $data);
    }

    /**
     * Retrieve the shop version
     *
     * @return string
     */
    public function getShopVersion()
    {
        $directory = $this->_filesystem->getDirectoryRead(DirectoryList::CONFIG);
        $path = $directory->getAbsolutePath() . 'version.txt';

        if (!$this->filesystemDriver->isExists($path)) {
            return false;
        }

        $version = $this->filesystemDriver->fileGetContents($path);
        $version = trim($version);

        return $version;
    }
}
