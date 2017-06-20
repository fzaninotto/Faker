<?php

namespace Faker\Provider;

use Faker\Generator;

class HtmlLorem extends Base
{

    protected static $HTML_TAG = "html";
    protected static $HEAD_TAG = "head";
    protected static $BODY_TAG = "body";
    protected static $DIV_TAG = "div";
    protected static $P_TAG = "p";
    protected static $A_TAG = "a";
    protected static $SPAN_TAG = "span";
    protected static $TABLE_TAG = "table";
    protected static $THEAD_TAG = "thead";
    protected static $TBODY_TAG = "tbody";
    protected static $TR_TAG = "tr";
    protected static $TD_TAG = "td";
    protected static $TH_TAG = "th";
    protected static $UL_TAG = "ul";
    protected static $LI_TAG = "li";
    protected static $H_TAG = "h";
    protected static $B_TAG = "b";
    protected static $I_TAG = "i";
    protected static $TITLE_TAG = "title";
    protected static $FORM_TAG = "form";
    protected static $INPUT_TAG = "input";
    protected static $LABEL_TAG = "label";

    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
        $generator->addProvider(new Lorem($generator));
        $generator->addProvider(new Internet($generator));
    }

    /**
     * @return string
     */
    public function randomHtml($maxDepth = 4, $maxWidth = 4)
    {
        $document = new \DOMDocument();

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

    /**
     * @return string
     */
    public function randomHTMLBody($maxDepth = 4, $maxWidth = 4)
    {
        $document = new \DOMDocument();

        $body = $document->createElement("body");
        $this->addRandomSubTree($body, $maxDepth, $maxWidth);
        $document->appendChild($body);
        return $document->saveHTML();
    }

    /**
     * @return string
     */
    public function randomBodyFragments($maxDepth = 4, $maxWidth = 4)
    {
        $html = $this->randomHTMLBody($maxDepth, $maxWidth);
        $matches = array();
        preg_match("/\<body\>(.*)<\/body\>/", $html, $matches);
        return $matches[1];
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
        };
        return $root;
    }

    private function addRandomLeaf(\DOMElement $node)
    {
        $rand = mt_rand(1, 10);
        switch($rand){
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
            	$randomNumber = $this->generator->randomNumber(5);
                $node->setAttribute("id", (string)$randomNumber);
                break;
        }
    }

    private function addRandomP(\DOMElement $element, $maxLength = 10)
    {

        $node = $element->ownerDocument->createElement(HtmlLorem::$P_TAG);
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
        $node = $element->ownerDocument->createElement(HtmlLorem::$A_TAG);
        $node->setAttribute("href", $this->generator->safeEmailDomain);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private function addRandomTitle(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(HtmlLorem::$TITLE_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private function addRandomH(\DOMElement $element, $maxLength = 10)
    {
        $h = HtmlLorem::$H_TAG . (string)mt_rand(1, 3);
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement($h);
        $node->appendChild($text);
        $element->appendChild($node);

    }

    private function addRandomB(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(HtmlLorem::$B_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private function addRandomI(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(HtmlLorem::$I_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private function addRandomSpan(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode($this->generator->sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(HtmlLorem::$SPAN_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private function addLoginForm(\DOMElement $element)
    {

        $textInput = $element->ownerDocument->createElement(HtmlLorem::$INPUT_TAG);
        $textInput->setAttribute("type", "text");
        $textInput->setAttribute("id", "username");

        $textLabel = $element->ownerDocument->createElement(HtmlLorem::$LABEL_TAG);
        $textLabel->setAttribute("for", "username");
        $textLabel->textContent = $this->generator->word;

        $passwordInput = $element->ownerDocument->createElement(HtmlLorem::$INPUT_TAG);
        $passwordInput->setAttribute("type", "password");
        $passwordInput->setAttribute("id", "password");

        $passwordLabel = $element->ownerDocument->createElement(HtmlLorem::$LABEL_TAG);
        $passwordLabel->setAttribute("for", "password");
        $passwordLabel->textContent = $this->generator->word;

        $submit = $element->ownerDocument->createElement(HtmlLorem::$INPUT_TAG);
        $submit->setAttribute("type", "submit");
        $submit->setAttribute("value", $this->generator->word);

        $submit = $element->ownerDocument->createElement(HtmlLorem::$FORM_TAG);
        $submit->setAttribute("action", $this->generator->safeEmailDomain);
        $submit->SetAttribute("method", "POST");
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

        $table = $element->ownerDocument->createElement(HtmlLorem::$TABLE_TAG);
        $thead = $element->ownerDocument->createElement(HtmlLorem::$THEAD_TAG);
        $tbody = $element->ownerDocument->createElement(HtmlLorem::$TBODY_TAG);

        $table->appendChild($thead);
        $table->appendChild($tbody);

        $tr = $element->ownerDocument->createElement(HtmlLorem::$TR_TAG);
        $thead->appendChild($tr);
        for ($i = 0; $i < $cols; $i++) {
            $th = $element->ownerDocument->createElement(HtmlLorem::$TH_TAG);
            $th->textContent = $this->generator->sentence(mt_rand(1, $maxTitle));
            $tr->appendChild($th);
        }
        for ($i = 0; $i < $rows; $i++) {
            $tr = $element->ownerDocument->createElement(HtmlLorem::$TR_TAG);
            $tbody->appendChild($tr);
            for ($j = 0; $j < $cols; $j++) {
                $th = $element->ownerDocument->createElement(HtmlLorem::$TD_TAG);
                $th->textContent = $this->generator->sentence(mt_rand(1, $maxLength));
                $tr->appendChild($th);
            }
        }
        $element->appendChild($table);
    }

    private function addRandomUL(\DOMElement $element, $maxItems = 11, $maxLength = 4)
    {
        $num = mt_rand(1, $maxItems);
        $ul = $element->ownerDocument->createElement(HtmlLorem::$UL_TAG);
        for ($i = 0; $i < $num; $i++) {
            $li = $element->ownerDocument->createElement(HtmlLorem::$LI_TAG);
            $li->textContent = $this->generator->sentence(mt_rand(1, $maxLength));
            $ul->appendChild($li);
        }
        $element->appendChild($ul);
    }
}
