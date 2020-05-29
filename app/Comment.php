<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['content',
                           'user_id',
                           'post_id',

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
         * relationship one to many with Post model
         * @return [array] [description]
         */
         public function post()
         {
             return $this->belongsTo('App\Post');
         }
}
