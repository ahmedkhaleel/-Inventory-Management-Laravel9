<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function SupplierAll()
    {
        $suppliers =supplier::all()->sortBy('created_at');
        return view('dashboard.supplier.supplier_all', compact('suppliers'));
    } // end of SupplierAll

    public function SupplierAdd()
    {



        return view('dashboard.supplier.supplier_add');
    } // end of SupplierAdd

    public function SupplierStore(Request $request)
    {


            $request->validate([
                'name' => 'required|unique:suppliers',
                'email' => 'required|unique:suppliers',
                'mobile' => 'required|unique:suppliers',
                'address' => 'required',
            ]);


            $supplier = new supplier();
            $supplier->name = $request->name;
            $supplier->email = $request->email;
            $supplier->mobile = $request->mobile;
            $supplier->address = $request->address;
            $supplier->created_by = auth()->user()->id;

            $supplier->save();
        $notification = array(
            'message' => 'Supplier Added Successfully',
            'alert-type' => 'success'
        );
            return redirect()->route('supplier.all')->with($notification);
        }// end of SupplierStore

    public function SupplierEdit($id)
    {
        $supplier = supplier::find($id);
        return view('dashboard.supplier.supplier_edit', compact('supplier'));
    } // end of SupplierEdit


    public function SupplierUpdate(Request $request,$id)
    {
        $supplier = supplier::find($id);

        $supplier->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'updated_by' => auth()->user()->id,
        ]);
        $notification = array(
            'message' => 'Supplier Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('supplier.all')->with($notification);


    } // end of SupplierUpdate

    public function SupplierDelete($id)
    {
        $supplier = supplier::find($id);
        $supplier->delete();
        $notification = array(
            'message' => 'Supplier Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->route('supplier.all')->with($notification);
    } // end of SupplierDelete

}
