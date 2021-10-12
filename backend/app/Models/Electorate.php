<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electorate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'province_id',
        'region_id',
        'seat_type',
        'lat',
        'lng',
    ];

    /**
     * Get the province that belong to this electorate
     */
    public function province()
    {
        return $this->hasOne(Province::class);
    }

    /**
     * Get the region that belong to this electorate
     */
    public function region()
    {
        return $this->hasOne(Region::class);
    }

    /**
     * Get the members that belong to this electorate
     */
    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
}
