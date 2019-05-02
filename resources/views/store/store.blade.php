@extends('layouts.app') @section('content')

<div class="ui grid stackable">
    <!--main section-->
    <div class="twelve wide column">
        <!--main card -->
        <div class="ui card fluid">
            <div class="image">
                <img src="https://www.julen.ch/assets/Alpenhof/Restaurant-Alpenhof/_resampled/CroppedImage1600900-restaurant-alpenhof-zermatt.jpg">
            </div>
            <div class="content">
                <div class="left floated content">
                    <h3> {{$store->name}} </h3>
                </div>
                <div class="right floated content">
                    <div class="ui button green">4.6</div>
                </div>
            </div>
            <div class="extra content">
                <div class="ui equal width grid container">

                    <div class="computer only row">
                        <button class="ui button column">
                            <i class="feed icon"></i>
                            Follow
                        </button>
                        <button class="ui button column">
                            <i class="bookmark icon"></i>
                            bookmark
                        </button>
                        <button class="ui button column">
                            <i class="street view icon"></i>
                            been here
                        </button>
                        <button class="ui button column" id="rate">
                            <i class="star icon"></i>
                            Rate </button>
                        <button class="ui button column">
                            <i class="image icon"></i>
                            Add a photo
                        </button>
                        <button class="ui button column">
                            <i class="add square icon"></i>
                            Add To collection
                        </button>
                    </div>

                    <div class="mobile only tablet only centered row">
                        <div class="ui column">
                            <button class="ui circular icon large button ">
                                <i class="feed icon"></i>
                            </button>
                        </div>

                        <div class="ui column">
                            <button class="ui circular icon large button column">
                                <i class="bookmark icon"></i>
                            </button>
                        </div>

                        <div class="ui column">
                            <button class="ui circular icon large button column">
                                <i class="street view icon"></i>
                            </button>
                        </div>

                        <div class="ui column">
                            <button class="ui circular icon large button column">
                                <i class="star icon"></i>
                            </button>
                        </div>

                        <div class="ui column">
                            <button class="ui circular icon large button column">
                                <i class="image icon"></i>
                            </button>
                        </div>

                        <div class="ui column">
                            <button class="ui circular icon large button column">
                                <i class="add square icon"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--menu-->
        <div class="ui four item top attached tabular menu">
            <a class="item active" data-tab="first">Overview</a>
            <a class="item" data-tab="second">Reviews</a>
            <a class="item" data-tab="third">Photos</a>
            <a class="item" data-tab="fourth">Menu</a>
        </div>
        <div class="ui bottom attached tab segment active" data-tab="first">
            <div class="content">
                <div class="ui equal width grid stackable centered">
                    <div class="column">
                        <div class="ui grid">
                            <div class="row">
                                <div class="eight wide tablet column  sixteen wide computer eight wide mobile ">
                                    <h5>
                                        <i class="mobile icon big "></i>Phone number</h5>
                                </div>
                                <div class="eight wide tablet column sixteen wide computer eight wide mobile">
                                    +216 {{$store->phone_number}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="eight wide tablet column  sixteen wide computer eight wide mobile ">
                                    <h5>
                                        <i class="home icon big "></i>Cuisines</h5>
                                </div>
                                <div class="eight wide tablet column  sixteen wide computer eight wide mobile ">
                                    Pizza,Tounsi
                                </div>
                            </div>

                            <div class="row">
                                <div class="eight wide tablet column  sixteen wide computer eight wide mobile ">
                                    <h5>
                                        <i class="payment icon big"></i>Payments Options</h5>
                                </div>
                                <div class="eight wide tablet column  sixteen wide computer eight wide mobile ">
                                    -online
                                    <br> -On place
                                    <br> -Cash
                                    <br> -Bank Card
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column">

                        <div class="ui grid">
                            <div class="row">
                                <div class="eight wide tablet column  sixteen wide computer eight wide mobile ">
                                    <h5>
                                        <i class="map icon big "></i>Adresse</h5>
                                </div>
                                <div class="eight wide tablet column sixteen wide computer eight wide mobile ">
                                    {{$store->address}}
                                </div>
                            </div>

                            <div class="centered row">
                                <div class="ui cards column">
                                    <div class="card">
                                        <div class="content">
                                            <div class="header">
                                                <center>Map</center>
                                            </div>
                                        </div>

                                        <div class="image">
                                            <img src="https://cnet2.cbsistatic.com/img/H_zPLL8-QTZOLxJvgHQ1Jkz0EgY=/830x467/2013/07/10/f0bcef02-67c2-11e3-a665-14feb5ca9861/maps_routemap.png">
                                        </div>

                                        <div class="ui bottom attached button">
                                            <i class="location arrow icon"></i> Get directions
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <h5>
                            <i class="ellipsis horizontal icon big "></i>More info</h5>
                        <i class="check circle icon green "></i> Breakfast
                        <br>
                        <i class="check circle icon green "></i> Group Meal
                        <br>
                        <i class="check circle icon green "></i> Inside ZTL
                        <br>
                        <i class="check circle icon green "></i> Outdoor Seating
                        <br>
                        <i class="check circle icon green "></i> Wifi
                    </div>
                </div>
            </div>
        </div>
        <div class="ui bottom attached tab segment" data-tab="second">
            <div class="ui feed">
                <div class="event">
                    <div class="label">
                        <img src="/images/avatar/small/elliot.jpg">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a class="user">
                                Elliot Fu
                            </a> added you as a friend
                            <div class="date">
                                1 Hour Ago
                            </div>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 4 Likes
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="/images/avatar/small/helen.jpg">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a>Helen Troy</a> added
                            <a>2 new illustrations</a>
                            <div class="date">
                                4 days ago
                            </div>
                        </div>
                        <div class="extra images">
                            <a>
                                <img src="/images/wireframe/image.png">
                            </a>
                            <a>
                                <img src="/images/wireframe/image.png">
                            </a>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 1 Like
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="/images/avatar/small/jenny.jpg">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a class="user">
                                Jenny Hess
                            </a> added you as a friend
                            <div class="date">
                                2 Days Ago
                            </div>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 8 Likes
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="/images/avatar/small/joe.jpg">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a>Joe Henderson</a> posted on his page
                            <div class="date">
                                3 days ago
                            </div>
                        </div>
                        <div class="extra text">
                            Ours is a life of constant reruns. We're always circling back to where we'd we started, then starting all over again. Even
                            if we don't run extra laps that day, we surely will come back for more of the same another day
                            soon.
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 5 Likes
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="/images/avatar/small/justen.jpg">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a>Justen Kitsune</a> added
                            <a>2 new photos</a> of you
                            <div class="date">
                                4 days ago
                            </div>
                        </div>
                        <div class="extra images">
                            <a>
                                <img src="/images/wireframe/image.png">
                            </a>
                            <a>
                                <img src="/images/wireframe/image.png">
                            </a>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 41 Likes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui bottom attached tab segment" data-tab="third">
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
                    <img style="height : 100% ; width : 100% ;" src="https://semantic-ui.com/images/wireframe/image-text.png" />
                </div>
                <div class="four wide column">
                    <img style="height : 100% ; width : 100% ;" src="https://semantic-ui.com/images/wireframe/image-text.png" />
                </div>
                <div class="four wide column">
                    <img style="height : 100% ; width : 100% ;" src="https://semantic-ui.com/images/wireframe/image-text.png" />
                </div>

            </div>
        </div>
        <div class="ui bottom attached tab segment" data-tab="fourth">
            four
        </div>

    </div>



    <!--side bar -->
    <div class="four wide column">
        <!--ads goes here -->
        <div class="ui card fluid">
            <div class="ui top left attached label yellow">Ad</div>
            <img src="https://tpc.googlesyndication.com/simgad/15639165454737860574" />
        </div>

        <!--opening hours widget-->
        <div class="ui card fluid">
            <div class="content">
                <center>
                    <h5>
                        <i class="wait icon big"></i>Opening hours</h5>
                </center>
                <hr>
                <center>
                    <table>
                        <tr>
                            <td>
                                <b>Mon</b>
                            </td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td>
                                <b>Mon</b>
                            </td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td>
                                <b>Mon</b>
                            </td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td>
                                <b>Mon</b>
                            </td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td>
                                <b>Mon</b>
                            </td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td>
                                <b>Mon</b>
                            </td>
                            <td>08:00 to 01:00</td>
                        </tr>
                        <tr>
                            <td>
                                <b>Mon</b>
                            </td>
                            <td>08:00 to 01:00</td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
        <!-- nearby stores widget -->

        <div class="ui card fluid">
            <div class="content">
                <center>
                    <h5>
                        <i class="marker icon big"></i>Nearby Restaurants</h5>
                </center>
                <hr>
                <div class="ui middle aligned divided list">
                    <div class="item">
                        <div class="right floated content">
                            <div class="ui button green">4.6</div>
                        </div>
                        <img class="ui avatar image" src="https://b.zmtcdn.com/data/pictures/7/16554447/2cc8f6bab4daa88ad8db9022cb11ff99_featured_v2.jpg?fit=around%7C40%3A40&crop=40%3A40%3B%2A%2C%2A">
                        <div class="content">
                            <a class="header">Resto 1</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="right floated content">
                            <div class="ui button green">5.0</div>
                        </div>
                        <img class="ui avatar image" src="https://b.zmtcdn.com/data/pictures/7/16555777/14bf260b51132a37a01801adb40af032_featured_v2.jpg?fit=around%7C40%3A40&crop=40%3A40%3B%2A%2C%2A">
                        <div class="content">
                            <a class="header">Resto 2</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="right floated content">
                            <div class="ui button green">3.0</div>
                        </div>
                        <img class="ui avatar image" src="https://b.zmtcdn.com/data/pictures/8/16555628/a653966201ea43e3f79ce76d470f38a2_featured_v2.jpg?fit=around%7C40%3A40&crop=40%3A40%3B%2A%2C%2A">
                        <div class="content">
                            <a class="header">Resto 3</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="right floated content">
                            <div class="ui button green">4.6</div>
                        </div>
                        <img class="ui avatar image" src="https://b.zmtcdn.com/data/pictures/0/16555650/40eeeee52a6e17427ec028791a4cbd81_featured_v2.jpg?fit=around%7C40%3A40&crop=40%3A40%3B%2A%2C%2A">
                        <div class="content">
                            <a class="header">Resto 4</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--rating-->
    <div class="ui modal">
        <i class="close icon"></i>
        <div class="header">
            Profile Picture
        </div>
        <div class="image content">
            <div class="ui medium image">
                <img src="https://semantic-ui.com/images/avatar2/large/rachel.png"><br>
                <div class="ui label">
                <i class="image icon large"></i>add image
            </div>
            </div>
            <div class="description">
                <div class="ui header">Noter le restaurant.</div>
                <div class="ui heart rating huge" data-rating="1" data-max-rating="5"></div>
                <div class="ui header">Ecrire un Review.</div>
                <form class="ui form">
                    <div class="field">
                        <textarea></textarea>
                    </div>
                </form>
                <p>
                    <b>Note:</b> writing a review will make you win more points Try to make your review releavant and constructive.</p>
            
            </div>
            
        </div>
        <div class="actions">
            <div class="ui primary right labeled icon button">
                publier
                <i class="send icon"></i>
            </div>
        </div>
    </div>
</div>
@endsection