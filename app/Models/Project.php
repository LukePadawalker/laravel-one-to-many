<?php

namespace App\Models;


use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function projectDetail()
    {
        return $this->hasMany(Type::class);
    }


    protected $fillable = [];
}
