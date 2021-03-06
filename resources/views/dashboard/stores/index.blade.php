@extends('layouts.app') @section('content')
<div class="panel-heading">
    <div class="ui breadcrumb">
        <a class="section" href="/home">Dashboard</a>
        <i class="right angle icon divider"></i>
        <div class="active section">Stores List</div>
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
            <table class="ui selectable inverted teal  table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th class="right aligned">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($stores as $store)
                    <tr>
                        <td>{{$store->name}}</td>
                        <td class="right aligned">
                            <a href="/stores/{{$store->id}}">
                                <button class="circular ui button icon">
                                    <i class="icon unhide"></i>
                                </button>
                            </a>
                            <a href="/collections/13/edit">
                                <button class="circular ui icon button">
                                    <i class="icon edit"></i>
                                </button>
                            </a>
                            {!!Form::open(['action' => ['StoreController@destroy',  $store->id],'style'=>'display : inline;', 'method' => 'POST'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                                <button class="circular ui icon button">
                                    <i class="icon trash"></i>
                                </button>
                            {!!Form::close()!!}
                        </td>
                    </tr>
                    @endforeach

                    <tr>
                        <td colspan="2">
                            <center>
                                <a href="/stores/create">
                                    <button class="circular ui icon teal button">
                                        <i class=" icon add"></i>
                                    </button>
                                </a>
                            </center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>

</div>
@endsection
