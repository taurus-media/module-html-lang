<?php
/**
 * Copyright (c) 2026. Taurus. All rights reserved
 */

namespace Taurus\HtmlLang\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    const XML_PATH_HTML_LANG = 'general/locale/html_lang';

    /**
     * @return string
     */
    public function getHtmlLang()
    {
        return trim($this->scopeConfig->getValue(self::XML_PATH_HTML_LANG, 'store') ?? '');
    }
}
