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
            <div class="ui feed">
                <div class="event">

                    <div class="content">
                        <div class="summary">
                            added you as a friend
                            <div class="date">
                                1 Hour Ago
                            </div>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="icon edit"></i> edit
                            </a>
                            <a class="like">
                                <i class="icon unhide"></i> see
                            </a>
                            <a class="like">
                                <i class="trash icon"></i> remove
                            </a>
                        </div>
                    </div>
                </div>
                 <div class="event">

                    <div class="content">
                        <div class="summary">
                            added you as a friend
                            <div class="date">
                                1 Hour Ago
                            </div>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="icon edit"></i> edit
                            </a>
                            <a class="like">
                                <i class="icon unhide"></i> see
                            </a>
                            <a class="like">
                                <i class="trash icon"></i> remove
                            </a>
                        </div>
                    </div>
                </div>
                 <div class="event">

                    <div class="content">
                        <div class="summary">
                            added you as a friend
                            <div class="date">
                                1 Hour Ago
                            </div>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="icon edit"></i> edit
                            </a>
                            <a class="like">
                                <i class="icon unhide"></i> see
                            </a>
                            <a class="like">
                                <i class="trash icon"></i> remove
                            </a>
                        </div>
                    </div>
                </div>
                 <div class="event">

                    <div class="content">
                        <div class="summary">
                            added you as a friend
                            <div class="date">
                                1 Hour Ago
                            </div>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="icon edit"></i> edit
                            </a>
                            <a class="like">
                                <i class="icon unhide"></i> see
                            </a>
                            <a class="like">
                                <i class="trash icon"></i> remove
                            </a>
                        </div>
                    </div>
                </div>
                 <div class="event">

                    <div class="content">
                        <div class="summary">
                            added you as a friend
                            <div class="date">
                                1 Hour Ago
                            </div>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="icon edit"></i> edit
                            </a>
                            <a class="like">
                                <i class="icon unhide"></i> see
                            </a>
                            <a class="like">
                                <i class="trash icon"></i> remove
                            </a>
                        </div>
                    </div>
                </div>
                 <div class="event">

                    <div class="content">
                        <div class="summary">
                            added you as a friend
                            <div class="date">
                                1 Hour Ago
                            </div>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="icon edit"></i> edit
                            </a>
                            <a class="like">
                                <i class="icon unhide"></i> see
                            </a>
                            <a class="like">
                                <i class="trash icon"></i> remove
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

</div>

@endsection