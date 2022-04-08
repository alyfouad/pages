<?php 
namespace App\Services;

use App\Repository\Eloquent\ProductRepository;
use DataTables;


class ProductService
{

    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function dataTable()
    { 
        return DataTables::eloquent($this->productRepository->with('Category'))
        ->addColumn('category',function($item) {
            return $item->Category->title;
        })
        ->addColumn('publish',function($item) {
            return view('content.products.data_table.publish',['publish' => $item->publish]);
        })
        ->addColumn('options',function($item) {
            return view('content.products.data_table.options',['item' => $item]);
        })
        ->make(true);
    }

}