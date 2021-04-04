@extends('master')
@section('content')

    <div class="custom-product">

        <div class="col-sm-3">
            <h1>Filter Result</h1>
            <hr>
            <div class="trending-wrapper">
                <div class="">
                    @foreach ($products as $item)
                        <div class="search-item" style="border: 1px solid #eee; padding: 10px;">
                            <a href="{{asset('detail/'.$item['id'])}}">
                                <img class="trending-img" src="{{$item['gallery']}}">
                                <div class="text-center">
                                    <h3>{{$item['name']}}</h3>
                                    <h5>{{$item['description']}}</h5>
                                </div>
                            </a>
                        </div><br>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
@endsection