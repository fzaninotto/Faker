<?php
require_once 'autoload.php';

$faker = Faker\Factory::create('sv_SE');

$sex = (string)$faker->randomElement($array = array('male','female'));
$personalId = $faker->personalIdentityNumber(null,$sex);
$firstName = $faker->firstName($sex);
$lastName = $faker->lastName;

$postalAddress = $faker->validPostalAddress();

$dob = substr($personalId, 0, 6);
$year = substr($dob,0,2);
if ((int)$year > (int)substr(date("Y"), 2,2)) { $year="19$year"; } else { $year="20$year"; }
$month = substr($dob,2,2);
$day = substr($dob,4,2);
$age = (date("md", date("U", mktime(0, 0, 0, $month, $day, $year))) > date("md")
    ? ((date("Y") - $year) - 1)
    : (date("Y") - $year));

header('Content-type:application/json;charset=utf-8');

?>
{
	"profilePicture": "<?php echo $faker->profilePicture($sex)?>",
	"person": {
		"id": "<?php echo $personalId?>",
		"sex": "<?php echo $sex?>",
		"dob": "<?php echo $year?>-<?php echo $month?>-<?php echo $day?>",
		"year": "<?php echo $year?>",
		"month": "<?php echo $month?>",
		"day": "<?php echo $day?>",
		"age": "<?php echo $age?>",
		"birthplace": "<?php echo $faker->city?>"
	},
	"family": {
		"mother": "<?php echo $faker->firstName('female')?> <?php echo $lastName?>",	
		"father": "<?php echo $faker->firstName('male')?> <?php echo $lastName?>"
	},
	"names": {
		"title": "<?php echo $faker->title($sex)?>",	
		"firstName": "<?php echo $firstName?>",
		"middleName": "<?php echo $faker->firstName($sex)?>",
		"lastName": "<?php echo $lastName?>"
	},
	"address": {
		"street": "<?php echo $faker->streetName?>",
		"number": "<?php echo $faker->buildingNumber?>",
		"postalCode": "<?php echo $postalAddress["Code"] ?>",
		"postalCity": "<?php echo $postalAddress["City"] ?>",
		"municipality": "<?php echo trim($postalAddress["Municipality"]) ?>",
		"county": "<?php echo trim($postalAddress["County"]) ?>"
	},
	"services": {
		"email": "<?php echo strtolower($firstName)?>.<?php echo strtolower($lastName)?>@mailinator.com",
		"inbox": "https://www.mailinator.com/v2/inbox.jsp?zone=public&query=<?php echo strtolower($firstName)?>.<?php echo strtolower($lastName)?>",
		"phone": "<?php echo $faker->phoneNumber?>"
	},
	"work": {
		"phone": "<?php echo $faker->phoneNumber?>",
		"company": "<?php echo $faker->company?>",
		"title": "<?php echo $faker->jobTitle?>"		
	},	
	"finance": {
		"cardType": "<?php echo $faker->creditCardType?>",
		"cardNumber": "<?php echo $faker->creditCardNumber?>",
		"expiryDate": "<?php echo $faker->creditCardExpirationDateString ?>",
		"ccv": "<?php echo $faker->numberBetween($min = 100, $max = 999) ?>",		
		"iban": "<?php echo $faker->iban('SE') ?>",
		"bic": "<?php echo $faker->swiftBicNumber ?>",
		"bank": "<?php echo $faker->bank ?>"
	},
	"system": {
		"uuid": "<?php echo $faker->uuid?>"
	}
}