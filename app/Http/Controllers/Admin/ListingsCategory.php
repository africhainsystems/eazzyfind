<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\ListingCategory;

class ListingsCategory extends Controller
{
    //Index
    public function index(Request $request){

        if ($request->ajax()) {
            $data = ListingCategory::orderBy('name', 'ASC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <ul class="action">
                        <li class="edit"><a href="javascript:void(0)" class="edit-data" data-id="' . $row['id'] . '"><i class="icon-pencil-alt"></i></a>
                        </li>
                        <li class="delete"><a href="javascript:void(0)" class="delete-data" data-id="' . $row['id'] . '"><i class="icon-trash"></i></a>
                        </li>
                    </ul>
                    ';
                    return $actionBtn;
                })
                ->addColumn('photo', function ($row) {
                    $photo = '<img src="'.Storage::url($row["image"]).'" alt="'.Str::title($row["name"]).'" width="40" style="border-radius:5px;">';
                    return $photo;
                })
                ->addColumn('name', function ($row) {
                    $name = Str::title($row["name"]);
                    return $name;
                })
                ->addColumn('slug', function ($row) {
                    $slug = $row["slug"];
                    return $slug;
                })
                ->addColumn('status', function ($row) {
                    $status = '
                <div class="form-check-size">
                    <div class="form-check form-switch form-check-inline">
                        <input data-id="' . $row['id'] . '" class="form-check-input check-size toggle-status" type="checkbox" role="switch"';
                    if ($row['status'] == 1) :
                        $status .= 'checked';
                    else :
                        $status .= '';
                    endif;
                    $status .= '>
                    </div>
                </div>
                ';
                    return $status;
                })
                ->addColumn('created', function ($row) {
                    $created = $row["created_at"]->format("d M, Y");
                    return $created;
                })
                ->rawColumns(['action', 'status', 'photo'])
                ->make(true);
        }

        return view('admin.listing.category.index');
    }

    // Add Department
    public function addCategory(Request $request){

        if($request->ajax()){

            $request->validate([
                'name' => ['required', 'string', 'min:3', 'unique:listing_categories,name'],
                'photo' => ['mimes:jpg,jpeg,png', 'required']
            ]);

            if ($request->hasFile('photo')) {
                if ($request->file('photo')->isValid()) {
                    $file = $request->file('photo');
                    $name = $file->hashName();
                    $storedFilePath = $file->storeAs('public/listings/icons', $name);
                }
            }

            ListingCategory::create([
                'name' => Str::title($request->name),
                'slug' => Str::of($request->name)->slug('-'),
                'image' => (!empty($request->file('photo')) ? $storedFilePath : NULL),
            ]);

            return response()->json(['success' => 'Category added successfully']);
        }
    }

    // Department Status
    public function categoryStatus(Request $request){

        if ($request->ajax()) {
            $category = ListingCategory::find($request->id);
            if ($category->status == 1) {
                $status = 0;
            } else {
                $status = 1;
            }
            $category->status = $status;
            $category->save();

            return response()->json(['success' => __('Category updated Successfully') ]);
        }
    }

    // Department Details
    public function categoryDetails(Request $request, $id){
        if($request->ajax()){
            $data = ListingCategory::find($id);
            return response()->json($data);
        }
    }

    // Update Department
    public function updateCategory(Request $request)
    {
        if ($request->ajax()) {

            $request->validate([
                'editname' => ['required', 'string'],
            ]);

            if ($request->hasFile('photo')) {
                if ($request->file('photo')->isValid()) {
                    $file = $request->file('photo');
                    $name = $file->hashName();
                    $storedFilePath = $file->storeAs('public/listings/icons', $name);
                }
            }

            ListingCategory::where('id', $request->editid)->update([
                'name' => Str::title($request->editname),
                'slug' => Str::of($request->editname)->slug('-'),
                'image' => (!empty($request->file('photo')) ? $storedFilePath : $request->editphoto),
                'updated_at' => Carbon::now(),
            ]);

            return response()->json(['success' => __('Category updated successfully')]);
        }
    }

    // Delete Department
    public function deleteCategory(Request $request){

        if ($request->ajax()) {
            ListingCategory::where('id', $request->id)->delete();
            return response()->json(['success' => __('Category deleted successfully')]);
        }
    }
}
