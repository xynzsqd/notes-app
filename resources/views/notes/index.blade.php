@extends('layouts.base')

@section('main')
    <ul>
        @foreach ($notes as $note)
            <li>
                <x-note.card :title="$note->title" :content="$note->content"></x-note.card>
            </li>
        @endforeach
    </ul>
@endsection
