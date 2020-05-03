<?php
 
  $exchangeRateJSONString = file_get_contents( 'https://api.ratesapi.io/api/latest' );
  $exchangeRateObject = json_decode( $exchangeRateJSONString );
  $exchangeRate = $exchangeRateObject->results[0];
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foreign currency exchange rates api with currency conversion
</title>
</head>
<body>
  <h1>Foreign currency exchange rates api with currency conversion
</h1>
    <h2>Exchange rates for EURO </h2>
  <dl>
  <dt>Currency: </dt>
    <dd>
      <?php echo $exchangeRate->base->EUR; ?>
    </dd>
    <dt>Canadaian Dollar </dt>
    <dd>
      <?php echo $exchangeRate->rates->CAD; ?>
    </dd>
    <dt>US Dollar  </dt>
    <dd>
      <?php echo $exchangeRate->rates->USD; ?>
    </dd>
    <dt>British Pound Sterling</dt>
    <dd>
      <?php echo $exchangeRate->rates->GBP; ?>
    </dd>
    <dt>Australian Dollar  </dt>
    <dd>
      <?php echo $exchangeRate->rates->AUD; ?>
    </dd>
    <dt>Turkish lira  </dt>
    <dd>
      <?php echo $exchangeRate->rates->TRY; ?>
    </dd>
    <dt>New Zealand Dollar  </dt>
    <dd>
      <?php echo $exchangeRate->rates->NZD; ?>
    </dd>
    <dt>Date</dt>
    <dd><?php echo $exchangeRate->date; ?></dd>
  </dl>
</body>
</html>