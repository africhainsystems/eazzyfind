<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\ListingCategory;
use App\Models\Listing;

class Listings extends Controller
{
    //Index
    public function index(Request $request){

        if ($request->ajax()) {
            $data = Listing::latest()->get();
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
                ->addColumn('provider', function ($row) {
                    $provider = Str::title($row["providers"]["username"]);
                    // $photo = '<img src="'.Storage::url($row["image"]).'" alt="'.Str::title($row["name"]).'" width="40" style="border-radius:5px;">';
                    return $provider;
                })
                ->addColumn('package', function ($row) {
                    $package = "Standard";
                    return $package;
                })
                ->addColumn('listing', function ($row) {
                    $listing = Str::title($row["title"]);
                    return $listing;
                })
                ->addColumn('category', function ($row) {
                    $category = Str::title($row["categories"]["name"]);
                    return $category;
                })
                ->addColumn('visibility', function ($row) {
                    if($row["visibility"] == 1){
                        $visibility = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs">Running</badge>';
                    }else{
                        $visibility = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs">Hidden</badge>';
                    }
                    return $visibility;
                })
                ->addColumn('status', function ($row) {
                    if($row["status"] == 1){
                        $status = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs">Active</badge>';
                    }else{
                        $status = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs">Inactive</badge>';
                    }
                    return $status;
                })
                ->addColumn('created', function ($row) {
                    $created = $row["created_at"]->format("d M, Y");
                    return $created;
                })
                ->rawColumns(['action', 'status', 'visibility'])
                ->make(true);
        }

        return view('admin.listing.index');
    }

    // Pending listings
    public function pendingListings(Request $request){

        if ($request->ajax()) {
            $data = Listing::where(['visibility' => 0, 'status' => 1])->latest()->get();
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
                ->addColumn('provider', function ($row) {
                    $provider = Str::title($row["providers"]["username"]);
                    // $photo = '<img src="'.Storage::url($row["image"]).'" alt="'.Str::title($row["name"]).'" width="40" style="border-radius:5px;">';
                    return $provider;
                })
                ->addColumn('package', function ($row) {
                    $package = "Standard";
                    return $package;
                })
                ->addColumn('listing', function ($row) {
                    $listing = Str::title($row["title"]);
                    return $listing;
                })
                ->addColumn('category', function ($row) {
                    $category = Str::title($row["categories"]["name"]);
                    return $category;
                })
                ->addColumn('visibility', function ($row) {
                    if($row["visibility"] == 1){
                        $visibility = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs">Running</badge>';
                    }else{
                        $visibility = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs">Hidden</badge>';
                    }
                    return $visibility;
                })
                ->addColumn('status', function ($row) {
                    if($row["status"] == 1){
                        $status = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs">Active</badge>';
                    }else{
                        $status = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs">Inactive</badge>';
                    }
                    return $status;
                })
                ->addColumn('created', function ($row) {
                    $created = $row["created_at"]->format("d M, Y");
                    return $created;
                })
                ->rawColumns(['action', 'status', 'visibility'])
                ->make(true);
        }

        return view('admin.listing.pending');
    }

    // Inactive Listings
    public function inactiveListings(Request $request){

        if ($request->ajax()) {
            $data = Listing::where(['visibility' => 0, 'status' => 0])->latest()->get();
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
                ->addColumn('provider', function ($row) {
                    $provider = Str::title($row["providers"]["username"]);
                    // $photo = '<img src="'.Storage::url($row["image"]).'" alt="'.Str::title($row["name"]).'" width="40" style="border-radius:5px;">';
                    return $provider;
                })
                ->addColumn('package', function ($row) {
                    $package = "Standard";
                    return $package;
                })
                ->addColumn('listing', function ($row) {
                    $listing = Str::title($row["title"]);
                    return $listing;
                })
                ->addColumn('category', function ($row) {
                    $category = Str::title($row["categories"]["name"]);
                    return $category;
                })
                ->addColumn('visibility', function ($row) {
                    if($row["visibility"] == 1){
                        $visibility = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs">Running</badge>';
                    }else{
                        $visibility = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs">Hidden</badge>';
                    }
                    return $visibility;
                })
                ->addColumn('status', function ($row) {
                    if($row["status"] == 1){
                        $status = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs">Active</badge>';
                    }else{
                        $status = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs">Inactive</badge>';
                    }
                    return $status;
                })
                ->addColumn('created', function ($row) {
                    $created = $row["created_at"]->format("d M, Y");
                    return $created;
                })
                ->rawColumns(['action', 'status', 'visibility'])
                ->make(true);
        }

        return view('admin.listing.inactive');
    }
}
