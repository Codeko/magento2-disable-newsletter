## Disable Newsletter 
Magento 2 provide newsletter and suscribe newsletter, but it is difficult to disable all subscription points in frontend.

If you enable this module, the newsletter subscription points will disappear from the frontend

#### 1 - Installation Disable Newsletter

##### Manual Installation

Install Disable Newsletter for Magento2
 * Download the extension
 * Unzip the file
 * Create a folder {Magento root}/app/code/Codeko/DisableNewsletter
 * Copy the content from the unzip folder


##### Using Composer

```
composer require codeko/disablenewsletter:dev-master
```

#### 2 - Enable Disable Newsletter

 * php bin/magento module:enable Codeko_DisableNewsletter
 * php bin/magento setup:upgrade
 * php bin/magento setup:di:compile
 * php bin/magento cache:flush
 * php bin/magento setup:static-content:deploy