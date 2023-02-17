@extends('layouts.app')
@section('main')
<div class="add-user">
    <p style="font-size: 18;text-align: center">modifier  cet agent</p>
    <form action="{{ route('members.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="div-img-form">
            <img class="img-form" src="{{ Storage::url($user->file) }}" alt="" srcset="">
        </div>
        <div class="group-form">
            <label for="">photo</label>
            <input type="file" name="file" placeholder="nom complet member">
        </div>
        <div class="group-form div-password">
            <input name="names" value="{{ $user->name }}" type="text" placeholder="nom complet member">
            <input name="email" value="{{ $user->email }}" type="email" placeholder="entrer le mail">
        </div>
        <div class="group-form">
            <input name="fonction" value="{{ $user->fonction }}" type="text" placeholder="fonction member">
        </div>
        <div class="group-form div-password">
            <input name="password" value="{{ Hash::check('plain-text',$user->password) }}" type="password" placeholder="password">
            <input name="password_confirmation" value="{{ Hash::check('plain-text',$user->password) }}" type="password" placeholder="confirm password">
        </div>
        <div class="group-form div-password">
            <input name="fbk" value="{{ $user->facebook }}" type="text" placeholder="adress facebook">
            <input name="twitter" value="{{ $user->tweeter }}" type="text" placeholder="adress tweeter">
        </div>
        <div class="group-form">
            <input name="whatsapp" value="{{ $user->whatsapp }}" type="text" placeholder="adress whatsapp">
        </div>
        <div class="group-form">
            <input name="isadmin" value="{{ $user->ismemberadmin }}" id="isadmin" type="checkbox">
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