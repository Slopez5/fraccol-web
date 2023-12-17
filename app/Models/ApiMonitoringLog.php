<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiMonitoringLog extends Model
{
    use HasFactory;

    protected $table = 'api_monitoring_logs';

    protected $fillable = ['request_url','request_method','request_payload','response_code','response_payload'];
}
