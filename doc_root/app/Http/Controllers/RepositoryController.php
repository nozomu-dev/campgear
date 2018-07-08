<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository;

class RepositoryController extends Controller
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
        $repositories = Repository::all();
        return view('repositories.index', ['repositories'=> $repositories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('repositories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $repository = new Repository;
        $repository->repository_name = $request->repository_name;
        $repository->repository_address = $request->repository_address;
        $repository->save();

        return view('repositories.store', ['message' => '保管場所を作成しました。']);
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
        $repository = Repository::find($id);
        return view('repositories.edit', ['repository'=> $repository]);
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
        $repository = Repository::find($id);
        $repository->repository_name = $request->repository_name;
        $repository->repository_address = $request->repository_address;
        $repository->save();

        return view('repositories.store', ['message'=> '変更を保存しました。']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Repository::destroy($id);
        return view('repositories.store', ['message'=> ' 削除しました。']);
    }
}
