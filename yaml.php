<?php
$yaml = <<<EOD
---
invoice: 34843
date: "2001-01-23"
bill-to: &id001
  given: Chris
  family: Dumars
  address:
    lines: |-
      458 Walkman Dr.
              Suite #292
    city: Royal Oak
    state: MI
    postal: 48046
ship-to: *id001
product:
- sku: BL394D
  quantity: 4
  description: Basketball
  price: 450
- sku: BL4438H
  quantity: 1
  description: Super Hoop
  price: 2392
tax: 251.420000
total: 4443.520000
comments: Late afternoon is best. Backup contact is Nancy Billsmer @ 338-4338.
...
EOD;

// Requires (PECL yaml >= 0.4.0)
// yaml_parse — Parse a YAML stream
if(extension_loaded('yaml'))
{
    $parsed = yaml_parse($yaml);
    var_dump($parsed);
}else{
    die('Requires: PECL yaml >= 0.4.0');
}


