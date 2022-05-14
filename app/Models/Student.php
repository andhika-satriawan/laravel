<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $table = 'students';

    protected $fillable = [
        'major_id',
        'name',
        'phone',
        'gender',
        'address'
    ];

    /**
     * Get the major that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function major(): BelongsTo
    {
        return $this->belongsTo(User::class, 'major_id', 'id');
    }
}
