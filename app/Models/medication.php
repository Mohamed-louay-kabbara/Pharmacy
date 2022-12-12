<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medication extends Model{
    use HasFactory;
    protected $fillable =['name','company','price','count','information','production_date','picture','medical_prescription','category_id'];
    public function category(){
        return $this->belongsTo(category::class);
    }
    public function buy(){
        return $this->hasMany(buy::class);
    }
}
