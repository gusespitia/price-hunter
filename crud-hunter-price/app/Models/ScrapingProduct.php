<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScrapingProduct extends Model
{
    use HasFactory;
    protected $table = 'scraping_products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'scraping_products_sslug',
        'id_product',
        'id_store',
        'scraping_products_status'

    ];

    protected $guarded = [];
    public $timestamps = false;
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product', 'id')->select(['id', 'product_name']);
    }
    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class, 'id_store', 'id')->select(['id', 'store_name']);
    }
}
