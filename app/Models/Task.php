<?php

 // app/models/Task.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

 class Task extends Model
 {

//assigning defalt values to user_id and done colums
 	protected $attributes = [
    'user_id' => 0,
    'done' => 0,
];



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'photo',
    ];

 }
