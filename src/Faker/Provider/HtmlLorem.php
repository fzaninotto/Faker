<?php
namespace Faker\Provider;

class HtmlLorem extends Base
{

    /**
     * Generate HTML Loremipsum text see http://loripsum.net/ for example
     * @example http://loripsum.net/
     *
     * @param int $paragraphs       Number of paragraphs
     * @param int $boldAndItalic    Number of <b> / <i> (random selected)
     * @param int $links            Number of <a>
     * @param int $unorderedlist    Number of <ul>
     * @param int $orderedlist      Number of <ol>
     * @param int $descriptionlist  Number of <dl> (will always be added to the bottom, and will always increase the paragraphs)
     * @param int $blockquote       Number of <blockquote>
     * @param int $code             Number of <code> / <pre> (random selected)
     * @param int $headers          Number of <h1> / <h2> / <h3> / <h4> / <h5> / <h6> (random selected)
     * @return string               Return the formatted html
     */
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