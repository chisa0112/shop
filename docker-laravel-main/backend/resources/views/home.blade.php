@extends('layouts.app')

@section('content')

<div class="container py-5 text-center text-secondary">
    @auth
    <p class="my-3">こんにちは！{{$user->name}}さん</p>
    @endauth
    <h2 class="my-5 py-2 text-dark">ショップ一覧</h2>
    <div class="card-deck mb-4">
        <div class="row w-100">
            @foreach($shops as $shop)
            <div class="col-md-4 mb-4">
                <div class="h-100" style=" display: flex; flex-direction: column;">

                    <div class="card">
                        <div class="card-body" style="white-space: nowrap;">
                            @if($shop->image)
                            <img class="card-img-top " src="{{asset('storage/images/'.$shop->image)}}"
                                class="card-img-top" alt="ショップトップ画像">
                            @endif
                            <h5 class="card-title font-weight-bold pt-3" style="overflow: hidden;
                            text-overflow: ellipsis;  "><a href="{{route('shop.show',$shop)}}"
                                    class="card-link text-info">{{$shop->name}}</a></h5>
                            <p class="card-text" style="overflow: hidden;
                         text-overflow: ellipsis;  ">{{$shop->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">ショップオーナー:{{$shop->user->name}}</li>
                            {{-- <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li> --}}
                        </ul>

                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
    {{$shops->links()}}
</div>



@endsection