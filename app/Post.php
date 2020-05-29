<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['title',
                           'user_id',
                           'content',
                           'image',

                         ];




       /**
        * [users description]
        * relationship one to many with User model
        * @return [array] [description]
        */
        public function user()
        {
            return $this->belongsTo('App\User');
        }

        /**
         * [users description]
         * relationship one to many with Comment model
         * @return [array] [description]
         */
         public function comments()
         {
             return $this->hasMany('App\Comment');
         }
}
