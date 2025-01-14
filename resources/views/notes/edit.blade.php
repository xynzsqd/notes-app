@extends('layouts.base')

@section('main')
    <div class="container mx-auto px-4">
        <x-form.form class="flex flex-col w-full gap-y-6" method="POST" action="{{ route('notes.update', $note->id) }}">
            @method('PUT')
            <div class="text-center">
                <label for="title">
                    <x-form.input class="w-3/5" type="text" name="title" id="title" value="{{ $note->title }}"/>
                </label>
            </div>
            <div class="text-center">
                <label for="content">
                    <x-form.textarea class="w-3/5" name="content" id="content">{{ $note->content }}</x-form.textarea>
                </label>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-800 transition-colors duration-200 text-white px-3 py-2 rounded-md text-2xl font-black">save</button>
            </div>
        </x-form.form>
    </div>
@endsection
