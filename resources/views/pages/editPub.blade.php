@extends('layouts.app')
@section('main')
<div class="main">
    <div class="div-form">
        <p style="margin-bottom: 30px;color: rgb(37, 92, 255); text-align: center">modifier cette publication</p>
        <img class="img-pub" src="{{ Storage::url($publication->file) }}" alt="">
        <form method="POST" action="{{ route('pub.update',$publication->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="group-form">
                <input name="file" type="file" value="{{ $publication->file }}">
            </div>
            <div class="group-form">
                <textarea placeholder="Aa." name="content" id="" rows="5">{{ $publication->text }}</textarea>
            </div>
            <div>
                @foreach ($errors->all() as $error)
                    <p style="color: red">{{ $error }}</p>
                @endforeach 
            </div>
            <div class="group-form">
                <button type="submit">publier</button>
            </div>
        </form>
    </div>
</div>
@endsection