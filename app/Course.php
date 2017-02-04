<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title','premium'];

    public function isPremium() {
      return $this->premium;
    }
    public function archive() {
      echo "<p>El curso {$this->title} fue archivado</p>";
    }
}
