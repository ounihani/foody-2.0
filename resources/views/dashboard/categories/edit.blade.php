@extends('layouts.app') @section('content')

<div class="panel-heading">
    <div class="ui breadcrumb">
        <a class="section" href="/home">Dashboard</a>
        <i class="right angle icon divider"></i>
        <div class="active section">categories</div>
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
            {!! Form::open(['action' => ['CategoriesController@update', $category->id],'class'=>'ui form', 'method' => 'POST','enctype'
            => 'multipart/form-data' ]) !!}
            <h3 class="ui dividing header">category</h3>
            <div class="field">
                <input type="text" name="name" placeholder="Store Name" value="{{$category->name}}">
            </div>  

            <div class=" two fields">
                <div class="field">
                    <label for="file" class="ui icon button">
                        <i class="image icon"></i>
                        Image</label>
                    <input type="file" id="file" name="image" style="display:none">
                </div>
                <div class="field">
                    <label for="file" class="ui icon button">
                        <i class="image icon"></i>
                        Cover</label>
                    <input type="file" id="file" name="cover" style="display:none">
                </div>
            </div>
            {{Form::hidden('_method','PUT')}}
            <input type="submit" class="ui button" text="hello" /> {!! Form::close() !!}
        </div>
    </div>
    <br>

</div>

@endsection