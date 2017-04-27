<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    static public function dump($results) {
		if(isset($results)) {
			echo '<pre>';
			print_r($results);
			echo '</pre>';
		}

		return false;
	}
	static public function generateRandomString($length) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
}
