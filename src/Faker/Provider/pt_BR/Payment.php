<?php

namespace Faker\Provider\pt_BR;

class Payment extends \Faker\Provider\Payment
{
    /**
     * @var array list of Brazilian banks, source: http://www.febraban.org.br/bancos.asp
     */
    protected static $banks = array(
        '246' => 'Banco ABC Brasil S.A.',
        '075' => 'Banco ABN AMRO S.A.',
        '025' => 'Banco Alfa S.A.',
        '641' => 'Banco Alvorada S.A.',
        '065' => 'Banco Andbank (Brasil) S.A.',
        '024' => 'Banco BANDEPE S.A.',
        '740' => 'Banco Barclays S.A.',
        '107' => 'Banco BBM S.A.',
        '096' => 'Banco BM&FBOVESPA de Serviços de Liquidação e Custódia S.A',
        '318' => 'Banco BMG S.A.',
        '752' => 'Banco BNP Paribas Brasil S.A.',
        '248' => 'Banco Boavista Interatlântico S.A.',
        '169' => 'Banco Bonsucesso Consignado S.A.',
        '218' => 'Banco Bonsucesso S.A.',
        '063' => 'Banco Bradescard S.A.',
        '036' => 'Banco Bradesco BBI S.A.',
        '204' => 'Banco Bradesco Cartões S.A.',
        '394' => 'Banco Bradesco Financiamentos S.A.',
        '237' => 'Banco Bradesco S.A.',
        '208' => 'Banco BTG Pactual S.A.',
        '263' => 'Banco Cacique S.A.',
        '473' => 'Banco Caixa Geral - Brasil S.A.',
        '040' => 'Banco Cargill S.A.',
        '739' => 'Banco Cetelem S.A.',
        '233' => 'Banco Cifra S.A.',
        '745' => 'Banco Citibank S.A.',
        '095' => 'Banco Confidence de Câmbio S.A.',
        '756' => 'Banco Cooperativo do Brasil S.A. - BANCOOB',
        '748' => 'Banco Cooperativo Sicredi S.A.',
        '222' => 'Banco Credit Agricole Brasil S.A.',
        '505' => 'Banco Credit Suisse (Brasil) S.A.',
        '003' => 'Banco da Amazônia S.A.',
        '083' => 'Banco da China Brasil S.A.',
        '707' => 'Banco Daycoval S.A.',
        '456' => 'Banco de Tokyo-Mitsubishi UFJ Brasil S.A.',
        '001' => 'Banco do Brasil S.A.',
        '047' => 'Banco do Estado de Sergipe S.A.',
        '037' => 'Banco do Estado do Pará S.A.',
        '041' => 'Banco do Estado do Rio Grande do Sul S.A.',
        '004' => 'Banco do Nordeste do Brasil S.A.',
        '265' => 'Banco Fator S.A.',
        '224' => 'Banco Fibra S.A.',
        '626' => 'Banco Ficsa S.A.',
        '612' => 'Banco Guanabara S.A.',
        '012' => 'Banco INBURSA de Investimentos S.A.',
        '604' => 'Banco Industrial do Brasil S.A.',
        '653' => 'Banco Indusval S.A.',
        '077' => 'Banco Intermedium S.A.',
        '249' => 'Banco Investcred Unibanco S.A.',
        '184' => 'Banco Itaú BBA S.A.',
        '029' => 'Banco Itaú BMG Consignado S.A.',
        '479' => 'Banco ItauBank S.A',
        '376' => 'Banco J. P. Morgan S.A.',
        '074' => 'Banco J. Safra S.A.',
        '217' => 'Banco John Deere S.A.',
        '600' => 'Banco Luso Brasileiro S.A.',
        '389' => 'Banco Mercantil do Brasil S.A.',
        '370' => 'Banco Mizuho do Brasil S.A.',
        '746' => 'Banco Modal S.A.',
        '212' => 'Banco Original S.A.',
        '623' => 'Banco PAN S.A.',
        '611' => 'Banco Paulista S.A.',
        '094' => 'Banco Petra S.A.',
        '643' => 'Banco Pine S.A.',
        '747' => 'Banco Rabobank International Brasil S.A.',
        '633' => 'Banco Rendimento S.A.',
        '120' => 'Banco Rodobens S.A.',
        '422' => 'Banco Safra S.A.',
        '033' => 'Banco Santander (Brasil) S.A.',
        '366' => 'Banco Société Générale Brasil S.A.',
        '464' => 'Banco Sumitomo Mitsui Brasileiro S.A.',
        '082' => 'Banco Topázio S.A.',
        '634' => 'Banco Triângulo S.A.',
        '655' => 'Banco Votorantim S.A.',
        '610' => 'Banco VR S.A.',
        '119' => 'Banco Western Union do Brasil S.A.',
        '021' => 'BANESTES S.A. Banco do Estado do Espírito Santo',
        '719' => 'Banif-Banco Internacional do Funchal (Brasil)S.A.',
        '755' => 'Bank of America Merrill Lynch Banco Múltiplo S.A.',
        '081' => 'BBN Banco Brasileiro de Negócios S.A.',
        '250' => 'BCV - Banco de Crédito e Varejo S.A.',
        '017' => 'BNY Mellon Banco S.A.',
        '069' => 'BPN Brasil Banco Múltiplo S.A.',
        '125' => 'Brasil Plural S.A. - Banco Múltiplo',
        '070' => 'BRB - Banco de Brasília S.A.',
        '104' => 'Caixa Econômica Federal',
        '320' => 'China Construction Bank (Brasil) Banco Múltiplo S.A.',
        '477' => 'Citibank N.A.',
        '487' => 'Deutsche Bank S.A. - Banco Alemão',
        '064' => 'Goldman Sachs do Brasil Banco Múltiplo S.A.',
        '078' => 'Haitong Banco de Investimento do Brasil S.A.',
        '062' => 'Hipercard Banco Múltiplo S.A.',
        '399' => 'HSBC Bank Brasil S.A. - Banco Múltiplo',
        '492' => 'ING Bank N.V.',
        '652' => 'Itaú Unibanco Holding S.A.',
        '341' => 'Itaú Unibanco S.A.',
        '488' => 'JPMorgan Chase Bank, National Association',
        '128' => 'MS Bank S.A. Banco de Câmbio',
        '254' => 'Paraná Banco S.A.',
        '751' => 'Scotiabank Brasil S.A. Banco Múltiplo',
        '118' => 'Standard Chartered Bank (Brasil) S/A–Bco Invest.',
        '129' => 'UBS Brasil Banco de Investimento S.A.',
    );

    /**
     * @example 'Banco do Brasil'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }

    protected static $cardVendors = array(
        'Visa', 'Visa', 'Visa', 'Visa', 'Visa',
        'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard',
        'American Express', 'Discover Card', 'Diners', 'Elo', 'Hipercard'
    );

    // see https://gist.github.com/erikhenrique/5931368 / http://pt.stackoverflow.com/q/3715/26461
    protected static $cardParams = array(
        'Visa' => array(
            "4##############"
          ),
        'MasterCard' => array(
            "5##############"
        ),
        'American Express' => array(
            "34############",
            "37############"
        ),
        'Discover Card' => array(
            "6011###########",
            "622############",
            "64#############",
            "65#############"
        ),
        'Diners' => array(
            "301############",
            "301##########",
            "305############",
            "305##########",
            "36#############",
            "36###########",
            "38#############",
            "38###########",
        ),
        'Elo' => array(
            "636368#########",
            "438935#########",
            "504175#########",
            "451416#########",
            "636297#########",
            "5067###########",
            "4576###########",
            "4011###########",
        ),
        'Hipercard' => array(
            "38#############",
            "60#############",
        ),
        "Aura" => array(
            "50#############"
        )
    );

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  integer $length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'BR', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
