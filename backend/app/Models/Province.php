<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'capital',
        'region_id',
        'lat',
        'lng',
    ];

    /**
     * Get the electorates that belong to this province
     */
    public function electorate()
    {
        return $this->hasMany(Electorate::class);
    }

    /**
     * Get the region that belong to this province
     */
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
