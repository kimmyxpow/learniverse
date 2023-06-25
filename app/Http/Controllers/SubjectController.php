<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\UserReadModule;
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
            'subject' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'level' => ['required', 'max:255'],
            'content' => ['required', 'max:65535'],
        ]);

        Subject::create($validatedData);

        return to_route('index')->with('success', 'Berhasil');
    }

    public function show(Subject $subject)
    {
        // $hasRead = UserReadModule::where('user_id', auth()->id())->where('subject_id', $subject->id)->first();
        UserReadModule::updateOrInsert(['user_id' => auth()->id()], ['subject_id' => $subject->id]);
        return view('subjects.show', ['subject' => $subject]);
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
            'subject' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'level' => ['required', 'max:255'],
            'content' => ['required', 'max:65535'],
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

    public function level($level)
    {
        $modules = Subject::latest()->orderBy('title', 'asc')->where('level', $level)->get();
        return view('level', ['level' => $level, 'modules' => $modules]);
    }

    public function subject($subject)
    {
        $modules = Subject::latest()->orderBy('title', 'asc')->where('subject', $subject)->get();
        return view('subject', ['subject' => $subject, 'modules' => $modules]);
    }
}
