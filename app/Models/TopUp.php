<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopUp extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this -> belongsTo(GameCategory::class);
    }
}
