<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_appo',
        'date_appo',
        'time_appo',
        'user_id',
    ];

     /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
