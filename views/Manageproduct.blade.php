@extends('Header.Header')
@section('title', $title)
@section('Section')  
    <div class="container1">
        <div class="container2">
            <div class="input-group">
                <div class="form-outline">
                  <input type="search" id="form1" class="form-control" />
                  <label class="form-label" for="form1">Search</label>
                </div>
                <button type="button" class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </button>
              </div>
        </div>
        <div class="container">
            @foreach ($product as $item)
            <div class="card mb-4" style="max-width: 540px; ">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('storage/'.$item->photo)}}" class="img-fluid rounded-start" alt="{{$item->photo}}">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title">{{$item->name}}</h5>
                      <div class="cont" style="display: flex; flex-direction: row; width: 1000px">
                            <form action="/Manage/{{$item->id}}" method="POST">
                                @csrf
                                <div class="delete" style="margin-right: 5px">
                                  <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </div>
                            </form>
                          <div class="edit">
                            <a title="edit barang {{$item->name}}" href="/Manage/{{str_replace("/"," ",$item->name)}}/{{$item->id}}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="clas">
            <li class="nav-item">
                <a class="nav-link" href="/AddProduct">Add Product</a>
              </li>
        </div>
    </div>
@endsection