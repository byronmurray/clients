<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{

  public function website() {
      return $this->belongsTo(Website::class);
  }
  
}
