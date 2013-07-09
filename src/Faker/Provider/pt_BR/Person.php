<?php

namespace Faker\Provider\pt_BR;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}}',
        '{{firstname}} {{lastName}} {{lastName}}',
        '{{prefix}} {{firstName}} {{lastName}}',
        '{{prefix}} {{firstName}} {{firstName}} {{lastName}}',
        '{{prefix}} {{firstName}} {{lastName}} {{lastName}}',
        '{{firstName}} {{lastName}} {{suffix}}',
        '{{firstName}} {{firstName}} {{lastName}} {{suffix}}',
        '{{firstName}} {{lastName}} {{lastName}} {{suffix}}',
        '{{prefix}} {{firstName}} {{lastName}} {{suffix}}',
        '{{prefix}} {{firstName}} {{firstName}} {{lastName}} {{suffix}}',
        '{{prefix}} {{firstName}} {{lastName}} {{lastName}} {{suffix}}'
    );

    protected static $firstName = array(
        'Aaron', 'Abgail', 'Abril', 'Adriana', 'Adriano', 'Agustina',
        'Agostinho', 'Alan', 'Alessandra', 'Alexa', 'Alexandre', 'Allison',
        'Alma', 'Alonso', 'Amanda', 'Amélia', 'Ana', 'Anderson', 'Andrea',
        'Andres', 'Antonieta', 'Antônio', 'Ariadna', 'Ariana', 'Ashley',
        'Beatriz', 'Benjamin', 'Bianca', 'Bruno', 'Camila', 'Camilo', 'Carla',
        'Carlos', 'Carolina', 'Catarina', 'Christian', 'Christopher', 'Clara',
        'Constância', 'Cristóvão', 'Daniel', 'Daniela', 'Dante', 'David',
        'Demian', 'Diego', 'Eduardo', 'Elizabeth', 'Elias', 'Emília', 'Emílio',
        'Emiliano', 'Emanuel', 'Estêvão', 'Evandro', 'Everton', 'Fabiana',
        'Fábio', 'Felipe', 'Fernando', 'Francisco', 'Franco', 'Fátima',
        'Gabriel', 'Gabriela', 'Gian', 'Giovana', 'Giovane', 'Guilherme',
        'Gustavo', 'Helena', 'Henrique', 'Hernani', 'Horácio', 'Hortência',
        'Hugo', 'Ian', 'Inácio', 'Irene', 'Isaac', 'Isabel', 'Isabella',
        'Isadora', 'Ivan', 'Ivana', 'Jácomo', 'Jasmin', 'Jerônimo', 'João',
        'Joaquin', 'Jorge', 'José', 'Josefina', 'Josué', 'Joana','Júlia',
        'Juliana', 'Julieta', 'Ketlin', 'Kevin', 'Laura', 'Leandro',
        'Leonardo', 'Luana', 'Lucas', 'Luciana', 'Luciano', 'Luis','Luna',
        'Luara', 'Luzia', 'Madalena', 'Maitê', 'Malena', 'Manuel', 'Manuela',
        'Mariana', 'Mário', 'Martinho', 'Mateus', 'Matias', 'Maximiano', 'Mel',
        'Melissa', 'Micaela', 'Michele', 'Miguel', 'Miranda', 'Máximo','Mia',
        'Nádia', 'Natal', 'Natália', 'Nicole', 'Noel', 'Noelí', 'Norma',
        'Olívia', 'Ornela', 'Pablo', 'Pâmela', 'Paula', 'Paulina', 'Paulo',
        'Pedro', 'Rafael', 'Rafaela', 'Rebeca', 'Regina', 'Renata', 'Ricardo',
        'Rodrigo', 'Sabrina', 'Salomé', 'Samanta', 'Samuel', 'Santiago',
        'Sara', 'Sebastião','Sérgio', 'Silvana', 'Simão', 'Simon', 'Sofia',
        'Sophie', 'Suzana', 'Tábata', 'Taís', 'Teobaldo', 'Tessália', 'Thales',
        'Thalissa', 'Thiago', 'Tomás', 'Valentina', 'Valentin', 'Valéria',
        'Vicente', 'Vitória', 'Violeta', 'Ziraldo',
    );

    protected static $lastName = array(
        'Abreu', 'Azevedo', 'Aguiar', 'Aragão', 'Assunção', 'Aranda', 'Ávila',
        'Balestero', 'Barreto', 'Barros', 'Batista', 'Bezerra', 'Beltrão',
        'Benites', 'Bittencourt', 'Branco', 'Bonilha', 'Brito', 'Burgos',
        'Caldeira', 'Camacho', 'Campos', 'Carmona', 'Carrara', 'Casanova',
        'Chaves', 'Cervantes', 'Colaço', 'Cordeiro', 'Corona', 'Correia',
        'Cortês', 'Cruz', 'D\'ávila', 'Delatorre', 'Delgado', 'Delvalle',
        'Dias', 'Domingues', 'Dominato', 'Duarte', 'Escobar', 'Espinoza',
        'Esteves', 'Estrada', 'Faria', 'Faro', 'Feliciano', 'Ferminiano',
        'Fernandes', 'Ferraz', 'Ferreira', 'Fidalgo', 'Furtado',
        'Ferreira', 'Flores', 'Fonseca', 'Franco', 'Fontes', 'Galindo',
        'Galhardo', 'Galvão', 'Garcia', 'Gil', 'Godói', 'Gomes', 'Gonçalves',
        'Grego', 'Guerra', 'Gusmão', 'Jimenes', 'Leal', 'Leon', 'Lira',
        'Lovato', 'Lozano', 'Lutero', 'Madeira', 'Maldonado', 'Marés', 'Marin',
        'Marinho', 'Marques', 'Martines', 'Mascarenhas', 'Matias', 'Matos',
        'Maia', 'Medina', 'Meireles', 'Mendes', 'Mendonça', 'Molina',
        'Montenegro', 'Neves', 'Oliveira', 'Ortega', 'Ortiz', 'Quintana',
        'Queirós',  'Pacheco', 'Padilha', 'Padrão', 'Paes', 'Paz', 'Pedrosa',
        'Pena', 'Pereira', 'Perez', 'Prado', 'Pontes', 'Quintana', 'Queirós',
        'Ramires', 'Ramos', 'Rangel', 'Rezende', 'Reis', 'Rico', 'Rios',
        'Rivera', 'Rocha', 'Rodrigues', 'Romero', 'Roque', 'Rosa', 'Salas',
        'Salazar', 'Sales', 'Salgado', 'Sanches', 'Sandoval', 'Santacruz',
        'Santana', 'Santiago', 'Saraiva', 'Sepúlveda', 'Serna', 'Serra',
        'Serrano', 'Soares', 'Solano', 'Soto', 'Tamoio', 'Teles', 'Toledo',
        'Torres', 'Uchoa', 'Urias', 'Valdez', 'Valência', 'Valentin', 'Vale',
        'Vasques', 'Vega', 'Velasques', 'Verdugo', 'Verdara', 'Vieira', 'Vila',
        'Zamana', 'Zambrano', 'Zaragoça', 'da Cruz', 'da Rosa', 'da Silva',
        'das Dores', 'das Neves', 'de Aguiar', 'de Oliveira', 'de Souza'
    );

    private static $prefix = array('Sr.','Sra.','Srta.','Dr.',);

    private static $suffix = array('Filho', 'Neto', 'Sobrinho', 'Jr.');

    /**
     * @example 'Sra.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }

    /**
     * @example 'Jr.'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
