<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Committee extends Model
{
    use HasFactory;

    /**
     * Get all of the professors for the Committee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function professors(): HasMany
    {
        return $this->hasMany(Professor::class);
    }

    /**
     * Get all of the scholarshipApplications for the Committee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scholarshipApplications(): HasMany
    {
        return $this->hasMany(ScholarshipApplication::class);
    }
}
