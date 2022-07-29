<?php

namespace App\CustomClasses;


use DOMDocument;
//NOTE
// this is where i do my rss extracting and operations

class Rss
{
    private static   function get_rss_feed_as_html($feed_url, $max_item_cnt = 10, $show_date = true, $show_description = true, $max_words = 0, $cache_timeout = 7200, $cache_prefix = "/tmp/rss2html-"){
        $result = "";
        // get feeds and parse items
        $rss = new DOMDocument();
        $cache_file = $cache_prefix . md5($feed_url);
        // load from file or load content
        if (
            $cache_timeout > 0 &&
            is_file($cache_file) &&
            (filemtime($cache_file) + $cache_timeout > time())
        ) {
            $rss->load($cache_file);
        } else {
            $rss->load($feed_url);
            if ($cache_timeout > 0) {
                //$rss->save($cache_file);
            }
        }
        $feed = array();
        foreach ($rss->getElementsByTagName('item') as $node) {
            $item = array(
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'content' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            );
            $content = $node->getElementsByTagName('encoded'); // <content:encoded>
            if ($content->length > 0) {
                $item['content'] = $content->item(0)->nodeValue;
            }
            array_push($feed, $item);
        }
        // real good count
        if ($max_item_cnt > count($feed)) {
            $max_item_cnt = count($feed);
        }
        // return $feed;
        $result .= '';
        for ($x = 0; $x < $max_item_cnt; $x++) {
            $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
            $link = $feed[$x]['link'];
            $result .= ' ';
            $result .=  '* '.$title.':  ';
            if ($show_date) {
                $date = date('l F d, Y', strtotime($feed[$x]['date']));
                $result .= '<small class="feed-date"><em>Posted on ' . $date . '</em></small>';
            }
            if ($show_description) {
                $description = $feed[$x]['desc'];
                $content = $feed[$x]['content'];
                // find the img
                $has_image = preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image);
                // no html tags
                $description = strip_tags(preg_replace('/(<(script|style)\b[^>]*>).*?(<\/\2>)/s', "$1$3", $description), '');
                // whether cut by number of words
                if ($max_words > 0) {
                    $arr = explode(' ', $description);
                    if ($max_words < count($arr)) {
                        $description = '';
                        $w_cnt = 0;
                        foreach ($arr as $w) {
                            $description .= $w . ' ';
                            $w_cnt = $w_cnt + 1;
                            if ($w_cnt == $max_words) {
                                break;
                            }
                        }
                        $description .= " ...";
                    }
                }
                // add img if it exists
                // if ($has_image == 1) {
                //     $description = '<img class="feed-item-image" src="' . $image['src'] . '" />' . $description;
                // }
                $result .=  $description.' ';
            }
            $result .= ' ';
        }
        $result .= ' ';
        return $result;
    }


    public static function output_rss_feed($feed_url, $max_item_cnt)
    {
        $show_date = false;
        $show_description = true;
        $max_words = 0;
        return self::get_rss_feed_as_html($feed_url, $max_item_cnt, $show_date, $show_description, $max_words);
    }

}
