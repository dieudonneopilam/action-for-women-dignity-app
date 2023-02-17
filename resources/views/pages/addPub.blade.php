@extends('layouts.app')
@section('main')
<div class="main">
    <div class="div-form">
        <p style="margin-bottom: 30px;color: rgb(37, 92, 255)">ajouter une nouvelle publication</p>
        <img class="img-pub" src="{{ asset('img/pub4.jpeg') }}" alt="">
        <form method="POST" action="{{ route('pub.store') }}" enctype="multipart/form-data" {{ csrf_token() }}>
            {{ csrf_field() }}
            <div class="group-form">
                <input name="file" type="file">
            </div>
            <div class="group-form">
                <textarea placeholder="Aa." name="content" name="content" id="" rows="5"></textarea>
            </div>
            <div class="group-form">
                <button type="submit">publier</button>
            </div>
        </form>
    </div>
</div>
@endsection