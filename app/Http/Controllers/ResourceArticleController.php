<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Http\Request;

class ResourceArticleController extends Controller
{
    private ArticleService $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('web.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|min:10',
            'name' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,svg,gif'
        ], [
            'content.required' => "Поле Content не должно быть пустым",
            'name.required' => "Поле Name не должно быть пустым"
        ]);

        $input = $request->input();
        $this->articleService->store($input, $request->image);
        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        $article = $this->articleService->getById($id);
        if (!$article) abort(404);
        return view('web.article', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
