<?php
require_once __DIR__ . '/../src/Factory.php';
$generator = Faker\Factory::create();
$generator->seed(5);
?>
<?xml version="1.0" encoding="UTF-8"?>
<contacts>
<?php for ($i=0; $i < 10; $i++): ?>
  <contact firstName="<?php echo $generator->firstName ?>" lastName="<?php echo $generator->lastName ?>" email="<?php echo $generator->email ?>"/>
    <phone number="<?php echo $generator->phoneNumber ?>"/>
<?php if (mt_rand(0,3) == 0): ?>
    <birth date="<?php echo $generator->dateTimeThisCentury->format('Y-m-d') ?>" place="<?php echo $generator->city ?>"/>
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
      <director name="<?php echo $generator->name ?>" />
<?php endif; ?>
    </company>
<?php if (mt_rand(0,5) == 0): ?>
    <details>
<![CDATA[
<?php echo $generator->text(400) ?> 
]]>
    </details>
<?php endif; ?>
  </contact>
<?php endfor; ?>
</contacts>