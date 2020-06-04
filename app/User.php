<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_name',
        'traditional_first_name',
        'other_name',
        'birth_country',
        'birth_state',
        'birth_city',
        'town',
        'living_country',
        'living_city',
        'living_state',
        'zip_code',
        'marital_status',
        'children_number',
        'mobile_tel',
        'father_last_name',
        'father_traditional_first_name',
        'father_other_name',
        'father_birth_country',
        'father_birth_state',
        'father_birth_city',
        'father_town',
        'father_children_number',
        'mother_last_name',
        'mother_traditional_first_name',
        'mother_other_name',
        'mother_birth_country',
        'mother_birth_state',
        'mother_birth_city',
        'mother_town',
        'mother_children_number',
        'type',
        'job',
        'image',
        'cover_image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()    {
    return $this->type === self::ADMIN_TYPE;
    }


    /**
     * [users description]
     * relationship many to many with Meetup model
     * @return [array] [description]
     */
     public function meetups()
     {
         return $this->belongsToMany('App\Meetup');
     }

     /**
      * [users description]
      * relationship one to many with Project model
      * @return [array] [description]
      */
      public function projects()
      {
          return $this->hasMany('App\Project');
      }


     /**
      * [users description]
      * relationship one to many with Meetup model
      * @return [array] [description]
      */
      public function meetupOne()
      {
          return $this->hasMany('App\Meetup');
      }
}
