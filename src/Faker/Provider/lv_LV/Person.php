<?php

namespace Faker\Provider\lv_LV;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
    );

    /**
     * {@link} http://ru.wikipedia.org/wiki/%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%B5_%D0%BB%D0%B8%D1%87%D0%BD%D0%BE%D0%B5_%D0%B8%D0%BC%D1%8F
     **/
    protected static $firstName = array(
        'Enijs', 'Enno', 'Enoks', 'Enrijs', 'Enriko', 'Enriks', 'Eralds', 'Erasts', 'Erberts',
        'Erhards', 'Eriands', 'Eriens', 'Erihs', 'Eriks', 'Erims', 'Erlends', 'Ermanis', 'Ermans',
        'Ermīns', 'Ernando', 'Ernests', 'Ernis', 'Ernsts', 'Ero', 'Ervids', 'Ervijs', 'Ervils',
        'Ervīns', 'Ervins', 'Ervis', 'Esams', 'Etjēns', 'Euģenijs', 'Euģēnijs', 'Eugenijs', 'Eugēnijs',
        'Euzebijs', 'Evalds', 'Evarists', 'Evars', 'Evarts', 'Eventijs', 'Everts', 'Evgēnijs',
        'Evgenijs', 'Evģēnijs', 'Evģenijs', 'Evijs', 'Ādams', 'Ādolfs', 'Ārends', 'Ārens',
        'Ārijs', 'Āriks', 'Āris', 'Ārons', 'Ārvaldis', 'Ārvalds', 'Āvo', 'Žaklīna', 'Žaklina',
        'Žaklīne', 'Žana', 'Žaneta', 'Žanete', 'Žanija', 'Žanna', 'Žanneta', 'Žene', 'Ženija',
        'Žermēna', 'Žermena', 'Žozefina', 'Žuanete', 'Žubīte', 'Ērihs', 'Ēriks', 'Ērmanis',
        'Ēro', 'Ēvalds', 'Ēra', 'Ērika', 'Ēstere', 'Ēva', 'Ēvī', 'Ēvija', 'Ēvisa', 'Ūna', 'Ūnika',
        'Ūva', 'Ģederts', 'Ģedimins', 'Ģintars', 'Ģints', 'Ģirts', 'Čarita', 'Čelsija', 'Čereta',
        'Česlava', 'Čezeta', 'Īda', 'Īģe', 'Īna', 'Īra', 'Īrisa', 'Īva', 'Īvija', 'Īvis', 'Ņikifors',
        'Ņikita', 'Šandors', 'Ādolfina', 'Ādolfīne', 'Āra', 'Ārija', 'Ārika', 'Ārite', 'Ārvalda',
        'Valdis', 'Guntis', 'Dainis', 'Vilnis', 'Agris', 'Dzintars', 'Modris', 'Viesturs',  'Mārtiņš',
        'Ričards', 'Kārlis', 'Emīls'

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
}
