<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'membership_type',
    ];

    /**
     * Get the members that belong to this membership_type
     */
    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
}
