<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'content' => ['string', 'max:1000'],
        ]);

        Note::query()->create([
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);

        return redirect()->route('notes.index');
    }

    public function show(Request $request, Note $note)
    {
        return view('notes.show', compact('note'));
    }

    public function edit(Request $request, Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function delete(string $id)
    {
        //
    }
}
