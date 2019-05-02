<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories=Category::all();
        return view('dashboard.categories.index')->with('categories',$categories);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'image'=>'image|nullable|max:1999',
            'cover'=>'image|nullable|max:1999'
            ]);
            
            if($request->hasFile('image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('image')->storeAs('public/categories_images', $fileNameToStore);
            }

            if($request->hasFile('cover')){
                // Get filename with the extension
                $filenameWithExt = $request->file('cover')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore1= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover')->storeAs('public/categories_images', $fileNameToStore1);
            }
            
            $category = new category ;
            $category->name=$request->input('name');
            
            if($request->hasFile('image')){
            $category->image=$fileNameToStore;
            }else{
                $category->image="no_image.png";  
            }

            if($request->hasFile('cover')){
            $category->cover=$fileNameToStore1;
            }else{
                $category->cover="no_image.png";  
            }

            $category->save();
    
    
            return redirect('/categories')->with('success','category created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'ok';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= Category::find($id);
        return view('dashboard.categories.edit')->with('category',$category);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $this->validate($request,[
            'name'=>'required',
            'image'=>'image|nullable|max:1999',
            'cover'=>'image|nullable|max:1999'
            ]);
            
            if($request->hasFile('image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('image')->storeAs('public/categories_images', $fileNameToStore);
            }

            if($request->hasFile('cover')){
                // Get filename with the extension
                $filenameWithExt = $request->file('cover')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore1= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover')->storeAs('public/categories_images', $fileNameToStore1);
            }
            
            $category = Category::find($id) ;
            $category->name=$request->input('name');
            
            if($request->hasFile('image')){
            $category->image=$fileNameToStore;
            }else{
                $category->image="no_image.png";  
            }

            if($request->hasFile('cover')){
            $category->cover=$fileNameToStore1;
            }else{
                $category->cover="no_image.png";  
            }

            $category->save();
               
    return redirect('/categories')->with('success','category updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        $categories=Category::all();
        return view('dashboard.categories.index')->with('categories',$categories);
    }
}
