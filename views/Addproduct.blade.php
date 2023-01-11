@extends('Header.Header')
@section('title', $title)
@section('Section') 

<div class="container" style="overflow: hidden; padding: 0; margin-top: 150px; background: rgb(255, 255, 255); border: 2px solid black; border-radius: 20px;" > 
    <div class="judul" style=" width: 100%; text-align: center; border-bottom: 1px solid black; background: rgb(237, 237, 237)">
        <h1>Add Product</h1>
   </div>  
   <a type="submit" class="btn btn-primary" href="/">Back</a>

   <form class="container" style="padding: 50px" method="post" enctype="multipart/form-data" >
       @csrf
       <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Name</label>
         <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
         @error('name')
           <div class="asd" style="color: red">
             {{$message}}
           </div>   
         @enderror
       </div>

       <label for="Category">Country</label><span style="color: red !important; display: inline; float: none;">*</span>      
       
           <select id="country" name="Category" class="form-control">
               <option value="Beauty">Beauty</option>
               <option value="Camera">Camera</option>
               <option value="Laptop">Laptop</option>
               <option value="Handphone">Handphone</option>  
           </select>
           {{-- @error('Country')
       <div class="asd" style="color: red">
         {{$message}}
       </div>   
     @enderror --}}


       <div class="mb-3">
        
            <label for="exampleFormControlTextarea1" class="form-label">Detail</label>
            <textarea name="Detail" class="form-control" id="exampleFormControlTextarea1" cols="5" rows="5"></textarea>
           {{-- @error('Email_Address')
           <div class="asd" style="color: red">
             {{$message}}
           </div>   
         @enderror --}}

         </div>
       <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Price</label>
         <input name="Price" type="big integer" class="form-control" id="exampleInputPassword1">
         {{-- @error('Password')
           <div class="asd" style="color: red">
             {{$message}}
           </div>   
         @enderror --}}
       </div>

       <div class="mb-3">
            <label class="form-label" for="customFile">Default file input example</label>
            <input name="Photo" type="file" class="form-control" id="customFile" />
       </div>
       
           <button style="margin-top: 50px" type="submit" class="btn btn-primary">Add</button>
     </form>
   </div>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     @endsection