<?php
/**
 * Copyright (c) 2019  Artashes Baghdasaryan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Behindshops\Customerstatus\Block;
use Magento\Framework\View\Element\Template;

class Status extends Template
{

    /**
     * @var customerSession
     */
    protected $_customerSession;


    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        array $data = []
    ) {
        $this->_customerSession = $customerSession;
        parent::__construct($context, $data);


    }

    public function getStatus(){

        return $this->getCustomer()->getData('bhs_customer_status');
    }

    public function getCustomerSession()
    {
        return $this->_customerSession;
    }
    public function getSaveUrl()
    {
        return $this->getUrl('customer/account/statussave');
    }
    public function getStatusUrl()
    {
        return $this->getUrl('customer/account/status');
    }
    public  function  getCustomer()
    {
        if (!$this->getCustomerSession()->isLoggedIn()) {
          return false;
        }

        return $this->getCustomerSession()->getCustomer();
    }
}
