<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LaravelCrudController extends Controller
{

    public function index()
    {
        return view('crud.add');
    }

    public $blog,$image,$imageName,$directory,$imgUrl;

    public function save(Request $request)
    {
        //----------eloqent ORM------------
        $this->blog = new Blog();
        $this->blog->blog_title    = $request->blog_title;
        $this->blog->blog_category = $request->blog_category;
        $this->blog->author_name   = $request->author_name;
        $this->blog->description   = $request->description;
        if($request->file('image')){
            $this->blog->image     = $this->saveImage($request);
        }
        $this->blog->save();

        // return back();

        // -------visitanotherpage-----------
        // return redirect('/');

        // --------------database--------------
        // DB::table('blogs')->insert([
        //     'blog_title'    => $request->blog_title,
        //     'blog_category' => $request->blog_category,
        //     'author_name'   => $request->author_name,
        //     'description'   => $request->description,
        // ]);

        return redirect(route('home'));
    }

    public function saveImage($request){
        $this->image     = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'asset/image/';
        $this->imgUrl    = $this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);

        return $this->imgUrl;
    }

    public function manage()
    {
        $this->blog=Blog::all();
        return view('crud.manage',[
            'blogs'=>$this->blog,
        ]);
    }
    public function edit($id)
    {
        $this->blog=Blog::find($id);
        // return $this->blog;
        return view('crud.edit',[
            'blog'=>$this->blog,
        ]);
    }
    public function update(Request $request){
        // return $request->file('image');
        $this->blog=Blog::find($request->blog_id);
        $this->blog->blog_title    = $request->blog_title;
        $this->blog->blog_category = $request->blog_category;
        $this->blog->author_name   = $request->author_name;
        $this->blog->description   = $request->description;

        if ($request->file('image')){
            if($this->blog->image!=null){
                unlink($this->blog->image);
            }
            $this->blog->image         = $this->saveImage($request);
        }

        $this->blog->save();
        return redirect(route(('manage.blog')));

    }
    // public function delete($id)
    // {
    //     $this->blog=Blog::find($id);
    //     $this->blog->delete();
    //     return redirect(route(('manage.blog')));
    // }
    public function delete(Request $request)
    {
        $this->blog=Blog::find($request->blog_id);
        unlink($this->blog->image);
        $this->blog->delete();
        return redirect(route(('manage.blog')));
    }
}
