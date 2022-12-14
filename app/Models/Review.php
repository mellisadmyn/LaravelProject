<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public $primaryKey='id';
    protected $table="reviews";
    protected $fillable=[
        'user_id', 'rating', 'description', 'name', 'package_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function packages()
    {
        return $this->belongsTo(Packages::class, 'package_id','package_id');
    }

}
