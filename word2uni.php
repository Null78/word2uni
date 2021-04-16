<?php
/**
 * word2uni
 * This code is a part of aCAPTCHA project, This copyright notice MUST stay intact for use
 * @package aCAPTCHA 
 * @author Abd Allatif Eymsh, Albaraa Hassan
 * @copyright (c) 2021
 * @param string $text
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License v2
 */

function text2uni($text)
 {
    if (preg_match("/(^(?=.*[a-zA-Z])(?=.*[a-zA-Z]?)[ a-zA-Z]+$)/", $text)){
        $out = $text;
    } else {
        $arr = explode(' ', $text);
        $last = array();
        foreach ($arr as &$word) {
            if (preg_match("/(^(?=.*[\x{0600}-\x{06ff}])(?=.*[\x{0600}-\x{06ff}]?)[\x{0600}-\x{06ff}]+$)/u", $word)) {
                $last[] = word2uni($word);
            } else {
                $last[] = $word;
            }
            
        }
        $out = implode(' ', array_reverse($last));
    }
    return $out;
 }


function word2uni($word)
{

    if (strlen($word) <= 2) {
        return $word;
    }
	$new_word = array();
	$char_type = array();
	$isolated_chars = array('ا', 'د', 'ذ', 'أ', 'آ', 'ر', 'ؤ', 'ء', 'ز', 'و', 'ى', 'ة');

	$all_chars = array
		(
			'ا' => array(
                'middle'		=>   '&#xFE8E;',
                'end'		=>   '&#xFE8E;',
				'isolated'		=>   'ا'
				),
		
			'ؤ' => array(
	
				'middle'		=>   '&#xFE85;',
                'end'		=>   '&#xFE85;',
				'isolated'		=>   'ؤ'
				),
			'ء' => array(
				'middle'		=>   '&#xFE80;',
				'end'		=>   '&#xFE80;',
				'isolated'		=>   'ء'
				),
			'أ' => array(
	
				'middle'		=>   '&#xFE84;',
                'end'		=>   '&#xFE84;',
				'isolated'		=>   'أ'
				),
			'آ' => array(
				'middle'		=>   '&#xFE82;',
				'end'		=>   '&#xFE82;',
				'isolated'		=>   'آ'
				),
			'ى' => array(
                'middle'		=>   '&#xFEF0;',
                'end'		=>   '&#xFEF0;',
				'isolated'		=>   'ى'
				),
			'ب' => array(
				'beginning'		=>   '&#xFE91;',
				'middle'		=>   '&#xFE92;',
				'end'			=>   '&#xFE90;',
				'isolated'		=>   'ب'
				),
			'ت' => array(
				'beginning'		=>   '&#xFE97;',
				'middle'		=>   '&#xFE98;',
				'end'			=>   '&#xFE96;',
				'isolated'		=>   'ت'
				),
			'ث' => array(
				'beginning'		=>   '&#xFE9B;',
				'middle'		=>   '&#xFE9C;',
				'end'			=>   '&#xFE9A;',
				'isolated'		=>   'ث'
				),
			'ج' => array(
				'beginning'		=>   '&#xFE9F;',
				'middle'		=>   '&#xFEA0;',
				'end'			=>   '&#xFE9E;',
				'isolated'		=>   'ج'
				),
			'ح' => array(
				'beginning'		=>   '&#xFEA3;',
				'middle'		=>   '&#xFEA4;',
				'end'			=>   '&#xFEA2;',
				'isolated'		=>   'ح'
				),
			'خ' => array(
				'beginning'		=>   '&#xFEA7;',
				'middle'		=>   '&#xFEA8;',
				'end'			=>   '&#xFEA6;',
				'isolated'		=>   'خ'
				),
			'د' => array(
				'middle'		=>   '&#xFEAA;',
				'end'		    =>   '&#xFEAA;',
				'isolated'		=>   'د'
				),
			'ذ' => array(
				'middle'		=>   '&#xFEAC;',
				'end'		    =>   '&#xFEAC;',
				'isolated'		=>   'ذ'
				),
			'ر' => array(
				'middle'		=>   '&#xFEAE;',
				'end'		    =>   '&#xFEAE;',
				'isolated'		=>   'ر'
				),
			'ز' => array(
				'middle'		=>   '&#xFEB0;',
				'end'		    =>   '&#xFEB0;',
				'isolated'		=>   'ز'
				),
			'س' => array(
				'beginning'		=>   '&#xFEB3;',
				'middle'		=>   '&#xFEB4;',
				'end'			=>   '&#xFEB2;',
				'isolated'		=>   'س'
				),
			'ش' => array(
				'beginning'		=>   '&#xFEB7;',
				'middle'		=>   '&#xFEB8;',
				'end'			=>   '&#xFEB6;',
				'isolated'		=>   'ش'
				),
			'ص' => array(
				'beginning'		=>   '&#xFEBB;',
				'middle'		=>   '&#xFEBC;',
				'end'			=>   '&#xFEBA;',
				'isolated'		=>   'ص'
				),
			'ض' => array(
				'beginning'		=>   '&#xFEBF;',
				'middle'		=>   '&#xFEC0;',
				'end'			=>   '&#xFEBE;',
				'isolated'		=>   'ض'
				),
			'ط' => array(
				'beginning'		=>   '&#xFEC3;',
				'middle'		=>   '&#xFEC4;',
				'end'			=>   '&#xFEC2;',
				'isolated'		=>   'ط'
				),
			'ظ' => array(
				'beginning'		=>   '&#xFEC7;',
				'middle'		=>   '&#xFEC8;',
				'end'			=>   '&#xFEC6;',
				'isolated'		=>   'ظ'
				),
			'ع' => array(
				'beginning'		=>   '&#xFECB;',
				'middle'		=>   '&#xFECC;',
				'end'			=>   '&#xFECA;',
				'isolated'		=>   'ع'
				),
			'غ' => array(
				'beginning'		=>   '&#xFECF;',
				'middle'		=>   '&#xFED0;',
				'end'			=>   '&#xFECE;',
				'isolated'		=>   'غ'
				),
			'ف' => array(
				'beginning'		=>   '&#xFED3;',
				'middle'		=>   '&#xFED4;',
				'end'			=>   '&#xFED2;',
				'isolated'		=>   'ف'
				),
			'ق' => array(
				'beginning'		=>   '&#xFED7;',
				'middle'		=>   '&#xFED8;',
				'end'			=>   '&#xFED6;',
				'isolated'		=>   'ق'
				),
			'ك' => array(
				'beginning'		=>   '&#xFEDB;',
				'middle'		=>   '&#xFEDC;',
				'end'			=>   '&#xFEDA;',
				'isolated'		=>   'ك'
				),
			'ل' => array(
				'beginning'		=>   '&#xFEDF;',
				'middle'		=>   '&#xFEE0;',
				'end'			=>   '&#xFEDE;',
				'isolated'		=>   'ل'
				),
			'م' => array(
				'beginning'		=>   '&#xFEE3;',
				'middle'		=>   '&#xFEE4;',
				'end'			=>   '&#xFEE2;',
				'isolated'		=>   'م'
				),
			'ن' => array(
				'beginning'		=>   '&#xFEE7;',
				'middle'		=>   '&#xFEE8;',
				'end'			=>   '&#xFEE6;',
				'isolated'		=>   'ن'
				),
			'ه' => array(
				'beginning'		=>   '&#xFEEB;',
				'middle'		=>   '&#xFEEC;',
				'end'			=>   '&#xFEEA;',
				'isolated'		=>   'ه'
				),
			'و' => array(
				'middle'		=>   '&#xFEEE;',
				'end'		=>   '&#xFEEE;',
				'isolated'		=>   'و'
				),
			'ي' => array(
				'beginning'		=>   '&#xFEF3;',
				'middle'		=>   '&#xFEF4;',
				'end'			=>   '&#xFEF2;',
				'isolated'		=>   'ي'
				),
			'ئ' => array(
				'beginning'		=>   '&#xFE8B;',
				'middle'		=>   '&#xFE8C;',
				'end'			=>   '&#xFE8A;',
				'isolated'		=>   'ئ'
				),
			'ة' => array(
				'middle'		=>   '&#xFE94;',
				'end'		=>   '&#xFE94;',
				'isolated'		=>   'ة'
				)
		);
        
	if(in_array($word[0].$word[1], $isolated_chars))
	{
		$new_word[] = $word[0].$word[1];
        $char_type[] = 'not_normal';
	}
	else
	{
		$new_word[] = $all_chars[$word[0].$word[1]]['beginning'];
        $char_type[] = 'normal';
	}

	if(strlen($word) > 4)
	{
		if($char_type[0] == 'not_normal')

		{
			if(in_array($word[2].$word[3], $isolated_chars))
			{
				$new_word[] = $word[2].$word[3];
                $char_type[] = 'not_normal';
			}
			else
			{
				$new_word[] = $all_chars[$word[2].$word[3]]['beginning'];
                $char_type[] = 'normal';
			}
		}
		else
		{
			$new_word[] = $all_chars[$word[2].$word[3]]['middle'];
            $chars_statue[] = 'middle';

			if(in_array($word[2].$word[3], $isolated_chars))
			{
                $char_type[] = 'not_normal';
			}
			else
			{
                $char_type[] = 'normal';
			}
		}
		$x = 4;
	}
	else
	{
        if (strlen($word) == 4) {
            $new_word = [];
            if($word[0].$word[1] == 'ل' and $word[2].$word[3] == 'ا') {
                $new_word[] = '&#xFEFB;';
            } else {
                if(in_array($word[0].$word[1], $isolated_chars)) {
                    $new_word[] = $all_chars[$word[0].$word[1]]['isolated'];
                    $new_word[] = $all_chars[$word[2].$word[3]]['isolated'];
                } else {
                    if($word[2].$word[3] == 'ء') {
                        $new_word[] = $all_chars[$word[0].$word[1]]['isolated'];
                        $new_word[] = 'ء';
                    } else {
                        $new_word[] = $all_chars[$word[0].$word[1]]['beginning'];
                        $new_word[] = $all_chars[$word[2].$word[3]]['end'];
                    }
                }
    
            }

            return implode('',array_reverse($new_word));
        }
        $x = 2;	
	}
	
	for($x=4;$x< (strlen($word)-4) ;$x++)
	{
		if($char_type[count($char_type)-1] == 'not_normal' AND $x %2 == 0)
		{
			if(in_array($word[$x].$word[$x+1], $isolated_chars))
			{
				$new_word[] = $word[$x].$word[$x+1];
				$char_type[] = 'not_normal';
			}
			else
			{
				$new_word[] = $all_chars[$word[$x].$word[$x+1]]['beginning'];
				$char_type[] = 'normal';
			}
		}
		elseif($char_type[count($char_type)-1] == 'normal' AND $x %2 == 0)
		{
			
			if(in_array($word[$x].$word[$x+1], $isolated_chars))
			{
				$new_word[] = $all_chars[$word[$x].$word[$x+1]]['middle'];
				$char_type[] = 'not_normal';
			}
			else
			{
				$new_word[] = $all_chars[$word[$x].$word[$x+1]]['middle'];
				$char_type[] = 'normal';
			}
		}

	}
	if(strlen($word)>6)
	{
		if($char_type[count($char_type)-1] == 'not_normal')
		{
			if(in_array($word[$x].$word[$x+1], $isolated_chars))
			{
				$new_word[] = $word[$x].$word[$x+1];
				$char_type[] = 'not_normal';
			}
			else
			{
				
				if($word[strlen($word)-2].$word[strlen($word)-1] == 'ء')
				{
					$new_word[] = $word[$x].$word[$x+1];
					$char_type[] = 'normal';
				}
				else
				{
					$new_word[] = $all_chars[$word[$x].$word[$x+1]]['beginning'];
					$char_type[] = 'normal';
				}
					
			}

			$x += 2;
		}
		elseif($char_type[count($char_type)-1] == 'normal')
		{
			if(in_array($word[$x].$word[$x+1], $isolated_chars))
			{
				if($word[$x-2].$word[$x-1] == 'ل' and $word[$x].$word[$x+1] == 'ا') {
                    $new_word[count($new_word) - 1] = '&#xFEFC;';
                } else {
                    $new_word[] = $all_chars[$word[$x].$word[$x+1]]['middle'];
                }
				$char_type[] = 'not_normal';
			}
			else
			{
				$new_word[] = $all_chars[$word[$x].$word[$x+1]]['middle'];
				$char_type[] = 'normal';
			}

			$x += 2;
		}
		
		
	}
	
	if($char_type[count($char_type)-1] == 'not_normal')
	{

		if(in_array($word[$x].$word[$x+1], $isolated_chars))
		{		
			$new_word[] = $word[$x].$word[$x+1];

		}
		else
		{
            $new_word[] = $word[$x].$word[$x+1];
		}

	}
	else
	{
		if(in_array($word[$x].$word[$x+1], $isolated_chars))
		{
            if($word[$x-2].$word[$x-1] == 'ل' and $word[$x].$word[$x+1] == 'ا') {
                $new_word[count($new_word) - 1] = '&#xFEFC;';
            } else {
                $new_word[] = $all_chars[$word[$x].$word[$x+1]]['middle'];
            }
		}
		else
		{
            $new_word[] = $all_chars[$word[$x].$word[$x+1]]['end'];
		}
	}
    
    return implode('',array_reverse($new_word));
}
?>