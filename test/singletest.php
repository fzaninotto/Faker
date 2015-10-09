<?php
require __DIR__ .'/../vendor/autoload.php';

$faker = Faker\Factory::create('en_IN');
$faker->seed(7);

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<contacts>
<?php for ($i=0; $i < 1; $i++): ?>
  <contact firstName="<?php echo $faker->firstName ?>" lastName="<?php echo $faker->lastName ?>" email="<?php echo $faker->email ?>" >
    <phones>
      <mobile number="<?php echo $faker->PhoneNumber ?>"/>
      <landline number="<?php echo $faker->landLinePhoneNumber ?>"/>
    </phones>
    <birth date="<?php echo $faker->dateTimeThisCentury->format('d-m-Y') ?>" place="<?php echo $faker->city ?>"/>
    <addresses>
      <urban>
        <street><?php echo $faker->streetAddress ?></street>
        <city><?php echo $faker->city ?></city>
        <state><?php echo $faker->state ?></state>
        <pincode><?php echo $faker->pincode ?></pincode>
      </urban>
      <rural>
        <village><?php echo $faker->RuralAddress ?></village>
        <district><?php echo $faker->district ?></district>
      </rural>
    </addresses>
    <company name="<?php echo $faker->company ?>" catchPhrase="<?php echo $faker->catchPhrase ?>">
      <offer><?php echo $faker->bs ?></offer>
      <director name="<?php echo $faker->name ?>" />
    </company>
    <details>
<![CDATA[
<?php echo $faker->text(400) ?>
]]>
    </details>
    <misc>
      <lang><?php echo $faker->countryISOAlpha3 ?></lang>
    </misc>
  </contact>
<?php endfor; ?>
</contacts>
