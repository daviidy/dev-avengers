<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'user_id',
                           'type',
                           'sector',
                           'begin_date',
                           'end_date',
                           'description',
                           'details',
                           'price'
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
         * relationship many to many with User model
         * @return [array] [description]
         */
         public function users()
         {
             return $this->belongsToMany('App\User');
         }
}
