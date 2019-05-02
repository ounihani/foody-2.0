@extends('layouts.app') @section('content')

<div class="panel-heading">
    <div class="ui breadcrumb">
        <a class="section" href="/home">Dashboard</a>
        <i class="right angle icon divider"></i>
        <div class="active section">Reviews</div>
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
            <div class="ui feed">
              @foreach($reviews as $review)
                @if($review->text != " ")
                <div class="event">
                    <div class="label">
                        <img src="https://semantic-ui.com/images/avatar/small/elliot.jpg">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a class="user">
                                {{$review->user->name}}
                            </a> added a review on <a class="user" href="/stores/{{$review->store->id}}">{{$review->store->name}}</a>
                            <div class="date">
                                1 Hour Ago
                            </div>
                            <br>
                        </div>
                        {{$review->text}}
                        <br>
                        <div class="meta">
                          {!!Form::open(['action' => ['ReviewsController@destroy',  $review->id], 'style'=>'display : inline;', 'method' => 'POST'])!!}
                          {{Form::hidden('_method', 'DELETE')}}
                          <button class="circular ui icon button"><i class="icon trash"></i>
                          </button>
                          {!!Form::close()!!}
                        </div>
                    </div>
                </div>
                <hr>
                @endif
              @endforeach
            </div>
        </div>
    </div>
    <br>

</div>

@endsection
