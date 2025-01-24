@extends('layouts.app')

@section('title', 'Main')

@section('content')

    <div class="container mt-5">
        <h1>Форма для збереження даних</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('apply.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="first_name" class="form-label">Ім'я</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Прізвище</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Номер телефону</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control">
            </div>
            <div class="mb-3">
                <label for="zip_code" class="form-label">Індекс</label>
                <input type="text" name="zip_code" id="zip_code" class="form-control">
            </div>
            <div class="mb-3">
                <label for="birth_date" class="form-label">Дата народження</label>
                <input type="date" name="birth_date" id="birth_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="work_services" class="form-label">Сервіси</label>
                <select name="work_services[]" id="work_services" class="form-control" multiple>
                    <option value="1">Сервіс 1</option>
                    <option value="2">Сервіс 2</option>
                    <option value="3">Сервіс 3</option>
                    <option value="5">Сервіс 5</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Зберегти</button>
        </form>
    </div>

@endsection