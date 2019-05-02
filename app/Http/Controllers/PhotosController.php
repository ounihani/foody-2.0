<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reviews;
use App\Store;
use App\Menu;
use App\Photos;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
          'store_id'=>'required',
          'photo'=>'required|image'
          ]);
          $photos=new Photos();
          $photos->store_id=$request->input('store_id');
          if($request->hasFile('photo')){
              // Get filename with the extension
              $filenameWithExt = $request->file('photo')->getClientOriginalName();
              // Get just filename
              $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
              // Get just ext
              $extension = $request->file('photo')->getClientOriginalExtension();
              // Filename to store
              $fileNameToStore= $filename.'_'.time().'.'.$extension;
              // Upload Image
              $path = $request->file('photo')->storeAs('public/store_photos', $fileNameToStore);
          }

          if($request->hasFile('photo')){
              $photos->photo=$fileNameToStore;
          }else{
              $photos->photo="no_image.png";
          }
          $photos->user_id=1;
          $photos->save();

          $store = Store::find($request->input('store_id'));
          $menu=Menu::select()->where('store_id','=',$request->input('store_id'))->get();
          $photos=Photos::select()->where('store_id','=',$request->input('store_id'))->get();
          $reviews=Reviews::select()->where('store_id','=',$request->input('store_id'))->get();
          $sum=Reviews::where('store_id','=',$request->input('store_id'))->sum('rating');
          $count=Reviews::where('store_id','=',$request->input('store_id'))->count();
          if($count!=0){
          $rating=$sum/$count;
          }else {
          $rating=0;
          }
          return view('store.store')->with('parameters',['store'=>$store,'reviews'=>$reviews,'rating'=>$rating,'menu'=>$menu,'photos'=>$photos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
