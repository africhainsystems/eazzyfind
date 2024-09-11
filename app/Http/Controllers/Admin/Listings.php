<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use App\Models\ListingCategory;
use App\Models\Listing;
use App\Models\ListingGallery;
use App\Models\ListingProduct;
use App\Models\ListingWorkHour;
use App\Models\ListingFaq;
use App\Models\ListingSocial;
use App\Models\Vendor;

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
                        <li class="edit"><a href="'.route('admin.listings.edit',$row["id"]).'" data-id="' . $row['id'] . '"><i class="icon-pencil-alt"></i></a>
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
                        $visibility = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs update-visibility" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs" data-id="' . $row['id'] . '">Visible</badge>';
                    }else{
                        $visibility = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs update-visibility" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs" data-id="' . $row['id'] . '">Hidden</badge>';
                    }
                    return $visibility;
                })
                ->addColumn('status', function ($row) {
                    if($row["status"] == 1){
                        $status = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs update-status" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs" data-id="' . $row['id'] . '">Active</badge>';
                    }else{
                        $status = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs update-status" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs" data-id="' . $row['id'] . '">Inactive</badge>';
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
                        <li class="edit"><a href="'.route('admin.listings.edit',$row["id"]).'" data-id="' . $row['id'] . '"><i class="icon-pencil-alt"></i></a>
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
                        $visibility = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs update-visibility" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs" data-id="' . $row['id'] . '">Visible</badge>';
                    }else{
                        $visibility = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs update-visibility" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs" data-id="' . $row['id'] . '">Hidden</badge>';
                    }
                    return $visibility;
                })
                ->addColumn('status', function ($row) {
                    if($row["status"] == 1){
                        $status = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs update-status" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs" data-id="' . $row['id'] . '">Active</badge>';
                    }else{
                        $status = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs update-status" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs" data-id="' . $row['id'] . '">Inactive</badge>';
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
                        <li class="edit"><a href="'.route('admin.listings.edit',$row["id"]).'" data-id="' . $row['id'] . '"><i class="icon-pencil-alt"></i></a>
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
                        $visibility = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs update-visibility" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs" data-id="' . $row['id'] . '">Visible</badge>';
                    }else{
                        $visibility = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs update-visibility" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs" data-id="' . $row['id'] . '">Hidden</badge>';
                    }
                    return $visibility;
                })
                ->addColumn('status', function ($row) {
                    if($row["status"] == 1){
                        $status = '<badge class="btn btn-pill btn-outline-success btn-air-success btn-xs update-status" type="button" title="btn btn-pill btn-outline-success btn-air-success btn-xs" data-id="' . $row['id'] . '">Active</badge>';
                    }else{
                        $status = '<badge class="btn btn-pill btn-outline-danger btn-air-danger btn-xs update-status" type="button" title="btn btn-pill btn-outline-danger btn-air-danger btn-xs" data-id="' . $row['id'] . '">Inactive</badge>';
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

    // Add Listing
    public function addListings(){
        $category = ListingCategory::where('status', 1)->latest()->get();
        $providers = Vendor::where(['status' => 1, 'verified' => 1])->latest()->get();
        return view('admin.listing.add', compact('category', 'providers'));
    }

    // Save listing
    public function saveListings(Request $request){

        $request->validate([
            'listing_provider' => ['required', 'string'],
            'title' => ['string','required',
                Rule::unique('listings')->where(function ($query) use ($request) {
                    return $query->where('vendor_id', $request->listing_provider);
                })
            ],
            'listing_category' => ['required','string'],
            'listing_phone' => ['required','numeric'],
            'listing_description' => ['required'],
            'listing_district' => 'nullable',
            'latitude' => Rule::requiredIf(!empty($request->listing_district)),
            'longitude' => Rule::requiredIf(!empty($request->listing_district)),
            'address' => 'required',
            'weekday' => 'nullable',
            'open_time' => Rule::requiredIf(!empty($request->weekday)),
            'close_time' => Rule::requiredIf(!empty($request->weekday)),
            'social_link' => 'nullable',
            'social_url' => Rule::requiredIf(!empty($request->social_link)),
            'product_title' => 'nullable',
            'product_price' => 'required_if:product_title,==,1|nullable',
            'product_description' => 'required_if:product_title,==,1|nullable',
            'product_thumbnail' => 'required_if:product_title,==,1|nullable',
            'seo_title' => 'required|string',
            'seo_keywords' => 'required|string',
            'seo_description' => 'required',
            'seo_thumbnail' => 'required|image|mimes:jpeg,png,jpg',
            'feature_image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('seo_thumbnail')) {
            if ($request->file('seo_thumbnail')->isValid()) {
                $seo = $request->file('seo_thumbnail');
                $seoImageName = $seo->hashName();
                $SeoImageStoredFilePath = $seo->storeAs('public/listings/seo', $seoImageName);
            }
        }

        if ($request->hasFile('listing_banner')) {
            if ($request->file('listing_banner')->isValid()) {
                $banner = $request->file('listing_banner');
                $bannerName = $banner->hashName();
                $bannerStoredFilePath = $banner->storeAs('public/listings/banners', $bannerName);
            }
        }

        if ($request->hasFile('feature_image')) {
            if ($request->file('feature_image')->isValid()) {
                $featured = $request->file('feature_image');
                $featuredName = $featured->hashName();
                $featuredStoredFilePath = $featured->storeAs('public/listings', $featuredName);
            }
        }

        // Create listing
        $listing = Listing::create([
            'title' => Str::title($request->title),
            'slug' => Str::slug($request->title),
            'description' => $request->listing_description,
            'listing_banner' => $bannerStoredFilePath,
            'meta_title' => Str::title($request->seo_title),
            'meta_keyword' => Str::title($request->seo_keywords),
            'meta_description' => Str::title($request->seo_description),
            'meta_thumbnail' => $SeoImageStoredFilePath,
            'address' => $request->address,
            'phone' => $request->listing_phone,
            'vendor_id' => $request->listing_provider,
            'category_id' => $request->listing_category,
            'feature_image' => $featuredStoredFilePath,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'aminities' => $request->amenities,
            'visibility' => 0,
            'is_featured' => 0,
            'city_id' => $request->listing_district,
            'status' => 0
        ]);

        $errors = [];

        // Upload Gallery
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                if ($file->isValid()) {
                    $name = $file->hashName();
                    $storedFilePath = $file->storeAs('public/listings/gallery', $name);
                    ListingGallery::create([
                        'listing_id' => $listing->id,
                        'image' => $storedFilePath
                    ]);
                }else{
                    $errors[] = "File {$file->getClientOriginalName()} is not valid.";
                }
            }
        }

        // Add workdays
        if(!empty($request->weekday)){

            foreach ($request->weekday as $key => $weekday) {
                // Save each row to the database
                ListingWorkHour::create([
                    'listing_id' => $listing->id,
                    'day' => $weekday,
                    'open_time' => $request->open_time[$key],
                    'close_time' => $request->close_time[$key],
                ]);
            }
        }

        // Add Social
        if(!empty($request->social_link)){

            foreach ($request->social_link as $key => $social_link) {
                // Save each row to the database
                ListingSocial::create([
                    'listing_id' => $listing->id,
                    'social_link' => $social_link,
                    'social_url' => $request->social_url[$key],
                ]);
            }
        }

        // Add faqs
        if(!empty($request->question)){

            foreach ($request->question as $key => $faq) {
                // Save each row to the database
                ListingFaq::create([
                    'listing_id' => $listing->id,
                    'question' => $faq,
                    'answer' => $request->answer[$key],
                ]);
            }
        }

        // Add products
        if(!empty($request->product_title)){

            foreach ($request->product_title as $key => $product) {

                $productfile = $request->file('product_thumbnail');
                $productfilekey = $productfile[$key];

                $productName = $productfilekey->hashName();
                $ProductStoredFilePath = $productfilekey->storeAs('public/listings/products', $productName);

                ListingProduct::create([
                    'listing_id' => $listing->id,
                    'provider_id' => $request->listing_provider,
                    'product_name' => $product,
                    'product_price' => $request->product_price[$key],
                    'product_description' => $request->product_description[$key],
                    'product_thumb' => $ProductStoredFilePath
                ]);
            }
        }

        $notification = array(
            'message' => __('Listing added successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // Edit listing
    public function editListings($id){
        $listing = Listing::find($id);
        $category = ListingCategory::where('status', 1)->latest()->get();
        $providers = Vendor::where(['status' => 1, 'verified' => 1])->latest()->get();
        $workingHours = ListingWorkHour::where('listing_id', $id)->get();
        $socials = ListingSocial::where('listing_id', $id)->get();
        $gallery = ListingGallery::where('listing_id', $id)->get();
        $faqs = ListingFaq::where('listing_id', $id)->get();
        $products = ListingProduct::where('listing_id', $id)->get();
        return view('admin.listing.edit', compact('category', 'providers', 'listing', 'workingHours', 'socials', 'gallery', 'faqs', 'products'));
    }

    // Update listing
    public function updateListings(Request $request, $id){

        $request->validate([
            'listing_provider' => ['required', 'string'],
            'title' => ['string','required',
                Rule::unique('listings')->where(function ($query) use ($request) {
                    return $query->where('vendor_id', $request->listing_provider);
                })->ignore($id),

                // Rule::unique('listings')->where(function ($query) use ($provider_id) {
                //     return $query->where('provider_id', $provider_id);
                // })->ignore($product_id),
            ],
            'listing_category' => ['required','string'],
            'listing_phone' => ['required','numeric'],
            'listing_description' => ['required'],
            'listing_district' => 'nullable',
            'latitude' => Rule::requiredIf(!empty($request->listing_district)),
            'longitude' => Rule::requiredIf(!empty($request->listing_district)),
            'address' => 'required',
            'weekday' => 'nullable',
            'open_time' => Rule::requiredIf(!empty($request->weekday)),
            'close_time' => Rule::requiredIf(!empty($request->weekday)),
            'social_link' => 'nullable',
            'social_url' => Rule::requiredIf(!empty($request->social_link)),
            'product_title' => 'nullable',
            'product_price' => 'required_if:product_title,==,1|nullable',
            'product_description' => 'required_if:product_title,==,1|nullable',
            'product_thumbnail' => 'required_if:product_title,==,1|nullable',
            'seo_title' => 'required|string',
            'seo_keywords' => 'required|string',
            'seo_description' => 'required',
            'seo_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'listing_banner' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('seo_thumbnail')) {
            if ($request->file('seo_thumbnail')->isValid()) {
                $seo = $request->file('seo_thumbnail');
                $seoImageName = $seo->hashName();
                $SeoImageStoredFilePath = $seo->storeAs('public/listings/seo', $seoImageName);
            }
        }

        if ($request->hasFile('listing_banner')) {
            if ($request->file('listing_banner')->isValid()) {
                $banner = $request->file('listing_banner');
                $bannerName = $banner->hashName();
                $bannerStoredFilePath = $banner->storeAs('public/listings/banners', $bannerName);
            }
        }

        if ($request->hasFile('feature_image')) {
            if ($request->file('feature_image')->isValid()) {
                $featured = $request->file('feature_image');
                $featuredName = $featured->hashName();
                $featuredStoredFilePath = $featured->storeAs('public/listings', $featuredName);
            }
        }

        // Create listing
        Listing::findOrFail($id)->update([
            'title' => Str::title($request->title),
            'slug' => Str::slug($request->title),
            'description' => $request->listing_description,
            'listing_banner' => (!empty($request->file('listing_banner')) ? $bannerStoredFilePath : $request->old_banner_image),
            'meta_title' => Str::title($request->seo_title),
            'meta_keyword' => Str::title($request->seo_keywords),
            'meta_description' => Str::title($request->seo_description),
            'meta_thumbnail' => (!empty($request->file('seo_thumbnail')) ? $SeoImageStoredFilePath : $request->old_seo_thumbnail),
            'address' => $request->address,
            'phone' => $request->listing_phone,
            'vendor_id' => $request->listing_provider,
            'category_id' => $request->listing_category,
            'feature_image' => (!empty($request->file('feature_image')) ? $featuredStoredFilePath : $request->old_featured_image),
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'aminities' => $request->amenities,
            'visibility' => 0,
            'is_featured' => 0,
            'city_id' => $request->listing_district,
            'status' => 0
        ]);

        $errors = [];

        // Upload Gallery
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                if ($file->isValid()) {
                    $name = $file->hashName();
                    $storedFilePath = $file->storeAs('public/listings/gallery', $name);
                    ListingGallery::create([
                        'listing_id' => $id,
                        'image' => $storedFilePath
                    ]);
                }else{
                    $errors[] = "File {$file->getClientOriginalName()} is not valid.";
                }
            }
        }

        // Add workdays
        if(!empty($request->weekday)){
            ListingWorkHour::where('listing_id', $id)->delete();
            foreach ($request->weekday as $key => $weekday) {
                // Save each row to the database
                ListingWorkHour::create([
                    'listing_id' => $id,
                    'day' => $weekday,
                    'open_time' => $request->open_time[$key],
                    'close_time' => $request->close_time[$key],
                ]);
            }
        }else{
            ListingWorkHour::where('listing_id', $id)->delete();
        }

        // Add Social
        if(!empty($request->social_link)){
            ListingSocial::where('listing_id', $id)->delete();
            foreach ($request->social_link as $key => $social_link) {
                // Save each row to the database
                ListingSocial::create([
                    'listing_id' => $id,
                    'social_link' => $social_link,
                    'social_url' => $request->social_url[$key],
                ]);
            }
        }else{
            ListingSocial::where('listing_id', $id)->delete();
        }

        // Add faqs
        if(!empty($request->question)){
            ListingFaq::where('listing_id', $id)->delete();
            foreach ($request->question as $key => $faq) {
                // Save each row to the database
                ListingFaq::create([
                    'listing_id' => $id,
                    'question' => $faq,
                    'answer' => $request->answer[$key],
                ]);
            }
        }else{
            ListingFaq::where('listing_id', $id)->delete();
        }

        // Add products
        if(!empty($request->product_title)){

            ListingProduct::where('listing_id', $id)->delete();

            foreach ($request->product_title as $key => $product) {

                if(!empty($request->file('product_thumbnail'))){

                    $productfile = $request->file('product_thumbnail');
                    $productfilekey = $productfile[$key];

                    $productName = $productfilekey->hashName();
                    $ProductStoredFilePath = $productfilekey->storeAs('public/listings/products', $productName);
                }

                ListingProduct::create([
                    'listing_id' => $id,
                    'provider_id' => $request->listing_provider,
                    'product_name' => $product,
                    'product_price' => $request->product_price[$key],
                    'product_description' => $request->product_description[$key],
                    'product_thumb' => (!empty($request->file('product_thumbnail')) ? $ProductStoredFilePath : $request->old_product_thumbnail)
                ]);
            }
        }else{
            ListingProduct::where('listing_id', $id)->delete();
        }

        $notification = array(
            'message' => __('Listing updated successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // Listing details
    public function listingsDetails(Request $request, $id){

        if($request->ajax()){
            $data = Listing::find($id);
            return response()->json($data);
        }
    }

    // Delete Listings
    public function deleteListing(Request $request){

        if($request->ajax()){
            Listing::where('id', $request->id)->delete();
            return response()->json(['success' => __('Listing deleted successfully')]);
        }

    }

    // Update listing status
    public function updateListingVisibility(Request $request){

        if ($request->ajax()) {
            $data = Listing::find($request->editvisibilityid);
            if ($data->visibility == 1) {
                $visibility = 0;
            } else {
                $visibility = 1;
            }
            $data->visibility = $visibility;
            $data->save();

            return response()->json(['success' => __('Listing updated Successfully') ]);
        }
    }

    public function updateListingStatus(Request $request){

        if ($request->ajax()) {
            $data = Listing::find($request->editid);
            if ($data->status == 1) {
                $status = 0;
            } else {
                $status = 1;
            }
            $data->status = $status;
            $data->save();

            return response()->json(['success' => __('Listing updated Successfully') ]);
        }
    }
}
