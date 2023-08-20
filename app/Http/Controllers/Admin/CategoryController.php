<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Admin\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categorys = Category::all();
        return view('Admin.Category.index', compact('categorys'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    protected static $productImage,$imageName,$imageDirectory,$imageUrl;
    public function store(Request $request)
    {

        self::$productImage = $request->file('image');
        self::$imageName = rand(10,1000).'.'.self::$productImage->getClientOriginalExtension();
        self::$imageDirectory = 'backend/img/';
        self::$productImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' =>  self::$imageUrl,
            'status' => $request->status
        ]);
return redirect()->route('admin-categories.index')->with('success', 'Category Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category= Category::find($id);
        return view('Admin.Category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */

    static $category;
    public function update(Request $request , $id)
    {
//        dd($request);
        self::$productImage = $request->file('image');
        self::$imageName = rand(10,1000).'.'.self::$productImage->getClientOriginalExtension();
        self::$imageDirectory = 'backend/img/';
        self::$productImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;
//        return self::$imageUrl ;


        self::$category = Category::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }
            self::$imageUrl;
        }
        else
        {
            self::$imageUrl = self::$category->image;
        }

        self::$category->name           = $request->name;
        self::$category->description    = $request->description;
        self::$category->image          = self::$imageUrl;
        self::$category->status         = $request->status;
        self::$category->save();
        return redirect()->route('admin-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    private $del;
    public function destroy(string $id)
    {
       $this->del= Category::find($id);
       if (file_exists($this->del->image))
       {
           unlink($this->del->image);
       }
       $this->del->delete();
        return redirect()->back()->with('success');
    }
}
