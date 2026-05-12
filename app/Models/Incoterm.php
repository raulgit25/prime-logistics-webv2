<?php

namespace App\Models;

use App\Models\TipuIncoterm;
use App\Models\TrackingStep;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Incoterm extends Model
{
    protected $table = 'incoterms';
    public $timestamps = false;

    /**
     * Get the tipusIncoterms that owns the Incoterm
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipusIncoterms(): BelongsTo
    {
        return $this->belongsTo(TipuIncoterm::class, 'tipus_incoterm_id', 'id');
    }
}