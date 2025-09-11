<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name','responsible_id','licensed'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
