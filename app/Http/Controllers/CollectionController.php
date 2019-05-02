<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
class CollectionController extends Controller
{  
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
    {
        $collections=Collection::all();
        return view('dashboard.collections.index')->with('collections',$collections);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.collections.create');
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
        'description'=>'required',
        'image'=>'image|required|max:1999'
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
            $path = $request->file('image')->storeAs('public/collection_images', $fileNameToStore);
        }
        
        $collection = new Collection ;
        $collection->name=$request->input('name');
        $collection->description=$request->input('description');
        $collection->image=$fileNameToStore;

        $collection->save();


        return redirect('/collections')->with('success','Collection created');
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
        $collection= Collection::find($id);
        return view('dashboard.collections.edit')->with('collection',$collection);
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
            'description'=>'required',
            'image'=>'image|nullable|max:1999'
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
                $path = $request->file('image')->storeAs('public/collection_images', $fileNameToStore);
                
            }
            $collection=Collection::find($id);
            $collection->name=$request->input('name');
            $collection->description=$request->input('description');
            if($request->hasFile('image')){
            $collection->image=$fileNameToStore;
            }
            $collection->save();
    
            return redirect('/collections')->with('success','Collection updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collection=Collection::find($id);
        $collection->delete();
        $collections=Collection::all();
        return view('dashboard.collections.index')->with('collections',$collections);
    }
}
