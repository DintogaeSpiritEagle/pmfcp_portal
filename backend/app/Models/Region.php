<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the provinces that belong to this region
     */
    public function provinces()
    {
        return $this->belongsToMany(Province::class);
    }

    /**
     * Get the electorates that belong to this region
     */
    public function electorates()
    {
        return $this->belongsToMany(Electorate::class);
    }
}
