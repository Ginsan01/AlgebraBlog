<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    } 
/**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
	
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','content','user_id'];
	
	
	public function updatePost($data=array()){
		$this->update($data);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	}
