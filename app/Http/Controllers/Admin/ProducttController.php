<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductAdminService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Models\Menu;



class ProducttController extends Controller
{
    private $productService;

    public function __construct(ProductAdminService $product)
    {
        $this->productService  = $product;
    }

    public function store(ProductRequest $request){
        $this->productService->insert($request);
    }

    public function create()
    {
        return view('admin.product.add',[
            'title' => 'Thêm Sản Phẩm Mới',
            'menus' => $this->productService->getMenu()
        ]);
    }

}
