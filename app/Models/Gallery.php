<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Optional: specify the table if it differs from the plural form 'galleries'
    // protected $table = 'galleries';

    // The attributes that are mass assignable.
    protected $fillable = ['image_path', 'description', 'image_date'];


    // Optional: disable timestamps if your table doesn't have created_at/updated_at
    // public $timestamps = false;

    // You can add relationships here if needed, for example:
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'uploaded_by');
    // }
}
