<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Models\Menu;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id','DESC')->paginate(5);

        return view('admin.post.list',['posts'=>$posts]);
    }

    public function create()
    {
        $menus = Menu::orderBy('id','DESC')->get();
        return view('admin.post.create',['menus'=>$menus]);
    }

    public function store(Request $request)
    {
          $validator = Validator::make($request->all(),[
            'title'=>'required|unique:posts,title,except,id',
             'content'=>'required',
              'page_type'=>'required',
          ]);

          if($validator->passes()){
            $post = Post::create([
                'title'=>$request->title,
                'slug'=>$request->slug,
                'content'=>$request->content,
                'image'=>$request->post_image,
                'status'=>$request->status,
                'page_type'=>$request->page_type,
            ]);

              return redirect()->route('post.list')->with('success','Post Create successfully.');
          }

          else{
                return redirect('post.create')->withInput()->withErrors($validator);
          }

    }

    public function show(string $id)
    {

    }

    public function edit(string $id)
    {
       $post = Post::find($id);
       return view('admin.post.edit',['post'=>$post]);
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required|unique:posts,title,'.$id,
             'content'=>'required',
          ]);

          if($validator->passes()){
            $post = Post::find($id);
            if(!empty($request->post_image)){
              $image = $request->post_image;
            }
            else{
             $image =  $request->old_image;
            }
             $post->title = $request->title;
             $post->slug = $request->slug;
             $post->content = $request->content;
             $post->image =  $image;
             $post->status = $request->status;
             $post->page_type = $request->page_type;
             $post->update();
             return redirect()->route('post.list')->with('success','Post Updatge Successfully.');
          }
          else{
                return redirect('post.create')->withInput()->withErrors($validator);
          }

    }

    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
         return redirect()->route('post.list')->with('success','Post Delete Successfully.');
    }
}
