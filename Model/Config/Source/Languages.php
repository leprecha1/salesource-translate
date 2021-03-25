<?php
/**
 * Salesource LTD
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Salesource LTD license that is
 * available through the world-wide-web at this URL:
 * https://salesource.eu/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category  Salesource
 * @package   Salesource_Translate
 * @copyright 2020 Copyright (c) Salesource LTD <http://salesource.eu>
 */

namespace Salesource\Translate\Model\Config\Source;

/**
 * Class Languages
 * Implements class languages object
 *
 */
class Languages implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Returns options in array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
        ['value' => 'af', 'label' => __('Afrikaans')],
        ['value' => 'ak', 'label' => __('Akan')],
        ['value' => 'sq', 'label' => __('Albanian')],
        ['value' => 'am', 'label' => __('Amharic')],
        ['value' => 'ar', 'label' => __('Arabic')],
        ['value' => 'hy', 'label' => __('Armenian')],
        ['value' => 'az', 'label' => __('Azerbaijani')],
        ['value' => 'eu', 'label' => __('Basque')],
        ['value' => 'be', 'label' => __('Belarusian')],
        ['value' => 'bem', 'label' => __('Bemba')],
        ['value' => 'bn', 'label' => __('Bengali')],
        ['value' => 'bh', 'label' => __('Bihari')],
        ['value' => 'bs', 'label' => __('Bosnian')],
        ['value' => 'br', 'label' => __('Breton')],
        ['value' => 'bg', 'label' => __('Bulgarian')],
        ['value' => 'km', 'label' => __('Cambodian')],
        ['value' => 'ca', 'label' => __('Catalan')],
        ['value' => 'chr', 'label' => __('Cherokee')],
        ['value' => 'ny', 'label' => __('Chichewa')],
        ['value' => 'zh-CN', 'label' => __('Chinese (Simplified)')],
        ['value' => 'zh-TW', 'label' => __('Chinese (Traditional)')],
        ['value' => 'co', 'label' => __('Corsican')],
        ['value' => 'hr', 'label' => __('Croatian')],
        ['value' => 'cs', 'label' => __('Czech')],
        ['value' => 'da', 'label' => __('Danish')],
        ['value' => 'nl', 'label' => __('Dutch')],
        ['value' => 'en', 'label' => __('English')],
        ['value' => 'eo', 'label' => __('Esperanto')],
        ['value' => 'et', 'label' => __('Estonian')],
        ['value' => 'ee', 'label' => __('Ewe')],
        ['value' => 'fo', 'label' => __('Faroese')],
        ['value' => 'tl', 'label' => __('Filipino')],
        ['value' => 'fi', 'label' => __('Finnish')],
        ['value' => 'fr', 'label' => __('French')],
        ['value' => 'fy', 'label' => __('Frisian')],
        ['value' => 'gl', 'label' => __('Galician')],
        ['value' => 'ka', 'label' => __('Georgian')],
        ['value' => 'de', 'label' => __('German')],
        ['value' => 'el', 'label' => __('Greek')],
        ['value' => 'gn', 'label' => __('Guarani')],
        ['value' => 'gu', 'label' => __('Gujarati')],
        ['value' => 'ht', 'label' => __('Haitian Creole')],
        ['value' => 'ha', 'label' => __('Hausa')],
        ['value' => 'haw', 'label' => __('Hawaiian')],
        ['value' => 'iw', 'label' => __('Hebrew')],
        ['value' => 'hi', 'label' => __('Hindi')],
        ['value' => 'hu', 'label' => __('Hungarian')],
        ['value' => 'is', 'label' => __('Icelandic')],
        ['value' => 'ig', 'label' => __('Igbo')],
        ['value' => 'id', 'label' => __('Indonesian')],
        ['value' => 'ia', 'label' => __('Interlingua')],
        ['value' => 'ga', 'label' => __('Irish')],
        ['value' => 'it', 'label' => __('Italian')],
        ['value' => 'ja', 'label' => __('Japanese')],
        ['value' => 'jw', 'label' => __('Javanese')],
        ['value' => 'kn', 'label' => __('Kannada')],
        ['value' => 'kk', 'label' => __('Kazakh')],
        ['value' => 'rw', 'label' => __('Kinyarwanda')],
        ['value' => 'rn', 'label' => __('Kirundi')],
        ['value' => 'kg', 'label' => __('Kongo')],
        ['value' => 'ko', 'label' => __('Korean')],
        ['value' => 'kri', 'label' => __('Krio (Sierra Leone)')],
        ['value' => 'ku', 'label' => __('Kurdish')],
        ['value' => 'ckb', 'label' => __('Kurdish (Soranî)')],
        ['value' => 'ky', 'label' => __('Kyrgyz')],
        ['value' => 'lo', 'label' => __('Laothian')],
        ['value' => 'la', 'label' => __('Latin')],
        ['value' => 'lv', 'label' => __('Latvian')],
        ['value' => 'ln', 'label' => __('Lingala')],
        ['value' => 'lt', 'label' => __('Lithuanian')],
        ['value' => 'loz', 'label' => __('Lozi')],
        ['value' => 'lg', 'label' => __('Luganda')],
        ['value' => 'ach', 'label' => __('Luo')],
        ['value' => 'mk', 'label' => __('Macedonian')],
        ['value' => 'mg', 'label' => __('Malagasy')],
        ['value' => 'ms', 'label' => __('Malay')],
        ['value' => 'ml', 'label' => __('Malayalam')],
        ['value' => 'mt', 'label' => __('Maltese')],
        ['value' => 'mi', 'label' => __('Maori')],
        ['value' => 'mr', 'label' => __('Marathi')],
        ['value' => 'mfe', 'label' => __('Mauritian Creole')],
        ['value' => 'mo', 'label' => __('Moldavian')],
        ['value' => 'mn', 'label' => __('Mongolian')],
        ['value' => 'sr-ME', 'label' => __('Montenegrin')],
        ['value' => 'ne', 'label' => __('Nepali')],
        ['value' => 'pcm', 'label' => __('Nigerian Pidgin')],
        ['value' => 'nso', 'label' => __('Northern Sotho')],
        ['value' => 'no', 'label' => __('Norwegian')],
        ['value' => 'nn', 'label' => __('Norwegian (Nynorsk)')],
        ['value' => 'oc', 'label' => __('Occitan')],
        ['value' => 'or', 'label' => __('Oriya')],
        ['value' => 'om', 'label' => __('Oromo')],
        ['value' => 'ps', 'label' => __('Pashto')],
        ['value' => 'fa', 'label' => __('Persian')],
        ['value' => 'pl', 'label' => __('Polish')],
        ['value' => 'pt-BR', 'label' => __('Portuguese (Brazil)')],
        ['value' => 'pt-PT', 'label' => __('Portuguese (Portugal)')],
        ['value' => 'pa', 'label' => __('Punjabi')],
        ['value' => 'qu', 'label' => __('Quechua')],
        ['value' => 'ro', 'label' => __('Romanian')],
        ['value' => 'rm', 'label' => __('Romansh')],
        ['value' => 'nyn', 'label' => __('Runyakitara')],
        ['value' => 'ru', 'label' => __('Russian')],
        ['value' => 'gd', 'label' => __('Scots Gaelic')],
        ['value' => 'sr', 'label' => __('Serbian')],
        ['value' => 'sh', 'label' => __('Serbo-Croatian')],
        ['value' => 'st', 'label' => __('Sesotho')],
        ['value' => 'tn', 'label' => __('Setswana')],
        ['value' => 'crs', 'label' => __('Seychellois Creole')],
        ['value' => 'sn', 'label' => __('Shona')],
        ['value' => 'sd', 'label' => __('Sindhi')],
        ['value' => 'si', 'label' => __('Sinhalese')],
        ['value' => 'sk', 'label' => __('Slovak')],
        ['value' => 'sl', 'label' => __('Slovenian')],
        ['value' => 'so', 'label' => __('Somali')],
        ['value' => 'es', 'label' => __('Spanish')],
        ['value' => 'es-419', 'label' => __('Spanish (Latin American)')],
        ['value' => 'su', 'label' => __('Sundanese')],
        ['value' => 'sw', 'label' => __('Swahili')],
        ['value' => 'sv', 'label' => __('Swedish')],
        ['value' => 'tg', 'label' => __('Tajik')],
        ['value' => 'ta', 'label' => __('Tamil')],
        ['value' => 'tt', 'label' => __('Tatar')],
        ['value' => 'te', 'label' => __('Telugu')],
        ['value' => 'th', 'label' => __('Thai')],
        ['value' => 'ti', 'label' => __('Tigrinya')],
        ['value' => 'to', 'label' => __('Tonga')],
        ['value' => 'lua', 'label' => __('Tshiluba')],
        ['value' => 'tum', 'label' => __('Tumbuka')],
        ['value' => 'tr', 'label' => __('Turkish')],
        ['value' => 'tk', 'label' => __('Turkmen')],
        ['value' => 'tw', 'label' => __('Twi')],
        ['value' => 'ug', 'label' => __('Uighur')],
        ['value' => 'uk', 'label' => __('Ukrainian')],
        ['value' => 'ur', 'label' => __('Urdu')],
        ['value' => 'uz', 'label' => __('Uzbek')],
        ['value' => 'vi', 'label' => __('Vietnamese')],
        ['value' => 'cy', 'label' => __('Welsh')],
        ['value' => 'wo', 'label' => __('Wolof')],
        ['value' => 'xh', 'label' => __('Xhosa')],
        ['value' => 'yi', 'label' => __('Yiddish')],
        ['value' => 'yo', 'label' => __('Yoruba')],
        ['value' => 'zu', 'label' => __('Zulu')]
        ];
    }
}
