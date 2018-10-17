<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('name', 'id')->all();
        $serial = 0;
        $serial_child = 1;

        return view('admin.category.index', compact('categories', 'serial', 'serial_child'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->where('parent_id', '=', 0)->pluck('name', 'id')->all();

        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        Category::create($input);

        return redirect('/categories/create')->with('success', trans('category.create_category_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::whereId($id)->firstOrFail();
        $categories = DB::table('categories')->where('parent_id', '=', 0)->pluck('name', 'id')->all();
        $selectedCategories = DB::table('categories')->where('id', '=', $id)->pluck('parent_id', 'id')->all();

        return view('admin.category.edit', compact('category', 'categories', 'selectedCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return back()->with('success', trans('category.update_category_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('success',
            trans('category.delete_category_success', ['name' => $category->name]));
    }

//    disable status of category
    public function hidden_status_categories(Request $request, $id)
    {
        $category = Category::find($id);
        $category->status = 0;
        $category->save();
        return response()->json(['flag' => 'success', 'message' => trans('category.update_status')]);
    }

//    enable status of category
    public function show_status_categories(Request $request, $id)
    {
        $category = Category::find($id);
        $category->status = 1;
        $category->save();
        return response()->json(['flag' => 'success', 'message' => trans('category.update_status')]);
    }
}
