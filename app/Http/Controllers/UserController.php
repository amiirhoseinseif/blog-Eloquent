<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\comments;
use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use PhpParser\Node\Stmt\Foreach_;

class UserController extends Controller
{
    public function header()
    {
        return view ("header");
    }

    public function index()
    {
        return view ('index');
    }




    public static function AllCategories()
    {
        return $categories = categories::all()->toArray ();
    }
    public static function AllPosts()
    {
        $Posts= Posts::all();
        foreach ($Posts as $Post=>$x)
        {
//            oon 'where' ke too khatte paein hast ag nabashe query e  'select *' ro ejra mikone.
            $Post= $Posts->find($x)->with('Category')->get()->toArray();
        }
        return $Post;
    }
    public static function FindCategory($CategoryId)
    {
//        oon 'where' ke too khatte paein hast ag nabashe query e  'select *' ro ejra mikone.
        return $Posts= Categories::find($CategoryId)->with('Posts')->where('categories.id',$CategoryId)->get()->toArray();
    }
    public static function FindPost($PostId)
    {
//        oon 'where' ke too khatte paein hast ag nabashe query e  'select *' ro ejra mikone.
        return $Post= Posts::find($PostId)->with('Category','Comments')->where('posts.id',$PostId)->get()->toArray();
    }




    public function home()
    {
        $Posts= $this->AllPosts ();
        $Categories= $this->AllCategories ();

        return view ("home",['Post' => $Posts],['Category' => $Categories]);
    }
    public function post ($PostId)
    {
        $Post= $this->FindPost ($PostId);

     return view ("post",['Post' => $Post]);

    }
    public function category ($CategoryId)
    {
        $Posts= $this->FindCategory ($CategoryId);

        return view ("category",['Posts' => $Posts]);
    }

    public function posts ()
    {
        $Post = $this->AllPosts ();

        return view ('posts',['post' => $Post]);
    }
    public function categories()
    {
        $categories = $this->AllCategories ();

        return view ('categories',['Category'=>$categories]);
    }
}
