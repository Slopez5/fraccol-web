<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    protected $fillable = ['lead_id','lead_agent_id','activity_type_id','notes','scheduled_at','completed_at'];

    public function lead(): BelongsTo
    {
        return $this->belongsTo(Lead::class);
    }

    public function leadAgent(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function activityType(): BelongsTo
    {
        return $this->belongsTo(ActivityType::class);
    }
    
}
