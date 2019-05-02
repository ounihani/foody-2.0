@extends('layouts.app') 
@section('content')
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
              
            </div>
        </div>
        <br>

    </div>
@endsection