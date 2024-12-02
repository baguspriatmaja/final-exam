<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $categoryId = $request->input('category_id');

        $books = Books::with(['category','author']);

        if($keyword) {
            $books = $books->where('name', 'like', "%{$keyword}%");
        }

        if($categoryId) {
            $books = $books->where('category_id', $categoryId);
        }

        $books = $books->orderBy('id', 'asc')->paginate(5);
        return response()->json($books);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'image_url' => ['required', 'url'],
            'category_id' => ['required'],
            'author_id' => ['required'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'integer']
        ], [
            'name.required' => 'Nama buku wajib diisi.',
            'image_url.required' => 'Nama url wajib diisi.',
            'category_id.required' => 'Nama category wajib diisi.',
            'author_id.required' => 'Nama author wajib diisi.',
            'price.required' => 'Harga buku wajib diisi.',
            'price.numeric' => 'Harga harus berupa angka.',
            'stock.required' => 'Stok buku wajib diisi.',
            'stock.integer' => 'Stok harus berupa bilangan bulat.',
        ]);

        $books = Books::create($validatedData);
        return response()->json([
            'message' => 'Books Created',
            'books' => $books
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books = Books::findOrFail($id);
        return response()->json($books);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $books = Books::findOrFail($id);
        $books->update($request->all());
        return response()->json(['message' => 'Books Updated'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Books::findOrFail($id);
        $books->delete();

        return response()->json(['message' => 'Books Deleted'], 200);
    }
}
