<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'intro',
        'text',
        'image',
        'link',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'tags',
        'views',
        'status',
        'publish_at',
        'portfolio_category_id',
    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id', 'id');
    }

    public function addView()
    {
        $this->views++;
        $this->save();

        return $this;
    }
}
