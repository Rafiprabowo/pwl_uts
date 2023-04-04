<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buku = Book::all();
        return view('book.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('book.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([            
            'judul' => 'required', 
            'pengarang' => 'required', 
            'jenis_buku' => 'required', 
            'harga' => 'required',    
         'qty' => 'required',
        'kode_buku' => 'required'
             ]);    
      //fungsi eloquent untuk menambah data        
 Book::create($request->all());          
//jika data berhasil ditambahkan, akan kembali ke halaman utama  
       return redirect()->route('buku.index')    
         ->with('success', 'Buku Berhasil Ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_buku)
    {
        //
        $books = Book::find($kode_buku);
        return view('book.detail', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_buku)
    {
        //
        $books = Book::find($kode_buku);
        return view('book.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_buku)
    {
        //
        $request->validate([
            'judul' => 'required', 
            'pengarang' => 'required', 
            'jenis_buku' => 'required', 
            'harga' => 'required',    
         'qty' => 'required',
        'kode_buku' => 'required'
        ]);

        Book::find($kode_buku)->update($request->all()); 

        return redirect()->route('buku.index')             ->with('success', 'Buku Berhasil Diupdate'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_buku)
    {
        //
        Book::find($kode_buku)->delete();
                 return redirect()->route('buku.index')             -> with('success', 'Buku Berhasil Dihapus');
    }
}
