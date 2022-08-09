<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidateSkillModel extends Model
{
    use HasFactory;

    protected $fillable = [        
        'user_id','skill_id'
    ];

    protected $table = "candidate_skills";
    protected $primaryKey ="id";
    public $timestamps =true;
}
