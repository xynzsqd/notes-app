@extends('layouts.base')

@section('main')
    <x-form.form method="POST" action="{{ route('notes.store') }}">
        <div>
            <label for="title">
                title <x-form.input type="text" name="title" id="title"></x-form.input>
            </label>
        </div>
        <div>
            <label for="content">
                content <x-form.textarea name="content" id="content"></x-form.textarea>
            </label>
        </div>
        <button type="submit">send</button>
    </x-form.form>
@endsection
