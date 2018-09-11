<?php

namespace Faker\Provider\sv_SE;

use Faker\Calculator\Luhn;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}} {{lastName}}',
        '{{firstName}} {{lastName}}-{{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}}-{{lastName}}',
    );

    protected static $titleMale = array('Herr', 'Dr.', 'Prof.', 'Fil.Kand.');

    protected static $titleFemale = array('Fru', 'Frk.', 'Dr.', 'Fil.Kand.');

    /**
     * @var array Swedish female first names
     * @link http://spraakbanken.gu.se/statistik/lbfnamnalf.phtml
     */
    protected static $firstNameFemale = array(
'Ada','Adela','Adele','Adéle','Adelia','Adina','Adolfina','Agda','Agnes','Agneta','Aina','Aino','Albertina','Alexandra','Alfhild','Alfrida','Alice','Alida','Ally','Alma','Alva','Amalia','Amanda','Andrea','Anette','Angela','Anita','Anja','Ann','Anna','Anna-Carin','Anna-Greta','Anna-Karin','Anna-Lena','Anna-Lisa','Anna-Maria','Anna-Stina','Anne','Anneli','Annelie','Annette','Anne-Charlotte','Anne-Marie','Anni','Annica','Annie','Annika','Annikki','Anny','Ann-Britt','Ann-Charlott','Ann-Charlotte','Ann-Christin','Ann-Christine','Ann-Katrin','Ann-Kristin','Ann-Louise','Ann-Margret','Ann-Mari','Ann-Marie','Ann-Sofi','Ann-Sofie','Antonia','Arvida','Asta','Astrid','Augusta','Aurora','Axelia','Axelina','        ','Barbro','Beata','Beatrice','Beda','Berit','Bernhardina','Berta','Betty','Birgit','Birgitta','Blenda','Bodil','Boel','Borghild','Brita','Britt','Britta','Britt-Inger','Britt-Louise','Britt-Mari','Britt-Marie','Camilla','Carin','Carina','Carita','Carola','Carolina','Caroline','Catarina','Catharina','Cathrine','Catrin','Cecilia','Charlott','Charlotta','Charlotte','Christel','Christin','Christina','Christine','Clara','Clary','Constance','Cristina','Daga','Dagmar','Dagny','Daisy','Davida','Desideria','Desirée','Diana','Disa','Dora','Doris','Dorotea','Ebba','Edit','Edith','Edla','Eira','Eivor','Ejvor','Elaine','Eleonor','Eleonora','Elfrida','Elida','Elin','Elina','Elinor','Elisabet','Elisabeth','Elise','Ella','Ellen','Ellinor','Elly','Elma','Elna','Elsa','Else','Else-Marie','Elsi','Elsie','Elsy','Elvi','Elvira','Elvy','Emelia','Emerentia','Emilia','Emma','Emmy','Erika','Erna','Ester','Estrid','Ethel','Eufemia','Eugenia','Eva','Eva-Britt','Eva-Lena','Eva-Lotta','Eva-Marie','Evelina','Evelyn','Evy','Ewa','Fanny','Florence','Fredrika','Frida','Frideborg','Gabriella','Gerd','Gerda','Gertie','Gertrud','Gisela','Greta','Gudrun','Gull','Gullan','Gullbritt','Gulli','Gullvi','Gully','Gull-Britt','Gun','Gunborg','Gunbritt','Gunda','Gunhild','Gunilla','Gunn','Gunnel','Gunni','Gunvor','Gun-Britt','Gurli','Gustava','Gärd','Görel','Göta','Hanna','Harriet','Hedvig','Helen','Helén','Helena','Helene','Heléne','Helfrid','Helga','Helmi','Helny','Henny','Henrietta','Henriette','Herta','Hilda','Hildegard','Hildur','Hillevi','Hilma','Hjördis','Hulda','Ida','Ines','Inez','Inga','Ingalill','Inga-Britt','Inga-Lena','Inga-Lill','Inga-Lisa','Inga-Maj','Ingbritt','Ingeborg','Ingegerd','Ingegärd','Ingela','Inger','Ingrid','Ingvor','Ing-Britt','Ing-Mari','Ing-Marie','Iréne','Irene','Iris','Irma','Isabella','Jane','Janet','Jeanette','Jenny','Jessica','Johanna','Josefina','Judit','Judith','Julia','Juliana','Justina','Kaarina','Kajsa','Karin','Karina','Karla','Karola','Karolina','Katarina','Katharina','Katrin','Katrina','Kersti','Kerstin','Klara','Konstantia','Kornelia','Kristin','Kristina','Kristine','Laila','Laura','Leila','Lena','Leontina','Liisa','Lilian','Lill','Lillemor','Lillian','Lilly','Linda','Linnéa','Linnea','Lisa','Lisbet','Lisbeth','Liselott','Liselotte','Lise-Lott','Lise-Lotte','Lizzie','Lola','Louise','Lovisa','Lucia','Lydia','Madeleine','Madelene','Magda','Magdalena','Magnhild','Maj','Maja','Majbritt','Majken','Majlis','Majvor','Maj-Britt','Maj-Lis','Malin','Malvina','Margaret','Margareta','Margareth','Margaretha','Margit','Margita','Margot','Margret','Margreta','Mari','Maria','Mariana','Mariann','Marianne','Marie','Mariette','Marie-Louise','Marika','Marina','Marion','Marit','Marita','Mari-Ann','Marja','Marjatta','Marlene','Marta','Martha','Martina','Mary','Mathilda','Matilda','Maud','May','Mia','Mildred','Mimmi','Mirjam','Mona','Monica','Monika','Märit','Märta','Märtha','Naemi','Naima','Nancy','Nanna','Nanny','Natalia','Nelly','Nina','Nora','Olga','Olivia','Ottilia','Paula','Paulina','Pauline','Pernilla','Petra','Petronella','Pia','Ragna','Ragnhild','Rakel','Rebecka','Regina','Renée','Rigmor','Rita','Rosa','Rose','Rose-Marie','Rosita','Ros-Mari','Ros-Marie','Runa','Rut','Ruth','Sabina','Saga','Sally','Sara','Selma','Serafia','Sibylla','Sigbritt','Signe','Signhild','Sigrid','Siri','Siv','Sofi','Sofia','Sofie','Solbritt','Solveig','Solvig','Sonja','Stina','Susann','Susanna','Susanne','Suzanne','Svea','Sylvia','Synnöve','Syster','Tea','Tekla','Terese','Teresia','Therése','Therese','Theresia','Thyra','Tina','Tora','Torborg','Tove','Tyra','Ulla','Ulla-Britt','Ulla-Britta','Ulrica','Ulrika','Ursula','Valborg','Vanja','Vega','Vendela','Vendla','Vera','Veronica','Veronika','Victoria','Viktoria','Vilhelmina','Vilma','Viola','Virginia','Vivan','Viveca','Viveka','Vivi','Vivian','Viviann','Vivianne','Vivi-Ann','Vivi-Anne','Wilhelmina','Ylva','Yvonne','Åsa','Åse','Elin ','Ida ','Josefin','Emelie','Amanda ','Sandra','Rebecca','Isabelle'
    );

    /**
     * @var array Swedish male first names
     * @link http://spraakbanken.gu.se/statistik/lbfnamnalf.phtml
     */
    protected static $firstNameMale = array(
'Jan-Erik','Lars-Erik','Per-Olof','Jan-Olof','Lars-Göran','Karl-Erik','Sven-Erik','Carl-Johan','Per-Erik','Lars-Olof','Karl','Erik','Lars','Anders','Per','Mikael','Johan','Olof','Nils ','Jan','Gustav','Hans','Lennart','Peter','Gunnar','Sven','Fredrik','Thomas','Bengt','Daniel','Bo','Alexander','Oskar','Göran','Åke','Christer','Andreas','Stefan','Magnus','Martin','John','Mats','Mattias','Henrik','Leif','Ulf','Jonas','Björn','Axel','Bertil','Mohamed','Arne','Robert','Ingemar','Christian','Marcus','David','Viktor','Niklas','Emil','Kjell','Patrik','Håkan','Stig','Rickard','Rolf','Christoffer','Joakim','Wilhelm','Tommy','William','Filip','Roland','Claes','Simon','Sebastian','Roger','Ingvar','Anton','Kent','Ove','Johannes','Tobias','Kenneth','Jakob','Jonathan','Emanuel','Jörgen','Hugo ','Elias','Robin','Kurt','Lucas','Adam','Rune','Gösta','Georg','Johnny','Ali','Linus','Josef','Sten','Oliver','Torbjörn','Arvid','Isak','Dan','Ludvig','Albin','Alf','Abraham','Adolf','Adrian','Agaton','Agne','Albert','Aldor','Alex','Alexis','Alexius','Alfons','Alfred','Algot','Allan','Alrik','Alvar','Alve','Amandus','André','Anselm','Anshelm','Antero','Antonius','Arnold','Aron','Arthur','Artur','Assar','Astor','August','Augustin','Bengt-Göran','Bengt-Olof','Bengt-Åke','Benny','Berndt','Berne','Bernhard','Bernt','Bert','Berth','Berthold','Bill','Billy','Birger','Bjarne','Boris','Bror','Bruno','Brynolf','Börje','Carl','Carl-Axel','Carl-Erik','Carl-Gustaf','Carl-Gustav','Charles','Claes-Göran','Clarence','Clas','Conny','Crister','Curt','Dag','Dennis','Dick','Donald','Douglas','Ebbe','Eddie','Eddy','Edgar','Edmund','Edvard','Edvin','Efraim','Egon','Eilert','Einar','Eje','Ejnar','Elis','Ellert','Elmer','Elof','Elon','Elov','Elving','Elvir','Enar','Engelbert','Engelbrekt','Enok','Erhard','Eric','Erland','Erling','Ernfrid','Ernst','Esbjörn','Eskil','Eugén','Eugen','Evald','Eve','Evert','Fabian','Felix','Ferdinand','Fingal','Finn','Folke','Frank','Frans','Franz','Fred','Fridolf','Friedrich','Fritiof','Fritjof','Frits','Fritz','Gabriel','George','Gerhard','Gert','Gideon','Gilbert','Gillis','Glenn','Gottfrid','Gotthard','Greger','Gudmund','Gunder','Gustaf','Görgen','Göte','Hadar','Halvar','Halvard','Hans-Erik','Hans-Olof','Hans-Åke','Harald','Hardy','Harry','Hartvig','Hasse','Heinrich','Heinz','Helge','Helmer','Henning','Henric','Henry','Herbert','Heribert','Herman','Hilbert','Hilding','Hilmer','Hjalmar','Holger','Holmfrid','Hubert','Hugo','Inge','Ingmar','Ingvald','Isidor','Ivan','Ivar','Jack','Jacob','James','Janne','Jan-Eric','Jan-Olov','Jan-Ove','Jan-Åke','Jarl','Jean','Jens','Jerker','Jerry','Jesper','Jim','Jimmy','Joachim','Joacim','Joel','Johny','Jon','Jonny','Juhani','Julius','Justus','Jöns','Kai','Kaj','Kalevi','Karl-Axel','Karl-Gunnar','Karl-Gustaf','Karl-Gustav','Karl-Johan','Kennert','Kennet','Kenny','Kenth','Kjell-Åke','Klas','Knut','Konrad','Konstantin','Krister','Kristian','Kristoffer','Kåre','Lage','Lambert','Lars-Eric','Lars-Gunnar','Lars-Olov','Lars-Ove','Lars-Åke','Laurentius','Leander','Leo','Leon','Leonard','Leopold','Levi','Levin','Linné','Lorentz','Louis','Magni','Malkolm','Malte','Manfred','Manne','Markus','Mathias','Matti','Matts','Maurits','Mauritz','Max','Melker','Micael','Michael','Mickael','Morgan','Måns','Mårten','Napoleon','Natanael','Nicklas','Niclas','Nikolaus','Nils','Nils-Erik','Nore','Odd','Ola','Olaus','Olav','Olavi','Ole','Olle','Olov','Orvar','Oscar','Ossian','Osvald','Otto','Owe','Patric','Patrick','Paul','Peder','Percy','Per-Anders','Per-Arne','Per-Ola','Per-Olov','Per-Åke','Petrus','Petter','Pierre','Pontus','Pär','Ragnar','Ragnvald','Ralf','Ralph','Raymond','Reidar','Reine','Reinhold','Reino','Richard','Rikard','Roine','Ronald','Ronnie','Ronny','Roy','Ruben','Rudolf','Runar','Runo','Rutger','Salomon','Sam','Samuel','Sanfrid','Set','Seth','Seved','Severin','Sigfrid','Sigmund','Signar','Sigurd','Sigvard','Sivert','Sixten','Sonny','Staffan','Stanley','Stellan','Stephan','Steve','Sture','Sune','Svante','Sven-Olof','Sven-Olov','Sven-Åke','Sverker','Sölve','Sören','Tage','Ted','Teodor','Theodor','Thor','Thorbjörn','Thord','Thore','Thorsten','Thorvald','Thure','Toivo','Tom','Tomas','Tonny','Tony','Tor','Tord','Tore','Torgny','Torkel','Torsten','Torvald','Tryggve','Ture','Tyko','Ulrik','Uno','Urban','Valdemar','Valentin','Valfrid','Vallentin','Valter','Veine','Verner','Victor','Vidar','Viggo','Viking','Vilgot','Vilhelm','Villiam','Villy','Vincent','Vitalis','Waldemar','Walter','Werner','Willy','Yngve','Örjan','Östen'
    );

    /**
     * @var array Swedish common last names
     * @link http://www.scb.se/sv_/Hitta-statistik/Statistik-efter-amne/Befolkning/Amnesovergripande-statistik/Namnstatistik/30898/2012A01x/Samtliga-folkbokforda--Efternamn-topplistor/Efternamn-topp-100/
     */
    protected static $lastName = array(
'Abrahamsson','Andersson','Andreasson','Arvidsson','Axelsson','Bengtsson','Berg','Berggren','Berglund','Bergman','Bergqvist','Bergström','Björk','Björklund','Blom','Blomqvist','Claesson','Dahlberg','Danielsson','Engström','Ek','Eklund','Ekström','Eliasson','Eriksson','Falk','Forsberg','Fransson','Fredriksson','Gunnarsson','Gustafsson','Hansen','Hansson','Hedlund','Hellström','Henriksson','Hermansson','Holm','Holmberg','Holmgren','Holmqvist','Håkansson','Isaksson','Ivarsson','Jakobsson','Jansson','Johansson','Jonasson','Jonsson','Jönsson','Karlsson','Larsson','Lind','Lindberg','Lindgren','Lindholm','Lindqvist','Lindström','Lund','Lundberg','Lundgren','Lundin','Lundqvist','Lundström','Löfgren','Magnusson','Martinsson','Mattsson','Månsson','Mårtensson','Nilsson','Norberg','Nordin','Nordström','Nyberg','Nyström','Olofsson','Olsson','Persson','Pettersson','Pålsson','Samuelsson','Sandberg','Sandström','Sjöberg','Sjögren','Ström','Strömberg','Sundberg','Sundqvist','Sundström','Svensson','Söderberg','Viklund','Wallin','Wikström','Åberg','Åkesson','Åström','Öberg','Ali','Mohamed','Ahmed','Hassan'
    );

    /**
     * National Personal Identity number (personnummer)
     * @link http://en.wikipedia.org/wiki/Personal_identity_number_(Sweden)
     * @param \DateTime $birthdate
     * @param string $gender Person::GENDER_MALE || Person::GENDER_FEMALE
     * @return string on format XXXXXX-XXXX
     */
    public function personalIdentityNumber(\DateTime $birthdate = null, $gender = null)
    {
        if (!$birthdate) {
            $birthdate = \Faker\Provider\DateTime::dateTimeThisCentury();
        }
        $datePart = $birthdate->format('ymd');

        if ($gender && $gender == static::GENDER_MALE) {
            $randomDigits = (string)static::numerify('##') . static::randomElement(array(1,3,5,7,9));
        } elseif ($gender && $gender == static::GENDER_FEMALE) {
            $randomDigits = (string)static::numerify('##') . static::randomElement(array(0,2,4,6,8));
        } else {
            $randomDigits = (string)static::numerify('###');
        }


        $checksum = Luhn::computeCheckDigit($datePart . $randomDigits);

        return $datePart . '-' . $randomDigits . $checksum;
    }
}