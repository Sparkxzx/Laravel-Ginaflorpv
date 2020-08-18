<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\CategoryContract;
use App\Contracts\ProductContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreProductFormRequest;

class ProductController extends BaseController
{

    protected $categoryRepository;

    protected $productRepository;

    public function __construct(

        CategoryContract $categoryRepository,
        ProductContract $productRepository
    )
    {

        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->listProducts();

        $this->setPageTitle('Productos', 'Lista de productos');
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->listCategories('name', 'asc');

        $this->setPageTitle('Products', 'Create Product');
        return view('admin.products.create', compact('categories'));
    }

    public function store(StoreProductFormRequest $request)
    {
        $params = $request->except('_token');

        $product = $this->productRepository->createProduct($params);

        if (!$product) {
            return $this->responseRedirectBack('Ha ocurrido un error al crear un producto.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Producto añadido correctamente' ,'success',false, false);
    }

    public function edit($id)
    {
        $product = $this->productRepository->findProductById($id);
        $categories = $this->categoryRepository->listCategories('name', 'asc');

        $this->setPageTitle('Products', 'Edit Product');
        return view('admin.products.edit', compact('categories', 'product'));
    }

    public function update(StoreProductFormRequest $request)
    {
        $params = $request->except('_token');

        $product = $this->productRepository->updateProduct($params);

        if (!$product) {
            return $this->responseRedirectBack('Un error ha ocurrido al editar un producto.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Producto actualizado correctamente' ,'success',false, false);
    }

    public function delete($id)
    {
        $product = $this->productRepository->deleteProduct($id);

        if (!$product) {
            return $this->responseRedirectBack('Un error ha ocurrido al momento de Eliminar.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'producto eliminada exitosamente' ,'success',false, false);
    }
}
