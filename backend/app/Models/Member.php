<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'lat',
        'lng',
        'electorate_id',
        'membership_type_id',
    ];

    /**
     * Get the MembershipType association with the member
     */
    public function membership_type()
    {
        return $this->hasOne(MembershipType::class);
    }

    /**
     * Get the Electorate association with the member
     */
    public function electorate()
    {
        return $this->hasOne(Electorate::class);
    }
}
