<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['technologies'];

    public function type()
    {
        return  $this->belongsTo(Type::class);
    }

    public function status()
    {
        return  $this->belongsTo(Status::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
