<?php
class TM_Purify_Helper_Data extends Mage_Core_Helper_Abstract
{
    protected  $_purifier;

    protected function _getHTMLPurifierInstance()
    {
        if (!$this->_purifier instanceof HTMLPurifier) {
            $config = HTMLPurifier_Config::createDefault();
            $this->_purifier = new HTMLPurifier($config);
        }
        return $this->_purifier;
    }

    public function purify($html)
    {
        return $this->_getHTMLPurifierInstance()
            ->purify($html);
    }
}
