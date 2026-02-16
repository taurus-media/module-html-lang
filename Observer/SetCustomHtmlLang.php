<?php
/**
 * Copyright (c) 2026. Taurus. All rights reserved
 */

namespace Taurus\HtmlLang\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\View\Page\Config;
use Taurus\HtmlLang\Helper\Data;

class SetCustomHtmlLang implements ObserverInterface
{
    /**
     * @var Config
     */
    private $pageConfig;

    /**
     * @var Data
     */
    private $helper;

    /**
     * @param Config $pageConfig
     * @param Data $helper
     */
    public function __construct(
        Config $pageConfig,
        Data $helper
    ) {
        $this->pageConfig = $pageConfig;
        $this->helper = $helper;
    }

    /**
     * Add the custom 'lang' attribute to the 'html' tag
     *
     * @param Observer $observer
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute(Observer $observer)
    {
        if ($customHtmlLang = $this->helper->getHtmlLang()) {
            $this->pageConfig->setElementAttribute(Config::ELEMENT_TYPE_HTML, 'lang', $customHtmlLang);
        }
    }
}
