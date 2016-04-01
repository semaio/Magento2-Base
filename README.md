Semaio_Base
===========

This module adds some base information to the Magento backend.

Facts
-----

* Version: 2.0.0

Functionality
-------------

### Shop version

You can create a custom file "app/etc/version.txt" in your Magento project and store the shop version (e.g. corresponding with Git tag version) in your project repository.

This module will check if this file exists in your Magento instance and will show the shop version number in the footer of the Magento backend.

### Application mode

This module will show the Magento2 application mode (the mode Magento is currently running in) in the footer of the Magento backend.

### System configuration tab

This module adds a custom tab **semaio** to the system configuration where other Magento 2 modules can add their custom system configuration options to.

Support
-------
If you encounter any problems or bugs, please create an issue on [GitHub](https://github.com/semaio/Magento2-Base/issues).

Contribution
------------
Any contribution to the development of MageSetup is highly welcome. The best possibility to provide any code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Licence
-------
[Open Software License (OSL 3.0)](http://opensource.org/licenses/osl-3.0.php)

Copyright
---------
(c) 2016 Rouven Alexander Rieker
