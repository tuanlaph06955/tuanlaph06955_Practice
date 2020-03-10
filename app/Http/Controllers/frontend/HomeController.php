<?php

namespace App\Http\Controllers\frontend;
use App\Models\{User,Post,Post_image};
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        $data['posts']=Post::orderBy('id', 'desc')->get();
        return view('frontend.home.index',$data);
    }







































}
