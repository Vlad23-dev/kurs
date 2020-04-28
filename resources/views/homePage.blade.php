@extends('layouts.tmplt')

@section('title-block')
    Home Page
@endsection

@section('content')
    <h1>My Home Page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et metus et odio commodo tristique hendrerit tincidunt erat.
         Ut consectetur, dolor et tincidunt vulputate, ex velit mattis justo, a pretium eros dui a orci. Morbi congue ullamcorper ante quis pharetra. 
         Maecenas consectetur, nisi et molestie rhoncus, metus ipsum fermentum nibh, a scelerisque lectus nulla non diam. Nulla facilisi. In ac dignissim mauris.
        Nunc eu vulputate sapien, at interdum magna.
    </p>    

    <form action="{{ route('submit-information') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Enter First Name</label>
            <input type="text" name="name" placeholder="Enter name" id="name" class="form-control">
        
        </div>

        <div class="form-group">
            <label for="email">Enter Email</label>
            <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
        
        </div>

        <div class="form-group">
            <label for="comment">Enter Comment</label>
            <textarea name="comment" id="comment" placeholder="Enter text" class="form-control"></textarea>
        
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection

@section('aside')
  @parent
    <p>Text</p>    
@endsection