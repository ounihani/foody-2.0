<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Collection;
use App\Preference;
use App\Payment;
use App\Category;
use App\Reviews;
use App\Menu;
use App\Photos;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores=Store::all();
        $collections=Collection::all();
        return view('welcome')->with('parameters',['stores'=>$stores,'collections'=>$collections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collections = Collection::All();
        $payments = Payment::All();
        $preferences = Preference::All();
        $categories = Category::All();
        return view('dashboard.stores.add')->with('parameters',['preferences'=>$preferences,'collections'=>$collections,'payments'=>$payments, 'categories'=>$categories ]);
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
            'logo'=>'image',
            'cover'=>'image'
            ]);

           if($request->hasFile('logo')){
                // Get filename with the extension
                $filenameWithExt = $request->file('logo')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('logo')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('logo')->storeAs('public/stores_logos', $fileNameToStore);
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
              $path = $request->file('cover')->storeAs('public/stores_covers', $fileNameToStore);
          }

          $store = new Store();
          $store->name=$request->input('store_name');
          $store->email=$request->input('mail');
          $store->phone_number=$request->input('phone_number');
          $store->address=$request->input('address');
          $store->longitude=0;
          $store->latitude=0;
          //return $request->get('preferences');
        //  $store->website=$request->input('website');//to add to a migration
          if($request->hasFile('logo')){
          $store->cover=$fileNameToStore1;
          }else{
              $store->cover="no_image.png";
          }

          if($request->hasFile('cover')){
          $store->logo=$fileNameToStore;
          }else{
              $store->logo="no_image.png";
          }
          $store->save();
          return redirect('/home/stores');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $store = Store::find($id);
        $photos=Photos::select()->where('store_id','=',$id)->get();
      $menu=Menu::select()->where('store_id','=',$id)->get();
      $reviews=Reviews::select()->where('store_id','=',$id)->get();
      $sum=Reviews::where('store_id','=',$id)->sum('rating');
      $count=Reviews::where('store_id','=',$id)->count();
      if($count!=0){
      $rating=$sum/$count;
      }else {
      $rating=0;
      }
      return view('store.store')->with('parameters',['store'=>$store,'reviews'=>$reviews,'rating'=>$rating,'menu'=>$menu,'photos'=>$photos]);
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
      $store=Store::find($id);
      $store->delete();
      $stores=Store::all();
      return view('dashboard.stores.index')->with('stores',$stores);
    }
}
