# Magento 23.* Module Behindshops Customerstatus

    ``behindshops/module-customerstatus``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Customer status attribute , Enable or disable Customer Status, showing atatus on to header

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Behindshops`
 - Enable the module by running `php bin/magento module:enable Behindshops_Customerstatus`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer 


## Specifications

 
 - Block
	- Status > status.phtml


## Attributes

 - Customer - CustomerStatus (bhs_customer_status)
