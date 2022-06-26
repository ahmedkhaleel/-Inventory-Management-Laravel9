<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function CategoryAll()
  {
    $categories = Category::all()->sortBy('created_at');
    return view('dashboard.category.category_all', compact('categories'));
  } // end of CategoryAll
    public function CategoryAdd()
    {
        return view('dashboard.category.category_add');
    } // end of CategoryAdd
public function CategoryStore(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->created_by = auth()->user()->id;
        $category->save();
        $notification = array(
            'message' => 'Category Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('category.all')->with($notification);
    } // end of CategoryStore
    public function CategoryEdit(Request $request,$id)
    {
        $category = Category::find($id);
        return view('dashboard.category.category_edit', compact('category'));
    } // end of CategoryEdit
public function CategoryUpdate(Request $request,$id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->updated_by = auth()->user()->id;
        $category->updated_at = now();
        $category->save();
        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('category.all')->with($notification);
    } // end of CategoryUpdate
    public function CategoryDelete($id)
    {
        $category = Category::find($id);
        $category->delete();
        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('category.all')->with($notification);
    } // end of CategoryDelete

}
