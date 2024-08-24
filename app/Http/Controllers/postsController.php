<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; 
class postsController extends Controller
{
        private $posts =  [
            ['id'=>1,
                'created_time' => '2024-08-17 10:00:00',
                'creator_name' => 'Ibrahim Rizq',
                'title' => 'Learning PHP Basics',
                'content' => 'PHP is a powerful scripting language for web development.'
            ],
            ['id'=>2,
                'created_time' => '2024-08-16 09:15:00',
                'creator_name' => 'Ahmed Ali',
                'title' => 'Getting Started with Laravel',
                'content' => 'Laravel is an elegant framework for PHP development.'
            ],
            ['id'=>3,
                'created_time' => '2024-08-15 14:30:00',
                'creator_name' => 'Mohamed Gad',
                'title' => 'Building RESTful APIs',
                'content' => 'APIs are crucial for building modern applications.'
            ],
            ['id'=>4,
                'created_time' => '2024-08-14 11:45:00',
                'creator_name' => 'Yasser Ahmed',
                'title' => 'Understanding OOP in PHP',
                'content' => 'Object-oriented programming is a key concept in PHP.'
            ],
            ['id'=>5,
                'created_time' => '2024-08-13 17:00:00',
                'creator_name' => 'omer Alaa',
                'title' => 'Handling Forms in PHP',
                'content' => 'Form handling is essential for user interaction in PHP.'
            ],
            [
                'id'=>6,
                'created_time' => '2024-08-12 08:30:00',
                'creator_name' => 'Sarah Ali',
                'title' => 'Introduction to MySQL',
                'content' => 'MySQL is a widely-used database system for PHP projects.'
            ],
            [
                'id'=>7,
                'created_time' => '2024-08-11 15:00:00',
                'creator_name' => 'Moamn Alam',
                'title' => 'PHP and AJAX Integration',
                'content' => 'AJAX allows for dynamic, asynchronous web applications.'
            ]
        ]; 

        function show() {
            return view('home' , ['posts'=>$this->posts]);
        }
        function details() {

            return view('show' , ['posts'=>$this->posts]);
    }
    function getPost($id) {

        foreach($this->posts as $post){
            if ($post['id'] == $id){
                return view('get_post' , ['post'=>$post]);
            }
            return 'post not found';
        }}
        
        function deletePost($id) {
            
$found =false;
            foreach ($this->posts as $key => $post) {
                if ($post['id'] == $id) {
                    $found =true;
                    unset($this->posts[$key]); 
                    // $this->posts = array_values($this->posts);
                    return view('show' , ['posts'=>$this->posts]);
                }
            }
            if (!$found){
                return "post not found";
            }
            
            
        }
    



function editPost($id) {

    foreach($this->posts as $post){
        if ($post['id'] == $id){
            return view('edit_post' , ['post'=>$post]);
        }
    }
return 'post not found';
    }
    
    
    
    public function store(Request $request) {


        // $request->validate([
        //     'title' => 'required|max:255',
        //     'content' => 'required',
        //     'creator_name' => 'required|max:100',
        // ]);
    
        $newId = end($this->posts)['id'] + 1;
    
        $newPost = [
            'id' => $newId,
            'created_time' => Carbon::now()->toDateTimeString(), 
            'creator_name' => $request->input('creator_name'),   
            'title' => $request->input('title'),                 
            'content' => $request->input('content')              
        ];
    
        $this->posts[] = $newPost;
    
        return view('home', ['posts' => $this->posts]);
    }}