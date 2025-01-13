@extends('layouts.base')

@section('main')
    <x-note.card :title="$note->title" :content="$note->content"></x-note.card>
@endsection
