<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\books;
use Illuminate\Support\Facades\Storage;

class librarController extends Controller
{

    public function index()
    {
        $books = books::all();
        return view('home', compact('books'));
    }


    public function inputView()
    {
        return view('inputForm');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        //vaalidasi data
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg'
            // 'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($validated) {
            //upload image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //masukan data ke database
            $books = new books;
            $books->title = $request->title;
            $books->description = $request->description;
            $books->author = $request->author;
            $books->publisher = $request->publisher;
            $books->image = $image->hashName();
            $books->save();

            return redirect('/');
        }



    }

    // editview
    public function editView()
    {
        $books = books::all();
        return view('editView', compact('books'));
    }
    public function editform(books $id)
    {
        $book = $id;
        return view('updateForm', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, books $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'image' => '|mimes:jpg,png,jpeg'
            // 'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // jika input image
        if ($request->file('image')) {
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());
            // delete id terdahulu
            Storage::delete('public/posts/' . $id->image);
            $id->update([
                'title' => $request->title,
                'description' => $request->description,
                'author' => $request->author,
                'publisher' => $request->publisher,
                'image' => $image->hashName(),

            ]);
        } else {
            // jika tidak input image
            $id->update([
                'title' => $request->title,
                'description' => $request->description,
                'author' => $request->author,
                'publisher' => $request->publisher,
            ]);
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(books $id)
    {
        $id->delete();
        return redirect('/edit');

    }

    public function detail(books $id)
    {
        $books = $id;
        return view('detail', compact('books'));
    }

    public function loginView()
    {
        return view('loginForm');
    }
}