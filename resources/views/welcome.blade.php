@extends('layouts.app')
@section('content')

@if(count($parameters['stores'])<1)
        <div class="ui warning message">
            <div class="header">
                No Stores !!
            </div>
        </div>
@else
    <h1>Restos</h1>
    <div class="ui grid">
    @foreach($parameters['stores'] as $store)
    <div class="four wide column">
    <div class="ui card">
        <div class="image">
        <img style="height : 200px;" src="/storage/stores_covers/{{$store->cover}}">
        </div>
        <div class="content">
          <a class="header" href="/stores/{{$store->id}}">{{$store->name}}</a/><br>
          </div>
      </div>
    </div>
    @endforeach
    </div>
@endif


@if(count($parameters['collections'])<1)
            
        <div class="ui warning message">
            <div class="header">
                No collections !!
            </div>
        </div>
@else
    <h1>collections</h1>
    <div class="ui grid">
    @foreach($parameters['collections'] as $collection)
    <div class="four wide column">
    <div class="ui card">
        <div class="image">
          <img style="height : 200px;" src="/storage/collection_images/{{$collection->image}}">
        </div>
        <div class="content">
          <a class="header" href="/collections/{{$collection->id}}"> {{$collection->name}}</a/><br>
        </div>
      </div>
    </div> 
    @endforeach

@endif

@endsection