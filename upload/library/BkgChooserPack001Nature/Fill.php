<?php

class BkgChooserPack001Nature_Fill{
	public static function callback(&$images){
		$imagesLicense = ''.
		'<a href="http://creativecommons.org/licenses/by-sa/3.0/">'.
			'<img src="styles/kiror/BkgChooserPack001Nature/licenseLogo/cc-by-sa-80x15.png" alt="Creative Commons Attribution-ShareAlike 3.0 Unported License" />'.
		'</a>';
		$imgs = [
		'01'=>[
			'nm'=>'Arboreal ballet',
			'by'=>'by Bob Farrell',
		],
		'02'=>[
			'nm'=>'Beach',
			'by'=>'by Renato Giordanelli',
		],
		'03'=>[
			'nm'=>'Below Clouds',
			'by'=>'by kobinho',
		],
		'04'=>[
			'nm'=>'Blue frost',
			'by'=>'by ppaabblloo77',
		],
		'05'=>[
			'nm'=>'Bosque TK',
			'by'=>'Biker Blue',
		],
		'06'=>[
			'nm'=>'Cedar Wax Wing',
			'by'=>'by Raymond Lavoie',
		],
		'07'=>[
			'nm'=>'Climbling',
			'by'=>'by David Andrie',
		],
		'08'=>[
			'nm'=>'Flocking',
			'by'=>'by noombox',
		],
		'09'=>[
			'nm'=>'Flor de Loto',
			'by'=>'by Pablo Meneses',
		],
		'10'=>[
			'nm'=>'Forever',
			'by'=>'by Shady S.',
		],
		'11'=>[
			'nm'=>'Gota D\'água',
			'by'=>'by Eiti Kimura',
		],
		'12'=>[
			'nm'=>'Gran Canaria',
			'by'=>'by ALF...',
		],
		'13'=>[
			'nm'=>'Grass',
			'by'=>'by Jeremy Hill',
		],
		'14'=>[
			'nm'=>'Grass in A',
			'by'=>'by Andrew Kneebone',
		],
		'15'=>[
			'nm'=>'Leftover',
			'by'=>'by Sagar Jain',
		],
		'16'=>[
			'nm'=>'Maraetai before sunrise',
			'by'=>'by Piotr Zurek',
		],
		'17'=>[
			'nm'=>'Mono Lake',
			'by'=>'by Angela Henderson',
		],
		'18'=>[
			'nm'=>'Mountains',
			'by'=>'by JamesPickles',
		],
		'19'=>[
			'nm'=>'Mount Snowdon, Wales',
			'by'=>'by Adam Vellender',
		],
		'20'=>[
			'nm'=>'Mr. Tau and The Tree',
			'by'=>'by TJ',
		],
		'21'=>[
			'nm'=>'Night Seascape',
			'by'=>'by Davor Dopar',
		],
		'22'=>[
			'nm'=>'Pantano de Orellana',
			'by'=>'by mgarciaiz',
		],
		'23'=>[
			'nm'=>'Quandro',
			'by'=>'by Tomas Vasconcelo',
		],
		'24'=>[
			'nm'=>'Radioactive Sunrise',
			'by'=>'by Piotr Zurek',
		],
		'25'=>[
			'nm'=>'salcantayperu',
			'by'=>'by Life Nomadic',
		],
		'26'=>[
			'nm'=>'Serenity Enchanted',
			'by'=>'by sirpecangum',
		],
		'27'=>[
			'nm'=>'Sunset',
			'by'=>'by Carmen Gloria',
		],
		'28'=>[
			'nm'=>'Tenerife Roques de Anaga',
			'by'=>'by Frederik Schulz',
		],
		'29'=>[
			'nm'=>'Thingvellir',
			'by'=>'by pattersa',
		],
		'30'=>[
			'nm'=>'Water web',
			'by'=>'by Tom Kijas',
		]];
		$imagesArray=[];
		foreach($imgs as $fileno=>$info){
			$info['lc']=$imagesLicense;
			$image=['info'=>$info,'image'=>['thumb'=>'','full'=>'']];
			$image['image']['full']  = 'styles/kiror/BkgChooserPack001Nature/defaultImages/'.$fileno.'.jpg';
			$image['image']['thumb'] = 'styles/kiror/BkgChooserPack001Nature/defaultImages/'.$fileno.'.png';
			$imagesArray[]=$image;
		}
		$images['kiror_BkgChooserPack001Nature'] = $imagesArray;
		//die(print_r($images,true));
	}
}
