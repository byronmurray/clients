<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  public function contacts() {
    return $this->hasMany(Contact::class);
  }

  public function website() {
    return $this->hasOne(Website::class);
  }
}
