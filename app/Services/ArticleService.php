<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleService
{
    public function store(array $input, $image)
    {
        $name = time() . '.' . $image->extension();
        $image->move(public_path('uploads'), $name);

        $input['user_id'] = Auth::id();
        $input['image'] = $name;
        Article::create($input);
    }

    public function getById(int $id)
    {
        return  Article::find($id);
    }

    public function getAll() {
        return Article::orderByDesc()->paginate(7);
    }
}
