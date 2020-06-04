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
            <h1>Задача 2</h1>
        </div>

        <div class="card-body">
            <div class="w-100 d-flex justify-content-between">
                <a href="/" class="btn btn-outline-primary">На головну</a>
            </div>
            @if(count($fibonachiNumbers))
                <ul class="list-group mt-3">
                    @foreach($fibonachiNumbers as $fibonachiNumber)
                        <li class="list-group-item">{{ $fibonachiNumber }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="card-title mt-3">
                <h4>Введіть число фібоначі</h4>
            </div>
            <form action="{{ route('task.2.store') }}" method="post">
                {{ csrf_field() }}
                <input class="form-control" type="number" placeholder="Введіть ціле число" required name="index">
                <div class="w-100 d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary">Зберегти</button>
                </div>
            </form>
        </div>
    </div>
@endsection
