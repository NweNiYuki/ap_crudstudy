<?php

namespace App\Http\Controllers;

use App\Category;
use App\Receipe;
use App\test;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // dd(app('test'));
        // session(['key1' => "value1"]); //session htoke htar
        // dd(session('key1'));
        // author_id == auth()->id()
        $data = Receipe::where('author_id', auth()->id())->get();

        // dd(auth()->user()); 
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // dd(request()->all());
        // dd(request()->all()); if request function is well, so use
        $validatedData = request()->validate([
        'name' => 'required',
        'ingredients' => 'required',
        'category' => 'required',

    ]);

        // $receipe = new Receipe();
        // $receipe->name =request()->name;
        // $receipe->ingredients =request()->ingredients;
        // $receipe->category =request()->category;

        // $receipe->save();

        // Receipe::create(request()->all());
        Receipe::create($validatedData + ['author_id' => auth()->id()] );
        // Receipe::create([
        //     'name' => request()->name,
        //     'ingredients' => request()->ingredients,
        //     'category' => request()->category,
        // ]);

        session()->flash("message", 'Receipe has created successfully');

        return redirect('receipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function show(Receipe $receipe, test $test)
    {
          // dd($test);
        // dd($receipe->categories);
        // if($receipe->author_id != auth()->id()){
        //     abort(403);
        // }
        $this->authorize('view', $receipe);
       return view('show', compact('receipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipe $receipe)
    {
         $this->authorize('view', $receipe);
        $category = Category::all();
        return view('edit', compact('receipe', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function update(Receipe $receipe)
    {
         $this->authorize('view', $receipe);
         $validatedData = request()->validate([
        'name' => 'required',
        'ingredients' => 'required',
        'category' => 'required',
    ]);

        // $receipe = Receipe::find($receipe->id);
        // $receipe->name =request()->name;
        // $receipe->ingredients =request()->ingredients;
        // $receipe->category =request()->category;

        // $receipe->save();
         // $receipe->update(request()->all());
         $receipe->update($validatedData);
        return redirect('receipe')->with('message', 'Receipe has updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipe $receipe)
    {
         $this->authorize('view', $receipe);
        $receipe->delete();
        return redirect('receipe')->with('message', 'Receipe has deleted successfully');
    }
}



