@extends('layouts.app')

@section('title', 'Main')

@section('content')
    <section class="hero">
        <div class="container">
            <h1>Ласкаво просимо до ServicePro</h1>
            <p>Ми пропонуємо якісні послуги для вашого комфорту та успіху</p>
            <a href="#services" class="btn">Дізнатися більше</a>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>Про нас</h2>
            <p>Наша команда спеціалістів забезпечує найкращий сервіс для клієнтів. Ми працюємо для вашого задоволення!</p>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2>Наші послуги</h2>
            <div class="service-list">
                <div class="service-item">
                    <h3>Послуга 1</h3>
                    <p>Опис послуги 1</p>
                </div>
                <div class="service-item">
                    <h3>Послуга 2</h3>
                    <p>Опис послуги 2</p>
                </div>
                <div class="service-item">
                    <h3>Послуга 3</h3>
                    <p>Опис послуги 3</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Контакти</h2>
            <form>
                <input type="text" placeholder="Ваше ім'я" required>
                <input type="email" placeholder="Ваш Email" required>
                <textarea placeholder="Ваше повідомлення" required></textarea>
                <button type="submit" class="btn">Надіслати</button>
            </form>
        </div>
    </section>
@endsection