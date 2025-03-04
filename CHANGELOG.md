# Changelog

## 8.0.0 (2022-03-24)

Finally, the 8.0.0 GA.

## 8.0.0-RC4 (2022-03-08)

Added the `TransportException` to extends the `Throwable`interface.

## 8.0.0-RC3 (2022-02-26)

This RC3 release introduces the `OnSuccessInterface` and `OnFailureInterface`
for manage the async code with the execution of a custom function during the
return of `OnSuccess` and during the execution of `OnFailure`. As default behaviour
the `OnSuccessDefault` and `OnFailureDefault` does not perform any operations.

## 8.0.0-RC2 (2022-02-23)

This RC2 release uses `httplug` v2.3.0 to provide a full retry async mechanism
thanks to PR https://github.com/php-http/httplug/pull/168.

## 8.0.0-RC1 (2022-02-17)

This is the first release candidate for 8.0.0 containing some new
features and changes compared with the previous 7.x Elastic transport.

### Changes

- the `ConnectionPool` namespace has been renamed in `NodePool`,
  consequently all the `Connection` classes has been renamed in `Node`
- the previous Apache 2.0 LICENSE has been changed in [MIT](https://opensource.org/licenses/MIT)

### New features

- added the usage of [HTTPlug](http://httplug.io/) library to
  autodiscovery [PSR-18](https://www.php-fig.org/psr/psr-18/) client
  and `HttpAsyncClient` interface using [Promise](https://docs.php-http.org/en/latest/components/promise.html).
- added the `Trasnport::sendAsyncRequest(RequestInterface $request): Promise`
  to send a PSR-7 request using asynchronous request
- added the `Transport::setAsyncClient(HttpAsyncClient $asyncClient)`
  and `Transport::getAsyncClient()` functions. If the [PSR-18](https://www.php-fig.org/psr/psr-18/)
  client already implements the `HttpAsyncClient` interface you
  don't need to use the `setAsyncClient()` function, it will discovered
  automatically
- added the `Transport::setRetries()` function to specify the number
  of HTTP request retries to apply. If the HTTP failures exceed the
  number of retries the client generates a `NoNodeAvailableException`

## 7.16.0 (2021-12-14)

Release created to be compatible with 7.16 Elastic clients

## 7.15.0 (2021-12-01)

Release created to be compatible with 7.15 Elastic clients

## 7.14.0 (2021-08-03)

Release created to be compatible with 7.14 Elastic clients
## 7.13.0 (2021-05-25)

Release created to be compatible with 7.13 Elastic clients
