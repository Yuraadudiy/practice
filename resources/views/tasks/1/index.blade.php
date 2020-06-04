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
            <h1>Задача 1</h1>
        </div>

        <div class="card-body">
            <div class="w-100 d-flex justify-content-between">
                <a href="/" class="btn btn-outline-primary">На головну</a>
                <a href="{{ route('task.1.getInfo') }}" class="btn btn-outline-info">Переглянути файли</a>
            </div>
            <div class="card-title mt-3">
                <h4>Введіть текст</h4>
            </div>
            <form action="{{ route('task.1.store') }}" method="post">
                {{ csrf_field() }}
                <textarea required class="form-control" rows="20" placeholder="Введіть текст для збереження в файл а також для його реверсу" name="text"></textarea>
                <div class="w-100 d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary">Зберегти</button>
                </div>
            </form>
        </div>
    </div>
@endsection
