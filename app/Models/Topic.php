<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    public function nestedTopics()
    {
        return $this->hasMany(NestedTopic::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
