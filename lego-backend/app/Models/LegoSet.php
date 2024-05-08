<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegoSet extends Model
{
    use HasFactory;

    public function themes()
    {
        return $this->belongsToMany(Theme::class);
    }
   




}
