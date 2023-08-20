<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $table = 'categories';
    protected $fillable = ['name', 'description', 'image', 'status'];

//    protected static $category;
//
//    protected $fillable = ['name', 'description', 'image', 'status'];
//
//    public static function createOrUpdateCategory($request, $id = null)
//    {
//        \App\Models\Category::updateOrCreate(['id' => $id], [
//            'name' => $request->name,
//            'description' => $request->description,
//            'image' => fileUpload($request->file('image'), 'category-images', isset($id) ? Category::find($id)->image : null),
//            'status' => $request->status
//        ]);
//    }
}
