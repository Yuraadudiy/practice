@extends('layouts.tasks')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h1>Задача 3</h1>
        </div>

        <div class="card-body">
            <div class="w-100 d-flex justify-content-between">
                <a href="/" class="btn btn-outline-primary">На головну</a>
            </div>
            <hr>
            <div class="card-title mt-3 text-center">
                <div class="alert alert-info"><h4>Рандомні массиви</h4></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <ul class="list-group mt-3">
                        @foreach($arr1 as $item)
                            <li class="list-group-item">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="list-group mt-3">
                        @foreach($arr2 as $item)
                            <li class="list-group-item">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <hr>
            <div class="card-title mt-3 text-center">
                <div class="alert alert-info"><h4>Зєднаний массив</h4></div>
            </div>
            <ul class="list-group mt-3">
                @foreach($result as $item)
                    <li class="list-group-item">{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
