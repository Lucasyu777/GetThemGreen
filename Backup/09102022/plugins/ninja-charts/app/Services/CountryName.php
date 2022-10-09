<?php

namespace NinjaCharts\Services;

class CountryName
{
    public static function list()
    {
        $country_names = array(
            'AF' => __('Afghanistan', 'ninja-charts'),
            'AX' => __('Åland Islands', 'ninja-charts'),
            'AL' => __('Albania', 'ninja-charts'),
            'DZ' => __('Algeria', 'ninja-charts'),
            'AS' => __('American Samoa', 'ninja-charts'),
            'AD' => __('Andorra', 'ninja-charts'),
            'AO' => __('Angola', 'ninja-charts'),
            'AI' => __('Anguilla', 'ninja-charts'),
            'AQ' => __('Antarctica', 'ninja-charts'),
            'AG' => __('Antigua and Barbuda', 'ninja-charts'),
            'AR' => __('Argentina', 'ninja-charts'),
            'AM' => __('Armenia', 'ninja-charts'),
            'AW' => __('Aruba', 'ninja-charts'),
            'AU' => __('Australia', 'ninja-charts'),
            'AT' => __('Austria', 'ninja-charts'),
            'AZ' => __('Azerbaijan', 'ninja-charts'),
            'BS' => __('Bahamas', 'ninja-charts'),
            'BH' => __('Bahrain', 'ninja-charts'),
            'BD' => __('Bangladesh', 'ninja-charts'),
            'BB' => __('Barbados', 'ninja-charts'),
            'BY' => __('Belarus', 'ninja-charts'),
            'BE' => __('Belgium', 'ninja-charts'),
            'PW' => __('Belau', 'ninja-charts'),
            'BZ' => __('Belize', 'ninja-charts'),
            'BJ' => __('Benin', 'ninja-charts'),
            'BM' => __('Bermuda', 'ninja-charts'),
            'BT' => __('Bhutan', 'ninja-charts'),
            'BO' => __('Bolivia', 'ninja-charts'),
            'BQ' => __('Bonaire, Saint Eustatius and Saba', 'ninja-charts'),
            'BA' => __('Bosnia and Herzegovina', 'ninja-charts'),
            'BW' => __('Botswana', 'ninja-charts'),
            'BV' => __('Bouvet Island', 'ninja-charts'),
            'BR' => __('Brazil', 'ninja-charts'),
            'IO' => __('British Indian Ocean Territory', 'ninja-charts'),
            'VG' => __('British Virgin Islands', 'ninja-charts'),
            'BN' => __('Brunei', 'ninja-charts'),
            'BG' => __('Bulgaria', 'ninja-charts'),
            'BF' => __('Burkina Faso', 'ninja-charts'),
            'BI' => __('Burundi', 'ninja-charts'),
            'KH' => __('Cambodia', 'ninja-charts'),
            'CM' => __('Cameroon', 'ninja-charts'),
            'CA' => __('Canada', 'ninja-charts'),
            'CV' => __('Cape Verde', 'ninja-charts'),
            'KY' => __('Cayman Islands', 'ninja-charts'),
            'CF' => __('Central African Republic', 'ninja-charts'),
            'TD' => __('Chad', 'ninja-charts'),
            'CL' => __('Chile', 'ninja-charts'),
            'CN' => __('China', 'ninja-charts'),
            'CX' => __('Christmas Island', 'ninja-charts'),
            'CC' => __('Cocos (Keeling) Islands', 'ninja-charts'),
            'CO' => __('Colombia', 'ninja-charts'),
            'KM' => __('Comoros', 'ninja-charts'),
            'CG' => __('Congo (Brazzaville)', 'ninja-charts'),
            'CD' => __('Congo (Kinshasa)', 'ninja-charts'),
            'CK' => __('Cook Islands', 'ninja-charts'),
            'CR' => __('Costa Rica', 'ninja-charts'),
            'HR' => __('Croatia', 'ninja-charts'),
            'CU' => __('Cuba', 'ninja-charts'),
            'CW' => __('Cura&ccedil;ao', 'ninja-charts'),
            'CY' => __('Cyprus', 'ninja-charts'),
            'CZ' => __('Czech Republic', 'ninja-charts'),
            'DK' => __('Denmark', 'ninja-charts'),
            'DJ' => __('Djibouti', 'ninja-charts'),
            'DM' => __('Dominica', 'ninja-charts'),
            'DO' => __('Dominican Republic', 'ninja-charts'),
            'EC' => __('Ecuador', 'ninja-charts'),
            'EG' => __('Egypt', 'ninja-charts'),
            'SV' => __('El Salvador', 'ninja-charts'),
            'GQ' => __('Equatorial Guinea', 'ninja-charts'),
            'ER' => __('Eritrea', 'ninja-charts'),
            'EE' => __('Estonia', 'ninja-charts'),
            'ET' => __('Ethiopia', 'ninja-charts'),
            'FK' => __('Falkland Islands', 'ninja-charts'),
            'FO' => __('Faroe Islands', 'ninja-charts'),
            'FJ' => __('Fiji', 'ninja-charts'),
            'FI' => __('Finland', 'ninja-charts'),
            'FR' => __('France', 'ninja-charts'),
            'GF' => __('French Guiana', 'ninja-charts'),
            'PF' => __('French Polynesia', 'ninja-charts'),
            'TF' => __('French Southern Territories', 'ninja-charts'),
            'GA' => __('Gabon', 'ninja-charts'),
            'GM' => __('Gambia', 'ninja-charts'),
            'GE' => __('Georgia', 'ninja-charts'),
            'DE' => __('Germany', 'ninja-charts'),
            'GH' => __('Ghana', 'ninja-charts'),
            'GI' => __('Gibraltar', 'ninja-charts'),
            'GR' => __('Greece', 'ninja-charts'),
            'GL' => __('Greenland', 'ninja-charts'),
            'GD' => __('Grenada', 'ninja-charts'),
            'GP' => __('Guadeloupe', 'ninja-charts'),
            'GU' => __('Guam', 'ninja-charts'),
            'GT' => __('Guatemala', 'ninja-charts'),
            'GG' => __('Guernsey', 'ninja-charts'),
            'GN' => __('Guinea', 'ninja-charts'),
            'GW' => __('Guinea-Bissau', 'ninja-charts'),
            'GY' => __('Guyana', 'ninja-charts'),
            'HT' => __('Haiti', 'ninja-charts'),
            'HM' => __('Heard Island and McDonald Islands', 'ninja-charts'),
            'HN' => __('Honduras', 'ninja-charts'),
            'HK' => __('Hong Kong', 'ninja-charts'),
            'HU' => __('Hungary', 'ninja-charts'),
            'IS' => __('Iceland', 'ninja-charts'),
            'IN' => __('India', 'ninja-charts'),
            'ID' => __('Indonesia', 'ninja-charts'),
            'IR' => __('Iran', 'ninja-charts'),
            'IQ' => __('Iraq', 'ninja-charts'),
            'IE' => __('Ireland', 'ninja-charts'),
            'IM' => __('Isle of Man', 'ninja-charts'),
            'IL' => __('Israel', 'ninja-charts'),
            'IT' => __('Italy', 'ninja-charts'),
            'CI' => __('Ivory Coast', 'ninja-charts'),
            'JM' => __('Jamaica', 'ninja-charts'),
            'JP' => __('Japan', 'ninja-charts'),
            'JE' => __('Jersey', 'ninja-charts'),
            'JO' => __('Jordan', 'ninja-charts'),
            'KZ' => __('Kazakhstan', 'ninja-charts'),
            'KE' => __('Kenya', 'ninja-charts'),
            'KI' => __('Kiribati', 'ninja-charts'),
            'XK' => __('Kosovo', 'ninja-charts'),
            'KW' => __('Kuwait', 'ninja-charts'),
            'KG' => __('Kyrgyzstan', 'ninja-charts'),
            'LA' => __('Laos', 'ninja-charts'),
            'LV' => __('Latvia', 'ninja-charts'),
            'LB' => __('Lebanon', 'ninja-charts'),
            'LS' => __('Lesotho', 'ninja-charts'),
            'LR' => __('Liberia', 'ninja-charts'),
            'LY' => __('Libya', 'ninja-charts'),
            'LI' => __('Liechtenstein', 'ninja-charts'),
            'LT' => __('Lithuania', 'ninja-charts'),
            'LU' => __('Luxembourg', 'ninja-charts'),
            'MO' => __('Macao S.A.R., China', 'ninja-charts'),
            'MK' => __('Macedonia', 'ninja-charts'),
            'MG' => __('Madagascar', 'ninja-charts'),
            'MW' => __('Malawi', 'ninja-charts'),
            'MY' => __('Malaysia', 'ninja-charts'),
            'MV' => __('Maldives', 'ninja-charts'),
            'ML' => __('Mali', 'ninja-charts'),
            'MT' => __('Malta', 'ninja-charts'),
            'MH' => __('Marshall Islands', 'ninja-charts'),
            'MQ' => __('Martinique', 'ninja-charts'),
            'MR' => __('Mauritania', 'ninja-charts'),
            'MU' => __('Mauritius', 'ninja-charts'),
            'YT' => __('Mayotte', 'ninja-charts'),
            'MX' => __('Mexico', 'ninja-charts'),
            'FM' => __('Micronesia', 'ninja-charts'),
            'MD' => __('Moldova', 'ninja-charts'),
            'MC' => __('Monaco', 'ninja-charts'),
            'MN' => __('Mongolia', 'ninja-charts'),
            'ME' => __('Montenegro', 'ninja-charts'),
            'MS' => __('Montserrat', 'ninja-charts'),
            'MA' => __('Morocco', 'ninja-charts'),
            'MZ' => __('Mozambique', 'ninja-charts'),
            'MM' => __('Myanmar', 'ninja-charts'),
            'NA' => __('Namibia', 'ninja-charts'),
            'NR' => __('Nauru', 'ninja-charts'),
            'NP' => __('Nepal', 'ninja-charts'),
            'NL' => __('Netherlands', 'ninja-charts'),
            'NC' => __('New Caledonia', 'ninja-charts'),
            'NZ' => __('New Zealand', 'ninja-charts'),
            'NI' => __('Nicaragua', 'ninja-charts'),
            'NE' => __('Niger', 'ninja-charts'),
            'NG' => __('Nigeria', 'ninja-charts'),
            'NU' => __('Niue', 'ninja-charts'),
            'NF' => __('Norfolk Island', 'ninja-charts'),
            'MP' => __('Northern Mariana Islands', 'ninja-charts'),
            'KP' => __('North Korea', 'ninja-charts'),
            'NO' => __('Norway', 'ninja-charts'),
            'OM' => __('Oman', 'ninja-charts'),
            'PK' => __('Pakistan', 'ninja-charts'),
            'PS' => __('Palestinian Territory', 'ninja-charts'),
            'PA' => __('Panama', 'ninja-charts'),
            'PG' => __('Papua New Guinea', 'ninja-charts'),
            'PY' => __('Paraguay', 'ninja-charts'),
            'PE' => __('Peru', 'ninja-charts'),
            'PH' => __('Philippines', 'ninja-charts'),
            'PN' => __('Pitcairn', 'ninja-charts'),
            'PL' => __('Poland', 'ninja-charts'),
            'PT' => __('Portugal', 'ninja-charts'),
            'PR' => __('Puerto Rico', 'ninja-charts'),
            'QA' => __('Qatar', 'ninja-charts'),
            'RE' => __('Reunion', 'ninja-charts'),
            'RO' => __('Romania', 'ninja-charts'),
            'RU' => __('Russia', 'ninja-charts'),
            'RW' => __('Rwanda', 'ninja-charts'),
            'BL' => __('Saint Barth&eacute;lemy', 'ninja-charts'),
            'SH' => __('Saint Helena', 'ninja-charts'),
            'KN' => __('Saint Kitts and Nevis', 'ninja-charts'),
            'LC' => __('Saint Lucia', 'ninja-charts'),
            'MF' => __('Saint Martin (French part)', 'ninja-charts'),
            'SX' => __('Saint Martin (Dutch part)', 'ninja-charts'),
            'PM' => __('Saint Pierre and Miquelon', 'ninja-charts'),
            'VC' => __('Saint Vincent and the Grenadines', 'ninja-charts'),
            'SM' => __('San Marino', 'ninja-charts'),
            'ST' => __('S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'ninja-charts'),
            'SA' => __('Saudi Arabia', 'ninja-charts'),
            'SN' => __('Senegal', 'ninja-charts'),
            'RS' => __('Serbia', 'ninja-charts'),
            'SC' => __('Seychelles', 'ninja-charts'),
            'SL' => __('Sierra Leone', 'ninja-charts'),
            'SG' => __('Singapore', 'ninja-charts'),
            'SK' => __('Slovakia', 'ninja-charts'),
            'SI' => __('Slovenia', 'ninja-charts'),
            'SB' => __('Solomon Islands', 'ninja-charts'),
            'SO' => __('Somalia', 'ninja-charts'),
            'ZA' => __('South Africa', 'ninja-charts'),
            'GS' => __('South Georgia/Sandwich Islands', 'ninja-charts'),
            'KR' => __('South Korea', 'ninja-charts'),
            'SS' => __('South Sudan', 'ninja-charts'),
            'ES' => __('Spain', 'ninja-charts'),
            'LK' => __('Sri Lanka', 'ninja-charts'),
            'SD' => __('Sudan', 'ninja-charts'),
            'SR' => __('Suriname', 'ninja-charts'),
            'SJ' => __('Svalbard and Jan Mayen', 'ninja-charts'),
            'SZ' => __('Swaziland', 'ninja-charts'),
            'SE' => __('Sweden', 'ninja-charts'),
            'CH' => __('Switzerland', 'ninja-charts'),
            'SY' => __('Syria', 'ninja-charts'),
            'TW' => __('Taiwan', 'ninja-charts'),
            'TJ' => __('Tajikistan', 'ninja-charts'),
            'TZ' => __('Tanzania', 'ninja-charts'),
            'TH' => __('Thailand', 'ninja-charts'),
            'TL' => __('Timor-Leste', 'ninja-charts'),
            'TG' => __('Togo', 'ninja-charts'),
            'TK' => __('Tokelau', 'ninja-charts'),
            'TO' => __('Tonga', 'ninja-charts'),
            'TT' => __('Trinidad and Tobago', 'ninja-charts'),
            'TN' => __('Tunisia', 'ninja-charts'),
            'TR' => __('Turkey', 'ninja-charts'),
            'TM' => __('Turkmenistan', 'ninja-charts'),
            'TC' => __('Turks and Caicos Islands', 'ninja-charts'),
            'TV' => __('Tuvalu', 'ninja-charts'),
            'UG' => __('Uganda', 'ninja-charts'),
            'UA' => __('Ukraine', 'ninja-charts'),
            'AE' => __('United Arab Emirates', 'ninja-charts'),
            'GB' => __('United Kingdom (UK)', 'ninja-charts'),
            'US' => __('United States (US)', 'ninja-charts'),
            'UM' => __('United States (US) Minor Outlying Islands', 'ninja-charts'),
            'VI' => __('United States (US) Virgin Islands', 'ninja-charts'),
            'UY' => __('Uruguay', 'ninja-charts'),
            'UZ' => __('Uzbekistan', 'ninja-charts'),
            'VU' => __('Vanuatu', 'ninja-charts'),
            'VA' => __('Vatican', 'ninja-charts'),
            'VE' => __('Venezuela', 'ninja-charts'),
            'VN' => __('Vietnam', 'ninja-charts'),
            'WF' => __('Wallis and Futuna', 'ninja-charts'),
            'EH' => __('Western Sahara', 'ninja-charts'),
            'WS' => __('Samoa', 'ninja-charts'),
            'YE' => __('Yemen', 'ninja-charts'),
            'ZM' => __('Zambia', 'ninja-charts'),
            'ZW' => __('Zimbabwe', 'ninja-charts'),
        );
        return $country_names;
    }
}
