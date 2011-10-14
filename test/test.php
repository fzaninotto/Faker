<?php

require_once __DIR__ . '/../src/Generator.php';
require_once __DIR__ . '/../src/Provider/Name.php';
require_once __DIR__ . '/../src/Provider/Address.php';
require_once __DIR__ . '/../src/Provider/PhoneNumber.php';
require_once __DIR__ . '/../src/Provider/Company.php';
require_once __DIR__ . '/../src/Provider/Lorem.php';

$generator = new Faker\Generator();
$generator->addProvider(new Faker\Provider\Name($generator));
$generator->addProvider(new Faker\Provider\Address($generator));
$generator->addProvider(new Faker\Provider\PhoneNumber($generator));
$generator->addProvider(new Faker\Provider\Company($generator));
$generator->addProvider(new Faker\Provider\Lorem($generator));
?>
<?xml version="1.0" encoding="UTF-8"?>
<contacts>
<?php for ($i=0; $i < 10; $i++): ?>
  <contact firstName="<?php echo $generator->firstName ?>" lastName="<?php echo $generator->lastName ?>">
    <phone number="<?php echo $generator->phoneNumber ?>"/>
<?php if (mt_rand(0,5) == 0): ?>
    <countryOfBirth><?php echo $generator->address ?></countryOfBirth>
<?php endif; ?>
    <address>
      <street><?php echo $generator->streetAddress ?></street>
      <city><?php echo $generator->city ?></city>
      <postcode><?php echo $generator->postcode ?></postcode>
      <state><?php echo $generator->state ?></state>
    </address>
    <company name="<?php echo $generator->company ?>" catchPhrase="<?php echo $generator->catchPhrase ?>">
<?php if (mt_rand(0,2) == 0): ?>
      <offer><?php echo $generator->bs ?></offer>
<?php endif; ?>
<?php if (mt_rand(0,3) == 0): ?>
      <director name="<?php echo $generator->name ?>"/>
<?php endif; ?>
    </company>
<?php if (mt_rand(0,5) == 0): ?>
    <details>
    <![CDATA[<?php echo $generator->lorem(3) ?>]]>
    </details>
<?php endif; ?>
  </contact>
<?php endfor; ?>
</contacts>
