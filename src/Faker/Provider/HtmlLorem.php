<?php

namespace Faker\Provider;

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

    /**
     * @return string
     */
    public static function randomHtml($maxDepth = 4)
    {
        $document = new \DOMDocument();

        $head = $document->createElement("head");
        static::addRandomTitle($head);

        $body = $document->createElement("body");
        static::addLoginForm($body);
        static::addRandomSubTree($body, $maxDepth);

        $html = $document->createElement("html");
        $html->appendChild($head);
        $html->appendChild($body);

        $document->appendChild($html);
        return $document->saveHTML();
    }

    private static function addRandomSubTree(\DOMElement $root, $depth)
    {
        $depth--;
        if ($depth <= 0) {
            return $root;
        }

        $siblings = mt_rand(1, $depth * 10);
        for ($i = 0; $i < $siblings; $i++) {
            if ($depth == 1) {
                static::addRandomLeaf($root);
            } else {
                $sibling = $root->ownerDocument->createElement("div");
                $root->appendChild($sibling);
                static::addRandomAttribute($sibling);
                static::addRandomSubTree($sibling, mt_rand(0, $depth));
            }
        };
        return $root;
    }

    private static function addRandomLeaf(\DOMElement $node)
    {
        $rand = mt_rand(1, 10);
        switch($rand){
            case 1:
                static::addRandomP($node);
                break;
            case 2:
                static::addRandomA($node);
                break;
            case 3:
                static::addRandomSpan($node);
                break;
            case 4:
                static::addRandomUL($node);
                break;
            case 5:
                static::addRandomH($node);
                break;
            case 6:
                static::addRandomB($node);
                break;
            case 7:
                static::addRandomI($node);
                break;
            case 8:
                static::addRandomTable($node);
                break;
            default:
                static::addRandomText($node);
                break;
        }
    }

    private static function addRandomAttribute(\DOMElement $node)
    {
        $rand = mt_rand(1, 2);
        switch ($rand) {
            case 1:
                $node->setAttribute("class", Lorem::word());
                break;
            case 2:
                $node->setAttribute("id", (string)Base::randomNumber(5));
                break;
        }
    }

    private static function addRandomP(\DOMElement $element, $maxLength = 10)
    {

        $node = $element->ownerDocument->createElement(HtmlLorem::P_TAG);
        $node->textContent = Lorem::sentence(mt_rand(1, $maxLength));
        $element->appendChild($node);
    }

    private static function addRandomText(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode(Lorem::sentence(mt_rand(1, $maxLength)));
        $element->appendChild($text);
    }

    private static function addRandomA(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode(Lorem::sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(HtmlLorem::A_TAG);
        $node->setAttribute("href", Internet::safeEmailDomain());
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private static function addRandomTitle(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode(Lorem::sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(HtmlLorem::TITLE_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private static function addRandomH(\DOMElement $element, $maxLength = 10)
    {
        $h = HtmlLorem::H_TAG . (string)mt_rand(1, 3);
        $text = $element->ownerDocument->createTextNode(Lorem::sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement($h);
        $node->appendChild($text);
        $element->appendChild($node);

    }

    private static function addRandomB(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode(Lorem::sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(HtmlLorem::B_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private static function addRandomI(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode(Lorem::sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(HtmlLorem::I_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private static function addRandomSpan(\DOMElement $element, $maxLength = 10)
    {
        $text = $element->ownerDocument->createTextNode(Lorem::sentence(mt_rand(1, $maxLength)));
        $node = $element->ownerDocument->createElement(HtmlLorem::SPAN_TAG);
        $node->appendChild($text);
        $element->appendChild($node);
    }

    private static function addLoginForm(\DOMElement $element)
    {

        $textInput = $element->ownerDocument->createElement(HtmlLorem::INPUT_TAG);
        $textInput->setAttribute("type", "text");
        $textInput->setAttribute("id", "username");

        $textLabel = $element->ownerDocument->createElement(HtmlLorem::LABEL_TAG);
        $textLabel->setAttribute("for", "username");
        $textLabel->textContent = Lorem::word();

        $passwordInput = $element->ownerDocument->createElement(HtmlLorem::INPUT_TAG);
        $passwordInput->setAttribute("type", "password");
        $passwordInput->setAttribute("id", "password");

        $passwordLabel = $element->ownerDocument->createElement(HtmlLorem::LABEL_TAG);
        $passwordLabel->setAttribute("for", "password");
        $passwordLabel->textContent = Lorem::word();

        $submit = $element->ownerDocument->createElement(HtmlLorem::INPUT_TAG);
        $submit->setAttribute("type", "submit");
        $submit->setAttribute("value", Lorem::word());

        $submit = $element->ownerDocument->createElement(HtmlLorem::FORM_TAG);
        $submit->setAttribute("action", Internet::safeEmailDomain());
        $submit->SetAttribute("method", "POST");
        $submit->appendChild($textLabel);
        $submit->appendChild($textInput);
        $submit->appendChild($passwordLabel);
        $submit->appendChild($passwordInput);
        $element->appendChild($submit);
    }

    private static function addRandomTable(\DOMElement $element, $maxRows = 10, $maxCols = 6, $maxTitle = 4, $maxLength = 10)
    {
        $rows = mt_rand(1, $maxRows);
        $cols = mt_rand(1, $maxCols);

        $table = $element->ownerDocument->createElement(HtmlLorem::TABLE_TAG);
        $thead = $element->ownerDocument->createElement(HtmlLorem::THEAD_TAG);
        $tbody = $element->ownerDocument->createElement(HtmlLorem::TBODY_TAG);

        $table->appendChild($thead);
        $table->appendChild($tbody);

        $tr = $element->ownerDocument->createElement(HtmlLorem::TR_TAG);
        $thead->appendChild($tr);
        for ($i = 0; $i < $cols; $i++) {
            $th = $element->ownerDocument->createElement(HtmlLorem::TR_TAG);
            $th->textContent = Lorem::sentence(mt_rand(1, $maxTitle));
            $tr->appendChild($th);
        }
        for ($i = 0; $i < $rows; $i++) {
            $tr = $element->ownerDocument->createElement("tr");
            $tbody->appendChild($tr);
            for ($j = 0; $j < $cols; $j++) {
                $th = $element->ownerDocument->createElement("td");
                $th->textContent = Lorem::sentence(mt_rand(1, $maxLength));
                $tr->appendChild($th);
            }
        }
        $element->appendChild($table);
    }

    private static function addRandomUL(\DOMElement $element, $maxItems = 11, $maxLength = 4)
    {
        $num = mt_rand(1, $maxItems);
        $ul = $element->ownerDocument->createElement(HtmlLorem::UL_TAG);
        for ($i = 0; $i < $num; $i++) {
            $li = $element->ownerDocument->createElement(HtmlLorem::LI_TAG);
            $li->textContent = Lorem::sentence(mt_rand(1, $maxLength));
            $ul->appendChild($li);
        }
        $element->appendChild($ul);
    }
}
