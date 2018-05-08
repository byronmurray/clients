<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  public function contacts() {
    return $this->hasMany(Contact::class);
  }

  public function notes() {
    return $this->hasMany(Note::class);
  }

  public function logins() {
    return $this->hasMany(Login::class);
  }

  public function website() {
    return $this->hasOne(Website::class);
  }
}
