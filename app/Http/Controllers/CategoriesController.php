<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* VALIDATIONS */
        $request->validate([

            'name' => 'required',

            'catDesc' => 'required',

            'catImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        //FORM DATA
        $input = $request->all();
        //dd($input);

        if ($image = $request->file('catImage')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['catImage'] = "$profileImage";
        }

        Category::create($input);
        notify()->success('Registro exitoso!', 'Listo!');
        return redirect()->route('categories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::find($id);
        return view('admin.categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        /*
        $request->validate([

            'name' => 'required',

            'castDesc' => 'required'

        ]);*/
        $input = $request->all();

        if ($image = $request->file('catImage')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            //dd($input['catImage'] = "$profileImage");
            $input['catImage'] = "$profileImage";
        }else{
            unset($input['catImage']);
        }

        $category->update($input);
        notify()->success('Actualización exitosa!', 'Listo!');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        notify()->success('Eliminacion exitosa!', 'Listo!');
        return redirect()->route('categories.index');
    }
}
