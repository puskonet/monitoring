<?php

class Enkripsi{

	function kunci($file){
    $image=file_get_contents($file);
    $encrypted=base64_encode($image);
    return $encrypted;
	}

}
