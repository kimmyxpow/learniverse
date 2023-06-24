<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'subject' => ['required'],
            'title' => ['required'],
            'level' => ['required'],
            'content' => ['required'],
        ]);

        Subject::create($validatedData);

        return to_route('index')->with('success', 'Berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('subjects.edit', ['subject' => $subject]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $validatedData =  $request->validate([
            'subject' => ['required'],
            'title' => ['required'],
            'level' => ['required'],
            'content' => ['required'],
        ]);

        $subject->update($validatedData);

        return to_route('index')->with('success', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return to_route('index')->with('success', 'Berhasil');
    }
}
