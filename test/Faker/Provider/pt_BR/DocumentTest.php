<?php

namespace Faker\Test\Provider\pt_BR;

use Faker\Provider\pt_BR\Document;

class DocumentTest extends \PHPUnit_Framework_TestCase
{

    public function testValidCpfNumbersOnly()
    {
        $this->assertEquals(strlen(Document::cpf()), 11);
    }

    public function testValidCpfFormatted()
    {
        $this->assertEquals(strlen(Document::cpf(false)), 14);
    }

    public function testValidCnpjNumbersOnly()
    {
        $this->assertEquals(strlen(Document::cnpj()), 14);
    }

    public function testValidCnpjFormatted()
    {
        $this->assertEquals(strlen(Document::cnpj(false)), 18);
    }

    public function testValidRgNumbersOnly()
    {
        $this->assertEquals(strlen(Document::rg()), 9);
    }

    public function testValidRgFormatted()
    {
        $this->assertEquals(strlen(Document::rg(false)), 12);
    }
}
