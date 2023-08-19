@extends('layouts.app')

@section('content')

<div class="container py-5 text-center text-secondary">
<div class="card my-5 border-dark" style="max-width: 1000px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{asset('storage/images/'.$shop->image)}}" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$shop->name}}</h5>
          <p class="card-text" style="white-space: pre-wrap;">{{$shop->description}}</p>
          <p class="card-text"><small class="text-muted">{{$shop->user->name}}</small></p>
        </div>
      </div>
    </div>
  </div>

  <h3 class="text-dark">{{$shop->name}}の商品一覧</h3>
</div>
@endsection
