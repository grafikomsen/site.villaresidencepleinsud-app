<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'visit_date',
        'message',
        'contacted_at',
    ];

    protected $casts = [
        'visit_date' => 'datetime',
        'contacted_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function markAsContacted()
    {
        $this->update(['contacted_at' => now()]);
    }

    public function isContacted()
    {
        return $this->contacted_at !== null;
    }
}
