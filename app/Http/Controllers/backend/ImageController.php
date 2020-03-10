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
class ImageController extends Controller
{
    public function index(){
        $data['posts']=Post::orderBy('id', 'desc')->paginate(8);
        return view('backend.posts_image.posts_image',$data);
    }


    public function destroy($id){
        Post_image::destroy($id);
        return redirect()->back();
    }
}
