@extends('layouts.base')

@section('main')
    <x-form.form method="POST" action="{{ route('notes.update', $note->id) }}">
        @method('PUT')
        <div>
            <label for="title">
                title <x-form.input type="text" name="title" id="title" value="{{ $note->title }}"/>
            </label>
        </div>
        <div>
            <label for="content">
                content <x-form.textarea name="content" id="content">{{ $note->content }}</x-form.textarea>
            </label>
        </div>
        <button type="submit">save</button>
    </x-form.form>
@endsection
