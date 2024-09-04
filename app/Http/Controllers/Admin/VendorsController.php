<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Vendor;
use App\Models\VendorInfo;
use App\Models\IdentityType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class VendorsController extends Controller
{
    //Index
    public function index(Request $request){

        if ($request->ajax()) {
            $data = Vendor::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <ul class="action">
                        <li class="edit"><a href="'.route('admin.vendors.edit', $row["id"]).'" class="edit-data" data-id="' . $row['id'] . '"><i class="icon-pencil-alt"></i></a>
                        </li>
                        <li class="delete"><a href="javascript:void(0)" class="delete-data" data-id="' . $row['id'] . '"><i class="icon-trash"></i></a>
                        </li>
                    </ul>
                    ';
                    return $actionBtn;
                })
                ->addColumn('photo', function ($row) {
                    $photo = '<img src="'.Storage::url($row["photo"]).'" alt="'.Str::title($row["name"]).'" width="50" style="border-radius:5px;">';
                    return $photo;
                })
                ->addColumn('name', function ($row) {
                    $name = Str::title($row["username"]);
                    return $name;
                })
                ->addColumn('phone', function ($row) {
                    $phone = $row["phone"];
                    return $phone;
                })
                ->addColumn('email', function ($row) {
                    $email = $row["email"];
                    return $email;
                })
                ->addColumn('verified', function ($row) {
                    if($row["verified"] == 1){
                        $verified = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs">Verified</badge>';
                    }else{
                        $verified = '<badge class="btn btn-pill btn-outline-warning btn-air-warning btn-xs" type="button" title="btn btn-pill btn-outline-warning btn-air-warning btn-xs">Pending</badge>';
                    }

                    return $verified;
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
                ->rawColumns(['action', 'status', 'photo', 'verified'])
                ->make(true);
        }

        return view('admin.vendors.index');
    }

    // Active Vendors
    public function activeVendors(Request $request){

        if ($request->ajax()) {
            $data = Vendor::where(['status' => true, 'verified' => true])->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <ul class="action">
                        <li class="edit"><a href="'.route('admin.vendors.edit', $row["id"]).'" class="edit-data" data-id="' . $row['id'] . '"><i class="icon-pencil-alt"></i></a>
                        </li>
                    </ul>
                    ';
                    return $actionBtn;
                })
                ->addColumn('photo', function ($row) {
                    $photo = '<img src="'.Storage::url($row["photo"]).'" alt="'.Str::title($row["name"]).'" width="50" style="border-radius:5px;">';
                    return $photo;
                })
                ->addColumn('name', function ($row) {
                    $name = Str::title($row["username"]);
                    return $name;
                })
                ->addColumn('phone', function ($row) {
                    $phone = $row["phone"];
                    return $phone;
                })
                ->addColumn('email', function ($row) {
                    $email = $row["email"];
                    return $email;
                })
                ->addColumn('verified', function ($row) {
                    if($row["verified"] == 1){
                        $verified = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs">Verified</badge>';
                    }else{
                        $verified = '<badge class="btn btn-pill btn-outline-warning btn-air-warning btn-xs" type="button" title="btn btn-pill btn-outline-warning btn-air-warning btn-xs">Pending</badge>';
                    }

                    return $verified;
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
                ->rawColumns(['action', 'status', 'photo', 'verified'])
                ->make(true);
        }

        return view('admin.vendors.active');
    }

    // Pending Vendors
    public function pendingVendors(Request $request){

        if ($request->ajax()) {
            $data = Vendor::where(['status' => false, 'verified' => false])->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <ul class="action">
                        <li class="edit"><a href="'.route('admin.vendors.edit', $row["id"]).'" class="edit-data" data-id="' . $row['id'] . '"><i class="icon-pencil-alt"></i></a>
                        </li>
                    </ul>
                    ';
                    return $actionBtn;
                })
                ->addColumn('photo', function ($row) {
                    $photo = '<img src="'.Storage::url($row["photo"]).'" alt="'.Str::title($row["name"]).'" width="50" style="border-radius:5px;">';
                    return $photo;
                })
                ->addColumn('name', function ($row) {
                    $name = Str::title($row["username"]);
                    return $name;
                })
                ->addColumn('phone', function ($row) {
                    $phone = $row["phone"];
                    return $phone;
                })
                ->addColumn('email', function ($row) {
                    $email = $row["email"];
                    return $email;
                })
                ->addColumn('verified', function ($row) {
                    if($row["verified"] == 1){
                        $verified = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs">Verified</badge>';
                    }else{
                        $verified = '<badge class="btn btn-pill btn-outline-warning btn-air-warning btn-xs" type="button" title="btn btn-pill btn-outline-warning btn-air-warning btn-xs">Pending</badge>';
                    }

                    return $verified;
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
                ->rawColumns(['action', 'status', 'photo', 'verified'])
                ->make(true);
        }

        return view('admin.vendors.pending');
    }

    // Cancelled Vendors
    public function cancelledVendors(Request $request){

        if ($request->ajax()) {
            $data = Vendor::where(['status' => false])->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <ul class="action">
                        <li class="edit"><a href="'.route('admin.vendors.edit', $row["id"]).'" class="edit-data" data-id="' . $row['id'] . '"><i class="icon-pencil-alt"></i></a>
                        </li>
                    </ul>
                    ';
                    return $actionBtn;
                })
                ->addColumn('photo', function ($row) {
                    $photo = '<img src="'.Storage::url($row["photo"]).'" alt="'.Str::title($row["name"]).'" width="50" style="border-radius:5px;">';
                    return $photo;
                })
                ->addColumn('name', function ($row) {
                    $name = Str::title($row["username"]);
                    return $name;
                })
                ->addColumn('phone', function ($row) {
                    $phone = $row["phone"];
                    return $phone;
                })
                ->addColumn('email', function ($row) {
                    $email = $row["email"];
                    return $email;
                })
                ->addColumn('verified', function ($row) {
                    if($row["verified"] == 1){
                        $verified = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs">Verified</badge>';
                    }else{
                        $verified = '<badge class="btn btn-pill btn-outline-warning btn-air-warning btn-xs" type="button" title="btn btn-pill btn-outline-warning btn-air-warning btn-xs">Pending</badge>';
                    }

                    return $verified;
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
                ->rawColumns(['action', 'status', 'photo', 'verified'])
                ->make(true);
        }

        return view('admin.vendors.cancelled');
    }

    // Add Vendor
    public function addVendor(){
        $identity = IdentityType::where('status', true)->latest()->get();
        return view('admin.vendors.add', compact('identity'));
    }

    // Save Vendor
    public function saveVendor(Request $request){

        $request->validate([
            'names' => ['required', 'string', 'min:3'],
            'companyname' => ['required', 'string', 'unique:vendors,username'],
            'email' => ['required', 'email', 'lowercase', 'unique:vendors,email'],
            'phone' => ['required', 'string', 'unique:vendors,phone'],
            'country' => ['required'],
            'city' => ['required'],
            'address' => ['required', 'string'],
            'id_type' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kyc_docs' => 'nullable|mimes:pdf,zip',
        ]);

        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $file = $request->file('photo');
                $name = $file->hashName();
                $storedFilePath = $file->storeAs('public/vendors', $name);
            }
        }

        if ($request->hasFile('kyc_docs')) {
            $docs = $request->file('kyc_docs');
            $docsname = $docs->hashName();
            $storedDocPath = $docs->storeAs('public/vendors/kyc', $docsname);
        }

        $createVendor = Vendor::create([
            'username' => Str::title($request->companyname),
            'photo' => (!empty($request->file('photo')) ? $storedFilePath : NULL),
            'email' => Str::lower($request->email),
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'email_verified_at' => Carbon::now(),
            'verified' => true,
        ]);

        if($createVendor){
            VendorInfo::create([
                'vendor_id' => $createVendor->id,
                'name' => Str::title($request->names),
                'country' => $request->country,
                'city' => $request->city,
                'address' => $request->address,
                'details' => $request->details,
                'identity_type' => $request->id_type,
                'kyc' => (!empty($request->file('kyc')) ? $storedDocPath : NULL),
            ]);
        }

        $notification = array(
            'message' => __('Provider added successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // Edit Vendor
    public function editVendor($id){
        $vendor = Vendor::find($id);
        $vendorinfo = VendorInfo::where('vendor_id', $id)->first();
        $identity = IdentityType::where('status', true)->latest()->get();
        return view('admin.vendors.edit', compact('vendor', 'identity', 'vendorinfo'));
    }

    // Update Vendor
    public function updateVendor(Request $request, $id){

        $request->validate([
            'names' => ['required', 'string', 'min:3'],
            'companyname' => ['required', 'string'],
            'email' => ['required', 'email', 'lowercase'],
            'phone' => ['required', 'string'],
            'country' => ['required'],
            'city' => ['required'],
            'address' => ['required', 'string'],
            'id_type' => ['required'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kyc_docs' => 'nullable|mimes:pdf,zip',
        ]);

        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $file = $request->file('photo');
                $name = $file->hashName();
                $storedFilePath = $file->storeAs('public/vendors', $name);
            }
        }

        if ($request->hasFile('kyc_docs')) {
            $docs = $request->file('kyc_docs');
            $docsname = $docs->hashName();
            $storedDocPath = $docs->storeAs('public/vendors/kyc', $docsname);
        }

        $oldpass = Vendor::find($id);

        Vendor::findOrFail($id)->update([
            'username' => Str::title($request->companyname),
            'photo' => (!empty($request->file('photo')) ? $storedFilePath : $request->old_photo),
            'email' => Str::lower($request->email),
            'phone' => $request->phone,
            'password' => (!empty($request->password)) ? Hash::make($request->password) : $oldpass->password,
            'updated_at' => Carbon::now(),
        ]);

        VendorInfo::where('vendor_id', $id)->update([
            'name' => Str::title($request->names),
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'details' => $request->details,
            'identity_type' => $request->id_type,
            'kyc' => (!empty($request->file('kyc')) ? $storedDocPath : $request->old_kyc_docs),
        ]);

        $notification = array(
            'message' => __('Provider updated successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // Vendor Status
    public function vendorStatus(Request $request){

        if ($request->ajax()) {
            $vendor = Vendor::find($request->id);
            if ($vendor->status == 1) {
                $status = 0;
            } else {
                $status = 1;
            }
            $vendor->status = $status;
            $vendor->save();

            return response()->json(['success' => __('Provider disabled Successfully') ]);
        }
    }

    // Identity form
    public function identityform(Request $request){
        if ($request->ajax()) {
            $data = IdentityType::orderBy('name', 'ASC')->get();
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
                ->addColumn('name', function ($row) {
                    $name = Str::title($row["name"]);
                    return $name;
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
        return view('admin.vendors.identity.index');
    }

    // Add form
    public function addForm(Request $request){

        if($request->ajax()){

            $request->validate([
                'name' => ['required', 'string', 'min:3', 'unique:identity_types,name'],
            ]);

            IdentityType::create([
                'name' => Str::title($request->name),
            ]);

            return response()->json(['success' => 'Category added successfully']);
        }
    }

    // Form status
    public function formStatus(Request $request){

        if ($request->ajax()) {
            $category = IdentityType::find($request->id);
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

    // Form details
    public function formDetails(Request $request, $id){
        if($request->ajax()){
            $data = IdentityType::find($id);
            return response()->json($data);
        }
    }

    // Update form
    public function updateForm(Request $request)
    {
        if ($request->ajax()) {

            $request->validate([
                'editname' => ['required', 'string'],
            ]);

            IdentityType::where('id', $request->editid)->update([
                'name' => Str::title($request->editname),
                'updated_at' => Carbon::now(),
            ]);

            return response()->json(['success' => __('Category updated successfully')]);
        }
    }

    // Delete form
    public function deleteForm(Request $request){

        if ($request->ajax()) {
            IdentityType::where('id', $request->id)->delete();
            return response()->json(['success' => __('Category deleted successfully')]);
        }
    }
}
