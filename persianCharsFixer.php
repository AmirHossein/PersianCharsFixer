<?php
/**
 * persianCharsFixer : Converts Western ISO characters to Persian
 *
 *
 * Author : AHHP(Amir Hossein Hodjati Pour) ~ me@amir-hossein.com
 * License : GNU GENERAL PUBLIC LICENSE V2
 * Version : 1.1
 * Created on : 1394/01/26     11:11pm
 *
 * @param string $str Input str to convert.
 * @return string Converted string.
 */

function persianCharsFixer($str) {
    $alphabet = array(
        'Û°' => '۰',
        'Û±' => '۱',
        'Û²' => '۲',
        'Û³' => '۳',
        'Û´' => '۴',
        'Ûµ' => '۵',
        'Û¶' => '۶',
        'Û·' => '۷',
        'Û¸' => '۸',
        'Û¹' => '۹',
        'Ø¢' => 'آ',
        'Ø§' => 'ا',
        'Ø£' => 'أ',
        'Ø¥' => 'إ',
        'Ø¤' => 'ؤ',
        'Ø¦' => 'ئ',
        'Ø¡' => 'ء',
        'Ø¨' => 'ب',
        'Ù¾' => 'پ',
        'Øª' => 'ت',
        'Ø«' => 'ث',
        'Ø¬' => 'ج',
        'Ú†' => 'چ',
        'Ø­' => 'ح',
        'Ø®' => 'خ',
        'Ø¯' => 'د',
        'Ø°' => 'ذ',
        'Ø±' => 'ر',
        'Ø²' => 'ز',
        'Ú˜' => 'ژ',
        'Ø³' => 'س',
        'Ø´' => 'ش',
        'Øµ' => 'ص',
        'Ø¶' => 'ض',
        'Ø·' => 'ط',
        'Ø¸' => 'ظ',
        'Ø¹' => 'ع',
        'Øº' => 'غ',
        'Ù' => 'ف',
        'Ù‚' => 'ق',
        'Ú©' => 'ک',
        'Ú¯' => 'گ',
        'Ù„' => 'ل',
        'Ù…' => 'م',
        'Ù†' => 'ن',
        'Ùˆ' => 'و',
        'Ù‡' => 'ه',
        'ÛŒ' => 'ی',
        'ÙŠ' => 'ي',
        'Û€' => 'ۀ',
        'Ø©' => 'ة',
        'ÙŽ' => 'َ',
        'Ù' => 'ُ',
        'Ù' => 'ِ',
        'Ù‘' => 'ّ',
        'Ù‹' => 'ً',
        'ÙŒ' => 'ٌ',
        'Ù' => 'ٍ',
        'ØŒ' => '،',
        'Ø›' => '؛',
        ',' => ',',
        'ØŸ' => '؟'
    );

    return strtr($str, $alphabet);
}
