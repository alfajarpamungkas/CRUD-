<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articel;


class Company extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function articel()
    {
        return $this->hasMany(Articel::class);
    }
}
