# Heritage Action Scorecard

A PHP library for working w/ the Heritage Action Scorecard API.

## Install

Normal install via Composer.

## Usage

Call the desired method and pass the arguments as a single array:

```php
$results = Travis\HeritageAction\Scorecard::members(array(
    'apikey' => 'YOUR_API_KEY',
    'congress' => 113
));
```

Read the [documentation](http://heritageactionscorecard.com/api/welcome/docs) for available methods.