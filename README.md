# FixerExchangeRates-PHP
Get Exchange rates from Fixer.io
Get an Access Key from https://fixer.io/
```
$fixerCache = new \FixerExchangeRates\Cache();
$fixerCache->setCachePath( $_SERVER['DOCUMENT_ROOT'] . '/data/exchange_rate/' );
\FixerExchangeRates\AccessKey::setAccessKey('THEACCESSKEYYOUGOTFROMFIXERIO');

$conversion = new \FixerExchangeRates\Conversion( 'USD', 'GBP', 10 );

$convertedValue = $conversion->get();

```
