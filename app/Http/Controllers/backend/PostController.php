<?php

namespace App\Http\Controllers\backend;
use App\Models\{User,Post,Post_image};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\{AddPostRequest};
use Arr;
use Str;
use Auth;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index(){
        $data['posts']=Post::orderBy('id', 'desc')->paginate(8);
        return view('backend.posts.ListPost',$data);
    }

    public function show($id){
        $data['post']=Post::find($id);
        if($data['post']==null){
            return redirect()->back();
        }else{
            return view('backend.posts.ShowPost',$data);
        }
    }

    public function create(){
        return view('backend.posts.AddPost');
    }

     public function store(AddPostRequest $request){
        $data = Arr::except($request, ['_token'])->toarray();
        $data['likes']=0;
        Post::create($data);
        return redirect()->back()->with('thongbao','đã thêm thành công');
    }

    public function edit($id){
        $data['post']=Post::find($id);
        if($data['post']==null){
            return redirect()->back();
        }else{
            return view('backend.posts.EditPost',$data);
        }
    }



    public function update(AddPostRequest $request,$id){
        $Post=Post::find($id);
        $data = Arr::except($request, ['_token','_method'])->toarray();
        $updated_at=Carbon::now()->toarray();
        $data['updated_at']=$updated_at['formatted'];
        //check ảnh
        // if ($request->hasFile('image')) {
        //     $data['image']=$request->file('image')->store('images','public');
        //  }else{
        //      $data['image']=$Post->image;
        //  }
         $Post->update($data);
         return redirect()->back()->with('thongbao',"Sửa bài viết thành công");
    }



    public function destroy($id){
        Post::destroy($id);
        return redirect()->back();
    }







}
