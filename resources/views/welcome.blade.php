@extends('layouts.main')

@section('content')
    <section class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card w-100">
            <div class="card-header text-center">
                <h1>Виберіть задачу</h1>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('task.1') }}" class="btn btn-primary">Задача 1</a>
                    <a href="{{ route('task.2') }}" class="btn btn-primary">Задача 2</a>
                    <a href="{{ route('task.3') }}" class="btn btn-primary">Задача 3</a>
                </div>
            </div>
        </div>
    </section>
@endsection
