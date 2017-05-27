<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActorIniciatesT extends Model
{
    protected $table = 'actor_iniciates_t';

    public $timestamps = false;

    protected $fillable = [
        'transaction_type_id',
        'actor_id'
    ];

    protected $guarded = [];

    public function actors() {

    	return $this->belongsToMany('App\Actor');
    }

    public function transaction_type() {

    	return $this->belongsToMany('App\TransactionType');
    }
}
