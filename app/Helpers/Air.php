<?php

use App\Models\Upload;
use Illuminate\Support\Facades\Auth;

/**
 * 
 * Create directory in public with permission 0755
 */
function createPubDir($dir)
{
    if (!file_exists("storage/" . $dir)) {
        mkdir("storage/" . $dir, 0755);
    }
}


/**
 * 
 * 
 * Explod string saparated value to array useful for whereIn query
 */

function expForWhereIn($param): array
{
    $ex = explode(',', $param);
    $data = [];
    foreach ($ex as $key => $value) {
        $data[] = intval($value);
    }
    return $data;
}

/**
 * 
 * 
 * get current user id
 */
function gcuid()
{
    return Auth::user()->id;
}

/**
 * 
 * 
 * 
 * get Image by id
 */

 function getImageById($id)
 {
    $image = Upload::find($id);
    return url('storage/uploads/' . $image->url);
 }

 /**
  * 
  * Display Blog date format
  */

  function blogDateFormat($date){
    return date('d M, Y', strtotime($date));
  }