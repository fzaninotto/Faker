<?php

namespace Faker\Provider;

use Faker\Generator;
use Faker\UniqueGenerator;

class HtmlLorem extends Base
{

    const HTML_TAG = "html";
    const HEAD_TAG = "head";
    const BODY_TAG = "body";
    const DIV_TAG = "div";
    const P_TAG = "p";
    const A_TAG = "a";
    const SPAN_TAG = "span";
    const TABLE_TAG = "table";
    const THEAD_TAG = "thead";
    const TBODY_TAG = "tbody";
    const TR_TAG = "tr";
    const TD_TAG = "td";
    const TH_TAG = "th";
    const UL_TAG = "ul";
    const LI_TAG = "li";
    const H_TAG = "h";
    const B_TAG = "b";
    const I_TAG = "i";
    const TITLE_TAG = "title";
    const FORM_TAG = "form";
    const INPUT_TAG = "input";
    const LABEL_TAG = "label";

    private $idGenerator;

    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
        $generator->addProvider(new Lorem($generator));
        $generator->addProvider(new Internet($generator));
    }

    /**
     * @param integer $maxDepth
     * @param integer $maxWidth
     *
     * @return string
     */
    public function randomHtml($maxDepth = 4, $maxWidth = 4)
    {
        $document = new \DOMDocument();
        $this->idGenerator = new UniqueGenerator($this->generator);

        $head = $document->createElement("head");
        $this->addRandomTitle($head);

        $body = $document->createElement("body");
        $this->addLoginForm($body);
        $this->addRandomSubTree($body, $maxDepth, $maxWidth);

        $html = $document->createElement("html");
        $html->appendChild($head);
        $html->appendChild($body);

        $document->appendChild($html);
        return $document->saveHTML();
    }

    private function addRandomSubTree(\DOMElement $root, $maxDepth, $maxWidth)
    {
        $maxDepth--;
        if ($maxDepth <= 0) {
            return $root;
        }

        $siblings = mt_rand(1, $maxWidth);
        for ($i = 0; $i < $siblings; $i++) {
            if ($maxDepth == 1) {
                $this->addRandomLeaf($root);
            } else {
                $sibling = $root->ownerDocument->createElement("div");
                $root->appendChild($sibling);
                $this->addRandomAttribute($sibling);
                $this->addRandomSubTree($sibling, mt_rand(0, $maxDepth), $maxWidth);
            }
        }
        return $root;
    }

    private function addRandomLeaf(\DOMElement $node)
    {
        $rand = mt_rand(1, 10);
        switch ($rand) {
            case 1:
                $this->addRandomP($node);
                break;
            case 2:
                $this->addRandomA($node);
                break;
            case 3:
                $this->addRandomSpan($node);
                break;
            case 4:
                $this->addRandomUL($node);
                break;
            case 5:
                $this->addRandomH($node);
                break;
            case 6:
                $this->addRandomB($node);
                break;
            case 7:
                $this->addRandomI($node);
                break;
            case 8:
                $this->addRandomTable($node);
                break;
            default:
                $this->addRandomText($node);
                break;
        }
    }

    private function addRandomAttribute(\DOMElement $node)
    {
        $rand = mt_rand(1, 2);
        switch ($rand) {
            case 1:
                $node->setAttribute("class", $this->generator->word);
                break;
            case 2:
                $node->setAttribute("id", (string)$this->idGenerator->randomNumber(5));
                break;
        }
    }

    private function addRandomP(\DOMElement $element, $maxLength = 10)
    {

        $node = $element->ownerDocument->createElement(static::P_TAG);
        $node->textContent = $this->generator->sentence(mt_rand(1, $maxLength));
        $element->appendChild($node);
    }

    private function addRandomText(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $element->appendChild($text);
    }

    private function addRandomA(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(static::A_TAG);
        $node->setAttribute("href", $this->generator->safeEmailDomain);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private function addRandomTitle(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(static::TITLE_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private function addRandomH(\DOMElement $element, $maxLength = 10)
    {
        $h = static::H_TAG . (string)mt_rand(1, 3);
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement($h);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private function addRandomB(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(static::B_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private function addRandomI(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(static::I_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private function addRandomSpan(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(static::SPAN_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private function addLoginForm(\DOMElement $element)
    {

        $textInput = $element->ownerDocument->createElement(static::INPUT_TAG);
        $textInput->setAttribute("type", "text");
        $textInput->setAttribute("id", "username");

        $textLabel = $element->ownerDocument->createElement(static::LABEL_TAG);
        $textLabel->setAttribute("for", "username");
        $textLabel->textContent = $this->generator->word;

        $passwordInput = $element->ownerDocument->createElement(static::INPUT_TAG);
        $passwordInput->setAttribute("type", "password");
        $passwordInput->setAttribute("id", "password");

        $passwordLabel = $element->ownerDocument->createElement(static::LABEL_TAG);
        $passwordLabel->setAttribute("for", "password");
        $passwordLabel->textContent = $this->generator->word;

        $submit = $element->ownerDocument->createElement(static::INPUT_TAG);
        $submit->setAttribute("type", "submit");
        $submit->setAttribute("value", $this->generator->word);

        $submit = $element->ownerDocument->createElement(static::FORM_TAG);
        $submit->setAttribute("action", $this->generator->safeEmailDomain);
        $submit->setAttribute("method", "POST");
        $submit->appendChild($textLabel);
        $submit->appendChild($textInput);
        $submit->appendChild($passwordLabel);
        $submit->appendChild($passwordInput);
        $element->appendChild($submit);
    }

    private function addRandomTable(\DOMElement $element, $maxRows = 10, $maxCols = 6, $maxTitle = 4, $maxLength = 10)
    {
        $rows = mt_rand(1, $maxRows);
        $cols = mt_rand(1, $maxCols);

        $table = $element->ownerDocument->createElement(static::TABLE_TAG);
        $thead = $element->ownerDocument->createElement(static::THEAD_TAG);
        $tbody = $element->ownerDocument->createElement(static::TBODY_TAG);

        $table->appendChild($thead);
        $table->appendChild($tbody);

        $tr = $element->ownerDocument->createElement(static::TR_TAG);
        $thead->appendChild($tr);
        for ($i = 0; $i < $cols; $i++) {
            $th = $element->ownerDocument->createElement(static::TH_TAG);
            $th->textContent = $this->generator->sentence(mt_rand(1, $maxTitle));
            $tr->appendChild($th);
        }
        for ($i = 0; $i < $rows; $i++) {
            $tr = $element->ownerDocument->createElement(static::TR_TAG);
            $tbody->appendChild($tr);
            for ($j = 0; $j < $cols; $j++) {
                $th = $element->ownerDocument->createElement(static::TD_TAG);
                $th->textContent = $this->generator->sentence(mt_rand(1, $maxLength));
                $tr->appendChild($th);
            }
        }
        $element->appendChild($table);
    }

    private function addRandomUL(\DOMElement $element, $maxItems = 11, $maxLength = 4)
    {
        $num = mt_rand(1, $maxItems);
        $ul = $element->ownerDocument->createElement(static::UL_TAG);
        for ($i = 0; $i < $num; $i++) {
            $li = $element->ownerDocument->createElement(static::LI_TAG);
            $li->textContent = $this->generator->sentence(mt_rand(1, $maxLength));
            $ul->appendChild($li);
        }
        $element->appendChild($ul);
    }
}
