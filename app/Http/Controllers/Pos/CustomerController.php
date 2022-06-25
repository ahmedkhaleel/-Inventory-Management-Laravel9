<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\Customer;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class CustomerController extends Controller
{
    public function CustomerAll()
    {
        $customers = Customer::all()->sortBy('created_at');
        return view('dashboard.customer.customer_all', compact('customers'));
    } // end of CustomerAll

    public function CustomerAdd()
    {
        return view('dashboard.customer.customer_add');
    } // end of CustomerAdd

    public function CustomerStore(Request $request)
    {
        $image = $request->file('customer_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension(); // 343434.png
        Image::make($image)->resize(200,200)->save('upload/customer/'.$name_gen);
        $save_url = 'upload/customer/'.$name_gen;
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->customer_image = $save_url;
        $customer->mobile = $request->mobile;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->created_by = auth()->user()->id;
        $customer->save();
        $notification = array(
            'message' => 'Customer Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('customer.all')->with($notification);
    } // end of CustomerStore

    public function CustomerEdit($id)
    {
        $customer = Customer::find($id);
        return view('dashboard.customer.customer_edit', compact('customer'));
    } // end of CustomerEdit


public function Customerupdate(Request $request,$id)
{
    if($request->hasFile('customer_image')){
        $image =$request->file('customer_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension(); // 343434.png
        Image::make($image)->resize(200,200)->save('upload/customer/'.$name_gen);
        $save_url = 'upload/customer/'.$name_gen;
        Customer::findOrFail($id)->update([
            'name' => $request->name,
            'customer_image' => $save_url,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'updated_by' => auth()->user()->id,
            'updated_at' => Carbon::now()
        ]);
        $notification = array(
            'message' => 'Customer Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('customer.all')->with($notification);

    }else{
        Customer::findOrFail($id)->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'updated_by' => auth()->user()->id,
            'updated_at' => Carbon::now()
        ]);
        $notification = array(
            'message' => 'Customer Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('customer.all')->with($notification);
    }
}
    public function CustomerDelete($id)
    {
        $customer = Customer::findOrFail($id);
        $img = $customer->customer_image;
        unlink($img);
        $customer->delete();
        $notification = array(
            'message' => 'Customer Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('customer.all')->with($notification);
    } // end of CustomerDelete

}
