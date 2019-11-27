<?php
namespace Behindshops\Customerstatus\Controller\Account;

use Magento\Customer\Controller\Account\EditPost;

 class Statussave extends EditPost
 {


     /**
      * @return Redirect|\Magento\Framework\Controller\Result\Redirect
      * @throws \Magento\Framework\Exception\SessionException
      */
     public function execute()
    {
        $bhs_customer_status = $this->getRequest()->getParam('bhs_customer_status');
        if (!isset($bhs_customer_status)){
            $bhs_customer_status = "0";
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $validFormKey = $this->formKeyValidator->validate($this->getRequest());
        if ($validFormKey && $this->getRequest()->isPost()) {
            try {
                $currentCustomerDataObject = $this->customerRepository->getById($this->session->getCustomerId());
                $currentCustomerDataObject->setCustomAttribute('bhs_customer_status', $bhs_customer_status);
                $this->customerRepository->save($currentCustomerDataObject);
                if ($bhs_customer_status){
                    $this->messageManager->addSuccess(__('You changed your status to Active.'));
                }else{
                    $this->messageManager->addSuccess(__('You changed your status to inactive.'));
                }
               }catch (UserLockedException $e) {
                $message = __(
                    'The account sign-in was incorrect or your account is disabled temporarily. '
                    . 'Please wait and try again later.'
                );
                $this->session->logout();
                $this->session->start();
                $this->messageManager->addError($message);
                return $resultRedirect->setPath('customer/account/login');
            } catch (InputException $e) {

                $this->messageManager->addErrorMessage($this->escaper()->escapeHtml($e->getMessage()));
                foreach ($e->getErrors() as $error) {
                    $this->messageManager->addErrorMessage($this->escaper()->escapeHtml($error->getMessage()));
                }
            } catch (\Magento\Framework\Exception\LocalizedException $e) {

                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {

                $this->messageManager->addException($e, __('We can\'t save the customer data.'));
            }
            $this->session->setCustomerFormData($this->getRequest()->getPostValue());

        }

        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('*/*/status');
        return $resultRedirect;
    }


}