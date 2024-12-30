<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\ORM\TableRegistry;

class CustomHelper extends Helper {

    function chkBonusVideo($scene_id = null) {
        $video = TableRegistry::get('ScenesVideos');
        $query = $video->find('all')->where(['scene_id' => $scene_id, 'is_active' => 1, 'is_tailer' => 'Is bonus'])->count();
        return $query;
    }

    function formatSizeUnits($bytes) {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        }

        return $bytes;
    }

    function number_pad($number, $n = 4, $trailing_value = 0, $position = STR_PAD_LEFT) {
        $number = intval($number, 10);
        return str_pad((int) $number, $n, $trailing_value, $position);
    }

    function get_file_extension($str) {
        $i = explode(".", $str);
        $ext = end($i);
        return strtolower($ext);
    }

    function make_seo_text($str) {
        $str = trim($str);
        $value = str_replace(" ", "-", $str);
        $value = trim($value, "-");
        return strtolower($value);
    }

    //Create a valid url 
    function makeValidUrl($urlStr){
        $parsed = parse_url($urlStr);
        if (empty($parsed['scheme'])) {
            $urlStr = 'http://' . ltrim($urlStr, '/');
            return $urlStr;
        }else{
            return $urlStr;
        }
    }

    function short_length($value, $len) {
        $value_format = $this->formatText($value);
        $value_raw = html_entity_decode($value_format, ENT_QUOTES);

        if (strlen($value_raw) > $len) {
            $value_strip = substr($value_raw, 0, $len);
            $value_strip = $this->formatText($value_strip);
            $lengthvalue = "<span title='" . $value_format . "' rel='tooltip'>" . $value_strip . "...</span>";
        } else {
            $lengthvalue = $value_format;
        }

        return $lengthvalue;
    }

    function formatText($value) {
        $value = str_replace("â€œ", "\"", $value);
        $value = str_replace("ï¿½?", "\"", $value);
        $value = preg_replace('/[^(\x20-\x7F)\x0A]*/','', $value);
        $value = stripslashes($value);
        $value = html_entity_decode($value, ENT_QUOTES);
        $trans = get_html_translation_table(HTML_ENTITIES, ENT_QUOTES);
        $value = strtr($value, $trans);
        $value = stripslashes(trim($value));
        return $value;
    }

    //REMOVE HTML TAG FROM CONTENT
    function strip_tags_content($string) {
        // ----- remove HTML TAGs ----- 
        $string = preg_replace('/<[^>]*>/', ' ', $string);
        // ----- remove control characters ----- 
        $string = str_replace("\r", '', $string);
        $string = str_replace("\n", ' ', $string);
        $string = str_replace("\t", ' ', $string);
        // ----- remove multiple spaces ----- 
        $string = trim(preg_replace('/ {2,}/', ' ', $string));
        return $string;
    }


}

?>
