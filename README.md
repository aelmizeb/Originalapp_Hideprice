# Magento 2 Hide Price Module

This Module allow you to show/hide prices in the frontend via backend configuration.

# Install

1. Go to Magento2 root folder

2. Enter following commands to install module:

    ```bash
    composer config repositories.originalapphideprice git https://github.com/aelmizeb/Originalapp_Hideprice.git
    composer require originalapp/hideprice:dev-master
    ```
   Wait while dependencies are updated.

3. Enter following commands to enable module:

    ```bash
    php bin/magento module:enable Originalapp_Hideprice --clear-static-content
    php bin/magento setup:upgrade
    ```