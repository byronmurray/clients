<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{

  public function client() {
      return $this->belongsTo(client::class);
  }

  public function domains() {
      return $this->hasMany(Domain::class);
  }
  
}
