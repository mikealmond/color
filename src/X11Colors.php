<?php

namespace MikeAlmond\Color;

use MikeAlmond\Color\Exceptions\ColorException;

/**
 * Class X11Colors
 * @package MikeAlmond\Color
 */
class X11Colors
{
    /**
     * A full list of the CSS named colors as specified in CSS3 (CSS Color Module Level 4)
     *
     * @var array
     */
    public static $colors = [
        'FFFAFA' => [
            'snow',
            'snow1',
        ],
        'F8F8FF' => [
            'GhostWhite',
            'ghost white',
        ],
        'F5F5F5' => [
            'WhiteSmoke',
            'white smoke',
            'gray96',
            'grey96',
        ],
        'DCDCDC' => [
            'gainsboro',
        ],
        'FFFAF0' => [
            'FloralWhite',
            'floral white',
        ],
        'FDF5E6' => [
            'OldLace',
            'old lace',
        ],
        'FAF0E6' => [
            'linen',
        ],
        'FAEBD7' => [
            'AntiqueWhite',
            'antique white',
        ],
        'FFEFD5' => [
            'PapayaWhip',
            'papaya whip',
        ],
        'FFEBCD' => [
            'BlanchedAlmond',
            'blanched almond',
        ],
        'FFE4C4' => [
            'bisque',
            'bisque1',
        ],
        'FFDAB9' => [
            'PeachPuff',
            'peach puff',
            'PeachPuff1',
        ],
        'FFDEAD' => [
            'NavajoWhite',
            'navajo white',
            'NavajoWhite1',
        ],
        'FFE4B5' => [
            'moccasin',
        ],
        'FFF8DC' => [
            'cornsilk',
            'cornsilk1',
        ],
        'FFFFF0' => [
            'ivory',
            'ivory1',
        ],
        'FFFACD' => [
            'LemonChiffon',
            'lemon chiffon',
            'LemonChiffon1',
        ],
        'FFF5EE' => [
            'seashell',
            'seashell1',
        ],
        'F0FFF0' => [
            'honeydew',
            'honeydew1',
        ],
        'F5FFFA' => [
            'MintCream',
            'mint cream',
        ],
        'F0FFFF' => [
            'azure',
            'azure1',
        ],
        'F0F8FF' => [
            'AliceBlue',
            'alice blue',
        ],
        'E6E6FA' => [
            'lavender',
        ],
        'FFF0F5' => [
            'LavenderBlush',
            'lavender blush',
            'LavenderBlush1',
        ],
        'FFE4E1' => [
            'MistyRose',
            'misty rose',
            'MistyRose1',
        ],
        'FFFFFF' => [
            'white',
            'gray100',
            'grey100',
        ],
        '000000' => [
            'black',
            'gray0',
            'grey0',
        ],
        '2F4F4F' => [
            'DarkSlateGray',
            'dark slate gray',
            'DarkSlateGrey',
            'dark slate grey',
        ],
        '696969' => [
            'DimGray',
            'dim gray',
            'DimGrey',
            'dim grey',
            'gray41',
            'grey41',
        ],
        '708090' => [
            'SlateGray',
            'slate gray',
            'SlateGrey',
            'slate grey',
        ],
        '778899' => [
            'LightSlateGray',
            'light slate gray',
            'LightSlateGrey',
            'light slate grey',
        ],
        'BEBEBE' => [
            'gray',
            'grey',
            'X11Gray',
            'x11 gray',
            'X11Grey',
            'x11 grey',
        ],
        '808080' => [
            'WebGray',
            'web gray',
            'WebGrey',
            'web grey',
        ],
        'D3D3D3' => [
            'LightGray',
            'light gray',
            'light grey',
            'LightGrey',
        ],
        '191970' => [
            'MidnightBlue',
            'midnight blue',
        ],
        '000080' => [
            'navy',
            'NavyBlue',
            'navy blue',
        ],
        '6495ED' => [
            'CornflowerBlue',
            'cornflower blue',
        ],
        '483D8B' => [
            'DarkSlateBlue',
            'dark slate blue',
        ],
        '6A5ACD' => [
            'SlateBlue',
            'slate blue',
        ],
        '7B68EE' => [
            'MediumSlateBlue',
            'medium slate blue',
        ],
        '8470FF' => [
            'LightSlateBlue',
            'light slate blue',
        ],
        '0000CD' => [
            'MediumBlue',
            'medium blue',
            'blue3',
        ],
        '4169E1' => [
            'RoyalBlue',
            'royal blue',
        ],
        '0000FF' => [
            'blue',
            'blue1',
        ],
        '1E90FF' => [
            'DodgerBlue',
            'dodger blue',
            'DodgerBlue1',
        ],
        '00BFFF' => [
            'DeepSkyBlue',
            'deep sky blue',
            'DeepSkyBlue1',
        ],
        '87CEEB' => [
            'SkyBlue',
            'sky blue',
        ],
        '87CEFA' => [
            'LightSkyBlue',
            'light sky blue',
        ],
        '4682B4' => [
            'SteelBlue',
            'steel blue',
        ],
        'B0C4DE' => [
            'LightSteelBlue',
            'light steel blue',
        ],
        'ADD8E6' => [
            'LightBlue',
            'light blue',
        ],
        'B0E0E6' => [
            'PowderBlue',
            'powder blue',
        ],
        'AFEEEE' => [
            'PaleTurquoise',
            'pale turquoise',
        ],
        '00CED1' => [
            'DarkTurquoise',
            'dark turquoise',
        ],
        '48D1CC' => [
            'MediumTurquoise',
            'medium turquoise',
        ],
        '40E0D0' => [
            'turquoise',
        ],
        '00FFFF' => [
            'cyan',
            'aqua',
            'cyan1',
        ],
        'E0FFFF' => [
            'LightCyan',
            'light cyan',
            'LightCyan1',
        ],
        '5F9EA0' => [
            'CadetBlue',
            'cadet blue',
        ],
        '66CDAA' => [
            'MediumAquamarine',
            'medium aquamarine',
            'aquamarine3',
        ],
        '7FFFD4' => [
            'aquamarine',
            'aquamarine1',
        ],
        '006400' => [
            'DarkGreen',
            'dark green',
        ],
        '556B2F' => [
            'DarkOliveGreen',
            'dark olive green',
        ],
        '8FBC8F' => [
            'DarkSeaGreen',
            'dark sea green',
        ],
        '2E8B57' => [
            'SeaGreen',
            'sea green',
            'SeaGreen4',
        ],
        '3CB371' => [
            'MediumSeaGreen',
            'medium sea green',
        ],
        '20B2AA' => [
            'LightSeaGreen',
            'light sea green',
        ],
        '98FB98' => [
            'PaleGreen',
            'pale green',
        ],
        '00FF7F' => [
            'SpringGreen',
            'spring green',
            'SpringGreen1',
        ],
        '7CFC00' => [
            'LawnGreen',
            'lawn green',
        ],
        '00FF00' => [
            'green',
            'lime',
            'X11Green',
            'x11 green',
            'green1',
        ],
        '008000' => [
            'WebGreen',
            'web green',
        ],
        '7FFF00' => [
            'chartreuse',
            'chartreuse1',
        ],
        '00FA9A' => [
            'MediumSpringGreen',
            'medium spring green',
        ],
        'ADFF2F' => [
            'GreenYellow',
            'green yellow',
        ],
        '32CD32' => [
            'LimeGreen',
            'lime green',
        ],
        '9ACD32' => [
            'YellowGreen',
            'yellow green',
            'OliveDrab3',
        ],
        '228B22' => [
            'ForestGreen',
            'forest green',
        ],
        '6B8E23' => [
            'OliveDrab',
            'olive drab',
        ],
        'BDB76B' => [
            'DarkKhaki',
            'dark khaki',
        ],
        'F0E68C' => [
            'khaki',
        ],
        'EEE8AA' => [
            'PaleGoldenrod',
            'pale goldenrod',
        ],
        'FAFAD2' => [
            'LightGoldenrodYellow',
            'light goldenrod yellow',
        ],
        'FFFFE0' => [
            'LightYellow',
            'light yellow',
            'LightYellow1',
        ],
        'FFFF00' => [
            'yellow',
            'yellow1',
        ],
        'FFD700' => [
            'gold',
            'gold1',
        ],
        'EEDD82' => [
            'LightGoldenrod',
            'light goldenrod',
        ],
        'DAA520' => [
            'goldenrod',
        ],
        'B8860B' => [
            'DarkGoldenrod',
            'dark goldenrod',
        ],
        'BC8F8F' => [
            'RosyBrown',
            'rosy brown',
        ],
        'CD5C5C' => [
            'IndianRed',
            'indian red',
        ],
        '8B4513' => [
            'SaddleBrown',
            'saddle brown',
            'chocolate4',
        ],
        'A0522D' => [
            'sienna',
        ],
        'CD853F' => [
            'peru',
            'tan3',
        ],
        'DEB887' => [
            'burlywood',
        ],
        'F5F5DC' => [
            'beige',
        ],
        'F5DEB3' => [
            'wheat',
        ],
        'F4A460' => [
            'SandyBrown',
            'sandy brown',
        ],
        'D2B48C' => [
            'tan',
        ],
        'D2691E' => [
            'chocolate',
        ],
        'B22222' => [
            'firebrick',
        ],
        'A52A2A' => [
            'brown',
        ],
        'E9967A' => [
            'DarkSalmon',
            'dark salmon',
        ],
        'FA8072' => [
            'salmon',
        ],
        'FFA07A' => [
            'LightSalmon',
            'light salmon',
            'LightSalmon1',
        ],
        'FFA500' => [
            'orange',
            'orange1',
        ],
        'FF8C00' => [
            'DarkOrange',
            'dark orange',
        ],
        'FF7F50' => [
            'coral',
        ],
        'F08080' => [
            'LightCoral',
            'light coral',
        ],
        'FF6347' => [
            'tomato',
            'tomato1',
        ],
        'FF4500' => [
            'OrangeRed',
            'orange red',
            'OrangeRed1',
        ],
        'FF0000' => [
            'red',
            'red1',
        ],
        'FF69B4' => [
            'HotPink',
            'hot pink',
        ],
        'FF1493' => [
            'DeepPink',
            'deep pink',
            'DeepPink1',
        ],
        'FFC0CB' => [
            'pink',
        ],
        'FFB6C1' => [
            'LightPink',
            'light pink',
        ],
        'DB7093' => [
            'PaleVioletRed',
            'pale violet red',
        ],
        'B03060' => [
            'maroon',
            'X11Maroon',
            'x11 maroon',
        ],
        '800000' => [
            'WebMaroon',
            'web maroon',
        ],
        'C71585' => [
            'MediumVioletRed',
            'medium violet red',
        ],
        'D02090' => [
            'VioletRed',
            'violet red',
        ],
        'FF00FF' => [
            'magenta',
            'fuchsia',
            'magenta1',
        ],
        'EE82EE' => [
            'violet',
        ],
        'DDA0DD' => [
            'plum',
        ],
        'DA70D6' => [
            'orchid',
        ],
        'BA55D3' => [
            'medium orchid',
            'MediumOrchid',
        ],
        '9932CC' => [
            'DarkOrchid',
            'dark orchid',
        ],
        '9400D3' => [
            'DarkViolet',
            'dark violet',
        ],
        '8A2BE2' => [
            'BlueViolet',
            'blue violet',
        ],
        'A020F0' => [
            'purple',
            'X11Purple',
            'x11 purple',
        ],
        '800080' => [
            'WebPurple',
            'web purple',
        ],
        '9370DB' => [
            'MediumPurple',
            'medium purple',
        ],
        'D8BFD8' => [
            'thistle',
        ],
        'EEE9E9' => [
            'snow2',
        ],
        'CDC9C9' => [
            'snow3',
        ],
        '8B8989' => [
            'snow4',
        ],
        'EEE5DE' => [
            'seashell2',
        ],
        'CDC5BF' => [
            'seashell3',
        ],
        '8B8682' => [
            'seashell4',
        ],
        'FFEFDB' => [
            'AntiqueWhite1',
        ],
        'EEDFCC' => [
            'AntiqueWhite2',
        ],
        'CDC0B0' => [
            'AntiqueWhite3',
        ],
        '8B8378' => [
            'AntiqueWhite4',
        ],
        'EED5B7' => [
            'bisque2',
        ],
        'CDB79E' => [
            'bisque3',
        ],
        '8B7D6B' => [
            'bisque4',
        ],
        'EECBAD' => [
            'PeachPuff2',
        ],
        'CDAF95' => [
            'PeachPuff3',
        ],
        '8B7765' => [
            'PeachPuff4',
        ],
        'EECFA1' => [
            'NavajoWhite2',
        ],
        'CDB38B' => [
            'NavajoWhite3',
        ],
        '8B795E' => [
            'NavajoWhite4',
        ],
        'EEE9BF' => [
            'LemonChiffon2',
        ],
        'CDC9A5' => [
            'LemonChiffon3',
        ],
        '8B8970' => [
            'LemonChiffon4',
        ],
        'EEE8CD' => [
            'cornsilk2',
        ],
        'CDC8B1' => [
            'cornsilk3',
        ],
        '8B8878' => [
            'cornsilk4',
        ],
        'EEEEE0' => [
            'ivory2',
        ],
        'CDCDC1' => [
            'ivory3',
        ],
        '8B8B83' => [
            'ivory4',
        ],
        'E0EEE0' => [
            'honeydew2',
        ],
        'C1CDC1' => [
            'honeydew3',
        ],
        '838B83' => [
            'honeydew4',
        ],
        'EEE0E5' => [
            'LavenderBlush2',
        ],
        'CDC1C5' => [
            'LavenderBlush3',
        ],
        '8B8386' => [
            'LavenderBlush4',
        ],
        'EED5D2' => [
            'MistyRose2',
        ],
        'CDB7B5' => [
            'MistyRose3',
        ],
        '8B7D7B' => [
            'MistyRose4',
        ],
        'E0EEEE' => [
            'azure2',
        ],
        'C1CDCD' => [
            'azure3',
        ],
        '838B8B' => [
            'azure4',
        ],
        '836FFF' => [
            'SlateBlue1',
        ],
        '7A67EE' => [
            'SlateBlue2',
        ],
        '6959CD' => [
            'SlateBlue3',
        ],
        '473C8B' => [
            'SlateBlue4',
        ],
        '4876FF' => [
            'RoyalBlue1',
        ],
        '436EEE' => [
            'RoyalBlue2',
        ],
        '3A5FCD' => [
            'RoyalBlue3',
        ],
        '27408B' => [
            'RoyalBlue4',
        ],
        '0000EE' => [
            'blue2',
        ],
        '00008B' => [
            'DarkBlue',
            'dark blue',
            'blue4',
        ],
        '1C86EE' => [
            'DodgerBlue2',
        ],
        '1874CD' => [
            'DodgerBlue3',
        ],
        '104E8B' => [
            'DodgerBlue4',
        ],
        '63B8FF' => [
            'SteelBlue1',
        ],
        '5CACEE' => [
            'SteelBlue2',
        ],
        '4F94CD' => [
            'SteelBlue3',
        ],
        '36648B' => [
            'SteelBlue4',
        ],
        '00B2EE' => [
            'DeepSkyBlue2',
        ],
        '009ACD' => [
            'DeepSkyBlue3',
        ],
        '00688B' => [
            'DeepSkyBlue4',
        ],
        '87CEFF' => [
            'SkyBlue1',
        ],
        '7EC0EE' => [
            'SkyBlue2',
        ],
        '6CA6CD' => [
            'SkyBlue3',
        ],
        '4A708B' => [
            'SkyBlue4',
        ],
        'B0E2FF' => [
            'LightSkyBlue1',
        ],
        'A4D3EE' => [
            'LightSkyBlue2',
        ],
        '8DB6CD' => [
            'LightSkyBlue3',
        ],
        '607B8B' => [
            'LightSkyBlue4',
        ],
        'C6E2FF' => [
            'SlateGray1',
        ],
        'B9D3EE' => [
            'SlateGray2',
        ],
        '9FB6CD' => [
            'SlateGray3',
        ],
        '6C7B8B' => [
            'SlateGray4',
        ],
        'CAE1FF' => [
            'LightSteelBlue1',
        ],
        'BCD2EE' => [
            'LightSteelBlue2',
        ],
        'A2B5CD' => [
            'LightSteelBlue3',
        ],
        '6E7B8B' => [
            'LightSteelBlue4',
        ],
        'BFEFFF' => [
            'LightBlue1',
        ],
        'B2DFEE' => [
            'LightBlue2',
        ],
        '9AC0CD' => [
            'LightBlue3',
        ],
        '68838B' => [
            'LightBlue4',
        ],
        'D1EEEE' => [
            'LightCyan2',
        ],
        'B4CDCD' => [
            'LightCyan3',
        ],
        '7A8B8B' => [
            'LightCyan4',
        ],
        'BBFFFF' => [
            'PaleTurquoise1',
        ],
        'AEEEEE' => [
            'PaleTurquoise2',
        ],
        '96CDCD' => [
            'PaleTurquoise3',
        ],
        '668B8B' => [
            'PaleTurquoise4',
        ],
        '98F5FF' => [
            'CadetBlue1',
        ],
        '8EE5EE' => [
            'CadetBlue2',
        ],
        '7AC5CD' => [
            'CadetBlue3',
        ],
        '53868B' => [
            'CadetBlue4',
        ],
        '00F5FF' => [
            'turquoise1',
        ],
        '00E5EE' => [
            'turquoise2',
        ],
        '00C5CD' => [
            'turquoise3',
        ],
        '00868B' => [
            'turquoise4',
        ],
        '00EEEE' => [
            'cyan2',
        ],
        '00CDCD' => [
            'cyan3',
        ],
        '008B8B' => [
            'DarkCyan',
            'dark cyan',
            'cyan4',
        ],
        '97FFFF' => [
            'DarkSlateGray1',
        ],
        '8DEEEE' => [
            'DarkSlateGray2',
        ],
        '79CDCD' => [
            'DarkSlateGray3',
        ],
        '528B8B' => [
            'DarkSlateGray4',
        ],
        '76EEC6' => [
            'aquamarine2',
        ],
        '458B74' => [
            'aquamarine4',
        ],
        'C1FFC1' => [
            'DarkSeaGreen1',
        ],
        'B4EEB4' => [
            'DarkSeaGreen2',
        ],
        '9BCD9B' => [
            'DarkSeaGreen3',
        ],
        '698B69' => [
            'DarkSeaGreen4',
        ],
        '54FF9F' => [
            'SeaGreen1',
        ],
        '4EEE94' => [
            'SeaGreen2',
        ],
        '43CD80' => [
            'SeaGreen3',
        ],
        '9AFF9A' => [
            'PaleGreen1',
        ],
        '90EE90' => [
            'LightGreen',
            'light green',
            'PaleGreen2',
        ],
        '7CCD7C' => [
            'PaleGreen3',
        ],
        '548B54' => [
            'PaleGreen4',
        ],
        '00EE76' => [
            'SpringGreen2',
        ],
        '00CD66' => [
            'SpringGreen3',
        ],
        '008B45' => [
            'SpringGreen4',
        ],
        '00EE00' => [
            'green2',
        ],
        '00CD00' => [
            'green3',
        ],
        '008B00' => [
            'green4',
        ],
        '76EE00' => [
            'chartreuse2',
        ],
        '66CD00' => [
            'chartreuse3',
        ],
        '458B00' => [
            'chartreuse4',
        ],
        'C0FF3E' => [
            'OliveDrab1',
        ],
        'B3EE3A' => [
            'OliveDrab2',
        ],
        '698B22' => [
            'OliveDrab4',
        ],
        'CAFF70' => [
            'DarkOliveGreen1',
        ],
        'BCEE68' => [
            'DarkOliveGreen2',
        ],
        'A2CD5A' => [
            'DarkOliveGreen3',
        ],
        '6E8B3D' => [
            'DarkOliveGreen4',
        ],
        'FFF68F' => [
            'khaki1',
        ],
        'EEE685' => [
            'khaki2',
        ],
        'CDC673' => [
            'khaki3',
        ],
        '8B864E' => [
            'khaki4',
        ],
        'FFEC8B' => [
            'LightGoldenrod1',
        ],
        'EEDC82' => [
            'LightGoldenrod2',
        ],
        'CDBE70' => [
            'LightGoldenrod3',
        ],
        '8B814C' => [
            'LightGoldenrod4',
        ],
        'EEEED1' => [
            'LightYellow2',
        ],
        'CDCDB4' => [
            'LightYellow3',
        ],
        '8B8B7A' => [
            'LightYellow4',
        ],
        'EEEE00' => [
            'yellow2',
        ],
        'CDCD00' => [
            'yellow3',
        ],
        '8B8B00' => [
            'yellow4',
        ],
        'EEC900' => [
            'gold2',
        ],
        'CDAD00' => [
            'gold3',
        ],
        '8B7500' => [
            'gold4',
        ],
        'FFC125' => [
            'goldenrod1',
        ],
        'EEB422' => [
            'goldenrod2',
        ],
        'CD9B1D' => [
            'goldenrod3',
        ],
        '8B6914' => [
            'goldenrod4',
        ],
        'FFB90F' => [
            'DarkGoldenrod1',
        ],
        'EEAD0E' => [
            'DarkGoldenrod2',
        ],
        'CD950C' => [
            'DarkGoldenrod3',
        ],
        '8B6508' => [
            'DarkGoldenrod4',
        ],
        'FFC1C1' => [
            'RosyBrown1',
        ],
        'EEB4B4' => [
            'RosyBrown2',
        ],
        'CD9B9B' => [
            'RosyBrown3',
        ],
        '8B6969' => [
            'RosyBrown4',
        ],
        'FF6A6A' => [
            'IndianRed1',
        ],
        'EE6363' => [
            'IndianRed2',
        ],
        'CD5555' => [
            'IndianRed3',
        ],
        '8B3A3A' => [
            'IndianRed4',
        ],
        'FF8247' => [
            'sienna1',
        ],
        'EE7942' => [
            'sienna2',
        ],
        'CD6839' => [
            'sienna3',
        ],
        '8B4726' => [
            'sienna4',
        ],
        'FFD39B' => [
            'burlywood1',
        ],
        'EEC591' => [
            'burlywood2',
        ],
        'CDAA7D' => [
            'burlywood3',
        ],
        '8B7355' => [
            'burlywood4',
        ],
        'FFE7BA' => [
            'wheat1',
        ],
        'EED8AE' => [
            'wheat2',
        ],
        'CDBA96' => [
            'wheat3',
        ],
        '8B7E66' => [
            'wheat4',
        ],
        'FFA54F' => [
            'tan1',
        ],
        'EE9A49' => [
            'tan2',
        ],
        '8B5A2B' => [
            'tan4',
        ],
        'FF7F24' => [
            'chocolate1',
        ],
        'EE7621' => [
            'chocolate2',
        ],
        'CD661D' => [
            'chocolate3',
        ],
        'FF3030' => [
            'firebrick1',
        ],
        'EE2C2C' => [
            'firebrick2',
        ],
        'CD2626' => [
            'firebrick3',
        ],
        '8B1A1A' => [
            'firebrick4',
        ],
        'FF4040' => [
            'brown1',
        ],
        'EE3B3B' => [
            'brown2',
        ],
        'CD3333' => [
            'brown3',
        ],
        '8B2323' => [
            'brown4',
        ],
        'FF8C69' => [
            'salmon1',
        ],
        'EE8262' => [
            'salmon2',
        ],
        'CD7054' => [
            'salmon3',
        ],
        '8B4C39' => [
            'salmon4',
        ],
        'EE9572' => [
            'LightSalmon2',
        ],
        'CD8162' => [
            'LightSalmon3',
        ],
        '8B5742' => [
            'LightSalmon4',
        ],
        'EE9A00' => [
            'orange2',
        ],
        'CD8500' => [
            'orange3',
        ],
        '8B5A00' => [
            'orange4',
        ],
        'FF7F00' => [
            'DarkOrange1',
        ],
        'EE7600' => [
            'DarkOrange2',
        ],
        'CD6600' => [
            'DarkOrange3',
        ],
        '8B4500' => [
            'DarkOrange4',
        ],
        'FF7256' => [
            'coral1',
        ],
        'EE6A50' => [
            'coral2',
        ],
        'CD5B45' => [
            'coral3',
        ],
        '8B3E2F' => [
            'coral4',
        ],
        'EE5C42' => [
            'tomato2',
        ],
        'CD4F39' => [
            'tomato3',
        ],
        '8B3626' => [
            'tomato4',
        ],
        'EE4000' => [
            'OrangeRed2',
        ],
        'CD3700' => [
            'OrangeRed3',
        ],
        '8B2500' => [
            'OrangeRed4',
        ],
        'EE0000' => [
            'red2',
        ],
        'CD0000' => [
            'red3',
        ],
        '8B0000' => [
            'DarkRed',
            'dark red',
            'red4',
        ],
        'EE1289' => [
            'DeepPink2',
        ],
        'CD1076' => [
            'DeepPink3',
        ],
        '8B0A50' => [
            'DeepPink4',
        ],
        'FF6EB4' => [
            'HotPink1',
        ],
        'EE6AA7' => [
            'HotPink2',
        ],
        'CD6090' => [
            'HotPink3',
        ],
        '8B3A62' => [
            'HotPink4',
        ],
        'FFB5C5' => [
            'pink1',
        ],
        'EEA9B8' => [
            'pink2',
        ],
        'CD919E' => [
            'pink3',
        ],
        '8B636C' => [
            'pink4',
        ],
        'FFAEB9' => [
            'LightPink1',
        ],
        'EEA2AD' => [
            'LightPink2',
        ],
        'CD8C95' => [
            'LightPink3',
        ],
        '8B5F65' => [
            'LightPink4',
        ],
        'FF82AB' => [
            'PaleVioletRed1',
        ],
        'EE799F' => [
            'PaleVioletRed2',
        ],
        'CD6889' => [
            'PaleVioletRed3',
        ],
        '8B475D' => [
            'PaleVioletRed4',
        ],
        'FF34B3' => [
            'maroon1',
        ],
        'EE30A7' => [
            'maroon2',
        ],
        'CD2990' => [
            'maroon3',
        ],
        '8B1C62' => [
            'maroon4',
        ],
        'FF3E96' => [
            'VioletRed1',
        ],
        'EE3A8C' => [
            'VioletRed2',
        ],
        'CD3278' => [
            'VioletRed3',
        ],
        '8B2252' => [
            'VioletRed4',
        ],
        'EE00EE' => [
            'magenta2',
        ],
        'CD00CD' => [
            'magenta3',
        ],
        '8B008B' => [
            'DarkMagenta',
            'dark magenta',
            'magenta4',
        ],
        'FF83FA' => [
            'orchid1',
        ],
        'EE7AE9' => [
            'orchid2',
        ],
        'CD69C9' => [
            'orchid3',
        ],
        '8B4789' => [
            'orchid4',
        ],
        'FFBBFF' => [
            'plum1',
        ],
        'EEAEEE' => [
            'plum2',
        ],
        'CD96CD' => [
            'plum3',
        ],
        '8B668B' => [
            'plum4',
        ],
        'E066FF' => [
            'MediumOrchid1',
        ],
        'D15FEE' => [
            'MediumOrchid2',
        ],
        'B452CD' => [
            'MediumOrchid3',
        ],
        '7A378B' => [
            'MediumOrchid4',
        ],
        'BF3EFF' => [
            'DarkOrchid1',
        ],
        'B23AEE' => [
            'DarkOrchid2',
        ],
        '9A32CD' => [
            'DarkOrchid3',
        ],
        '68228B' => [
            'DarkOrchid4',
        ],
        '9B30FF' => [
            'purple1',
        ],
        '912CEE' => [
            'purple2',
        ],
        '7D26CD' => [
            'purple3',
        ],
        '551A8B' => [
            'purple4',
        ],
        'AB82FF' => [
            'MediumPurple1',
        ],
        '9F79EE' => [
            'MediumPurple2',
        ],
        '8968CD' => [
            'MediumPurple3',
        ],
        '5D478B' => [
            'MediumPurple4',
        ],
        'FFE1FF' => [
            'thistle1',
        ],
        'EED2EE' => [
            'thistle2',
        ],
        'CDB5CD' => [
            'thistle3',
        ],
        '8B7B8B' => [
            'thistle4',
        ],
        '030303' => [
            'gray1',
            'grey1',
        ],
        '050505' => [
            'gray2',
            'grey2',
        ],
        '080808' => [
            'gray3',
            'grey3',
        ],
        '0A0A0A' => [
            'gray4',
            'grey4',
        ],
        '0D0D0D' => [
            'gray5',
            'grey5',
        ],
        '0F0F0F' => [
            'gray6',
            'grey6',
        ],
        '121212' => [
            'gray7',
            'grey7',
        ],
        '141414' => [
            'gray8',
            'grey8',
        ],
        '171717' => [
            'gray9',
            'grey9',
        ],
        '1A1A1A' => [
            'gray10',
            'grey10',
        ],
        '1C1C1C' => [
            'gray11',
            'grey11',
        ],
        '1F1F1F' => [
            'gray12',
            'grey12',
        ],
        '212121' => [
            'gray13',
            'grey13',
        ],
        '242424' => [
            'gray14',
            'grey14',
        ],
        '262626' => [
            'gray15',
            'grey15',
        ],
        '292929' => [
            'gray16',
            'grey16',
        ],
        '2B2B2B' => [
            'gray17',
            'grey17',
        ],
        '2E2E2E' => [
            'gray18',
            'grey18',
        ],
        '303030' => [
            'gray19',
            'grey19',
        ],
        '333333' => [
            'gray20',
            'grey20',
        ],
        '363636' => [
            'gray21',
            'grey21',
        ],
        '383838' => [
            'gray22',
            'grey22',
        ],
        '3B3B3B' => [
            'gray23',
            'grey23',
        ],
        '3D3D3D' => [
            'gray24',
            'grey24',
        ],
        '404040' => [
            'gray25',
            'grey25',
        ],
        '424242' => [
            'gray26',
            'grey26',
        ],
        '454545' => [
            'gray27',
            'grey27',
        ],
        '474747' => [
            'gray28',
            'grey28',
        ],
        '4A4A4A' => [
            'gray29',
            'grey29',
        ],
        '4D4D4D' => [
            'gray30',
            'grey30',
        ],
        '4F4F4F' => [
            'gray31',
            'grey31',
        ],
        '525252' => [
            'gray32',
            'grey32',
        ],
        '545454' => [
            'gray33',
            'grey33',
        ],
        '575757' => [
            'gray34',
            'grey34',
        ],
        '595959' => [
            'gray35',
            'grey35',
        ],
        '5C5C5C' => [
            'gray36',
            'grey36',
        ],
        '5E5E5E' => [
            'gray37',
            'grey37',
        ],
        '616161' => [
            'gray38',
            'grey38',
        ],
        '636363' => [
            'gray39',
            'grey39',
        ],
        '666666' => [
            'gray40',
            'grey40',
        ],
        '6B6B6B' => [
            'gray42',
            'grey42',
        ],
        '6E6E6E' => [
            'gray43',
            'grey43',
        ],
        '707070' => [
            'gray44',
            'grey44',
        ],
        '737373' => [
            'gray45',
            'grey45',
        ],
        '757575' => [
            'gray46',
            'grey46',
        ],
        '787878' => [
            'gray47',
            'grey47',
        ],
        '7A7A7A' => [
            'gray48',
            'grey48',
        ],
        '7D7D7D' => [
            'gray49',
            'grey49',
        ],
        '7F7F7F' => [
            'gray50',
            'grey50',
        ],
        '828282' => [
            'gray51',
            'grey51',
        ],
        '858585' => [
            'gray52',
            'grey52',
        ],
        '878787' => [
            'gray53',
            'grey53',
        ],
        '8A8A8A' => [
            'gray54',
            'grey54',
        ],
        '8C8C8C' => [
            'gray55',
            'grey55',
        ],
        '8F8F8F' => [
            'gray56',
            'grey56',
        ],
        '919191' => [
            'gray57',
            'grey57',
        ],
        '949494' => [
            'gray58',
            'grey58',
        ],
        '969696' => [
            'gray59',
            'grey59',
        ],
        '999999' => [
            'gray60',
            'grey60',
        ],
        '9C9C9C' => [
            'gray61',
            'grey61',
        ],
        '9E9E9E' => [
            'gray62',
            'grey62',
        ],
        'A1A1A1' => [
            'gray63',
            'grey63',
        ],
        'A3A3A3' => [
            'gray64',
            'grey64',
        ],
        'A6A6A6' => [
            'gray65',
            'grey65',
        ],
        'A8A8A8' => [
            'gray66',
            'grey66',
        ],
        'ABABAB' => [
            'gray67',
            'grey67',
        ],
        'ADADAD' => [
            'gray68',
            'grey68',
        ],
        'B0B0B0' => [
            'gray69',
            'grey69',
        ],
        'B3B3B3' => [
            'gray70',
            'grey70',
        ],
        'B5B5B5' => [
            'gray71',
            'grey71',
        ],
        'B8B8B8' => [
            'gray72',
            'grey72',
        ],
        'BABABA' => [
            'gray73',
            'grey73',
        ],
        'BDBDBD' => [
            'gray74',
            'grey74',
        ],
        'BFBFBF' => [
            'gray75',
            'grey75',
        ],
        'C2C2C2' => [
            'gray76',
            'grey76',
        ],
        'C4C4C4' => [
            'gray77',
            'grey77',
        ],
        'C7C7C7' => [
            'gray78',
            'grey78',
        ],
        'C9C9C9' => [
            'gray79',
            'grey79',
        ],
        'CCCCCC' => [
            'gray80',
            'grey80',
        ],
        'CFCFCF' => [
            'gray81',
            'grey81',
        ],
        'D1D1D1' => [
            'gray82',
            'grey82',
        ],
        'D4D4D4' => [
            'gray83',
            'grey83',
        ],
        'D6D6D6' => [
            'gray84',
            'grey84',
        ],
        'D9D9D9' => [
            'gray85',
            'grey85',
        ],
        'DBDBDB' => [
            'gray86',
            'grey86',
        ],
        'DEDEDE' => [
            'gray87',
            'grey87',
        ],
        'E0E0E0' => [
            'gray88',
            'grey88',
        ],
        'E3E3E3' => [
            'gray89',
            'grey89',
        ],
        'E5E5E5' => [
            'gray90',
            'grey90',
        ],
        'E8E8E8' => [
            'gray91',
            'grey91',
        ],
        'EBEBEB' => [
            'gray92',
            'grey92',
        ],
        'EDEDED' => [
            'gray93',
            'grey93',
        ],
        'F0F0F0' => [
            'gray94',
            'grey94',
        ],
        'F2F2F2' => [
            'gray95',
            'grey95',
        ],
        'F7F7F7' => [
            'gray97',
            'grey97',
        ],
        'FAFAFA' => [
            'gray98',
            'grey98',
        ],
        'FCFCFC' => [
            'gray99',
            'grey99',
        ],
        'A9A9A9' => [
            'DarkGray',
            'dark gray',
            'DarkGrey',
            'dark grey',
        ],
        'DC143C' => [
            'crimson',
        ],
        '4B0082' => [
            'indigo',
        ],
        '808000' => [
            'olive',
        ],
        '663399' => [
            'RebeccaPurple',
            'rebecca purple',
        ],
        'C0C0C0' => [
            'silver',
        ],
        '008080' => [
            'teal',
        ],
    ];

    /**
     * @param string $needle
     *
     * @return string
     */
    public static function search($needle)
    {
        $result = self::arraySearch($needle, self::$colors);

        if (!empty($result)) {
            return $result;
        }

        throw new ColorException('No matching CSS color found');
    }

    /**
     * @param string $needle
     * @param array  $haystack
     *
     * @return string|bool
     */
    private static function arraySearch($needle, array $haystack)
    {
        foreach ($haystack as $key => $value) {
            if ($needle === $value || (is_array($value) && self::arraySearch($needle, $value) !== false)) {
                return $key;
            }
        }

        return false;
    }
}
