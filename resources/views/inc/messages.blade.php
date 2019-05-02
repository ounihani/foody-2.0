@if(count($errors) > 0)

@foreach($errors->all() as $error)
        <div class="ui warning message">
          <i class="close icon" ></i>
            <div class="header">
           {{$error}}
            </div>
        </div>
    @endforeach

@endif

@if(session('success'))
   <div class="ui success message">
          <i class="close icon" ></i>
            <div class="header">
           {{session('success')}}
            </div>
    </div>
@endif

@if(session('error'))

    <div class="ui error message">
            <i class="close icon" ></i>
        <div class="header">
           {{session('error')}}
        </div>
    </div>
     
@endif