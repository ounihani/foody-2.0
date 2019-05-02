@extends('layouts.app') @section('content')

<div class="panel-heading">
    <div class="ui breadcrumb">
        <a class="section" href="/home">Dashboard</a>
        <i class="right angle icon divider"></i>
        <div class="active section">Collections</div>
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

          @if(count($collections)<1) 
            <div class="ui warning message">
                <div class="header">
                    No collections !!
                </div>
            </div>
            <a href="/collections/create"><button class="ui button one column">create a collection </button></a>
          @else
          <h1>collections</h1>
          <table class="ui selectable inverted teal  table">
            <thead>
                <tr>
                <th>Name</th>
                <th class="right aligned">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($collections as $collection)
                <tr>
                <td>{{$collection->name}}</td>
                    <td class="right aligned">
                        <a href="/collections/{{$collection->id}}"><button class="circular ui button icon"><i class="icon unhide"></i>
                        </button></a>
                        <a href="/collections/{{$collection->id}}/edit"><button class="circular ui icon button"><i class="icon edit"></i>
                        </button></a>
                        {!!Form::open(['action' => ['CollectionController@destroy',  $collection->id],'style'=>'display : inline;', 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        <button class="circular ui icon button"><i class="icon trash"></i>
                        </button>
                        {!!Form::close()!!}
                    </td>
                </tr>
                @endforeach 
                <tr><td colspan="2"> <center><a href="/collections/create"><button class="circular ui icon teal button"><i class=" icon add"></i></center></button></a> </td></tr>
            </tbody>
        </table>
         @endif

       
                

    </div>
</div>
<br>

</div>


@endsection