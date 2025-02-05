<?php
    namespace App\Models;

    use Illuminate\Support\Str;
    use Illuminate\Database\Eloquent\Model;

class Product extends Model
   {
    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
    protected $fillable = [
        'sku', 'name', 'slug', 'description', 'quantity',
        'weight', 'price', 'sale_price', 'status', 'featured', 'image_url',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'quantity'  =>  'integer',
        'brand_id'  =>  'integer',
        'status'    =>  'boolean',
            'featured'  =>  'boolean'
    ];

    /**
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }

    public function getImageAttribute()
    {
       return $this->image_url;
    }
}
