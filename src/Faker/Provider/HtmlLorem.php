<?php
/**
 * Created by PhpStorm.
 * User: lsv
 * Date: 2/7/14
 * Time: 6:05 AM
 */

namespace Faker\Provider;

use Faker\Provider\Base;

class HtmlLorem extends Base
{

    static public function lorem(
        $paragraphs = 5,
        $boldAndItalic = 0,
        $links = 0,
        $unorderedlist = 0,
        $orderedlist = 0,
        $descriptionlist = 0,
        $blockquote = 0,
        $code = 0,
        $headers = 0
    )
    {
        $text = Lorem::paragraphs($paragraphs);
        self::addHtmlElement($text, $boldAndItalic, array('b', 'i'));
        self::addHtmlElement($text, $links, array('a'), array('href' => '#'));
        self::addHtmlElement($text, $blockquote, array('blockquote'), array(), true);
        self::addHtmlElement($text, $code, array('code', 'pre'), array(), true);
        self::addHtmlElement($text, $headers, array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'));

        self::addList($text, $orderedlist, 'ol');
        self::addList($text, $unorderedlist, 'ul');

        self::addDescriptionList($text, $descriptionlist);

        foreach($text as &$line) {
            if (substr($line, null, 1) === '<') {
                continue;
            }
            $line = '<p>' . $line . '</p>';
        }

        return implode("\n", $text);
    }

    static private function addDescriptionList(array &$text, $number)
    {
        for($i = 0; $i < $number; $i++) {
            $p = Lorem::paragraphs(4);
            $desclist = '<dt><dfn>' . $p[0] . '</dfn></dt>';
            $desclist .= '<dd>' . $p[1] . '</dd>';
            $desclist .= '<dt><dfn>' . $p[2] . '</dfn></dt>';
            $desclist .= '<dd>' . $p[3] . '</dd>';
            $text[] = '<dl>' . $desclist . '</dt>';
        }
    }

    static private function addList(array &$text, $number, $tag)
    {
        for($i = 0; $i < $number; $i++) {
            $key = Base::randomKey($text);
            $text[$key] = '<' . $tag . '><li>' . $text[$key] . '</li></' . $tag . '>';
        }
    }

    static private function addHtmlElement(array &$text, $number, array $tag, array $tagAttributes = array(), $useParagraph = false)
    {
        $attributes = array();
        foreach($tagAttributes as $key => $value) {
            $attributes[] = sprintf('%s="%s"', $key, $value);
        }
        for($i = 0; $i < $number; $i++) {
            $k = Base::randomElement($tag);
            $begin = ($attributes ? sprintf('<%s %s>', $k, implode(' ', $attributes)) : sprintf('<%s>', $k));
            $end = sprintf('</%s>', $k);

            $key = Base::randomKey($text);
            if ($useParagraph) {
                $text[$key] = $begin . $text[$key] . $end;
            } else {
                $texts = explode(' ', $text[$key]);
                $textElement = Base::randomKey($texts);
                $texts[$textElement] = $begin . $texts[$textElement] . $end;
                $text[$key] = implode(' ', $texts);
            }
        }
    }

} 