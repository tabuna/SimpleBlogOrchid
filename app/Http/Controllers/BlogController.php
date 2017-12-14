<?php

namespace App\Http\Controllers;

use Orchid\Platform\Core\Models\Post;

class BlogController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::type('blog')
            ->status('publish')
            ->with('attachment')
            ->orderBy('publish_at','Desc')
            ->simplePaginate(2);

        return view('pages.main', [
            'posts' => $posts
        ]);
    }

    /**
     * @param Post $post
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post)
    {
        return view('pages.post', [
            'post' => $post
        ]);
    }
}
