<?php

namespace Faker\Provider\sk_SK;

class Person extends \Faker\Provider\Person
{
	protected static $formats = array(
		'{{firstNameMale}} {{lastNameMale}}',
		'{{firstNameMale}} {{lastNameMale}}',
		'{{firstNameMale}} {{lastNameMale}}',
		'{{firstNameMale}} {{lastNameMale}}',
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{firstNameFemale}} {{lastNameFemale}}',
		'{{prefix}} {{firstNameMale}} {{lastNameMale}}',
		'{{prefix}} {{firstNameFemale}} {{lastNameFemale}}',
		'{{prefix}} {{firstNameMale}} {{lastNameMale}} {{suffix}}',
		'{{prefix}} {{firstNameFemale}} {{lastNameFemale}} {{suffix}}'
	);

	protected static $firstNameMale = array(
		"Drahoslav", "Severín", "Alexej", "Ernest", "Rastislav", "Radovan", "Dobroslav", "Dalibor", "Vincent", "Miloš", "Timotej", "Gejza", "Bohuš",
		"Alfonz", "Gašpar", "Emil", "Erik", "Blažej", "Zdenko", "Dezider", "Arpád", "Valentín", "Pravoslav", "Jaromír", "Roman", "Matej", "Frederik",
		"Viktor", "Alexander", "Radomír", "Albín", "Bohumil", "Kazimír", "Fridrich", "Radoslav", "Tomáš", "Alan", "Branislav", "Bruno", "Gregor",
		"Vlastimil", "Boleslav", "Eduard", "Jozef", "Víťazoslav", "Blahoslav", "Beňadik", "Adrián", "Gabriel", "Marián", "Emanuel", "Miroslav",
		"Benjamín", "Hugo", "Richard", "Izidor", "Zoltán", "Albert", "Igor", "Július", "Aleš", "Fedor", "Rudolf", "Valér", "Marcel", "Ervín",
		"Slavomír", "Vojtech", "Juraj", "Marek", "Jaroslav", "Žigmund", "Florián", "Roland", "Pankrác", "Servác", "Bonifác", "Svetozár", "Bernard",
		"Júlia", "Urban", "Dušan", "Viliam", "Ferdinand", "Norbert", "Róbert", "Medard", "Zlatko", "Anton", "Vasil", "Vít", "Adolf", "Vratislav",
		"Alfréd", "Alojz", "Ján", "Tadeáš", "Ladislav", "Peter", "Pavol", "Miloslav", "Prokop", "Cyril", "Metod", "Patrik", "Oliver", "Ivan",
		"Kamil", "Henrich", "Drahomír", "Bohuslav", "Iľja", "Daniel", "Vladimír", "Jakub", "Krištof", "Ignác", "Gustáv", "Jerguš", "Dominik",
		"Oskar", "Vavrinec", "Ľubomír", "Mojmír", "Leonard", "Tichomír", "Filip", "Bartolomej", "Ľudovít", "Samuel", "Augustín", "Belo", "Oleg",
		"Bystrík", "Ctibor", "Ľudomil", "Konštantín", "Ľuboslav", "Matúš", "Móric", "Ľuboš", "Ľubor", "Vladislav", "Cyprián", "Václav", "Michal",
		"Jarolím", "Arnold", "Levoslav", "František", "Dionýz", "Maximilián", "Koloman", "Boris", "Lukáš", "Kristián", "Vendelín", "Sergej",
		"Aurel", "Demeter", "Denis", "Hubert", "Karol", "Imrich", "René", "Bohumír", "Teodor", "Tibor", "Maroš", "Martin", "Svätopluk", "Stanislav",
		"Leopold", "Eugen", "Félix", "Klement", "Kornel", "Milan", "Vratko", "Ondrej", "Andrej", "Edmund", "Oldrich", "Oto", "Mikuláš", "Ambróz",
		"Radúz", "Bohdan", "Adam", "Štefan", "Dávid", "Silvester"

	);

	protected static $firstNameFemale = array(
		"Alexandra", "Karina", "Daniela", "Andrea", "Antónia", "Bohuslava", "Dáša", "Malvína", "Kristína", "Nataša", "Bohdana", "Drahomíra",
		"Sára",	"Zora", "Tamara", "Ema", "Tatiana", "Erika", "Veronika", "Agáta", "Dorota", "Vanda", "Zoja", "Gabriela", "Perla", "Ida", "Liana",
		"Miloslava", "Vlasta", "Lívia", "Eleonóra", "Etela", "Romana", "Zlatica", "Anežka", "Bohumila", "Františka", "Angela", "Matilda",
		"Svetlana", "Ľubica", "Alena", "Soňa", "Vieroslava", "Zita", "Miroslava", "Irena", "Milena", "Estera", "Justína", "Dana", "Danica",
		"Jela", "Jaroslava", "Jarmila", "Lea", "Anastázia", "Galina", "Lesana", "Hermína", "Monika", "Ingrida", "Viktória", "Blažena", "Žofia",
		"Sofia", "Gizela", "Viola", "Gertrúda", "Zina", "Júlia", "Juliana", "Želmíra", "Ela", "Vanesa", "Iveta", "Vilma", "Petronela", "Žaneta",
		"Xénia", "Karolína", "Lenka", "Laura", "Stanislava", "Margaréta", "Dobroslava", "Blanka", "Valéria", "Paulína", "Sidónia", "Adriána",
		"Beáta", "Petra", "Melánia", "Diana", "Berta", "Patrícia", "Lujza", "Amália", "Milota", "Nina", "Margita", "Kamila", "Dušana", "Magdaléna",
		"Oľga", "Anna", "¨Hana", "Božena", "Marta", "Libuša", "Božidara", "Dominika", "Hortenzia", "Jozefína", "Štefánia", "Ľubomíra", "Zuzana",
		"Darina", "Marcela", "Milica", "Elena", "Helena", "Lýdia", "Anabela", "Jana", "Silvia", "Nikola", "Ružena", "Nora", "Drahoslava", "Linda",
		"Melinda", "Rebeka", "Rozália", "Regína", "Alica", "Marianna", "Miriama", "Martina", "Mária", "Jolana", "Ľudomila", "Ľudmila", "Olympia",
		"Eugénia", "Ľuboslava", "Zdenka", "Edita", "Michaela", "Stela", "Viera", "Natália", "Eliška", "Brigita", "Valentína", "Terézia", "Vladimíra",
		"Hedviga", "Uršuľa", "Alojza", "Kvetoslava", "Sabína", "Dobromila", "Klára", "Simona", "Aurélia", "Denisa", "Renáta", "Irma", "Agnesa",
		"Klaudia", "Alžbeta", "Elvíra", "Cecília", "Emília", "Katarína", "Henrieta", "Bibiána", "Barbora", "Marína", "Izabela", "Hilda", "Otília",
		"Lucia", "Branislava", "Bronislava", "Ivica", "Albína", "Kornélia", "Sláva", "Slávka", "Judita", "Dagmara", "Adela", "Nadežda", "Eva",
		"Filoména", "Ivana", "Milada"

	);

	protected static $lastNameMale = array(
		'Novák', 'Svoboda', 'Novotný', 'Dvořák', 'Černý', 'Procházka', 'Kučera', 'Nguyen', 'Veselý', 'Horák', 'Krejčí', 'Němec',
		'Marek',	'Pospíšil','Pokorný', 'Hájek', 'Král', 'Jelínek', 'Růžička', 'Beneš', 'Fiala', 'Sedláček', 'Doležal', 'Zeman',
		'Kolář', 'Navrátil', 'Čermák', 'Urban', 'Vaněk', 'Blažek', 'Kříž', 'Kovář', 'Kratochvíl', 'Bartoš', 'Vlček', 'Polák',
		'Kopecký', 'Musil', 'Šimek', 'Konečný', 'Malý', 'Holub', 'Štěpánek', 'Čech', 'Kadlec', 'Staněk', 'Dostál', 'Soukup',
		'Šťastný', 'Mareš'
	);

	protected static $lastNameFemale = array(
		'Nováková', 'Svobodová', 'Novotná', 'Dvořáková', 'Černá', 'Procházková', 'Kučerová', 'Nguyen', 'Veselá', 'Horáková',
		'Krejčí', 'Němcová', 'Marková', 'Pospíšilová', 'Pokorná', 'Hájková', 'Králová', 'Jelínková', 'Růžičková', 'Benešová',
		'Fialová', 'Sedláčková', 'Doležalová', 'Zemanová', 'Kolářová', 'Navrátilová', 'Čermáková', 'Urbanová', 'Vaňková',
		'Blažková', 'Křížová', 'Kovářová', 'Kratochvílová', 'Bartošová', 'Vlčková', 'Poláková', 'Kopecká', 'Musilová', 'Šimková',
		'Konečná', 'Malá', 'Holubová', 'Štěpánková', 'Čechová', 'Kadlecová', 'Staňková', 'Dostálová', 'Soukupová', 'Šťastná',
		'Marešová'
	);

	private static $prefix = array(
		'Bc.', 'Ing.', 'MUDr.', 'MVDr.', 'Mgr.', 'JUDr.', 'PhDr.', 'RNDr.', 'doc.', 'Dr.', 'BcA.', 'ICDr.', 'Ing.', 'Ing. arch.', 'JUDr.',
		'Mgr. art.', 'MSDr.', 'PaedDr.', 'PharmDr.', 'PhDr.', 'PhMr.', 'RNDr.', 'RSDr.', 'ThDr.', 'ThLic.', 'prof.', 'Dr. h. c.'
	);

	private static $suffix = array(
		'CSc.', 'DrSc.', 'DSc.', 'Ph.D.', 'Th.D.'
	);
	
	public static function firstName()
	{
		$gender = static::randomElement(array('Male', 'Female'));
		return call_user_func(array('static', 'firstName'.$gender));
	}

	public static function firstNameMale()
	{
		return static::randomElement(static::$firstNameMale);
	}

	public static function firstNameFemale()
	{
		return static::randomElement(static::$firstNameFemale);
	}

	public static function lastName()
	{
		$gender = static::randomElement(array('Male', 'Female'));
		return call_user_func(array('static', 'lastName'.$gender));
	}

	public static function lastNameMale()
	{
		return static::randomElement(static::$lastNameMale);
	}

	public static function lastNameFemale()
	{
		return static::randomElement(static::$lastNameFemale);
	}

	public static function prefix()
	{
		return static::randomElement(static::$prefix);
	}
	
	/**
	 * @example 'PhD'
	 */
	public static function suffix()
	{
		return static::randomElement(static::$suffix);
	}
}
