<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\supplier;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function ProductAll()
  {
      $products = Product::all()->sortBy('created_at');
        return view('dashboard.product.product_all', compact('products'));
  }
  public function ProductAdd()
  {
      $categories= Category::all()->sortBy('created_at');
      $suppliers = Supplier::all()->sortBy('created_at');
      $units = Unit::all()->sortBy('created_at');
      return view('dashboard.product.product_add', compact('categories','suppliers','units'));
  }
  public function ProductStore(Request $request)
  {
      $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;
        $product->unit_id = $request->unit_id;
        $product->created_by = auth()->user()->id;
        $product->save();
        $notification = array(
            'message' => 'Product Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('product.all')->with($notification);
  }
    public function ProductEdit($id)
    {
        $product = Product::find($id);
        $categories= Category::all()->sortBy('created_at');
        $suppliers = Supplier::all()->sortBy('created_at');
        $units = Unit::all()->sortBy('created_at');
        return view('dashboard.product.product_edit', compact('product','categories','suppliers','units'));
    }
    public function ProductUpdate(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;
        $product->unit_id = $request->unit_id;
        $product->updated_by = auth()->user()->id;
        $product->save();
        $notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('product.all')->with($notification);
    }
    public function ProductDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('product.all')->with($notification);
    }
}
