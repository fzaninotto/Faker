<?php

namespace Faker\Provider\lv_LV;

use Faker\Calculator\Luhn;

class Person extends \Faker\Provider\Person
{
    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%B5_%D0%BB%D0%B8%D1%87%D0%BD%D0%BE%D0%B5_%D0%B8%D0%BC%D1%8F
     **/
    protected static $firstNameMale = array(
        'Enno', 'Eriks', 'Ernests', 'Ero', 'Ervis', 'Mārtiņš', 'Ādams', 'Āris', 'Āvo', 'Ēriks', 'Enriko', 'Enriks',  'Ēro', 'Ģirts', 'Īra',
        // below are unknown gender firstnames
        'Agris', 'Dainis', 'Dzintars', 'Emīls', 'Enijs', 'Enoks', 'Enrijs', 'Eralds', 'Erasts', 'Erberts', 'Erhards',
        'Eriands', 'Eriens', 'Erihs', 'Erims', 'Erlends', 'Ermanis', 'Ermans', 'Ermīns', 'Ernando', 'Ernis', 'Ernsts', 'Ervids',
        'Ervijs', 'Ervils', 'Ervins', 'Ervīns', 'Esams', 'Etjēns', 'Eugenijs', 'Eugēnijs', 'Euzebijs', 'Euģenijs', 'Euģēnijs', 'Evalds',
        'Evarists', 'Evars', 'Evarts', 'Eventijs', 'Everts', 'Evgenijs', 'Evgēnijs', 'Evijs', 'Evģenijs', 'Evģēnijs', 'Guntis', 'Kārlis',
        'Modris', 'Ričards', 'Valdis', 'Viesturs', 'Vilnis', 'Ādolfina', 'Ādolfs', 'Ādolfīne', 'Ārends', 'Ārens', 'Ārija', 'Ārijs',
        'Āriks', 'Ārite', 'Ārons', 'Ārvalda', 'Ārvaldis', 'Ārvalds', 'Čelsija', 'Čereta', 'Česlava', 'Čezeta', 'Ēra', 'Ērihs',
        'Ērmanis', 'Ēstere', 'Ēvalds', 'Ēvija', 'Ēvisa', 'Ģederts', 'Ģedimins', 'Ģintars', 'Ģints', 'Īrisa', 'Īvija', 'Ņikifors',
        'Šandors', 'Ūnika', 'Ūva', 'Žaklīne', 'Žanija', 'Žanna', 'Žanneta', 'Žene', 'Ženija', 'Žermena', 'Žermēna', 'Žozefina',
        'Žuanete', 'Žubīte',
    );

    protected static $firstNameFemale = array(
        'Āra', 'Ārika', 'Čarita', 'Ērika', 'Ēva', 'Ēvī', 'Īda', 'Īna', 'Īva', 'Īvis', 'Īģe', 'Ņikita', 'Ūna',
        'Žaklina', 'Žaklīna', 'Žana', 'Žaneta', 'Žanete',
        // below are unknown gender firstnames
        'Agris', 'Dainis', 'Dzintars', 'Emīls', 'Enijs', 'Enoks', 'Enrijs', 'Eralds', 'Erasts', 'Erberts', 'Erhards',
        'Eriands', 'Eriens', 'Erihs', 'Erims', 'Erlends', 'Ermanis', 'Ermans', 'Ermīns', 'Ernando', 'Ernis', 'Ernsts', 'Ervids',
        'Ervijs', 'Ervils', 'Ervins', 'Ervīns', 'Esams', 'Etjēns', 'Eugenijs', 'Eugēnijs', 'Euzebijs', 'Euģenijs', 'Euģēnijs', 'Evalds',
        'Evarists', 'Evars', 'Evarts', 'Eventijs', 'Everts', 'Evgenijs', 'Evgēnijs', 'Evijs', 'Evģenijs', 'Evģēnijs', 'Guntis', 'Kārlis',
        'Modris', 'Ričards', 'Valdis', 'Viesturs', 'Vilnis', 'Ādolfina', 'Ādolfs', 'Ādolfīne', 'Ārends', 'Ārens', 'Ārija', 'Ārijs',
        'Āriks', 'Ārite', 'Ārons', 'Ārvalda', 'Ārvaldis', 'Ārvalds', 'Čelsija', 'Čereta', 'Česlava', 'Čezeta', 'Ēra', 'Ērihs',
        'Ērmanis', 'Ēstere', 'Ēvalds', 'Ēvija', 'Ēvisa', 'Ģederts', 'Ģedimins', 'Ģintars', 'Ģints', 'Īrisa', 'Īvija', 'Ņikifors',
        'Šandors', 'Ūnika', 'Ūva', 'Žaklīne', 'Žanija', 'Žanna', 'Žanneta', 'Žene', 'Ženija', 'Žermena', 'Žermēna', 'Žozefina',
        'Žuanete', 'Žubīte',
    );

    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BE%D0%B1%D1%89%D0%B5%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D1%85_%D1%84%D0%B0%D0%BC%D0%B8%D0%BB%D0%B8%D0%B9
     **/
    protected static $lastName = array(
        'Raņķi', 'Muižeļi', 'Dumpji', 'Ozoliņi', 'Kalniņi', 'Sēļi', 'Kreši', 'Dāles', 'Rungaiņi',
        'Kalniņš', 'Lejiņš', 'Celmiņš', 'Bērziņš', 'Ozoliņš', 'Liepiņš', 'Siliņš', 'Vilciņš', 'Lācītis',
        'Priedīte', 'Saulīte', 'Gailītis', 'Muciņš', 'Krieviņš', 'Zviedrītis', 'Polītis',
        'Latkovskis', 'Lazovskis', 'Kovaļevskis', 'Dombrovskis', 'Jankovskis', 'Ratkēvičs', 'Kokorevičs', 'Jurēvics',
        'Jankevics', 'Baldunčiks', 'Šileiko', 'Budreiko', 'Andreiko', 'Blaumanis', 'Silmanis', 'Staltmanis',
        'Andersons', 'Kirhenšteins', 'Švarcbahs', 'Bendorfs', 'Veinbergs', 'Rozentāls', 'Neilands', 'Freidenfelds',
        'Veidenbaums', 'Kronvalds',
    );

    public function driverLicence()
    {
        return $this->bothify("??######");
    }

    public function passportNumber()
    {
        return $this->bothify("??#######");
    }

    /**
     * National Personal Identity number (personas kods)
     * @link https://en.wikipedia.org/wiki/National_identification_number#Latvia
     * @param \DateTime $birthdate
     * @return string on format XXXXXX-XXXXX
     */
    public function personalIdentityNumber(\DateTime $birthdate = null)
    {
        if (!$birthdate) {
            $birthdate = \Faker\Provider\DateTime::dateTimeThisCentury();
        }

        $datePart = $birthdate->format('dmy');
        $randomDigits = (string) static::numerify('####');

        $checksum = Luhn::computeCheckDigit($datePart . $randomDigits);

        return $datePart . '-' . $randomDigits . $checksum;
    }
}
