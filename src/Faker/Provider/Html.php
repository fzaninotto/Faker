<?php

namespace Faker\Provider;

class Html extends \Faker\Provider\Base
{

    /**
     *
     */
    const SMALLEST_HTML_LENGTH = 4; // <br>

    /**
     * Principe 0: No fixed chars length guaranteed, only a max size, as in Lorem::text()
     * Principe 1: The more maxLength you want, the more html tags you get
     * Principe 2: Available html block/inline tags list is fixed, for now
     * Principe 3: We distinguish block-level and inline tags, and allow inline tags inside blocks.
     * Challenge 0: output a random but semantic HTML structure!
     * Challenge 1: output a random portion of semantic HTML tags having phrasing content only
     * Challenge 2: output a random portion of semantic HTML having sectioning, heading and phrasing content
     * Challenge 3: output a complete random but semantic HTML document
     *              with multiple random but semantic sectioning, headings and phrasing contents
     *
     * @param int $maxLength max string size expected
     *
     * @return string html output - html tags + Lorem text rendering
     */
    public static function html($maxLength = 100)
    {
        if (0 > ($maxLength - self::SMALLEST_HTML_LENGTH - 5)) { // 5 == Lorem::text() argument limit
            $message = sprintf(
                "Given length parameter a%d must be superior to %d - text length cannot be %d",
                $maxLength,
                self::SMALLEST_HTML_LENGTH + Lorem::TOO_SHORT_TEXT_ARGUMENT,
                $maxLength - self::SMALLEST_HTML_LENGTH - Lorem::TOO_SHORT_TEXT_ARGUMENT
            );
            throw new \InvalidArgumentException($message);
        }

        $output         = "";
        $htmlTags       = self::getHtmlTags();
        $htmlBlockTags  = $htmlTags['block'];
        $htmlInlineTags = $htmlTags['inline'];

        /*
            TODO:
            Since Lorem::text() output length is 99% always below than the request $maxNbChars
            while looping over the tag list, generating the html output,
            we recalculate the real remaining  text length to be outputted.
            Makes the result as closer as possible from the max expected value
        */

        $output = sprintf("<br>%s", Lorem::text($maxLength - self::SMALLEST_HTML_LENGTH));


        return $output;
    }

    /**
     * @return array of distinct block-level and inline-level elements names
     */
    protected static function getHtmlTags()
    {
        return array(
            "block" =>  array("h1", "h2", "h3", "p"),
            "inline" => array("i", "b", "span")
        );
    }

    /**
     * "A void element is an element whose content model never allows it
     * to have contents under any circumstances.
     * Void elements can have attributes.
     * (...)
     * Void elements only have a start tag; end tags must not be specified for void elements."
     * (...)
     * A non-void element must have an end tag,
     * unless the subsection for that element in the HTML elements section of this reference
     * indicates that its end tag can be omitted.
     * The contents of an element must be placed between just after its start tag
     * (which might be implied, in certain cases)
     * and just before its end tag (which might be implied in certain cases)."
     *
     * @link http://www.w3.org/TR/html-markup/syntax.html#syntax-elements
     *
     * @return array
     */
    protected static function getVoidContentHTMLTagNames()
    {
        return array(
            "area", "base", "br", "col", "command", "embed", "hr", "img", "input",
            "keygen", "link", "meta", "param", "source", "track", "wbr",
        );
    }

    /**
     * elements that are used in the body of documents and applications,
     * categorized as "flow content"
     *
     * @link http://www.w3.org/TR/html5/dom.html#flow-content
     * @return array
     */
    protected static function getFlowContentHTMLTagNames()
    {
        return array(
            "a", "abbr", "address", "area", "article", "aside", "audio", "b", "bdi",
            "bdo", "blockquote", "br", "button", "canvas", "cite", "code", "data",
            "datalist", "del", "dfn", "div", "dl", "em", "embed", "fieldset", "figure",
            "footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "header", "hr", "i",
            "iframe", "img", "input", "ins", "kbd", "keygen", "label", "main", "map",
            "mark", "math", "meter", "nav", "noscript", "object", "ol", "output", "p",
            "pre", "progress", "q", "ruby", "s", "samp", "script", "section", "select",
            "small", "span", "strong", "sub", "sup", "svg", "table", "template", "textarea",
            "time", "u", "ul", "var", "video", "wbr"
        );
    }

    /**
     * Sectioning content is content that defines the scope of headings and footers
     *
     * @link http://www.w3.org/TR/html5/dom.html#flow-content
     *
     * @return array
     */
    protected static function getSectioningContentHtmlTagNames()
    {
        return array("article", "aside", "nav", "section");
    }

