<?php
/**
 * Salesource LTD
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Salesource LTD license that is
 * available through the world-wide-web at this URL:
 * https://salesource.eu/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category  Salesource
 * @package   Salesource_Translate
 * @copyright 2020 Copyright (c) Salesource LTD <http://salesource.eu>
 */

namespace Salesource\Translate\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Api\Data\StoreInterface;

/**
 * Class Data
 * Implements class Data object
 *
 */
class Data extends AbstractHelper
{

    const XML_PATH_MODULE_STATUS = 'translate/general/enabled';
    const XML_PATH_TRANS_LANGUAGES = 'translate/general/translanguages';
    const XML_PATH_TRANS_POSITION = 'translate/general/transposition';
    const XML_PATH_TRANS_GOOGLEBAR = 'translate/general/googlebar';
    const XML_PATH_SPECIFIC_LANGUAGES = 'translate/general/splanguages';
    const XML_PATH_TRANS_LAYOUT = 'translate/general/translayout';
    const XML_PATH_LOCALE_CODE = 'general/locale/code';

    const GOOGLE_LANG = ['af',
    'ak', 'sq', 'am', 'ar', 'hy', 'az',
    'eu', 'be', 'bem', 'bn', 'bh', 'xx-bork',
    'bs', 'br', 'bg', 'km', 'ca', 'chr', 'ny',
    'zh-CN', 'zh-TW', 'co', 'hr', 'cs', 'da',
    'nl', 'xx-elmer', 'en', 'eo', 'et', 'ee', 'fo',
    'tl', 'fi', 'fr', 'fy', 'gaa', 'gl', 'ka', 'de',
    'el', 'gn', 'gu', 'xx-hacker', 'ht', 'ha', 'haw',
    'iw', 'hi', 'hu', 'is', 'ig', 'id', 'ia', 'ga',
    'it', 'ja', 'jw', 'kn', 'kk', 'rw', 'rn',
    'xx-klingon', 'kg', 'ko', 'kri', 'ku', 'ckb',
    'ky', 'lo', 'la', 'lv', 'ln', 'lt', 'loz',
    'lg', 'ach', 'mk', 'mg', 'ms', 'ml', 'mt', 'mi',
    'mr', 'mfe', 'mo', 'mn', 'sr-ME', 'ne', 'pcm',
    'nso', 'no', 'nn', 'oc', 'or', 'om', 'ps', 'fa',
    'xx-pirate', 'pl', 'pt-BR', 'pt-PT', 'pa', 'qu',
    'ro', 'rm', 'nyn', 'ru', 'gd', 'sr', 'sh', 'st',
    'tn', 'crs', 'sn', 'sd', 'si', 'sk', 'sl', 'so',
    'es', 'es-419', 'su', 'sw', 'sv', 'tg', 'ta',
    'tt', 'te', 'th', 'ti', 'to', 'lua', 'tum',
    'tr', 'tk', 'tw', 'ug', 'uk', 'ur', 'uz',
    'vi', 'cy', 'wo', 'xh', 'yi', 'yo', 'zu'];

    /**
     * Constructor class
     *
     * @param Context $context context object
     */
    // phpcs:disable Generic.CodeAnalysis.UselessOverridingMethod
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Returns module status
     *
     * @return string
     */
    public function getModuleStatus()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_MODULE_STATUS,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Returns specific languages string
     *
     * @return string
     */
    public function getTransLanguages()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_TRANS_LANGUAGES,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Returns the position
     *
     * @return string
     */
    public function getTransPosition()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_TRANS_POSITION,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Returns specific languages array
     *
     * @return array
     */
    public function getSpecficLanguages()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_SPECIFIC_LANGUAGES,
            ScopeInterface::SCOPE_STORE
        );
    }
    
    /**
     * Returns locale code
     *
     * @return string
     */
    public function getCurrentLocale()
    {
        $cLang = $this->scopeConfig->getValue(
            self::XML_PATH_LOCALE_CODE,
            ScopeInterface::SCOPE_STORE
        );
        $cLg = strtolower(substr($cLang, 0, 2)) . substr($cLang, 2);
        $cLg = str_replace("_", "-", $cLg);

        if (in_array($cLg, self::GOOGLE_LANG)) {
            return $cLg;
        } else {
            return strtolower(substr($cLang, 0, 2));
        }
    }
    
    /**
     * Returns string if google bar is displayed or not
     *
     * @return string
     */
    public function showGoogleBar()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_TRANS_GOOGLEBAR,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Returns Google Bar layout
     *
     * @return string
     */
    public function getTransLayout()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_TRANS_LAYOUT,
            ScopeInterface::SCOPE_STORE
        );
    }
}
