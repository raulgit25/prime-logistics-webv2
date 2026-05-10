<?php

namespace App\Models;

use App\Models\Incoterm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipuIncoterm extends Model
{
    protected $table = 'tipus_incoterms';
    public $timestamps = false;

    /**
     * Get all of the incoterms for the TipuIncoterm
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incoterms(): HasMany
    {
        return $this->hasMany(Incoterm::class, 'tipus_incoterm_id', 'id');
    }
}