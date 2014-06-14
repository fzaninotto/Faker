<?php
require __DIR__ .'/../vendor/autoload.php';

$faker = Faker\Factory::create();
$faker->seed(5);

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<contacts>
<?php for ($i=0; $i < 10; $i++): ?>
  <contact firstName="<?php echo $faker->firstName ?>" lastName="<?php echo $faker->lastName ?>" email="<?php echo $faker->email ?>" >
    <phone number="<?php echo $faker->phoneNumber ?>"/>
<?php if ($faker->boolean(25)): ?>
    <birth date="<?php echo $faker->dateTimeThisCentury->format('Y-m-d') ?>" place="<?php echo $faker->city ?>"/>
<?php endif; ?>
    <address>
      <street><?php echo $faker->streetAddress ?></street>
      <city><?php echo $faker->city ?></city>
      <postcode><?php echo $faker->postcode ?></postcode>
      <state><?php echo $faker->state ?></state>
    </address>
    <company name="<?php echo $faker->company ?>" catchPhrase="<?php echo $faker->catchPhrase ?>">
<?php if ($faker->boolean(33)): ?>
      <offer><?php echo $faker->bs ?></offer>
<?php endif; ?>
<?php if ($faker->boolean(33)): ?>
      <director name="<?php echo $faker->name ?>" />
<?php endif; ?>
    </company>
<?php if ($faker->boolean(15)): ?>
    <details>
<![CDATA[
<?php echo $faker->text(400) ?>
]]>
    </details>
<?php endif; ?>
  </contact>
<?php endfor; ?>
</contacts>
