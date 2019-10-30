# SilverStripe supported module skeleton

Use silverstripe-products for product page types using silverstripe-foxy

[![Build Status](https://travis-ci.org/dynamic/silverstripe-foxy-products.svg?branch=master)](https://travis-ci.org/dynamic/silverstripe-foxy-products)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dynamic/silverstripe-foxy-products/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dynamic/silverstripe-foxy-products/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/dynamic/silverstripe-foxy-products/badges/build.png?b=master)](https://scrutinizer-ci.com/g/dynamic/silverstripe-foxy-products/build-status/master)
[![codecov](https://codecov.io/gh/dynamic/silverstripe-foxy-products/branch/master/graph/badge.svg)](https://codecov.io/gh/dynamic/silverstripe-foxy-products)

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-foxy-products/v/stable)](https://packagist.org/packages/dynamic/silverstripe-foxy-products)
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-foxy-products/downloads)](https://packagist.org/packages/dynamic/silverstripe-foxy-products)
[![Latest Unstable Version](https://poser.pugx.org/dynamic/silverstripe-foxy-products/v/unstable)](https://packagist.org/packages/dynamic/silverstripe-foxy-products)
[![License](https://poser.pugx.org/dynamic/silverstripe-foxy-products/license)](https://packagist.org/packages/dynamic/silverstripe-foxy-products)


## Requirements

* SilverStripe ^4.0
* dynamic/silverstripe-foxy ^1.0
* dynamic/silverstripe-products ^1.0

## Installation

```
composer require dynamic/silverstripe-foxy-products
```

## License
See [License](license.md)

## Configuration

Create a file `foxy-products.yml` in your `app/_config` directory with the following:

```yaml
Dynamic\Foxy\Products\Page\ShippableProduct:
  extensions:
    - Dynamic\Foxy\Extension\Shippable

Dynamic\Foxy\Model\ProductOption:
  extensions:
    - Dynamic\Foxy\Products\Extension\ProductOptionDataExtension
```

## Maintainers
*  [Dynamic](http://www.dynamicagency.com) (<dev@dynamicagency.com>)
 
## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over 
existing issues to ensure yours is unique. 
 
If the issue does look like a new bug:
 
 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots 
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version, 
 Operating System, any installed SilverStripe modules.
 
Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.
 
## Development and contribution
If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.
