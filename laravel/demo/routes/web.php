<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$users=[
    [
  "id"=>1,
  "name"=>"mohammed",
  "age"=>22
    ],
    [
  "id"=>2,
  "name"=>"mohammoud",
  "age"=>27
    ],
    [
  "id"=>3,
  "name"=>"malak",
  "age"=>24
    ],
    [
  "id"=>4,
  "name"=>"haneen",
  "age"=>23
    ],
];

Route::get('/users',function() use ($users)
{
    // var_dump($users); // blade ==> all users
    // return view('allUsers',["users"=>$users]);
    // compact ('var_name') ===>["users"=>$users]
    return view('allUsers',compact('users'));

});


$courses=[
    [
  "id"=>1,
  "name"=>"php",
  "description"=>" sql Lorem ipsum dolor sit amet consectetur adipisicing elit."
    ],
    [
  "id"=>2,
  "name"=>"sql",
  "description"=>" sql Lorem ipsum dolor sit amet consectetur adipisicing elit."

    ],
    [
  "id"=>3,
  "name"=>"laravel",
  "description"=>" laravel Lorem ipsum dolor sit amet consectetur adipisicing elit."

    ],
    [
  "id"=>4,
  "name"=>"js",
  "description"=>" js Lorem ipsum dolor sit amet consectetur adipisicing elit."

    ],
];


Route::get('/courses',function ()use ($courses){
return view('courses',compact('courses'));
});



