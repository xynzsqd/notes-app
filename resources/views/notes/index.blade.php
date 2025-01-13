@extends('layouts.base')

@section('main')
    <ul>
        @foreach ($notes as $note)
            <li>
                <div>
                    <x-note.card :title="$note->title" :content="$note->content" />
                    <div>
                        <x-form.form method="POST" action="{{route('notes.delete', $note->id)}}">
                            @method('DELETE')
                            <button>delete</button>
                        </x-form.form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
