@extends('Header.Header')
@section('title', $title)
@section('Section')  
<div class="container" style="width: 700px; overflow: hidden; padding: 0; margin-top: 150px; background: rgb(255, 255, 255); border: 2px solid black; border-radius: 20px;">
    <div class="judul" style=" width: 100%; text-align: center; border-bottom: 1px solid black; background: rgb(237, 237, 237)">
        <h1>Profile</h1>
   </div>  
        <div class="container2 d-flex" style=" width: 100%; justify-content: center; flex-direction: column; align-items: center">
            <div class="wrap" style="width: 70%; margin-top: 10px; margin-bottom: 10px">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input disabled name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth()->user()->name}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input disabled name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth()->user()->Email_Address}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gender</label>
                    <input disabled name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth()->user()->Gender}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
                    <input disabled name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth()->user()->Date_of_Birth}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Country</label>
                    <input disabled name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth()->user()->Country}}">
                </div>

            </div>
        </div>
</div>
@endsection
