@extends('layouts.app')
@section('main')
@livewire('comment',['post'=>$id])
@endsection