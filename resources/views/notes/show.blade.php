@extends('layouts.base')

@section('main')
    <div class="container mx-auto px-4 flex justify-center items-center">
        <x-note.card :title="$note->title" :content="$note->content">
        </x-note.card>
    </div>
@endsection
