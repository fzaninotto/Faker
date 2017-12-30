<?php

namespace Faker\Provider;

use Faker\Generator;

/**
 * Class HtmlBlock.
 */
class HtmlBlock extends Base
{
    public static $sets
      = [
        'self_close' => ['img', 'hr'],
        'header' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
        'list' => ['ul', 'ol'],
        'block' => ['p', 'blockquote'],
        'item' => ['li'],
        'inline' => [
          'b',
          'big',
          'i',
          'small',
          'tt',
          'abbr',
          'cite',
          'code',
          'em',
          'strong',
          'a',
          'bdo',
          'br',
          'img',
          'q',
          'span',
          'sub',
          'sup',
          'hr',
        ],
      ];

    /**
     * HtmlBlock constructor.
     *
     * @param \Faker\Generator $generator
     */
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
        $generator->addProvider(new Lorem($generator));
        $generator->addProvider(new Internet($generator));
    }

    /**
     * @param int $min
     * @param int $max
     *
     * @return string
     */
    public function randomHtmlBlock($min = 5, $max = 40)
    {
        $html = [];
        $args = new \stdClass();
        $args->range = range(1, $this->generator->numberBetween($min, $max));
        $args->elements = array_merge(
            self::$sets['self_close'],
            self::$sets['header'],
            self::$sets['list'],
            self::$sets['inline']
        );
        $args->attr = [];
        foreach ($args->range as $item) {
            $element = $this->generator->randomElement($args->elements);
            $html[] = $this->element($element, $args->attr);
        }

        return implode('', $html);
    }

    /**
     * @param string      $name
     * @param array       $attr
     * @param null|string $text
     *
     * @return bool|string
     */
    public function element($name = 'div', array $attr = [], $text = null)
    {
        $element = (object) [
          'name' => $name,
          'attr' => $attr,
        ];
        if (empty($element->name)) {
            return false;
        }
        $element->one_liner = in_array($element->name, self::$sets['self_close'], true);
        $html = [];
        if ('a' === $element->name) {
            if (!isset($element->attr['title'])) {
                $element->attr['title'] = Lorem::sentence(Base::numberBetween(1, Base::numberBetween(3, 9)));
            }
            if (!isset($element->attr['href'])) {
                $element->attr['href'] = $this->generator->url;
            }
        }
        if ('img' === $element->name) {
            $element = $this->htmlElementImg($element);
        }
        $attributes = [];
        foreach ($element->attr as $key => $value) {
            $attributes[] = sprintf('%s="%s"', $key, $value);
        }
        $html[] = sprintf('<%s%s>', $element->name, (!empty($attributes) ? ' ' : '').implode(' ', $attributes));
        if (!$element->one_liner) {
            if (null !== $text) {
                $html[] = $text;
            } elseif (in_array($element->name, self::$sets['inline'], true)) {
                $text = Lorem::text(Base::numberBetween(5, 25));
                $html[] = substr($text, 0, -1);
            } elseif (in_array($element->name, self::$sets['item'], true)) {
                $text = Lorem::text(Base::numberBetween(10, 60));
                $html[] = substr($text, 0, -1);
            } elseif (in_array($element->name, self::$sets['list'], true)) {
                for ($i = 0; $i < Base::numberBetween(1, 15); ++$i) {
                    $html[] = $this->element('li');
                }
            } elseif (in_array($element->name, self::$sets['header'], true)) {
                $text = Lorem::text(Base::numberBetween(60, 200));
                $html[] = substr($text, 0, -1);
            } else {
                $html[] = $this->randomApplyElement(
                    'a',
                    Base::numberBetween(0, 10),
                    Lorem::paragraph(Base::numberBetween(2, 40))
                );
            }
            $html[] = sprintf('</%s>', $element->name);
        }

        return implode('', $html);
    }

    /**
     * @param $element
     *
     * @return mixed
     */
    private function htmlElementImg($element)
    {
        if (!isset($element->attr['class'])) {
            $element->attr['class'][] = $this->generator->optional(40)->randomElement([
              'aligncenter',
              'alignleft',
              'alignright',
            ]);
            $element->attr['class'] = array_filter($element->attr['class']);
            $element->attr['class'] = implode(' ', $element->attr['class']);
        }
        if (!isset($element->attr['alt'])) {
            $element->attr['alt'] = rtrim($this->generator->optional(70)->sentence(Base::randomDigitNotNull()), '.');
        }
        if (!isset($element->attr['src'])) {
            $element->attr['src'] = $this->generator->imageUrl();
        }
        $element->attr = array_filter($element->attr);

        return $element;
    }

    /**
     * @param string      $element
     * @param int         $max
     * @param null|string $text
     *
     * @return null|string
     */
    public function randomApplyElement($element = 'a', $max = 5, $text = null)
    {
        $words = explode(' ', $text);
        $total_words = count($words);
        $sentences = [];
        for ($i = 0; $i < $total_words; ++$i) {
            $group = Base::numberBetween(1, Base::numberBetween(3, 9));
            $sentence = [];
            for ($k = 0; $k < $group; ++$k) {
                $index = $i + $k;
                if (!isset($words[$index])) {
                    break;
                }
                $sentence[] = $words[$index];
            }
            $i += $k;
            $sentences[] = implode(' ', $sentence);
        }
        $qty = $max - Base::numberBetween(0, $max);
        if (0 === $qty) {
            return $text;
        }
        $indexes = floor(count($sentences) / $qty);
        for ($i = 0; $i < $qty; ++$i) {
            $index = ($indexes * $i) + Base::numberBetween(0, $indexes);
            if (isset($sentences[$index])) {
                $sentences[$index] = $this->element($element, [], $sentences[$index]);
            }
        }

        return implode(' ', $sentences);
    }
}
