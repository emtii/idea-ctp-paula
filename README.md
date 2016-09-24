# <img src="web/bundles/frontend/img/paula-logo.png" width="150" height="150" align="center"></img> idea-ctp-paula

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/emtii/idea-ctp-paula/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/emtii/idea-ctp-paula/?branch=master) [![Code Coverage](https://scrutinizer-ci.com/g/emtii/idea-ctp-paula/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/emtii/idea-ctp-paula/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/emtii/idea-ctp-paula/badges/build.png?b=master)](https://scrutinizer-ci.com/g/emtii/idea-ctp-paula/build-status/master)

A Symfony project created on September 4, 2016, 12:25 pm.

## Import Commands
### Catalog
``` console
Usage: php bin/console paula:import-producttypes [options]
    --batch-size                    Choose batch size between 1 and 500.
```
## Version History
### v0.0.9 (September 24, 2016)
* add assetic handling
* add improved composer build handling for travis
* re-add swiftmailer bundle for prod app

### v0.0.8 (September 16, 2016)
* implement ctp symfony bundle
* remove own ctp bundle, not needed anymore
* fix missing default value in product type import command

### v0.0.7 (September 14, 2016)
* add channel fixture with first channel data
* add api bundle for frontend
* add first test controller to api bundle
* add product type fixture with first attributes

### v0.0.6 (September 13, 2016)
* port very basic view from nodejs app to this symfony app

### v0.0.5 (September 11, 2016)
* add phpunit codecoverage sent by travis to scrutinizer

### v0.0.4 (September 11, 2016)
* add heroku deployment

### v0.0.3 (September 11, 2016)
* add travis ci
* add scrutinizer ci

### v0.0.2 (September 6, 2016)
* add catalog import command

### v0.0.1 (September 4, 2016)
* initial symfony 3 app
* add FrontendBundle
* add ServiceBundle
