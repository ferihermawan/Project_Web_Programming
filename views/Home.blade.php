@extends('Header.Header')
@section('title', $title)
@section('Section')  
<div class="container" tyle="overflow: hidden; padding: 0; margin-top: 150px; background: rgb(255, 255, 255); border: 2px solid black; border-radius: 20px;">
    <div class="input-group" style="  margin-top: 40px">
        <div class="form-outline" style="width: 90%; text-align: center; border-bottom: 1px solid black; background: rgb(237, 237, 237);">
          <input type="search" id="form1" class="form-control" />
          
        </div>
        <button type="button" class="btn btn-primary">
          <i class="fas fa-search"></i>
        </button>
      </div>
      <div class="container">
        @foreach ($product as $item)
            <div class="container"><h1>{{$item}}</h1></div>
            <div class="wrps" style="overflow-x: hidden; overflow-y: auto">
              <div class="containers" style="display: inline-block;  ">
                <div class="wrp" style="display: flex; flex-direction: row; flex-wrap: nowrap;">
                  @foreach ($prod as $items)
                      @if($items->Category == $item)
                          <div class="card m-3" style="width: 288px; margin-top: 30px" >
                            <img src="{{asset('storage/'.$items->photo)}}" class="card-img-top" alt="{{$items->photo}}">
                            <div class="card-body">
                              <h5 class="card-title">{{$items->name}}</h5>
                              <p class="card-text">{{'IDR '.$items->Price}}</p>
                            </div>
                          </div>
                          @endif
                          @endforeach
                    </div>
                @endforeach
  
              </div>

            </div>
      </div>
      
</div>
@endsection

