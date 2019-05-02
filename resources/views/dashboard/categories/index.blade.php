@extends('layouts.app') @section('content')

<div class="panel-heading">
    <div class="ui breadcrumb">
        <a class="section" href="/home">Dashboard</a>
        <i class="right angle icon divider"></i>
        <div class="active section">Categories</div>
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

          @if((count($categories)<1) || !isset($categories))
            <div class="ui warning message">
                <div class="header">
                    No categories !!
                </div>
            </div>
            <a href="/categories/create"><button class="ui button one column">create a category </button></a>
          @else
          <h1>categories</h1>
          <table class="ui selectable inverted teal  table">
            <thead>
                <tr>
                <th>Name</th>
                <th class="right aligned">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                <td>{{$category->name}}</td>
                    <td class="right aligned">
                        <a href="/categories/{{$category->id}}"><button class="circular ui button icon"><i class="icon unhide"></i>
                        </button></a>
                        <a href="/categories/{{$category->id}}/edit"><button class="circular ui icon button"><i class="icon edit"></i>
                        </button></a>
                        {!!Form::open(['action' => ['CategoriesController@destroy',  $category->id],'style'=>'display : inline;', 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        <button class="circular ui icon button"><i class="icon trash"></i>
                        </button>
                        {!!Form::close()!!}
                    </td>
                </tr>
                @endforeach 
                <tr><td colspan="2"> <center><a href="/categories/create"><button class="circular ui icon teal button"><i class=" icon add"></i></center></button></a> </td></tr>
            </tbody>
        </table>
         @endif

       
                

    </div>
</div>
<br>

</div>


<!-- drop down list initialisation -->
<script>
    $('#multi-select')
        .dropdown();
    $('#multi-select1')
        .dropdown();
    $('#multi-select2')
        .dropdown();
    $('#multi-select3')
        .dropdown();
</script>
@endsection