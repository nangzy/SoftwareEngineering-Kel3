<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function news()
    {
        return $this -> hasMany(News::class);
    }
    public function merches()
    {
        return $this -> hasMany(Merch::class);
    }
    public function topups()
    {
        return $this -> hasMany(TopUp::class);
    }
    public function tickets()
    {
        return $this -> hasMany(Ticket::class);
    }
}
