<?php
/**
 * Created by JetBrains PhpStorm.
 * @author: pomaxa none <pomaxa@gmail.com>
 * @date: 7/10/13
 */

namespace Faker\Provider;


class Image extends Base
{

    public function imageUrl($keyword = 'book', $imagesToFetch = 10)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://images.google.com/images?q={$keyword}&tbm=isch/");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $data = curl_exec($ch);
        curl_close($ch);

        $dom = new \DOMDocument();
        @$dom->loadHTML($data); // avoid warnings

        $listA = $dom->getElementsByTagName('a'); // read all <a> elements

        $images = array();

        foreach ($listA as $itemA) { // loop through each <a> element
            if ($itemA->hasAttribute('href')) { // check if it has an 'href' attribute
                $href = $itemA->getAttribute('href'); // read the value of 'href'

                if (preg_match('/^\/imgres\?/', $href)) { // check that 'href' should begin with "/imgres?"
                    $qryString = substr($href, strpos($href, '?') + 1);
                    parse_str($qryString, $arrHref); // read the query parameters from 'href' URI
                    $images[] = $arrHref['imgurl'];
                    if(count($images) > $imagesToFetch) {
                        return $images[rand(0, count($images - 1))];
                    }
                }
            }
        }

        return '';//todo: place here some link to the hardcoded image.
    }


}