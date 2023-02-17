@extends('layouts.app')
@section('main')
    <div class="add-user">
        <p style="font-size: 18;">ajouter un nouveau membre</p>
        <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="group-form">
                <label for="">photo</label>
                <input type="file" name="file" placeholder="nom complet member">
            </div>
            <div class="group-form div-password">
                <input name="names" type="text" placeholder="nom complet member">
                <input name="email" type="email" placeholder="entrer le mail">
            </div>
            <div class="group-form">
                <input name="fonction" type="text" placeholder="fonction member">
            </div>
            <div class="group-form div-password">
                <input name="password" type="password" placeholder="password">
                <input name="password_confirmation" type="password" placeholder="confirm password">
            </div>
            <div class="group-form div-password">
                <input name="fbk" type="text" placeholder="adress facebook">
                <input name="twitter" type="text" placeholder="adress tweeter">
            </div>
            <div class="group-form">
                <input name="whatsapp" type="text" placeholder="adress whatsapp">
            </div>
            <div class="group-form">
                <input name="isadmin" id="isadmin" type="checkbox">
                <label for="isadmin">est un administateur</label>
            </div>
            <div style="">
                @foreach ($errors->all() as $error)
                    <p style="color: red">{{ $error }}</p>
                @endforeach
            </div>
            <div class="group-form">
                <button class="btn">ajouter</button>
            </div>
        </form>
    </div>
@endsection