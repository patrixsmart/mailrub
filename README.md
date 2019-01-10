# PatriXsmarT Mailfast
<br>

<p align="center"><a href="https://patrixsmart.com" target="_blank"><img src="https://www.patrixsmart.com/storage/patrixsmart_images/shortcut_icon.jpg"></a></p>

<p align="center">
<a href="https://packagist.org/packages/patrixsmart/mailfast"><img src="https://poser.pugx.org/patrixsmart/mailfast/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/patrixsmart/mailfast"><img src="https://poser.pugx.org/patrixsmart/mailfast/license.svg" alt="License"></a>

[![GitHub stars](https://img.shields.io/github/stars/patrixsmart/mailfast.svg)](https://github.com/patrixsmart/mailfast/stargazers)
[![GitHub issues](https://img.shields.io/github/issues/patrixsmart/mailfast.svg)](https://github.com/patrixsmart/mailfast/issues)
</p>




## *A simple package use to send email with the option of attaching a file and save the mail message to the database.*

## Installation
### Set up package

```
composer require patrixsmart/mailfast
```


### Add ServiceProvider

Edit config/app.php, add the following file to `Application Service Providers` section.
```
Patrixsmart\Mailfast\MailfastServiceProvider::class,
Unisharp\Ckeditor\ServiceProvider::class,
```

### Publish the resources
```
php artisan vendor:publish --tag=mailfast
php artisan vendor:publish --tag=ckeditor
```

### Delete All Previously Sent Mails

Delete stored mails older than today from the `mailfast_mails table` with the command below.
```
php artisan mailfast:prune
```


### Security Vulnerabilities

If you discover a security vulnerability within Mailfast, please send an e-mail to Patrick C. Duruamadi via [patrick@patrixsmart.com](mailto:patrick@patrixsmart.com). All security vulnerabilities will be promptly addressed.

### License

The PatriXsmarT Mailfast is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
