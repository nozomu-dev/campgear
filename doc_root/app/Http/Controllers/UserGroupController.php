<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserGroup;

class UserGroupController extends Controller
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
        $user_groups = UserGroup::all();
        return view('user_groups.index', ['user_groups'=> $user_groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_groups = new UserGroup;
        $user_groups->user_group_name = $request->user_group_name;
        $user_groups->save();

        return view('user_groups.store', ['message' => '作成しました。']);
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
        $user_group = UserGroup::find($id);
        return view('user_groups.edit', ['user_group'=> $user_group]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_group = UserGroup::find($id);
        $user_group->user_group_name = $request->user_group_name;
        $user_group->save();

        return view('user_groups.store', ['message'=> '変更を保存しました。']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserGroup::destroy($id);
        return view('user_groups.store', ['message'=> ' 削除しました。']);
    }
}
