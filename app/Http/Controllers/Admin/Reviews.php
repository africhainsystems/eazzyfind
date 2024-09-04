<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\ListingReview;
use App\Models\ListingMessage;

class Reviews extends Controller
{
    //Index
    public function index(Request $request){

        if ($request->ajax()) {

            $data = ListingReview::latest()->get();
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
                ->addColumn('listing', function ($row) {
                    $listing = Str::title($row["listings"]["title"]);
                    return $listing;
                })
                ->addColumn('users', function ($row) {
                    $users = Str::title($row["users"]["name"]);
                    return $users;
                })
                ->addColumn('rating', function ($row) {
                    if($row["rating"] == 5){
                        $rating = '
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        ';
                    }elseif($row["rating"] == 4){
                        $rating = '
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        ';
                    }elseif($row["rating"] == 3){
                        $rating = '
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        ';
                    }elseif($row["rating"] == 2){
                        $rating = '
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        ';
                    }else{
                        $rating = '
                        <i class="fa fa-star text-warning"></i>
                        ';
                    }
                    return $rating;
                })
                ->addColumn('review', function ($row) {
                    $review = Str::title($row["review"]);
                    return $review;
                })
                ->addColumn('status', function ($row) {
                    if($row["status"] == 1){
                        $status = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs">Active</badge>';
                    }else{
                        $status = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs">Hidden</badge>';
                    }
                    return $status;
                })
                ->addColumn('created', function ($row) {
                    $created = $row["created_at"]->format("d M, Y");
                    return $created;
                })
                ->rawColumns(['action', 'status', 'rating'])
                ->make(true);
        }

        return view('admin.listing.reviews.index');
    }

    // Listing Messages
    public function messages(Request $request){

        if ($request->ajax()) {

            $data = ListingMessage::latest()->get();
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
                ->addColumn('listing', function ($row) {
                    $listing = Str::title($row["listings"]["title"]);
                    return $listing;
                })
                 ->addColumn('providers', function ($row) {
                    $providers = Str::title($row["providers"]["username"]);
                    return $providers;
                })
                ->addColumn('users', function ($row) {
                    $users = Str::title($row["users"]["name"]);
                    return $users;
                })
                ->addColumn('message', function ($row) {
                    $message = Str::title($row["message"]);
                    return $message;
                })
                ->addColumn('created', function ($row) {
                    $created = $row["created_at"]->format("d M, Y");
                    return $created;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.listing.messages.index');
    }
}
