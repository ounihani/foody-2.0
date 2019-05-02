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
    @foreach($parameters['stores'] as $store)
        <a href="/stores/{{$store->id}}"> {{$store->name}}</a/><br>
    @endforeach

@endif


@if(count($parameters['collections'])<1)
        <div class="ui warning message">
            <div class="header">
                No collections !!
            </div>
        </div>
@else
    <h1>collections</h1>
    @foreach($parameters['collections'] as $collection)
        <a href="/collections/{{$collection->id}}"> {{$collection->name}}</a/><br>
    @endforeach

@endif

@endsection