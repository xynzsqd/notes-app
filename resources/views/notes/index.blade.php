@extends('layouts.base')

@section('main')
    <ul>
        @foreach ($notes as $note)
            <li>
                <div>
                    <x-note.card :title="$note->title" :content="$note->content"></x-note.card>
                    <div>
                        <p>sdf</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
