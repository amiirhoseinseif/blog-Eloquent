<?php

namespace App\Http\Controllers;

use \App\Models\Posts;
use \App\Models\Categories;
use App\Models\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use PhpParser\Node\Stmt\Foreach_;
use App\Repositories\UserRepository;
use Illuminate\View\View;


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




    public static function allCategories()
    {
        return categories::all()->toArray ();
    }
    public static function allPosts()
    {
        return Posts::with ('categoryOfPosts')->get ()->toArray ();
    }
    public static function findCategory($categoryid)
    {
//        oon 'where' ke too khatte paein hast ag nabashe query e  'select *' ro ejra mikone.
        return Categories::find($categoryid)->with('Posts')->where('categories.id',$categoryid)->get()->toArray();
    }
    public static function findPost($postid)
    {
//        oon 'where' ke too khatte paein hast ag nabashe query e  'select *' ro ejra mikone.
        return Posts::find($postid)->with('categoryOfPosts','commentsOfPosts')->where('posts.id',$postid)->get()->toArray();
    }
    public static function postTitle($postid)
    {
        return Posts::all('id','title')->where ('id',$postid)->toArray();
    }
    public static function categoryName($categoryid)
    {
        return Categories::all('id','name')->where ('id',$categoryid)->toArray();
    }




    public function home()
    {
//        $posts= $this->allPosts ();
//        $categories= $this->allCategories ();

        for ( $i= 0; $i <3; $i++) {
            $posts[$i]= $this->postTitle($i+1);
            $categories[$i]= $this->categoryName($i+1);
        }

        return view ("home",['posts' => $posts],['categories' => $categories]);
    }

    public function post ($PostId)
    {
        $post= $this->findPost ($PostId);

        return view ("post",['posts' => $post]);
    }
    public function category ($CategoryId)
    {
        $posts= $this->findCategory ($CategoryId);

        return view ("category",['posts' => $posts]);
    }

    public function posts ()
    {
        $posts = $this->AllPosts ();

        return view ('posts',['posts' => $posts]);
    }
    public function categories()
    {
        $cat = $this->AllCategories ();
        for ( $c= 0; $c< count ($cat); $c++) {
            $categories[] = $this->FindCategory ( $cat[$c]['id'] );
        }

        return view ('categories',['categories'=>$categories]);
    }
}
