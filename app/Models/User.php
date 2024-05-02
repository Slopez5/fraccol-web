<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'role_id',
        'first_name',
        'last_name',
        'username',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role(): BelongsTo {
        return $this->belongsTo(Role::class);
    }

    public function realEstates(): HasMany {
        return $this->hasMany(RealEstateAgency::class,"admin_id");
    }

    public function realEstateAgencies(): BelongsToMany {
        return $this->belongsToMany(RealEstateAgency::class,"real_estate_user","user_id","real_estate_id");
    }

    public function isAdmin() {
        return $this->role_id == 1;
    }

    public function isRealState() {
        return $this->role_id == 2;
    }

    public function isAgent() {
        return $this->role_id == 3;
    }

    public function subdomain():MorphOne {
        return $this->morphOne(Subdomain::class,'subdomainable');
    }
}
