<?php

namespace App\Repository\Eloquent;

use App\Models\Product;
use Illuminate\Support\Collection;

class ProductRepository extends BaseRepository
{

    /**
    * ProductRepository constructor.
    *
    * @param Product $model
    */
   public function __construct(Product $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
    public function all(): Collection
    {
        return $this->model->all();    
    }
    
    public function get(): Collection
    {
        return $this->model->get();    
    }
    
    public function with($relations)
    {
        return $this->model->with($relations);    
    }
}