<?php

$path = 'IBAN_Registry.txt';
if (($handle = fopen($path, "r")) === FALSE) {
	die("Can't open the $path file!\n");
}
/*
$data = array (
	0 => 'Name of country',
	1 => 'Country code as defined in ISO 3166',
	2 => 'Domestic account number example',
	3 => 'BBAN',
	4 => 'BBAN structure ',
	5 => 'BBAN length',
	6 => 'Bank identifier position within the BBAN',
	7 => 'Bank identifier length',
	8 => 'Bank identifier example',
	9 => 'BBAN example',
	10 => 'IBAN',
	11 => 'IBAN structure',
	12 => 'IBAN length',
	13 => 'IBAN electronic format example',
	14 => 'IBAN print format example',
	15 => 'SEPA Country',
	16 => 'Contact details',
)
$example = array (
	0 => 'Albania',
	1 => 'AL',
	2 => '0000000235698741',
	3 => '0',
	4 => '8!n16!c',
	5 => '24',
	6 => ' Bank Identifier 1-3, Branch Identifier:4-7, Check Digit 8 ',
	7 => '8!n',
	8 => '212-1100-9',
	9 => '212110090000000235698741',
	10 => '0',
	11 => 'AL2!n8!n16!c',
	12 => '28',
	13 => 'AL47212110090000000235698741',
	14 => 'AL47 2121 1009 0000 0002 3569 8741',
	15 => 'No',
	16 => '',
 */
$ibanFormats = array();
$header = fgetcsv($handle, 0, "\t");
while (($data = fgetcsv($handle, 0, "\t")) !== FALSE) {
	foreach($data as $i=>$column) {
		$data[$i] = trim($column);
	}
	list($countryName, $countryCode, $example1, $bban, $bbanStruct, $bbanLength, $bankPos, $bankStruct, $example2, $example3, $iban, $ibanStruct, $ibanLength, $example4, $example5, $sepa, $details) = $data;
	$format = array();
	if (!preg_match_all('/\d+!./', $bbanStruct, $matches)) {
		echo "$countryName - uknown BBAN structure field format: $bbanStruct.\n";
		continue;
	}
	foreach($matches[0] as $match) {
		list($count, $class) = explode('!', $match);
		$format[] = array($class, $count);
	}
	$ibanFormats[$countryCode] = $format;
}
ksort($ibanFormats);
//var_export($ibanFormats);
echo "array(\n";
foreach($ibanFormats as $language=>$parts) {
	echo "\t'$language' => array(";
	$formats = array();
	foreach($parts as $format) {
		$formats[] = "array('$format[0]', $format[1])";
	}
	echo implode(",\t", $formats);
	echo "),\n";
}
echo ");";
