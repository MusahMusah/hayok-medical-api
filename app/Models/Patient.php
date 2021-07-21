<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    // General Validation Rules for all Requests type
    public const VALIDATION_RULES = [
        'name'          => ['required', 'string', 'max:255'],
        'email'         => ['required', 'unique:users'],
    ];
}
