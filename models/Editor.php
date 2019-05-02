<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.04.2019
 * Time: 16:07
 */

namespace app\models;

use Yii;
use yii\base\Model;

class Editor extends Model {
	public function Converter($dan){

		//Текст помещенный между ** становится жирным, то есть помещается в тег<b/>, символы ** удаляются из этой строки.
		//$rez = ".cvcvcvcv  **Настя**   cvcvcvc.";
		$rez = preg_replace('(\*\*(.*)\*\*)', '<b>$1</b>', $dan['text']);

		//Текст помещенный между * становится курсивным, то есть помещается в тег <i/>, символ * удаляется из этой строки.
		//$rez = ".cvcvcvcv  *Настя*   EDFFFFFFFFF.";
		$rez = preg_replace('(\*(.*)\*)', '<i>$1</i>', $rez);

		//вся строка, которая начинается с символа # помещается в тег <H1/>. При переходе на новую строку, тег H1 закрывается. Символ # удаляется из этой строки.
		//$rez = ".cvcvcvcv  #Настя   EDFFFFFFFFF.";
		$rez = preg_replace('(#(.*))', '<h1>$1</h1>', $rez);
		$rez = preg_replace('~#(.*)[\\r\\n]~', '<h1>$1</h1>', $rez);

//Перенос строки заменяется на <br>
		$order    =  array("\r\n",  "\n",  "\r");
		$replace  =  '<br>';
		$rez  =  str_replace($order,  $replace,  $rez);

		//print_r($dan2);
		//exit();
		return $rez;
	}

}