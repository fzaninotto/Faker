<?php

namespace Faker\Provider;

use Faker\Provider\HtmlLorem\HtmlNode;
use Faker\Provider\HtmlLorem\TextNode;

class HtmlLorem extends Base
{

    const MAX_LENGTH = 30;

    /**
     * @return string
     */
    public function randomHtml($maxDepth = 8)
    {
        $html = new HtmlNode(HtmlNode::HTML);
        $head = new HtmlNode(HtmlNode::HEAD);
        $body = new HtmlNode(HtmlNode::BODY);
        $html->addNode($head);
        $html->addNode($body);
        $head->addNode(HtmlLorem::randomTitle());
        $body->addNode(HtmlLorem::loginForm());
        $this->randomSubTree($body, $maxDepth);
        return $html->compile();
    }

    private function randomSubTree(HtmlNode $root, $depth)
    {
        if ($depth <= 0) {
            return $root;
        }

        $siblings = mt_rand(1, $depth * 5);
        for ($i = 0; $i < $siblings; $i++) {
            if ($depth == 1) {
                $root->addNode($this->randomLeaf());
            } else {
                $sibling = new HtmlNode(HtmlNode::DIV);
                $this->addRandomAttribute($sibling);
                $this->randomSubTree($sibling, mt_rand(0, $depth--));
                $root->addNode($sibling);
            }

        };
        return $root;
    }

    private function randomLeaf()
    {
        $node = new TextNode();
        $rand = mt_rand(1, 10);
        switch($rand){
            case 1:
                $node = HtmlLorem::randomP();
                break;
            case 2:
                $node = HtmlLorem::randomText();
                break;
            case 3:
                $node = HtmlLorem::randomA();
                break;
            case 4:
                $node = HtmlLorem::randomSpan();
                break;
            case 5:
                $node = HtmlLorem::randomUL();
                break;
            case 6:
                $node = HtmlLorem::randomH1();
                break;
            case 7:
                $node = HtmlLorem::randomH2();
                break;
            case 8:
                $node = HtmlLorem::randomH3();
                break;
            case 9:
                $node = HtmlLorem::randomB();
                break;
            case 10:
                $node = HtmlLorem::randomI();
                break;
        }
        return $node;
    }

    private function addRandomAttribute(HtmlNode $node)
    {
        $rand = mt_rand(1, 2);
        switch ($rand) {
            case 1:
                $node->addAttribute("class", Lorem::word());
                break;
            case 2:
                $node->addAttribute("id", Base::randomNumber(5));
                break;
        }
    }

    public static function randomP($maxLength = 10)
    {
        return HtmlNode::newInstance("p")
            ->addNode(TextNode::newInstance(Lorem::sentence(mt_rand(1, $maxLength))));
    }

    public static function randomText($maxLength = 10)
    {
        return TextNode::newInstance(Lorem::sentence(mt_rand(1, $maxLength)));
    }

    public static function randomA($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));

        return HtmlNode::newInstance()
            ->setType(HtmlNode::A)
            ->addAttribute("href", Internet::safeEmailDomain())
            ->addNode($text);
    }

    public function randomTitle($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance()
            ->setType(HtmlNode::TITLE)
            ->addNode($text);
    }

    public static function randomH1($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::H1)
            ->addNode($text);
    }

    public static function randomH2()
    {
        $text = TextNode::newInstance($maxLength = 10)
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::H2)
            ->addNode($text);
    }

    public static function randomH3()
    {
        $text = TextNode::newInstance($maxLength = 10)
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::H3)
            ->addNode($text);
    }

    public static function randomB($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::B)
            ->addNode($text);
    }

    public static function randomI($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::I)
            ->addNode($text);
    }

    public static function randomSpan($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::SPAN)
            ->addNode($text);
    }

    public static function loginForm()
    {
        $textInput = HtmlNode::newInstance(HtmlNode::INPUT)
            ->addAttribute("type", "text")
            ->addAttribute("id", "username");
        $textLabel = HtmlNode::newInstance(HtmlNode::LABEL)
            ->addAttribute("for", "username")
            ->addNode(TextNode::newInstance(Lorem::word()));
        $passwordInput = HtmlNode::newInstance(HtmlNode::INPUT)
            ->addAttribute("type", "password")
            ->addAttribute("id", "password");
        $passwordLabel = HtmlNode::newInstance(HtmlNode::LABEL)
            ->addAttribute("for", "password")
            ->addNode(TextNode::newInstance(Lorem::word()));
        $submit = HtmlNode::newInstance(HtmlNode::INPUT)
            ->addAttribute("type", "submit")
            ->addAttribute("value", Lorem::word());
        return HtmlNode::newInstance(HtmlNode::FORM)
            ->addAttribute("action", Internet::safeEmailDomain())
            ->addAttribute("method", "POST")
            ->addNode($textLabel)
            ->addNode($textInput)
            ->addNode($passwordLabel)
            ->addNode($passwordInput)
            ->addNode($submit);
    }

    public static function randomTable($maxRows = 10, $maxCols = 6, $maxTitle = 4, $maxLength = 10)
    {
        $rows = mt_rand(1, $maxRows);
        $cols = mt_rand(1, $maxCols);

        $table = HtmlNode::newInstance(HtmlNode::TABLE);
        $thead = HtmlNode::newInstance(HtmlNode::THEAD);
        $tbody = HtmlNode::newInstance(HtmlNode::TBODY);

        $table
            ->addNode($thead)
            ->addNode($tbody);

        $tr = HtmlNode::newInstance("tr");
        $thead->addNode($tr);
        for ($i = 0; $i < $cols; $i++) {
            $th  = HtmlNode::newInstance("th");
            $th->addNode(TextNode::newInstance(Lorem::sentence(mt_rand(1, $maxTitle))));
            $tr->addNode($th);
        }
        for ($i = 0; $i < $rows; $i++) {
            $tr = HtmlNode::newInstance("tr");
            $tbody->addNode($tr);
            for ($j = 0; $j < $cols; $j++) {
                $th  = HtmlNode::newInstance("td");
                $th->addNode(TextNode::newInstance(Lorem::sentence(mt_rand(1, $maxLength))));
                $tr->addNode($th);
            }
        }
        return $table;
    }

    public static function randomUL($maxItems = 11, $maxLength = 4)
    {
        $num = mt_rand(1, $maxItems);
        $ul = HtmlNode::newInstance(HtmlNode::UL);
        for ($i = 0; $i < $num; $i++) {
            $li  = HtmlNode::newInstance(HtmlNode::LI);
            $li->addNode(TextNode::newInstance(Lorem::sentence(mt_rand(1, $maxLength))));
            $ul->addNode($li);
        }
        return $ul;
    }
}
