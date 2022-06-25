<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
   public function UnitAll()
   {
       $units = Unit::all()->sortBy('created_at');
       return view('dashboard.unit.unit_all', compact('units'));
   } // end of UnitAll

    public function UnitAdd()
    {
         return view('dashboard.unit.unit_add');
    } // end of UnitAdd
   public function UnitStore(Request $request)
   {
       $unit = new Unit();
       $unit->name = $request->name;
       $unit->created_by = auth()->user()->id;
       $unit->save();
       $notification = array(
           'message' => 'Unit Added Successfully',
           'alert-type' => 'success'
       );
       return redirect()->route('unit.all')->with($notification);
   } // end of UnitStore
    public function UnitEdit(Request $request,$id)
    {
        $unit = Unit::find($id);

        return view('dashboard.unit.unit_edit', compact('unit'));
    } // end of UnitEdit
    public function UnitUpdate(Request $request, $id)
    {
        $unit = Unit::find($id);
        $unit->name = $request->name;
        $unit->updated_by = auth()->user()->id;
        $unit->updated_at = now();
        $unit->save();
        $notification = array(
            'message' => 'Unit Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('unit.all')->with($notification);
    } // end of UnitUpdate
    public function UnitDelete($id)
    {
        $unit = Unit::find($id);
        $unit->delete();
        $notification = array(
            'message' => 'Unit Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('unit.all')->with($notification);
    } // end of UnitDelete
}
