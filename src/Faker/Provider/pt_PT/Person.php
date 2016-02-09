<?php

namespace Faker\Provider\pt_PT;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} de {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} de {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} de {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} de {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} de {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} de {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}} {{lastName}}',
    );

    /** @link http://goo.gl/v6bScG document with all pt abreviations **/
    protected static $titleMale = array('Sr.', 'Dr.', 'Exmo.', 'Eng.', 'Eng.º', 'Ex.', 'Exº');
    protected static $titleFemale = array('Sra.', 'Dra.', 'Exma', 'Eng.ª', 'Exª');


    /**
     * @deprecated Deprecated since version 1.6.0, please use \Faker\Provider\Payment::vat() instead
     *
     * Taxpayer Identification Number (NIF in Portugal)
     *
     * @link http://pt.wikipedia.org/wiki/N%C3%BAmero_de_identifica%C3%A7%C3%A3o_fiscal
     *
     * @return string 9 digit number
     */
    public static function taxpayerIdentificationNumber()
    {
        return \Faker\Provider\Payment::vat('PT', false);
    }

    /**
     *
     * @link http://nomesportugueses.blogspot.pt/2012/01/lista-dos-cem-nomes-mais-usados-em.html
     */

    protected static $firstNameMale = array(
        'Rodrigo', 'João', 'Martim', 'Afonso', 'Tomás', 'Gonçalo', 'Francisco', 'Tiago',
        'Diogo', 'Guilherme', 'Pedro', 'Miguel', 'Rafael', 'Gabriel', 'Santiago', 'Dinis',
        'David', 'Duarte', 'José', 'Simão', 'Daniel', 'Lucas', 'Gustavo', 'André', 'Denis',
        'Salvador', 'António', 'Vasco', 'Henrique', 'Lourenço', 'Manuel', 'Eduardo', 'Bernardo',
        'Leandro', 'Luís', 'Diego', 'Leonardo', 'Alexandre', 'Rúben', 'Mateus', 'Ricardo',
        'Vicente', 'Filipe', 'Bruno', 'Nuno', 'Carlos', 'Rui', 'Hugo', 'Samuel', 'Álvaro',
        'Matias', 'Fábio', 'Ivo', 'Paulo', 'Jorge', 'Xavier', 'Marco', 'Isaac', 'Raúl','Benjamim',
        'Renato', 'Artur', 'Mário', 'Frederico', 'Cristiano', 'Ivan', 'Sérgio', 'Micael',
        'Vítor', 'Edgar', 'Kevin', 'Joaquim', 'Igor', 'Ângelo', 'Enzo', 'Valentim', 'Flávio',
        'Joel', 'Fernando', 'Sebastião', 'Tomé', 'César', 'Cláudio', 'Nelson', 'Lisandro', 'Jaime',
        'Gil', 'Mauro', 'Sandro', 'Hélder', 'Matheus', 'William', 'Gaspar', 'Márcio',
        'Martinho', 'Emanuel', 'Marcos', 'Telmo', 'Davi', 'Wilson'
    );

    protected static $firstNameFemale = array(
        'Maria', 'Leonor', 'Matilde', 'Mariana', 'Ana', 'Beatriz', 'Inês', 'Lara', 'Carolina', 'Margarida',
        'Joana', 'Sofia', 'Diana', 'Francisca', 'Laura', 'Sara', 'Madalena', 'Rita', 'Mafalda', 'Catarina',
        'Luana', 'Marta', 'Íris', 'Alice', 'Bianca', 'Constança', 'Gabriela', 'Eva', 'Clara', 'Bruna', 'Daniela',
        'Iara', 'Filipa', 'Vitória', 'Ariana', 'Letícia', 'Bárbara', 'Camila', 'Rafaela', 'Carlota', 'Yara',
        'Núria', 'Raquel', 'Ema', 'Helena', 'Benedita', 'Érica', 'Isabel', 'Nicole', 'Lia', 'Alícia', 'Mara',
        'Jéssica', 'Soraia', 'Júlia', 'Luna', 'Victória', 'Luísa', 'Teresa', 'Miriam', 'Adriana', 'Melissa',
        'Andreia', 'Juliana', 'Alexandra', 'Yasmin', 'Tatiana', 'Leticia', 'Luciana', 'Eduarda', 'Cláudia',
        'Débora', 'Fabiana', 'Renata', 'Kyara', 'Kelly', 'Irina', 'Mélanie', 'Nádia', 'Cristiana', 'Liliana',
        'Patrícia', 'Vera', 'Doriana', 'Ângela', 'Mia', 'Erica', 'Mónica', 'Isabela', 'Salomé', 'Cátia',
        'Verónica', 'Violeta', 'Lorena', 'Érika', 'Vanessa', 'Iris', 'Anna', 'Viviane', 'Rebeca', 'Neuza',
    );

    protected static $lastName = array(
        'Abreu',  'Almeida',  'Alves', 'Amaral', 'Amorim', 'Andrade', 'Anjos', 'Antunes', 'Araújo', 'Assunção',
        'Azevedo', 'Baptista', 'Barbosa', 'Barros', 'Batista', 'Borges', 'Branco', 'Brito', 'Campos', 'Cardoso',
        'Carneiro', 'Carvalho', 'Castro', 'Coelho', 'Correia', 'Costa', 'Cruz', 'Cunha', 'Domingues', 'Esteves',
        'Faria', 'Fernandes', 'Ferreira', 'Figueiredo', 'Fonseca', 'Freitas', 'Garcia', 'Gaspar', 'Gomes',
        'Gonçalves', 'Guerreiro', 'Henriques', 'Jesus', 'Leal', 'Leite', 'Lima', 'Lopes', 'Loureiro', 'Lourenço',
        'Macedo', 'Machado', 'Magalhães', 'Maia', 'Marques', 'Martins', 'Matias', 'Matos', 'Melo', 'Mendes',
        'Miranda', 'Monteiro', 'Morais', 'Moreira', 'Mota', 'Moura', 'Nascimento', 'Neto', 'Neves', 'Nogueira',
        'Nunes', 'Oliveira', 'Pacheco', 'Paiva', 'Pereira', 'Pinheiro', 'Pinho', 'Pinto', 'Pires', 'Ramos',
        'Reis', 'Ribeiro', 'Rocha', 'Rodrigues', 'Santos', 'Silva', 'Simões', 'Soares', 'Sousa',
        'Sá', 'Tavares', 'Teixeira', 'Torres', 'Valente', 'Vaz', 'Vicente', 'Vieira',
    );
}
