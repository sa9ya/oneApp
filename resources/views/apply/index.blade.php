@extends('layouts.app')

@section('title', 'Main')

@section('content')

    <div class="container">
        <h1>Форма для збереження даних</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('apply.submit') }}" method="POST" class="max-w-md mx-auto space-y-4">
            @csrf
            <div class="mb-3">
                <label for="first_name" class="block text-sm font-medium text-gray-700">Ім'я</label>
                <input type="text" name="first_name" id="first_name" class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-500 focus:outline-none" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Прізвище</label>
                <input type="text" name="last_name" id="last_name" class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-500 focus:outline-none" required>
            </div>
            <div class="mb-3">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-500 focus:outline-none" required>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Номер телефону</label>
                <input type="text" name="phone_number" id="phone_number" class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-500 focus:outline-none">
            </div>
            <div class="mb-3">
                <label for="zip_code" class="block text-sm font-medium text-gray-700">Індекс</label>
                <input type="text" name="zip_code" id="zip_code" class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-500 focus:outline-none">
            </div>
            <div class="mb-3">
                <label for="birth_date" class="block text-sm font-medium text-gray-700">Дата народження</label>
                <input type="date" name="birth_date" id="birth_date" class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-500 focus:outline-none" required>
            </div>
            <div class="mb-3">
                <label for="work_services" class="block text-sm font-medium text-gray-700">Сервіси</label>
                <select name="work_services[]" id="work_services" class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-500 focus:outline-none" multiple>
                    <option value="1">Сервіс 1</option>
                    <option value="2">Сервіс 2</option>
                    <option value="3">Сервіс 3</option>
                    <option value="5">Сервіс 5</option>
                </select>
            </div>
            <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:ring focus:ring-blue-500 focus:outline-none">
                Submit
            </button>
        </form>
    </div>

@endsection