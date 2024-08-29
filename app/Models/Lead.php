<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lead extends Model
{
    use HasFactory;

    protected $table = 'leads';
    protected $fillable = ['first_name', 'last_name', 'birthDay', 'birthPlace', 'maritalStatus', 'occupation', 'unofficialManager', 'beneficiary', 'email', 'phone', 'address_id', 'source', 'status', 'ine_file', 'lead_agent_id', 'notes'];


    public function address() : BelongsTo {
        return $this->belongsTo(Address::class);
    }

    public function leadAgent() : BelongsTo {
        return $this->belongsTo(User::class, 'lead_agent_id');
    }

    public function activities() : HasMany {
        return $this->hasMany(Activity::class);
    }
}
