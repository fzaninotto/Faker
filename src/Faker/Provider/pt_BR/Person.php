<?php

namespace Faker\Provider\pt_BR;

require_once "check_digit.php";

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
        '{{firstNameMale}} {{lastName}} {{lastName}} {{suffix}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
        '{{titleMale}} {{firstNameMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{lastName}} {{suffix}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{lastName}} {{suffix}}',
    );

    protected static $firstNameMale = array(
        'Aaron', 'Adriano', 'Alan', 'Alexandre', 'Alonso', 'Anderson', 'Andres', 'Antônio', 'Benedito', 'Benjamin', 'Bruno', 'Camilo', 'Carlos', 'Christian',
        'Christopher', 'Cláudio', 'Cristóvão', 'Daniel', 'Danilo', 'Dante', 'David', 'Diego', 'Eduardo', 'Edson', 'Elias', 'Emanuel', 'Emiliano', 'Enzo', 'Emílio', 'Estêvão',
        'Evandro', 'Everton', 'Felipe', 'Fernando', 'Francisco', 'Franco', 'Fábio', 'Gabriel', 'Gian', 'Guilherme', 'Gustavo', 'Henrique',
        'Hernani', 'Horácio', 'Hugo', 'Ian', 'Inácio', 'Isaac', 'Ivan', 'Jerônimo', 'Joaquin', 'João', 'Jorge', 'Josué', 'José',
        'João', 'Kevin', 'Leandro', 'Leonardo', 'Luan', 'Lucas', 'Luciano', 'Luis', 'Manuel', 'Mateus', 'Matias', 'Miguel', 'Márcio', 'Mário', 'Maurício',
        'Máximo', 'Nero', 'Noel', 'Pablo', 'Paulo', 'Pedro', 'Rafael', 'Renato', 'Ricardo', 'Roberto', 'Rodrigo', 'Rogério', 'Ronaldo', 'Samuel', 'Santiago', 'Simon', 'Sérgio',
        'Thales', 'Thiago', 'Tomás', 'Valentin', 'Vicente', 'Agostinho', 'Demian', 'Giovane', 'Jácomo', 'Martinho', 'Maximiano', 'Natal', 'Sebastião',
        'Simão', 'Teobaldo', 'Ziraldo'
    );

    protected static $firstNameFemale = array(
        'Abril', 'Adriana', 'Agustina', 'Alessandra', 'Alexa', 'Allison', 'Alma', 'Amanda', 'Amélia', 'Ana', 'Andrea', 'Antonieta', 'Aparecida',
        'Ariana', 'Ariana', 'Beatriz', 'Bianca', 'Camila', 'Carla', 'Carolina', 'Catarina', 'Clara', 'Daniela', 'Daniele', 'Dirce', 'Elizabeth', 'Emília',
        'Fabiana', 'Fátima', 'Gabriela', 'Gisela', 'Gisele', 'Giovana', 'Helena', 'Irene', 'Isabel', 'Isabella', 'Isadora', 'Ivana', 'Jasmin', 'Jéssica', 'Joana',
        'Josefina', 'Juliana', 'Juliane', 'Julieta', 'Júlia', 'Ketlin', 'Laura', 'Luana', 'Luara', 'Luciana', 'Luna', 'Luzia', 'Madalena',
        'Maitê', 'Malena', 'Manuela', 'Marcia', 'Maria', 'Mariana', 'Marília', 'Marta', 'Mel', 'Melissa', 'Mia', 'Micaela', 'Michele', 'Miranda', 'Natália', 'Nicole',
        'Noelí', 'Norma', 'Nádia', 'Olívia', 'Olga', 'Ornela', 'Paula', 'Paulina', 'Pâmela', 'Rafaela', 'Rebeca', 'Regina', 'Renata',
        'Sabrina', 'Salomé', 'Samanta', 'Sara', 'Silvana', 'Sofia', 'Sônia', 'Sophie', 'Suzana', 'Taís', 'Tábata', 'Valentina', 'Valéria',
        'Vanessa', 'Violeta', 'Vitória', 'Abgail', 'Constância', 'Hortência', 'Tatiane', 'Tessália', 'Thalissa'
    );

    protected static $lastName = array(
        'Abreu', 'Aguiar', 'Amaral', 'Alves', 'Alcantara', 'Assunção', 'Aragão', 'Aranda', 'de Arruda', 'Ávila', 'Azevedo',
        'Balestero', 'Barreto', 'Barros', 'Batista', 'Bezerra', 'Benez', 'Beltrão',
        'Benites', 'Bittencourt', 'Branco', 'Bonilha', 'Brito', 'Burgos',
        'Caldeira', 'Camacho', 'Campos', 'Carmona', 'Carrara', 'Carvalho', 'Casanova',
        'Chaves', 'Cervantes', 'Colaço', 'Cordeiro', 'Corona', 'Correia',
        'Cortês', 'Cruz', 'D\'ávila', 'Delatorre', 'Delgado', 'Delvalle', 'Deverso',
        'Dias', 'Domingues', 'Dominato', 'Duarte', 'Escobar', 'Espinoza',
        'Esteves', 'Estrada', 'Faria', 'Faro', 'Feliciano', 'Ferminiano',
        'Fernandes', 'Ferraz', 'Ferreira', 'Fidalgo', 'Furtado',
        'Ferreira', 'Flores', 'Fonseca', 'Franco', 'de Freitas', 'Fontes', 'Galindo',
        'Galhardo', 'Galvão', 'Garcia', 'Gil', 'Godói', 'Gomes', 'Gonçalves',
        'Grego', 'Guerra', 'Gusmão', 'Jimenes', 'Leal', 'Leon', 'Lira', 'Lourenço',
        'Lovato', 'Lozano', 'Lutero', 'Madeira', 'Maldonado', 'Marés', 'Marin',
        'Marinho', 'Marques', 'Martines', 'Mascarenhas', 'Matias', 'Matos',
        'Maia', 'Medina', 'Meireles', 'Mendes', 'Mendonça', 'Molina',
        'Montenegro', 'Neves', 'Oliveira', 'Ortega', 'Ortiz', 'Quintana',
        'Queirós',  'Pacheco', 'Padilha', 'Padrão', 'Paes', 'Paz', 'Pedrosa',
        'Pena', 'Pereira', 'Perez', 'Prado', 'Pontes', 'Quintana', 'Queirós',
        'Ramires', 'Ramos', 'Rangel', 'Rezende', 'Reis', 'Rico', 'Rios',
        'Rivera', 'Rocha', 'Rodrigues', 'Romero', 'Roque', 'Rosa', 'Saito', 'Salas',
        'Salazar', 'Sales', 'Salgado', 'Sanches', 'Sandoval', 'Santacruz',
        'Santana', 'Santiago', 'Santos', 'Saraiva', 'Sepúlveda', 'Serna', 'Serra',
        'Serrano', 'Soares', 'Solano', 'Soto', 'Souza', 'Tamoio', 'Teles', 'Toledo',
        'Torres', 'Uchoa', 'Urias', 'Valdez', 'Valência', 'Valente', 'Valentin', 'Vale',
        'Vasques', 'Vega', 'Velasques', 'Verdugo', 'Verdara', 'Vieira', 'Vila',
        'Zamana', 'Zambrano', 'Zaragoça', 'da Cruz', 'da Rosa', 'da Silva',
        'das Dores', 'das Neves', 'de Aguiar', 'de Oliveira', 'de Souza'
    );

    protected static $titleMale = array('Sr.', 'Dr.',);

    protected static $titleFemale = array('Sra.', 'Srta.', 'Dr.',);

    protected static $suffix = array('Filho', 'Neto', 'Sobrinho', 'Jr.');

    /**
     * @example 'Jr.'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }

    /**
     * A random CPF number.
     * @link http://en.wikipedia.org/wiki/Cadastro_de_Pessoas_F%C3%ADsicas
     * @param bool $formatted If the number should have dots/dashes or not.
     * @return string
     */
    public function cpf($formatted = true)
    {
        $n = $this->generator->numerify('#########');
        $n .= check_digit($n);
        $n .= check_digit($n);

        return $formatted? vsprintf('%d%d%d.%d%d%d.%d%d%d-%d%d', str_split($n)) : $n;
    }

    /**
     * A random RG number, following Sao Paulo state's rules.
     * @link http://pt.wikipedia.org/wiki/C%C3%A9dula_de_identidade
     * @param bool $formatted If the number should have dots/dashes or not.
     * @return string
     */
    public function rg($formatted = true)
    {
        $n = $this->generator->numerify('########');
        $n .= check_digit($n);

        return $formatted? vsprintf('%d%d.%d%d%d.%d%d%d-%s', str_split($n)) : $n;
    }
}
