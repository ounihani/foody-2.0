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
                  @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td class="right aligned">
                            <a href="/users/{{$user->id}}">
                                <button class="circular ui button icon">
                                    <i class="icon unhide"></i>
                                </button>
                            </a>
                            <form method="POST" action="" accept-charset="UTF-8" style="display : inline;">
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="circular ui icon button">
                                    <i class="icon trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br>

</div>
@endsection
