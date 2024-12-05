
use Illuminate\Database\Eloquent\Relations\BelongsTo; //important

/**
     * Get the getSuplier that owns the stok
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getSuplier(): BelongsTo //important
    {
        return $this->belongsTo(suplier::class, 'suplier_id', 'id');
    }


