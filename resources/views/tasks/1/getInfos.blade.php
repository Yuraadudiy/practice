@extends('layouts.tasks')

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h1>Перегляд результатів першої задачі</h1>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Введений текст</h4>
                        </div>
                        <div class="card-body">
                            <p>{{ $text }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Введений текст у зворотньому порядку</h4>
                        </div>
                        <div class="card-body">
                            <p>{{ $reverseText }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('task.1') }}" class="btn btn-primary mt-3">Назад</a>
        </div>
    </div>
@endsection
