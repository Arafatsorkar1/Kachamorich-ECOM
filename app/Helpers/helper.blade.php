<?php

use App\Models\BusinessSetting;
use Illuminate\Support\Facades\Cache;

function uploadImage($request, $update_image = null){
    return $request->hasFile('image')?$request->file('image')->store('/images', ['disk' =>'my_files']): $update_image->image ?? 'image/default.jpg';
}


