<?php

namespace Faker\Provider\pt_BR;

class Restaurant extends \Faker\Provider\Base
{

    protected static $foodNames = array(
        'Pizza', 'Pastel', 'X-Salada', 'Xis-Bacon', 'X-Coração', 'X-Frango', 'X-Bacon', 'X-Calabresa',
        'X Calabresa', 'Cachorro Quente', 'Bauru de Filé', 'Bauru de Filé ao Molho 4 Queijos',
        'Bauru de Filé ao Molho Branco', 'Sanduíche Simples', 'Torrada Gratinada', 'Torrada Simples',
        'Bauru Lombinho com Abacaxi', 'X-Burger Vegetariano', 'Frango no Prato', 'Filé no Prato',
        'Porção de Fritas', 'Porção de Contra Filé', 'Porção de Calabresa', 'Porção Mista'
    );

    protected static $beverageNames = array(
        'Cerveja Lata', 'Cerveja 600ml', 'Cerveja 1L',
        'Cerveja Bavária', 'Cerveja Kilsen', 'Cerveja Skol', 'Cerveja Brahma',
        'Coca-Cola Lata','Coca-Cola 600ml','Coca-Cola 2L','Coca-Cola Lata Zero',
        'Fanta Lata','Fanta 600ml','Fanta 2L','Fanta Lata Zero',
        'Sprite Lata','Sprite 600ml','Sprite 2L','Sprite Lata Zero',
        'Água sem gás','Água com gás',
        'Suco de Uva', 'Suco de Abacaxi', 'Suco de Laranja', 'Suco de Limão', 'Suco de Morango'
    );

    /**
     * A random Food Name.
     * @return string
     */
    public function foodName()
    {
        return static::randomElement(static::$foodNames);
    }

    /**
     * A random Drink Name.
     * @return string
     */
    public function beverageName()
    {
        return static::randomElement(static::$beverageNames);
    }
}
