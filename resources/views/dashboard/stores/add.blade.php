@extends('layouts.app')
@section('content')
    <div class="panel-heading">
        <div class="ui breadcrumb">
            <a class="section" href="/home">Dashboard</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Add Resto</div>
        </div>
    </div>
    <br>
    <div class="panel-body">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <div class="ui grid stackable">
            <!-- the side nav-->
            <div class="ui four wide column ">
            @include('inc.dashboard_sidebar')
            </div>
            <!-- The main column-->
            <div class="ui twelve wide column card">
              {!! Form::open(['action' => 'StoreController@store','class'=>'ui form', 'method' => 'POST','enctype' => 'multipart/form-data' ]) !!}
                    <h3 class="ui dividing header">Genaral Information</h3>
                    <div class="field">
                        <label>Store</label>
                        <div class="two fields">
                            <div class="field">
                                <input type="text" name="store_name" required placeholder="Store Name">
                            </div>
                            <div class="field">
                                <input type="Number" name="phone_number"  placeholder="phone: (+216) 91 234 567">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Address</label>
                        <div class="fields">
                            <div class="sixteen wide field">
                                <input type="text" name="address" required placeholder="Addresse">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Website</label>
                        <div class="fields">
                            <div class="sixteen wide field">
                                <input type="text" name="website" placeholder="Addresse">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Mail</label>
                        <div class="fields">
                            <div class="sixteen wide field">
                                <input type="email" name="mail" placeholder="foulen@nom_du_domaine.com">
                            </div>
                        </div>
                    </div>
                    <h3 class="ui dividing header">Images</h3>

                    <div class="field">
                        <div class="two fields">
                          <div class="field">
                              <input type="file" id="file" name="logo" >
                          </div>
                            <div class="field">
                                <input type="file" id="file" name="cover" >
                            </div>
                        </div>
                    </div>
                    <h3 class="ui dividing header">Services</h3>
                    <div class="field">
                        <select name="Services" required class="ui search dropdown"  multiple="" id="multi-select">
                            <option value="">Services</option>
                            @foreach($parameters['categories'] as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>

                    <h3 class="ui dividing header">Plus d'Informations</h3>
                    <div class="field">
                        <select name="preferences" class="ui search dropdown" multiple="" id="multi-select2">
                            <option value="">Information</option>
                            @foreach($parameters['preferences'] as $preference)
                            <option value="{{$preference->id}}">{{$preference->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <h3 class="ui dividing header">Collections</h3>
                    <div class="field">
                        <select name="collections" class="ui search dropdown" multiple="" id="multi-select3">
                            <option value="">Collections</option>
                            @foreach($parameters['collections'] as $collection)
                            <option value="{{$collection->id}}">{{$collection->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <h3 class="ui dividing header">Option de Paiement</h3>
                    <div class="field">
                        <select name="payments" required class="ui search dropdown" multiple="" id="multi-select">
                            <option value="">Payment</option>
                            @foreach($parameters['payments'] as $payment)
                            <option value="{{$payment->id}}">{{$payment->name}}</option>
                            @endforeach
                        </select>
                  </div>
                  <br>
                    <input type="submit"  class="ui button" text="hello"/>
                  {!! Form::close() !!}
            </div>
        </div>
        <br>

    </div>
  </div>
@endsection
