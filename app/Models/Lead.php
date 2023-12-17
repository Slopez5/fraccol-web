<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

     protected $table = 'leads';
    protected $fillable = ['first_name','last_name','birthDay','birthPlace','maritalStatus','occupation','unofficialManager','beneficiary','email','phone','address_id','source','status','ine_file','lead_agent_id','notes'];
}
