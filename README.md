# FixerExchangeRates-PHP
Get Exchange rates from Fixer.io

```
$fixerCache = new \FixerExchangeRates\Cache();
$fixerCache->setCachePath( $_SERVER['DOCUMENT_ROOT'] . '/data/exchange_rate/' );

$conversion = new \FixerExchangeRates\Conversion( 'USD', 'GBP', 10 );

$convertedValue = $conversion->get();

```
