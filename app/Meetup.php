<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meetup extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'user_id',
                           'type',
                           'place',
                           'begin_date',
                           'end_date',
                           'image',
                           'details',
                           'link',
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
