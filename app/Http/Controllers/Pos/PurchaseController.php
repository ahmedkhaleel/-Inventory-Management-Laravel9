<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function PurchaseAll()
    {
        $purchases = Purchase::all()->sortBy('created_at');
        return view('dashboard.purchase.purchase_all', compact('purchases'));
    }
    public function PurchaseAdd()
    {
        $suppliers = \App\Models\Supplier::all();
        $categories = \App\Models\Category::all();
        $products = \App\Models\Product::all();
        return view('dashboard.purchase.purchase_add', compact('suppliers', 'categories', 'products'));

    }
    public function PurchaseStore(StorePurchaseRequest $request)
    {
        $purchase = new Purchase();
        $purchase->name = $request->name;
        $purchase->created_by = auth()->user()->id;
        $purchase->save();
        $notification = array(
            'message' => 'Purchase Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('purchase.all')->with($notification);
    }
    public function PurchaseEdit($id)
    {
        $purchase = Purchase::find($id);
        return view('dashboard.purchase.purchase_edit', compact('purchase'));
    }
    public function PurchaseUpdate(UpdatePurchaseRequest $request, $id)
    {
        $purchase = Purchase::find($id);
        $purchase->name = $request->name;
        $purchase->updated_by = auth()->user()->id;
        $purchase->save();
        $notification = array(
            'message' => 'Purchase Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('purchase.all')->with($notification);
    }
    public function PurchaseDelete($id)
    {
        $purchase = Purchase::find($id);
        $purchase->delete();
        $notification = array(
            'message' => 'Purchase Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('purchase.all')->with($notification);
    }
}
