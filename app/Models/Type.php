<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    use HasFactory;
}
