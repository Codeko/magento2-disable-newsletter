<?php

namespace Codeko\DisableNewsletter\Plugin;

class DisableNewsletter {

    /**
     * @see \Magento\Customer\Block\Form\Register isNewsletterEnabled()
     * @param \Magento\Customer\Block\Form\Register $register
     * @param \Closure $proceed
     * @return boolean
     */
    public function aroundIsNewsletterEnabled(\Magento\Customer\Block\Form\Register $register, \Closure $proceed) {
        return false;
    }

}
