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
        'Adriano', 'Alan', 'Alessandro', 'Alexandre', 'Anderson', 'André', 'Antônio', 'Arthur', 'Augusto', 'Bernardo', 'Breno', 'Bruno',
        'Caio', 'Carlos', 'Celso', 'César', 'Cláudio', 'Daniel', 'Danilo', 'Davi', 'David', 'Diego', 'Diogo', 'Douglas', 'Eduardo', 'Elias',
        'Erick', 'Evandro', 'Everton', 'Fabiano', 'Fábio', 'Felipe', 'Fernando', 'Francisco', 'Frederico', 'Gabriel', 'Gilberto', 'Giovane',
        'Guilherme', 'Gustavo', 'Heitor', 'Henrique', 'Hugo', 'Igor', 'Itamar', 'Ivan', 'Jean', 'João', 'Joaquim', 'Jonas', 'Jorge', 'José',
        'Josué', 'Juliano', 'Júlio', 'Leandro', 'Leonardo', 'Lorenzo', 'Luan', 'Lucas', 'Luciano', 'Luis', 'Manoel', 'Marcelo', 'Márcio',
        'Marcus', 'Mário', 'Marlon', 'Mateus', 'Matheus', 'Mathias', 'Matias', 'Mauro', 'Michel', 'Miguel', 'Murilo', 'Nicolas', 'Otávio',
        'Pablo', 'Paulo', 'Pedro', 'Rafael', 'Raul', 'Renan', 'Renato', 'Ricardo', 'Rodrigo', 'Samuel', 'Sebastião', 'Sérgio', 'Simão',
        'Thales', 'Theo', 'Thiago', 'Thomas', 'Tomás', 'Ulisses', 'Valdir', 'Vicente', 'Victor', 'Vinícius', 'William', 'Yuri'
    );

    protected static $firstNameFemale = array(
        'Adriana', 'Alessandra', 'Alice', 'Aline', 'Amanda', 'Ana', 'Andressa', 'Bárbara', 'Beatriz', 'Bianca', 'Bruna', 'Camila', 'Carina',
        'Carla', 'Carolina', 'Catarina', 'Cecília', 'Cíntia', 'Clara', 'Clarice', 'Daniela', 'Débora', 'Eduarda', 'Elisa', 'Fernanda',
        'Flávia', 'Gabriela', 'Giovanna', 'Helena', 'Heloísa', 'Isabel', 'Isabella', 'Isadora', 'Jaqueline', 'Joana', 'Joyce', 'Júlia',
        'Juliana', 'Laila', 'Laís', 'Lara', 'Larissa', 'Laura', 'Letícia', 'Lívia', 'Lorena', 'Louise', 'Luana', 'Luciana', 'Luiza', 'Maitê',
        'Malu', 'Manuela', 'Marcela', 'Maria', 'Clara', 'Eduarda', 'Fernanda', 'Júlia', 'Laura', 'Mariana', 'Marília', 'Marina', 'Melissa',
        'Michelle', 'Milena', 'Mirella', 'Mônica', 'Natália', 'Nicole', 'Olívia', 'Paloma', 'Patrícia', 'Paula', 'Priscila', 'Rafaela',
        'Rebeca', 'Renata', 'Roberta', 'Sandra', 'Sophia', 'Stella', 'Tatiane', 'Thalita', 'Valentina', 'Vanessa', 'Vitória', 'Viviane',
        'Yasmin'
    );

    protected static $lastName = array(
        'Abreu', 'Aguiar', 'Almeida', 'Alves', 'Amaral', 'Andrade', 'Antunes', 'Aragão', 'Assunção', 'Ávila', 'Azevedo', 'Barbosa',
        'Barreto', 'Barros', 'Batista', 'Beltrão', 'Bezerra', 'Bittencourt', 'Borges', 'Braga', 'Brandão', 'Brito', 'Campos', 'Cardoso',
        'Carrara', 'Carvalho', 'Chaves', 'Cordeiro', 'Correia', 'Cortês', 'Costa', 'Cruz', 'Cunha', 'da Costa', 'da Cruz', 'da Silva',
        'da Silveira', 'das Dores', 'das Neves', 'de Aguiar', 'de Alencar', 'de Almeida', 'de Azevedo', 'de Barros', 'de Camargo',
        'de Carvalho', 'de Faria', 'de Figueiredo', 'de Freitas', 'de Medeiros', 'de Melo', 'de Mendonçaa', 'de Moraes', 'de Oliveira',
        'de Paula', 'de Rezende', 'de Souza', 'de Toledo', 'Delgado', 'Dias', 'do Nascimento', 'Domingues', 'dos Santos', 'Duarte',
        'Faria', 'Feliciano', 'Fernandes', 'Ferraz', 'Ferreira', 'Fonseca', 'Fontes', 'Frota', 'Furtado', 'Galvão', 'Garcia', 'Gomes',
        'Gonçalves', 'Gouvêia', 'Guerra', 'Guimarães', 'Gusmão', 'Leite', 'Lemos', 'Lima', 'Lopes', 'Lovato', 'Lutero', 'Machado', 'Maia',
        'Marinho', 'Marques', 'Martins', 'Mascarenhas', 'Matias', 'Matos', 'Medeiros', 'Medina', 'Meireles', 'Mendes', 'Mendonça',
        'Menezes', 'Mesquita', 'Miranda', 'Molina', 'Monteiro', 'Moreira', 'Moura', 'Neves', 'Oliveira', 'Pacheco', 'Padilha', 'Paes',
        'Paz', 'Peixoto', 'Pena', 'Penedo', 'Pereira', 'Perez', 'Pinheiro', 'Pinto', 'Pires', 'Pontes', 'Prado', 'Queiroz', 'Ramos',
        'Reis', 'Rezende', 'Ribeiro', 'Rocha', 'Rodrigues', 'Rossi', 'Sales', 'Salgado', 'Sampaio', 'Santana', 'Saraiva', 'Serrano',
        'Siqueira', 'Soares', 'Tamoio', 'Tavares', 'Teixeira', 'Toledo', 'Torres', 'Veloso', 'Viana', 'Vieira', 'Villela'
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
