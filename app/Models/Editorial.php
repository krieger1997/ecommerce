<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'editoriales';
    
    public function getRouteKeyName()
    {
        // return $this->getKeyName();
        return 'slug';
    }
}
