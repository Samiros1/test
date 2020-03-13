<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class ArticleUser extends Authenticatable
{
	protected $table = 'articles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'user_id', 'title'
    ];

	
	public function users(){
		return $this->belongsToMany('App\User', 'user_id');
	}
	
}
