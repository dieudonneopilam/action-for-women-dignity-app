@extends('layouts.app')
@section('main')
    <div class="contactMe">
        <div class="contact-left">
            <p class="contact-title">contact me</p>
            <img class="image-contact" src="{{ asset('img/cambg_1.jpg') }}" alt="" srcset="">
            <div class="contact-media">
                <div>facebook</div>
                <div>facebook</div>
                <div>facebook</div>
            </div>
        </div>
        <div class="contact-right">
            <form action="">
                <div class="group-form">
                    <input type="email" name="email" id="" placeholder="entrer votre mail">
                </div>
                <div class="group-form">
                    <textarea placeholder="Aa." name="" id="" cols="" rows="10"></textarea>
                </div>
                <div class="group-form">
                    <button type="submit">envoyer</button>
                </div>
            </form>
        </div>
    </div>
@endsection