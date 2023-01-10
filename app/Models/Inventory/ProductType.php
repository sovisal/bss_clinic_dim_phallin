<?php

namespace App\Models\Inventory;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductType extends BaseModel
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany(Product::class, 'type_id');
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class, 'type_id');
    }

    public function getLinkAttribute()
    {
        if (($this->status ?? 0) > 0 && can('UpdateProductType')) { // will check permission
            return d_link(
                d_obj($this, ['name_en', 'name_kh']),
                route('inventory.product_type.edit', [d_obj($this, 'id'), 'back' => url()->current()])
            );
        } else {
            return d_obj($this, ['name_en', 'name_kh']);
        }
    }
}
