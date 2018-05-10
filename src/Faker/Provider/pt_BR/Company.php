<?php

namespace Faker\Provider\pt_BR;

require_once "check_digit.php";

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}} e {{lastName}}',
        '{{lastName}} e {{lastName}} {{companySuffix}}',
        '{{lastName}} Comercial Ltda.'
    );

    protected static $jobTitleFormat = array(
        'Agente imobiliário', 'Agente penitenciário', 'Agricultor', 'Analista de pesquisa de mercado', 'Analistas de sistemas da computação',
        'Assistente Jurídico', 'Assistente social', 'Astrônomo', 'Ator', 'Atuário', 'Açougueiro', 'Bombeiro', 'Caixa', 'Caixa de banco',
        'Carpinteiro', 'Carteiro', 'Comissário de voo', 'Comprador', 'Consultor de gestão', 'Consultor financeiro', 'Contador',
        'Controlador de tráfego aéreo', 'Costureira / Alfaiate', 'DJ', 'Dentista', 'Dermatologista', 'Desenvolvedor de web',
        'Designer de Moda', 'Doméstica', 'Editor de jornais e revistas', 'Engenheiro ambiental', 'Engenheiro biomédico',
        'Engenheiro civil', 'Engenheiro de operações', 'Engenheiro de petróleo', 'Engenheiro de software', 'Escritor', 'Estatístico',
        'Estoquista', 'Executivo sênior', 'Farmacêutico', 'Faxineiro', 'Fisiologista', 'Fisioterapeuta', 'Fonoaudiólogo', 'Fotojornalista',
        'Fotógrafo', 'Físico', 'Garçom / Garçonete', 'Gerente de hotel', 'Gerente de mídias sociais', 'Gerente de recursos humanos',
        'Geólogo', 'Higienista dental', 'Historiador', 'Instalador de carpetes', 'Lavador de pratos', 'Leiteiro', 'Leitor de água e luz',
        'Lenhador', 'Lixeiro', 'Logístico', 'Marinheiro', 'Matemático', 'Meteorologista', 'Militar', 'Motorista de ônibus', 'Médico (Clínico geral)',
        'Médico assistente', 'Médico veterinário', 'Nutricionista', 'Oculista', 'Oficial de liberdade condicional', 'Operário da construção civil',
        'Optometrista', 'Ortodontista', 'Otorrinolaringologista', 'Pintor', 'Podólogo', 'Policial', 'Preparador de imposto',
        'Professor universitário', 'Programador de computador', 'Psiquiatra', 'Quiroprático', 'Radialista', 'Recebedor de mercadorias',
        'Reparador de equipamentos elétricos', 'Reparador de máquina industrial', 'Repórter', 'Serralheiro', 'Sociólogo', 'Soldado',
        'Terapeuta ocupacional', 'Terapeuta respiratório', 'Trabalhador da indústria automotiva', 'Trabalhador de precisão',
        'Trabalhador de refinaria de petróleo', 'Técnico de Engenharia', 'Técnico de registros médicos',
    );

    protected static $companySuffix = array('e Filhos', 'e Associados', 'Ltda.', 'S.A.');

    /**
     * A random CNPJ number.
     * @link http://en.wikipedia.org/wiki/CNPJ
     * @param bool $formatted If the number should have dots/slashes/dashes or not.
     * @return string
     */
    public function cnpj($formatted = true)
    {
        $n = $this->generator->numerify('########0001');
        $n .= check_digit($n);
        $n .= check_digit($n);

        return $formatted? vsprintf('%d%d.%d%d%d.%d%d%d/%d%d%d%d-%d%d', str_split($n)) : $n;
    }
}
