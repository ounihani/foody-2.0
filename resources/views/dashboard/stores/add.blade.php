@extends('layouts.app') 
@section('content')
    <div class="panel-heading">
        <div class="ui breadcrumb">
            <a class="section" href="/home">Dashboard</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Add Resto</div>
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
                <form class="ui form">
                    <h3 class="ui dividing header">Genaral Information</h3>
                    <div class="field">
                        <label>Store</label>
                        <div class="two fields">
                            <div class="field">
                                <input type="text" name="store_name" placeholder="Store Name">
                            </div>
                            <div class="field">
                                <input type="Number" name="phone_number" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Address</label>
                        <div class="fields">
                            <div class="sixteen wide field">
                                <input type="text" name="Addresse" placeholder="Addresse">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Description</label>
                        <textarea></textarea>
                    </div>
                    <h3 class="ui dividing header">Images</h3>
                    <div class="field">
                        <div class="two fields">
                            <div class="field">
                                <label for="file" class="ui icon button">
                                    <i class="image icon"></i>
                                    Logo</label>
                                <input type="file" id="file" name="logo" style="display:none">
                            </div>
                            <div class="field">
                                <label for="file" class="ui icon button">
                                    <i class="image icon"></i>
                                    Couverture</label>
                                <input type="file" id="file" name="cover" style="display:none">
                            </div>
                        </div>
                    </div>
                    <h3 class="ui dividing header">Menu</h3>
                    <div class="ui  grid">

                        <div class="four wide column">
                            <img style="height : 100% ; width : 100% ;" src="https://semantic-ui.com/images/wireframe/image-text.png" />
                        </div>
                        <div class="four wide column">
                            <img style="height : 100% ; width : 100% ;" src="https://semantic-ui.com/images/wireframe/image-text.png" />
                        </div>
                        <div class="four wide column">
                            <img style="height : 100% ; width : 100% ;" src="https://semantic-ui.com/images/wireframe/image-text.png" />
                        </div>
                        <div class="four wide column">
                            <img style="height : 100% ; width : 100% ;" src="https://semantic-ui.com/images/wireframe/image-text.png" />
                        </div>
                        <div class="four wide column">
                            <img style="height : 100% ; width : 100% ;" src="https://semantic-ui.com/images/wireframe/image-text.png" />
                        </div>
                        <div class="four wide column">
                            <label for="file" class="circular ui icon button">
                                <i class="icon add large"></i>
                            </label>
                            <input type="file" id="file" name="logo" style="display:none">
                        </div>
                    </div>
                    <h3 class="ui dividing header">Types & Categories</h3>
                    <div class="field">
                        <select name="states" class="ui search dropdown" multiple="" id="multi-select">
                            <option value="">Type</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                        </select>
                    </div>
                    <div class="field">
                        <select name="states" class="ui search dropdown" multiple="" id="multi-select1">
                            <option value="">Categories</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                        </select>
                    </div>
                    <h3 class="ui dividing header">Preferences</h3>
                    <div class="field">
                        <select name="states" class="ui search dropdown" multiple="" id="multi-select2">
                            <option value="">Type</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                        </select>
                    </div>
                    <h3 class="ui dividing header">Collections</h3>
                    <div class="field">
                        <select name="states" class="ui search dropdown" multiple="" id="multi-select3">
                            <option value="">Type</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                        </select>
                    </div>
                    <br>
                    <div class="ui button" tabindex="0">Submit Order</div>
                </form>
            </div>
        </div>
        <br>

    </div>
@endsection