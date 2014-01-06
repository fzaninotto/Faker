<?php

namespace Faker\Provider\hu_HU;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{lastName}} {{firstName}}',
        '{{prefix}} {{lastName}} {{firstName}}',
        '{{lastName}} {{firstName}} {{suffix}}',
        '{{prefix}} {{lastName}} {{firstName}} {{suffix}}',
    );

    protected static $firstName = array(
        'Adél', 'Albert', 'Alexa', 'Andrea', 'Angéla', 'Anikó', 'Antal', 'Aranka', 'Attila', 'Ádám', 'Ármin', 'Áron', 'Árpád', 'Balázs', 'Barna', 'Barnabás', 'Beatrix', 'Bence', 'Bendegúz', 'Benedek', 'Bettina', 'Boróka', 'Botond', 'Csenge', 'Dalma', 'Dorina', 'Dorián', 'Dorottya', 'Emőke', 'Endre', 'Ernő', 'Erzsébet', 'Evelin', 'Fanni', 'Flóra', 'Gabriella', 'Georgina', 'Gitta', 'Gizella', 'Gréta', 'Gábor', 'Géza', 'Hanga', 'Henriett', 'Henrietta', 'Hunor', 'Imre', 'István', 'Izabella', 'Jenő', 'Johanna', 'Judit', 'Julianna', 'János', 'Jázmin', 'Kata', 'Katalin', 'Katinka', 'Kevin', 'Kincső', 'Klaudia', 'Kornél', 'Kristóf', 'Kíra', 'Liliána', 'Linda', 'Liza', 'László', 'Léna', 'Lívia', 'Maja', 'Marcell', 'Marianna', 'Marietta', 'Martina', 'Mia', 'Mihály', 'Milla', 'Milán', 'Mirella', 'Mária', 'Márton', 'Mátyás', 'Míra', 'Nikoletta', 'Noel', 'Olivér', 'Olívia', 'Ottó', 'Panna', 'Patrik', 'Patrícia', 'Péter', 'Ramóna', 'Rebeka', 'Richárd', 'Rudolf', 'Soma', 'Szabina', 'Szandra', 'Szervác', 'Szonja', 'Sándor', 'Sára', 'Valéria', 'Vilmos', 'Vince', 'Virág', 'Zita', 'Zoltán', 'Zoé', 'Zsolt', 'Zsombor', 'Zsóka', 'Zétény'
    );

    protected static $lastName = array(
        'Antal', 'Bakos', 'Balla', 'Balog', 'Balogh', 'Balázs', 'Barna', 'Barta', 'Biró', 'Bodnár', 'Bogdán', 'Bognár', 'Borbély', 'Boros', 'Budai', 'Bálint', 'Csonka', 'Deák', 'Dobos', 'Dudás', 'Faragó', 'Farkas', 'Fazekas', 'Fehér', 'Fekete', 'Fodor', 'Fábián', 'Fülöp', 'Gulyás', 'Gál', 'Gáspár', 'Hajdu', 'Halász', 'Hegedüs', 'Hegedűs', 'Horváth', 'Illés', 'Jakab', 'Juhász', 'Jónás', 'Katona', 'Kelemen', 'Kerekes', 'Király', 'Kis', 'Kiss', 'Kocsis', 'Kovács', 'Kozma', 'Lakatos', 'Lengyel', 'Lukács', 'László', 'Magyar', 'Major', 'Molnár', 'Máté', 'Mészáros', 'Nagy', 'Nemes', 'Novák', 'Németh', 'Oláh', 'Orbán', 'Orosz', 'Orsós', 'Pap', 'Papp', 'Pataki', 'Pintér', 'Pál', 'Pásztor', 'Péter', 'Rácz', 'Simon', 'Sipos', 'Somogyi', 'Soós', 'Szabó', 'Szalai', 'Szekeres', 'Szilágyi', 'Székely', 'Szücs', 'Szőke', 'Szűcs', 'Sándor', 'Takács', 'Tamás', 'Tóth', 'Török', 'Varga', 'Vass', 'Veres', 'Vincze', 'Virág', 'Váradi', 'Végh', 'Vörös'
    );

    private static $prefix = array('Dr.', 'Prof.', 'id.');

    private static $suffix = array('PhD');

    /**
     * @example 'Dr.'
     */
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
