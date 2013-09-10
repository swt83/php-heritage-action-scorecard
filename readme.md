# Heritage Action Scorecard

A package for fetching data from the Heritage Action Scorecard API.  Read the [documentation](http://heritageactionscorecard.com/api/welcome/docs) for available methods.

## Usage

Call the desired method and pass the arguments as a single array:

```php
$results = HeritageAction\Scorecard::members(array(
    'congress' => 113
));
```