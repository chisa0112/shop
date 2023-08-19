@extends('layouts.app')

@section('content')
<div class="container py-5 text-center">
    <h2 class="mt-4 py-2 ">ショップを登録しましょう</h2>

    {{-- バリデーションチェックでエラーがあった際のメッセージ表示 --}}
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            {{-- バリデーションでエラーが起き、リダイレクトされた際の画像に対するメッセージ --}}
            @if(empty($errors->first('image')))
            <li>画像ファイルがあれば、再度選択してください。</li>
            @endif
        </ul>
    </div>
    @endif

    {{-- ショップ登録が成功した場合のメッセージ表示 --}}
    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif




    <form method="POST" action="{{route('shop.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-5 py-4">
            <div class="row">
                <div class="col-md-6">
                    <label class="my-3" for="ショップ名">ショップ名:</label>
                    <input class="form-control" type="text" id="ショップ名" value="{{old('name')}}" name="name"
                        placeholder="ショップ名">
                </div>

                <div class="col-md-6">
                    <label class="my-3" for="ショップ画像">ショップ画像:</label>
                    <input class="form-control" type="file" id="ショップ画像" name="image">
                </div>
            </div>

            <label class="my-3" for="ショップ説明">ショップ説明:</label>
            <textarea class="form-control"  name="description" id="ショップ説明" cols="30" rows="10"
                placeholder="ショップ説明">{{old('description')}}</textarea>

            <button type="submit" class="btn btn-info text-white mt-4" value="create">登録する</button>
        </div>

    </form>
</div>





@endsection