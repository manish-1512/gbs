<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateShortlistJobModel extends Model
{
    use HasFactory;

    protected $table = "candidate_shortlist_job";
    protected $primaryKey ="id";

}
