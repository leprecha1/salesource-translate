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

namespace Salesource\Translate\Block;

/**
 * Class Languages
 *
 */
class Translator extends \Magento\Framework\View\Element\Template
{
    protected $_helper;
    protected $_request;

    /**
     * Class constructor
     *
     * @param Context $context context object
     * @param Data    $helper  helper object
     * @param Http    $request request object
     * @param array   $data    array object
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Salesource\Translate\Helper\Data $helper,
        \Magento\Framework\App\Request\Http $request,
        array $data = []
    ) {
        $this->_helper = $helper;
        $this->_request = $request;
        parent::__construct($context, $data);
    }

    /**
     * Returns module status
     *
     * @return string
     */
    public function getModuleStatus()
    {
        return $this->_helper->getModuleStatus();
    }

    /**
     * Returns specific or all languages check
     *
     * @return string
     */
    public function getTransLanguages()
    {
        return $this->_helper->getTransLanguages();
    }

    /**
     * Returns position in layout
     *
     * @return string
     */
    public function getTransPosition()
    {
        return $this->_helper->getTransPosition();
    }

    /**
     * Returns store locale code
     *
     * @return string
     */
    public function getCurrentLocale()
    {
        return $this->_helper->getCurrentLocale();
    }

    /**
     * Returns if google bar is displayed or not
     *
     * @return string
     */
    public function showGoogleBar()
    {
        return $this->_helper->showGoogleBar();
    }

    /**
     * Returns array with specific languages
     *
     * @return array
     */
    public function getSpecficLanguages()
    {
        return $this->_helper->getSpecficLanguages();
    }

    /**
     * Returns google bar layout
     *
     * @return string
     */
    public function getTransLayout()
    {
        return $this->_helper->getTransLayout();
    }
}
