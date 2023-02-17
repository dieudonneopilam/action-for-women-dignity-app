@extends('layouts.app')
@section('main')
    <div class="add-user">
        <p style="font-size: 18;">ajouter un nouveau membre</p>
        <form action="">
            <div class="group-form">
                <input type="text" placeholder="nom complet member">
            </div>
            <div class="group-form">
                <input type="text" placeholder="fonction member">
            </div>
            <div class="group-form">
                <input type="password" placeholder="password">
            </div>
            <div class="group-form">
                <input type="password" placeholder="confirm password">
            </div>
            <div class="group-form">
                <input type="text" placeholder="adress facebook">
            </div>
            <div class="group-form">
                <input type="text" placeholder="adress tweeter">
            </div>
            <div class="group-form">
                <input type="text" placeholder="adress whatsapp">
            </div>
            <div class="group-form">
                <button class="btn">ajouter</button>
            </div>
        </form>
    </div>
@endsection