<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body style="background: rgb(216, 216, 216)">
    @include('Header.header')
    <div class="container" style="overflow: hidden; padding: 0; margin-top: 150px; background: rgb(255, 255, 255); border: 2px solid black; border-radius: 20px;" > 
    @if (Session('Error'))
      <div class="judul" style="color: red; width: 100%; text-align: center; border-bottom: 1px solid black; background: rgb(237, 237, 237)">
        <h1>{{Session('Error')}}</h1>
      </div> 
    @endif
    <div class="judul" style=" width: 100%; text-align: center; border-bottom: 1px solid black; background: rgb(237, 237, 237)">
         <h1>Login</h1>
    </div>  
    <form class="container" style="padding: 50px" method="post" enctype="multipart/form-data" action="/Logins">
        @csrf
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email Address</label>
            <input name="Email_Address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('Email_Address')}}">
            {{-- @error('Email_Address')
            <div class="asd" style="color: red">
              {{$message}}
            </div>   
          @enderror --}}
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
          {{-- @error('Password')
            <div class="asd" style="color: red">
              {{$message}}
            </div>   
          @enderror --}}
        </div>
       
        <div class="form-check">
            <input class="form-check-input" type="radio" name="Remember" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Remember Me
            </label>
          </div>
          
        {{-- @error('Gender')
        <div class="asd" style="color: red">
          {{$message}}
        </div>   
      @enderror --}}
        
            <button style="margin-top: 50px" type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</body>
</html>