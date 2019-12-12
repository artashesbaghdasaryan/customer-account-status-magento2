# Magento 23.* Module Behindshops Customer Status 

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)


## Main Functionalities
 
- Customer can enable or disable his/her account.
- On top of the header showing the status linked to customer Enable or disable the account
- If the customer account is a disabled customer can not go to the checkout page  and redirecting to  checkout cart page
- Admin can disable or enable Customer Account 

 
## Installation
\* = in production please use the `--keep-generated` option

 - Unzip the zip file in `app/code/`
 - Enable the module by running `php bin/magento module:enable Behindshops_Customerstatus`
 - Apply database updates by running `php bin/magento setup:upgrade`
 - Apply database updates by running `php bin/magento setup:di:compile`
 - Flush the cache by running `php bin/magento cache:flush` `php bin/magento cache:clear`


