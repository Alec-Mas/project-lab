<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Post;
use App\Models\DocumentLink;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve the Hero
        $hero = Hero::paginate(5);
        // Retrieve the Latest Posts
        $posts = Post::paginate(20);
        return view('dashboard.home', compact('hero', 'posts'));
    }

    public function retrievePost(Request $request)
    {

        if($request->ajax())
        {
            $posts = Post::findorFail($request->id);

            return Response($posts);
        }
    }

    public function deletePost(Request $request)
    {
        $post = Post::findorFail($request->id);
        $post->delete();
        return redirect('dashboard');

    }

    public function createPost(Request $request)
    {
        if($request->ajax())
        {
            $this->validate($request, [
                'post_title'=>'required|max:50',
                'post_brief' =>'required',
                'post_content' =>'required',
                'post_thumbnail' =>'required',
                'post_call_to_action' =>'required',
                ]);

            Post::create([
                'post_title' => request('post_title'),
                'post_brief' => request('post_brief'),
                'post_content' => request('post_content'),
                'post_thumbnail' => request('post_thumbnail'),
                'post_call_to_action' => request('post_call_to_action'),
            ]);

            //return Response($request);
        }
    }

    public function updatePost(Request $request)
    {
        if($request->ajax())
        {
            $this->validate($request, [
                'post_title'=>'required|max:50',
                'post_brief' =>'required',
                'post_content' =>'required',
                'post_thumbnail' =>'required',
                'post_call_to_action' =>'required',
                ]);

            $post = Post::findorFail($request->id);

            $post->post_title = $request['post_title'];
            $post->post_brief = $request['post_brief'];
            $post->post_content = $request['post_content'];
            $post->post_thumbnail = $request['post_thumbnail'];
            $post->post_call_to_action = $request['post_call_to_action'];
            $post->save();

            return Response($request);
            //echo $request;
        }
    }


    public function retrieveHero(Request $request)
    {
        if($request->ajax())
        {
            $hero = Hero::findorFail($request->id);

            return Response($hero);
        }
    }

    public function deleteHero(Request $request)
    {
        $hero = Hero::findorFail($request->id);
        $hero->delete();
        return redirect('dashboard');

    }

    public function createHero(Request $request)
    {
        if($request->ajax())
        {
            $this->validate($request, [
                'hero_title'=>'required|max:50',
                'hero_content' =>'required',
                'hero_call_to_action' =>'required',
            ]);

            Hero::create([
                'hero_title' => request('hero_title'),
                'hero_content' => request('hero_content'),
                'hero_call_to_action' => request('hero_call_to_action'),
            ]);

            //return Response($request);
        }
    }

    public function updateHero(Request $request)
    {
        if($request->ajax())
        {
            $this->validate($request, [
                'hero_title'=>'required|max:50',
                'hero_content' =>'required',
                'hero_call_to_action' =>'required',
                ]);

            $hero = Hero::findorFail($request['id']);

            $hero->hero_title = $request['hero_title'];
            $hero->hero_content = $request['hero_content'];
            $hero->hero_call_to_action = $request['hero_call_to_action'];
            $hero->save();

            return Response($request);
            //echo $request;
        }
    }

    public function retrieveDocument(Request $request)
    {

        if($request->ajax())
        {
            $document = DocumentLink::findorFail($request->id);

            return Response($document);
        }
    }

    public function createDocument(Request $request)
    {
        if($request->ajax())
        {
            $this->validate($request, [
                'document_title'=>'required|max:50',
                'document_link' =>'required',
            ]);

            DocumentLink::create([
                'document_name' => request('document_title'),
                'document_link' => request('document_link'),
                'post_id' => request('id'),
            ]);

            //return Response($request);
        }
    }

    public function updateDocument(Request $request)
    {
        if($request->ajax())
        {
            $this->validate($request, [
                'document_title'=>'required|max:50',
                'document_link' =>'required',
                ]);

            $document = DocumentLink::findorFail($request['id']);

            $document->document_name = $request['document_title'];
            $document->document_link = $request['document_link'];
            $document->save();

            //return Response($request);
        }
    }
}
