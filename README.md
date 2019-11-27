# Magento 23.* Module Behindshops Customer Status

    ``behindshops/module-customerstatus``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Customer status attribute ,
Enable or disable Customer Status,
showing status on top header

## Installation
\* = in production please use the `--keep-generated` option

 - Unzip the zip file in `app/code/Behindshops`
 - Enable the module by running `php bin/magento module:enable Behindshops_Customerstatus`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`
 
## Specifications

 
 - Block
	- Status > status.phtml
	- Status > status/link.phtml


## Attributes

 - Customer - CustomerStatus (bhs_customer_status)
