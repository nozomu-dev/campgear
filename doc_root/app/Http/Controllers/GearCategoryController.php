<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GearCategory;

class GearCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gear_categories = GearCategory::all();

        return view('gear_categories.index', ['gear_categories'=> $gear_categories]);
    }


    public function create()
    {
        return view('gear_categories.create');
    }


    public function store(Request $request)
    {
        $gear_category = new GearCategory;
        $gear_category->gear_category_name = $request->gear_category_name;
        $gear_category->save();

        return view('gear_categories.store', ['message'=> '商品カテゴリーを追加しました。']);
    }

    public function edit($id)
    {
        $gear_category = GearCategory::find($id);
        return view('gear_categories.edit', ['gear_category'=> $gear_category]);
    }

    public function update(Request $request, $id)
    {
        $gear_category = GearCategory::find($id);
        $gear_category->gear_category_name = $request->gear_category_name;
        $gear_category->save();

        return view('gear_categories.store', ['message'=> '商品カテゴリーを編集しました。']);
    }
    public function destroy($id)
    {
        GearCategory::destroy($id);
        return view('gear_categories.store', ['message' => '書品カテゴリーを削除しました。']);
    }
}