    /**
     * Metadata content Metadata content is content that sets up the presentation
     * or behavior of the rest of the content,
     * or that sets up the relationship of the document with other documents,
     * or that conveys other "out of band" information.
     *
     * @link http://www.w3.org/TR/html5/dom.html#metadata-content
     *
     * @return array
     */
    protected static function getMetadataContentHtmlTagNames()
    {
        return array("base", "link", "meta", "noscript", "script", "style", "template", "title");
    }

    /**
     * Heading content defines the header of a section
     *
     * @link http://www.w3.org/TR/html5/dom.html#heading-content
     *
     * @return array
     */
    protected static function getHeadingContentHtmlTagNames()
    {
        return array("article", "aside", "nav", "section");
    }

    /**
     * Phrasing content is the text of the document,
     * as well as elements that mark up that text at the intra-paragraph level.
     *
     * @link http://www.w3.org/TR/html5/dom.html#phrasing-content
     *
     * @return array
     */
    protected static function getPhrasingContentHtmlTagNames()
    {
        return array("a", "abbr", "area", "(if", "it", "is", "a",
            "descendant", "of", "a", "map", "element)", "audio", "b",
            "bdi", "bdo", "br", "button", "canvas", "cite", "code",
            "data", "datalist", "del", "dfn", "em", "embed", "i",
            "iframe", "img", "input", "ins", "kbd", "keygen", "label",
            "map", "mark", "math", "meter", "noscript", "object", "output",
            "progress", "q", "ruby", "s", "samp", "script", "select",
            "small", "span", "strong", "sub", "sup", "svg", "template",
            "textarea", "time", "u", "var", "video", "wbr", "text");
    }


    /**
     * @link http://w3c.github.io/html-reference/global-attributes.html
     * @param int $count
     *
     * @return array
     */
    protected static function getHTMLAttributes($count = 1)
    {

        return array(
            "accesskey" =>                          self::randomLetter(),
            "class" =>                              Lorem::word(),
            "contenteditable" =>                    self::randomElement(array('true', 'false')),
            "dir" =>                                self::randomElement(array("ltr", "rtl", "auto")),
            "draggable" =>                          self::randomElement(array('true', 'false')),
            sprintf("data-%s", Lorem::word()) =>    Lorem::word(),
            "dropzone" =>                           self::randomElement(array("copy", "move", "link")),
            "hidden" =>                             self::randomElement(array('true', 'false')),
            "spellcheck" =>                         self::randomElement(array('true', 'false')),
            "tablindex" =>                          self::randomDigit(),
            "title" =>                              Lorem::sentence(),
            "translate" =>                          self::randomElement(array("yes", "no")),
        );
    }

    /**
     * @param int $count
     *
     * @return array
     */
    protected static function getRandomHTMLAttributes($count = 1)
    {
        $attributes = self::getHTMLAttributes();
        $randoms = array();
        for ($i = 0; $i < $count; $i++) {
            $key           = self::randomElement(array_keys($attributes));
            $randoms[$key] = $attributes[$key];
        }

        return $randoms;
    }

    /**
     * @return \DOMDocument
     */
    public static function getDOMDocument()
    {
        $doc = new \DOMDocument('1.0', 'UTF-8');
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = false;

        return $doc;
    }

    /**
     * @param       $tag
     * @param null  $content
     * @param int   $randomAttributesCount
     * @param array $customAttributes
     *
     * saveXML() preferred to saveHTML(),
     * since the last doesn't allow self-closing tag rendering.
     * We trim the carriage return char, too.
     *
     * @return string
     */
    public static function htmlTag($tag, $content = null, $randomAttributesCount = 1, $customAttributes = array())
    {
        $doc = self::getDOMDocument();
        $node = self::htmlNode($doc, $tag, $content, $randomAttributesCount, $customAttributes);

        return trim($doc->saveXML($node));
    }

    /**
     * @param \DOMDocument $doc
     * @param              $tag
     * @param null         $content
     * @param int          $randomAttributesCount
     * @param array        $customAttributes
     *
     * saveXML() preferred to saveHTML(),
     * since the last doesn't allow self-closing tag rendering.
     * We trim the carriage return char, too.

     *
     * @return \DOMNode
     */
    public static function htmlNode($doc= null, $tag, $content = null, $randomAttributesCount = 1, $customAttributes = array())
    {
        $doc = $doc ?: self::getDOMDocument();
        if (empty($tag)) {
            throw new \InvalidArgumentException("Please provide an HTML tag name");
        }
        $node = $doc->createElement($tag, $content);

        if (0 < $randomAttributesCount) {
            $attributes = self::getRandomHTMLAttributes($randomAttributesCount);
            foreach ($attributes as $name => $value) {
                $node->setAttribute($name, $value);
            }
        }

        if (0 < count($customAttributes)) {
            foreach ($customAttributes as $name => $value) {
                $node->setAttribute($name, $value);
            }
        }

        return $node;
    }
}
