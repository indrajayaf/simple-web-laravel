<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class PostController extends Controller
{
    public function index(){
        // dd(request('search'));
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('blog', [
            'title' => 'All Posts '.$title,
            'active' => 'Blog',
            // 'posts' => Post::all()
            'posts' => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            'title' => 'Single Post',
            'active' => 'Blog',
            'post' => $post
        ]);
    }

    public function api(){
        $api_url = 'https://64cc65872eafdcdc8519cbdf.mockapi.io/products';

        // Read JSON file
        $json_data = file_get_contents($api_url);
        
        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);
        // echo "<pre>";
        // print_r($response_data); 

        foreach($response_data as $data){
            echo "name: ".$data->name;
            echo "<br />";
            // echo "name: ".$user->employee_age;
            // echo "<br /> <br />";
        }

        die;
        // All user data exists in 'data' object
        $user_data = $response_data->data;

        // Cut long data into small & select only first 10 records
        $user_data = array_slice($user_data, 0, 9);

        // Print data if need to debug
        print_r($user_data); die;

        // Traverse array and display user data
        foreach ($user_data as $user) {
            echo "name: ".$user->employee_name;
            echo "<br />";
            echo "name: ".$user->employee_age;
            echo "<br /> <br />";
        }

    }
}
