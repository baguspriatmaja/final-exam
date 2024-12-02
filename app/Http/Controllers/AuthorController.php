<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $authors = Author::query();

        if($keyword) {
            $authors = $authors->where('name', 'like', "%{$keyword}%");
        }

        $authors = $authors->orderBy('name', 'asc')->paginate(5);
        return response()->json($authors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required']
        ], [
            'name.required' => 'Nama author wajib diisi.',
        ]);

        $authors = Author::create($validatedData);
        return response()->json([
            'message' => 'Authors Created',
            'authors' => $authors
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $authors = Author::findOrFail($id);
        return response()->json($authors);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $authors = Author::findOrFail($id);
        $authors->update($request->all());
        return response()->json(['message' => 'Author Updated'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $authors = Author::findOrFail($id);
        $authors->delete();

        return response()->json(['message' => 'Author Deleted'], 200);
    }
}
