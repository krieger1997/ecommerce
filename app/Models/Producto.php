<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Editorial;

class Producto extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'productos';
    
    public function getRouteKeyName()
    {
        // return $this->getKeyName();
        return 'SLUG';
    }

    public function getEditorial(){
        return $this->belongsTo(Editorial::class, 'EDITORIAL');
    }
}
