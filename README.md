# PHP Exchange Web Services
The PHP Exchange Web Services library (php-ews) is intended to make communication with Microsoft Exchange servers using Exchange Web Services easier. It handles the NTLM authentication required to use the SOAP services and provides an object-oriented interface to the complex types required to form a request.

# Dependencies
* PHP 5.2+
* cURL with NTLM support (7.23.0+ recommended)
* Exchange 2007 or 2010*

**Note: Not all operations or request elements are supported on Exchange 2007.*

This repository is a fork of [@beraneck](https://github.com/beraneck)'s php-ews repository which is a fork of [@jamesiarmes](https://github.com/jamesiarmes)'s original library. Some text in this README is from the original project, some is from me.

## Installation
Clone the project from git into the desired location.

```
git clone git@github.com:JeremyBuchmann/php-ews.git php-ews
```

## Autoloading
The original version of this library was not PSR-0 compliant. This fork is PSR-0 compliant courtesy of [@beraneck](https://github.com/beraneck).

## Usage
The library can be used to make several different request types. In order to make a request, you need to instantiate a new `ExchangeWebServices` object:

```php
$ews = new ExchangeWebServices($server, $username, $password, $version);
```

The `ExchangeWebServices` class takes four parameters for its constructor:

* `$server`: The url to the exchange server you wish to connect to, without the protocol. Example: mail.example.com. If you have trouble determing the correct url, you could try using the [`EWSAutodiscover`](https://github.com/jamesiarmes/php-ews/wiki/Autodiscovery) class.
* `$username`: The user to connect to the server with. This is usually the local portion of the users email address. Example: "user" if the email address is "user@example.com".
* `$password`: The user's plain-text password.
* `$version` (optional): The version of the Exchange sever to connect to. Valid values can be found at `ExchangeWebServices::VERSION_*`. Defaults to Exchange 2007.

Once you have your `ExchangeWebServices` object, you need to build your request object. The type of object depends on the operation you are calling. If you are using an IDE with code completion it should be able to help you determine the correct classes to use using the provided docblocks.

The request objects are build similar to the XML body of the request. See the resources section below for more information on building the requests.

## Resources
* [PHP Exchange Web Services Wiki](https://github.com/jamesiarmes/php-ews/wiki)
* [Exchange 2007 Web Services Reference](http://msdn.microsoft.com/library/bb204119\(v=EXCHG.80\).aspx)
* [Exchange 2010 Web Services Reference](http://msdn.microsoft.com/library/bb204119\(v=exchg.140\).aspx)


## Contributions
You may contribute to this fork, but be warned that it may not go anywhere.

