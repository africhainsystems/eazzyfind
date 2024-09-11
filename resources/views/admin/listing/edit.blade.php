@extends('admin.layouts.app')
@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/filepond.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/filepond-plugin-image-preview.css') }}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <style>
        #map{
            height: 400px;
            width: 100% !important;
            margin: 0;
            padding: 0;
        }
     </style>
@endsection
@section('body')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h5>Edit Listing</h6>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <svg class="stroke-icon">
                                <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 file-content">
                <div class="media float-end mb-3">
                    <div class="media-body text-end">
                        <a href="{{ route('admin.listings') }}" class="btn btn-pill btn-air btn-primary"> <i
                                data-feather="plus-square"></i>View Listings
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Your Listing </h4>
                    <p class="f-m-light mt-1">
                      Fill up your details and proceed next steps.</p>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('admin.listings.update', $listing->id) }}" id="wizard-form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Step 1 -->
                        <div class="form-step step-1">
                            <h5 class="mb-4">Step 1: Basic Info</h5>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $listing->title }}" required>
                                    <div class="invalid-feedback">Title is required.</div>
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="listing_category">Category <span class="text-danger">*</span></label>
                                    <select name="listing_category" id="listing_category" class="form-control" required>
                                        <option value="">-- Select Category --</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}" {{ $listing->category_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Category is required.</div>
                                    @error('listing_category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="listing_provider">Provider <span class="text-danger">*</span></label>
                                    <select name="listing_provider" id="listing_provider" class="form-control" required>
                                        <option value="">-- Select Provider --</option>
                                        @foreach ($providers as $item)
                                            <option value="{{ $item->id }}" {{ $listing->vendor_id == $item->id ? 'selected' : '' }}>{{ $item->username }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Provider is required.</div>
                                    @error('listing_category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="listing_phone">Phone <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="listing_phone" name="listing_phone" value="{{ $listing->phone }}" required>
                                    <div class="invalid-feedback">Phone is required.</div>
                                    @error('listing_phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="listing_description">Description <span class="text-danger">*</span></label>
                                    <textarea name="listing_description" id="editor" cols="30" rows="5" class="form-control" required>{{ $listing->description }}</textarea>
                                    <div class="invalid-feedback">Description is required.</div>
                                    @error('listing_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="feature_image" style="display: block;">Featured Image <span class="text-primary">(Prefered Size: 700x700px)</span></label>
                                    <input type="file" name="feature_image" class="dropzone" id="feature_image"/>
                                    <div class="invalid-feedback">Banner is required.</div>
                                    @error('feature_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="hidden" name="old_featured_image" value="{{ $listing->feature_image }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="listing_banner" style="display: block;">Listing Banner <span class="text-primary">(Prefered Size: 1920x480px)</span></label>
                                    <input type="file" name="listing_banner" class="dropzone" id="listing_banner"/>
                                    <div class="invalid-feedback">Banner is required.</div>
                                    @error('listing_banner')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="hidden" name="old_banner_image" value="{{ $listing->listing_banner }}">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary next-btn">Next</button>
                        </div>

                        <!-- Step 2 -->
                        <div class="form-step step-2 d-none">
                            <h5 class="mb-4">Step 2: Location</h5>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="row">
                                        <div class="col-sm-12 mb-3">
                                            <label for="listing_district">Select District/City <span class="text-danger">*</span></label>
                                            <select id="listing_district" class="form-control" name="listing_district" required>
                                                <option value="">Select a District</option>
                                                @foreach(\App\Helpers\Cities::$list as $city)
                                                    <option value="{{ $city['name'] }}" {{ $listing->city_id == $city['name'] ? 'selected' : '' }}>{{ $city['name'] }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">District is required.</div>
                                            @error('listing_district')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <label for="latitude">Latitude</label>
                                            <input type="text" id="latitude" name="latitude" class="form-control" value="{{ $listing->latitude }}" readonly>
                                            @error('latitude')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <label for="longitude">Longitude</label>
                                            <input type="text" id="longitude" name="longitude" class="form-control" value="{{ $listing->longitude }}" readonly>
                                            @error('longitude')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 mb-3">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" name="address" class="form-control" value="{{ $listing->address }}">
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div id="map"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="mb-3">Business Hours</h5>
                                    <div class="working-hours-container">
                                        @if (count($workingHours) > 0)
                                        @foreach ($workingHours as $item)
                                        <div class="row" id="working-hours">
                                            <div class="col-sm-3 mb-3">
                                                <select id="weekday" class="form-control" name="weekday[]">
                                                    <option value="">-- Pick Day --</option>
                                                    <option value="Monday" {{ $item->day == 'Monday' ? 'selected' : '' }}>Monday</option>
                                                    <option value="Tuesday" {{ $item->day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                                                    <option value="Wednesday" {{ $item->day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                                                    <option value="Thursday" {{ $item->day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                                                    <option value="Friday" {{ $item->day == 'Friday' ? 'selected' : '' }}>Friday</option>
                                                    <option value="Saturday" {{ $item->day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                                                    <option value="Sunday" {{ $item->day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
                                                </select>
                                                <div class="invalid-feedback">Weekday is required.</div>
                                                @error('weekday')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <input class="form-control" name="open_time[]" id="open_time" type="time" value="{{ $item->open_time }}">
                                                <div class="invalid-feedback">Open time is required.</div>
                                                @error('open_time')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <input class="form-control" name="close_time[]" id="close_time" type="time" value="{{ $item->close_time }}">
                                                <div class="invalid-feedback">Close time is required.</div>
                                                @error('close_time')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <button class="btn btn-icon btn-danger btn-sm removeHours" ><i class="fa fa-minus-square-o"></i></button>
                                                {{-- <button class="btn btn-icon btn-primary btn-sm addMoreHours"><i class="fa fa-plus-square-o"></i></button> --}}
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div class="row" id="working-hours">
                                            <div class="col-sm-3 mb-3">
                                                <select id="weekday" class="form-control" name="weekday[]">
                                                    <option value="">-- Pick Day --</option>
                                                    <option value="Monday" {{ $item->day == 'Monday' ? 'selected' : '' }}>Monday</option>
                                                    <option value="Tuesday" {{ $item->day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                                                    <option value="Wednesday" {{ $item->day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                                                    <option value="Thursday" {{ $item->day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                                                    <option value="Friday" {{ $item->day == 'Friday' ? 'selected' : '' }}>Friday</option>
                                                    <option value="Saturday" {{ $item->day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                                                    <option value="Sunday" {{ $item->day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
                                                </select>
                                                <div class="invalid-feedback">Weekday is required.</div>
                                                @error('weekday')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <input class="form-control" name="open_time[]" id="open_time" type="time" value="{{ $item->open_time }}">
                                                <div class="invalid-feedback">Open time is required.</div>
                                                @error('open_time')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <input class="form-control" name="close_time[]" id="close_time" type="time" value="{{ $item->close_time }}">
                                                <div class="invalid-feedback">Close time is required.</div>
                                                @error('close_time')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <button class="btn btn-icon btn-danger btn-sm removeHours" ><i class="fa fa-minus-square-o"></i></button>
                                                {{-- <button class="btn btn-icon btn-primary btn-sm addMoreHours"><i class="fa fa-plus-square-o"></i></button> --}}
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-icon btn-warning btn-sm addMoreHours"><i class="fa fa-plus-square-o"></i> Add More</button>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <h5 class="mb-3">Social Links</h5>
                                    <div class="social-links-container">
                                        @if (count($socials) > 0)
                                        @foreach ($socials as $item)
                                        <div class="row" id="social-links-row">
                                            <div class="col-sm-4 mb-3">
                                                <select name="social_link[]" id="social_link" class="form-control">
                                                    <option value="">-- Pick Media --</option>
                                                    <option value="facebook" {{ $item->social_link == 'facebook' ? 'selected' : '' }}>Facebook</option>
                                                    <option value="twitter" {{ $item->social_link == 'twitter' ? 'selected' : '' }}>Twitter (X)</option>
                                                    <option value="instagram" {{ $item->social_link == 'instagram' ? 'selected' : '' }}>Instagram</option>
                                                    <option value="tiktok" {{ $item->social_link == 'tiktok' ? 'selected' : '' }}>Tiktok</option>
                                                </select>
                                                <div class="invalid-feedback">Social Platform is required.</div>
                                                @error('social_link')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <input class="form-control" name="social_url[]" id="social_url" type="text" value="{{ $item->social_url }}">
                                                <div class="invalid-feedback">URL is required.</div>
                                                @error('social_url')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <button class="btn btn-icon btn-danger btn-sm removeSocialLinks"><i class="fa fa-minus-square-o"></i></button>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div class="row" id="social-links-row">
                                            <div class="col-sm-4 mb-3">
                                                <select name="social_link[]" id="social_link" class="form-control">
                                                    <option value="">-- Pick Media --</option>
                                                    <option value="facebook" {{ $item->social_link == 'facebook' ? 'selected' : '' }}>Facebook</option>
                                                    <option value="twitter" {{ $item->social_link == 'twitter' ? 'selected' : '' }}>Twitter (X)</option>
                                                    <option value="instagram" {{ $item->social_link == 'instagram' ? 'selected' : '' }}>Instagram</option>
                                                    <option value="tiktok" {{ $item->social_link == 'tiktok' ? 'selected' : '' }}>Tiktok</option>
                                                </select>
                                                <div class="invalid-feedback">Social Platform is required.</div>
                                                @error('social_link')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <input class="form-control" name="social_url[]" id="social_url" type="text" value="{{ $item->social_url }}">
                                                <div class="invalid-feedback">URL is required.</div>
                                                @error('social_url')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <button class="btn btn-icon btn-danger btn-sm removeSocialLinks"><i class="fa fa-minus-square-o"></i></button>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-icon btn-warning btn-sm addSocialLinks"><i class="fa fa-plus-square-o"></i> Add More</button>
                                    </div>
                                </div>

                            </div>
                            <button type="button" class="btn alert-light-primary prev-btn">Previous</button>
                            <button type="button" class="btn btn-primary next-btn">Next</button>
                        </div>


                        <!-- Step 3 -->
                        <div class="form-step step-3 d-none">
                            <h5 class="mb-4">Step 3: Gallery/FAQs</h5>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label class="mb-3" style="display: block;">Upload Files</label>
                                    <input type="file" name="gallery[]" class="dropzone" id="galleryUpload" multiple/>
                                    <div class="invalid-feedback">Gallery is required.</div>
                                    @error('gallery')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @foreach ($gallery as $item)
                                        <input type="hidden" name="old_gallery" value="{{ $item->image }}">
                                    @endforeach
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label class="mb-3">Listing FAQs</label>
                                    <div class="faqs-container">
                                        @if (count($faqs) > 0)
                                        @foreach ($faqs as $item)
                                        <div class="row" id="faqs-row">
                                            <div class="col-sm-9 mb-3">
                                                <div class="row">
                                                    <div class="col-sm-12 mb-3">
                                                        <input type="text" name="question[]" id="question" class="form-control" placeholder="Type Question" value="{{ $item->question }}">
                                                        <div class="invalid-feedback">Question is required.</div>
                                                        @error('question')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <textarea name="answer[]" id="answer" cols="30" rows="3" class="form-control" placeholder="Type your answer">{{ $item->answer }}</textarea>
                                                        <div class="invalid-feedback">Answer is required</div>
                                                        @error('answer')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <button class="btn btn-icon btn-danger btn-sm removeFaqs"><i class="fa fa-minus-square-o"></i></button>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div class="row" id="faqs-row">
                                            <div class="col-sm-9 mb-3">
                                                <div class="row">
                                                    <div class="col-sm-12 mb-3">
                                                        <input type="text" name="question[]" id="question" class="form-control" placeholder="Type Question" value="{{ $item->question }}">
                                                        <div class="invalid-feedback">Question is required.</div>
                                                        @error('question')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <textarea name="answer[]" id="answer" cols="30" rows="3" class="form-control" placeholder="Type your answer">{{ $item->answer }}</textarea>
                                                        <div class="invalid-feedback">Answer is required</div>
                                                        @error('answer')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <button class="btn btn-icon btn-danger btn-sm removeFaqs"><i class="fa fa-minus-square-o"></i></button>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-icon btn-warning btn-sm addFaqs"><i class="fa fa-plus-square-o"></i> Add More</button>
                                    </div>
                                </div>

                            </div>

                            {{-- <div class="dropzone dropzone-secondary" id="multiFileUpload">
                                <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                                    <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                </div>
                            </div> --}}
                            <button type="button" class="btn alert-light-primary prev-btn">Previous</button>
                            <button type="button" class="btn btn-primary next-btn">Next</button>
                        </div>

                        <div class="form-step step-4 d-none">
                            <h5 class="mb-4">Step 4: Amenities</h5>
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <textarea name="amenities" id="amenities" rows="3" class="form-control">{{ $listing->aminities }}</textarea>
                                    <small class="text-primary">(NOTE: Write in comma separated format e.g Parking, Shopping)</small>
                                    <div class="invalid-feedback">Amenity is required.</div>
                                    @error('amenities')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="button" class="btn alert-light-primary prev-btn">Previous</button>
                            <button type="button" class="btn btn-primary next-btn">Next</button>
                        </div>

                        <div class="form-step step-5 d-none">
                            <div class="d-flex align-items-center mb-4">
                                <h5>Step 5: Products</h5>&nbsp;&nbsp;
                            </div>
                            <div class="products-container">
                                @if (count($products) > 0)
                                @foreach ($products as $item)
                                <div class="row" id="products-row">
                                    <div class="col-sm-9 mb-3">
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <label for="product_title">Product Title</label>
                                                <input class="form-control" type="text" name="product_title[]" id="product_title" value="{{ $item->product_name }}">
                                                <div class="invalid-feedback">Product title is required.</div>
                                                @error('product_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label for="product_price">Product Price (UGX)</label>
                                                <input class="form-control" type="number" name="product_price[]" id="product_price" value="{{ $item->product_price }}">
                                                <div class="invalid-feedback">Product Price is required.</div>
                                                @error('product_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                                <label for="product_description">Description</label>
                                                <textarea name="product_description[]" id="product_description" rows="4" class="form-control">{{ $item->product_description }}</textarea>
                                                <div class="invalid-feedback">Product Description is required.</div>
                                                @error('product_description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                                <label for="product_thumbnail d-block" style="display: block;">Thumbnail</label>
                                                <input class="dropzone" type="file" name="product_thumbnail[]" id="product_thumbnail">
                                                <div class="invalid-feedback">Product thumbnail is required.</div>
                                                @error('product_thumbnail')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="hidden" name="old_product_thumbnail" value="{{ $item->product_thumb }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 d-flex justify-content-center align-items-center">
                                        <button class="btn btn-icon btn-danger btn-sm removeProducts"><i class="fa fa-minus-square-o"></i></button>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="row" id="products-row">
                                    <div class="col-sm-9 mb-3">
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <label for="product_title">Product Title</label>
                                                <input class="form-control" type="text" name="product_title[]" id="product_title" value="{{ $item->product_name }}">
                                                <div class="invalid-feedback">Product title is required.</div>
                                                @error('product_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label for="product_price">Product Price (UGX)</label>
                                                <input class="form-control" type="number" name="product_price[]" id="product_price" value="{{ $item->product_price }}">
                                                <div class="invalid-feedback">Product Price is required.</div>
                                                @error('product_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                                <label for="product_description">Description</label>
                                                <textarea name="product_description[]" id="product_description" rows="4" class="form-control">{{ $item->product_description }}</textarea>
                                                <div class="invalid-feedback">Product Description is required.</div>
                                                @error('product_description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                                <label for="product_thumbnail d-block" style="display: block;">Thumbnail</label>
                                                <input class="dropzone" type="file" name="product_thumbnail[]" id="product_thumbnail">
                                                <div class="invalid-feedback">Product thumbnail is required.</div>
                                                @error('product_thumbnail')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <input type="hidden" name="old_product_thumbnail" value="{{ $item->product_thumb }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3 d-flex justify-content-center align-items-center">
                                        <button class="btn btn-icon btn-danger btn-sm removeProducts"><i class="fa fa-minus-square-o"></i></button>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-icon btn-warning btn-sm addMoreProducts"><i class="fa fa-plus-square-o"></i> Add More</button>
                            </div>
                            <button type="button" class="btn alert-light-primary prev-btn">Previous</button>
                            <button type="button" class="btn btn-primary next-btn">Next</button>
                        </div>

                        <div class="form-step step-6 d-none">
                            <div class="d-flex align-items-center mb-4">
                                <h5>Step 6: SEO & META Keywords</h5>&nbsp;&nbsp;
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <label for="seo_title">Title <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $listing->meta_title }}" name="seo_title" id="seo_title" required>
                                            <div class="invalid-feedback">SEO title is required.</div>
                                            @error('seo_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <label for="seo_keywords">Keywords <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="{{ $listing->meta_keyword }}" name="seo_keywords" id="seo_keywords" required>
                                            <div class="invalid-feedback">SEO Keywords are required.</div>
                                            @error('seo_keywords')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 mb-3">
                                            <label for="seo_description">Description <span class="text-danger">*</span></label>
                                            <textarea name="seo_description" id="seo_description" rows="4" class="form-control" required>{{ $listing->meta_description }}</textarea>
                                            <div class="invalid-feedback">SEO Description is required.</div>
                                            @error('seo_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 mb-3">
                                            <label for="seo_thumbnail">Thumbnail</label>
                                            <input class="form-control" type="file" name="seo_thumbnail" id="seo_thumbnail">
                                            <div class="invalid-feedback">SEO thumnail is required.</div>
                                            @error('seo_thumbnail')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="hidden" name="old_seo_thumbnail" value="{{ $listing->meta_thumbnail }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn alert-light-primary prev-btn">Previous</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                    </form>

                  </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')

    <script src="{{ asset('admin/tinymce/js/tinymce/tinymce.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
    {{-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> --}}

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://listplace.bugfinder.net/assets/global/js/Control.FullScreen.js"></script>
    <script src="https://listplace.bugfinder.net/assets/global/js/esri-leaflet.js"></script>
    <script src="https://listplace.bugfinder.net/assets/themes/classic/js/bootstrap-geocoder.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <script>
        tinymce.init({
        selector: "#editor",
        plugins:
            "a11ychecker advcode advlist advtable anchor autocorrect autosave editimage image link linkchecker lists media mediaembed pageembed powerpaste searchreplace table template tinymcespellchecker typography visualblocks wordcount",
        toolbar:
            "undo redo | styles | bold italic underline strikethrough | align | table link image media pageembed | bullist numlist outdent indent | spellcheckdialog a11ycheck typography code",
        height: 540,
        a11ychecker_level: "aaa",
        typography_langs: ["en-US"],
        typography_default_lang: "en-US",
        advcode_inline: true,
        content_style: `
                body {
                font-family: 'Roboto', sans-serif;
                color: #222;
                }
                img {
                height: auto;
                margin: auto;
                padding: 10px;
                display: block;
                }
                img.medium {
                max-width: 25%;
                }
                a {
                color: #116B59;
                }
                .related-content {
                padding: 0 10px;
                margin: 0 0 15px 15px;
                background: #eee;
                width: 200px;
                float: right;
                }
            `,
        });
    </script>

    <script>
    $(document).ready(function () {

        // Initialize the map and set its view to Uganda with a zoom level of 7
        var map = L.map('map').setView([1.3733, 32.2903], 7);

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {

        }).addTo(map);

        // Marker for the selected location
        var marker = L.marker([1.3733, 32.2903]).addTo(map);

        map.on('click', function(e) {
            // Get latitude and longitude of the click event
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;

            // Move the marker to the clicked location
            marker.setLatLng([lat, lng]);

            // You can display the clicked location in an alert or console
            console.log("Marker moved to: " + lat + ", " + lng);

            // Optional: Update hidden input fields (if you have them in a form)
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;
        });

        // Function to update latitude and longitude fields when marker is moved
        // function updateLatLng(lat, lng) {
        //     document.getElementById('latitude').value = lat;
        //     document.getElementById('longitude').value = lng;
        // }

        // Update latitude and longitude when marker is dragged
        // marker.on('dragend', function (e) {
        //     var position = marker.getLatLng();
        //     updateLatLng(position.lat, position.lng);
        // });

        // Zoom to the selected district when changed
        document.getElementById('listing_district').addEventListener('change', function () {
            var district = this.value;

            // Add coordinates for each district (example: Kampala, Mukono, Wakiso)
            var districtCoords = {
                'Kampala': [0.3476, 32.5825],
                'Mukono': [0.3533, 32.7554],
                'Wakiso': [0.4044, 32.4592]
            };

            // Check if the selected district has coordinates
            if (districtCoords[district]) {
                var coords = districtCoords[district];
                map.setView(coords, 13);
                marker.setLatLng(coords);
                updateLatLng(coords[0], coords[1]);
            }
        });

        let currentStep = 1;

        function showStep(step) {
            $('.form-step').addClass('d-none');
            $('.step-' + step).removeClass('d-none');
        }

        // Next button click event
        $('.next-btn').click(function () {
            // Get the form fields in the current step
            const stepForm = $('.step-' + currentStep + ' :input[required]');

            // Validate current step inputs
            let isValid = true;
            stepForm.each(function () {
                if (!this.checkValidity()) {
                    isValid = false;
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });

            // Proceed to the next step if valid
            if (isValid) {
                currentStep++;
                showStep(currentStep);
            }
        });

        // Previous button click event
        $('.prev-btn').click(function () {
            currentStep--;
            showStep(currentStep);
        });

        $('.addMoreHours').click(function(e) {
            e.preventDefault();
            var newRow = $('#working-hours').clone();
            // Clear the input values
            newRow.find('input').val('');
            newRow.find('select').val('');

            // Add remove button functionality
            newRow.find('.removeHours').click(function(e) {
                e.preventDefault();
                $(this).closest('.row').remove();
            });

            // Append the new row to the container
            newRow.appendTo('.working-hours-container');
        });

        // Remove the row when remove button is clicked
        $(document).on('click', '.removeHours', function(e) {
            e.preventDefault();
            $(this).closest('.row').remove(); // Remove the closest row
        });

        $('.addSocialLinks').click(function(e) {
            e.preventDefault();
            var newRow = $('#social-links-row').clone();
            // Clear the input values
            newRow.find('input').val('');
            newRow.find('select').val('');

            // Add remove button functionality
            newRow.find('.removeSocialLinks').click(function(e) {
                e.preventDefault();
                $(this).closest('.row').remove();
            });

            // Append the new row to the container
            newRow.appendTo('.social-links-container');
        });

        $(document).on('click', '.removeSocialLinks', function(e) {
            e.preventDefault();
            $(this).closest('.row').remove(); // Remove the closest row
        });

        $('.addMoreProducts').click(function(e) {
            e.preventDefault();
            var newRow = $('#products-row').clone();
            // Clear the input values
            newRow.find('input').val('');
            newRow.find('textarea').val('');

            // Add remove button functionality
            newRow.find('.removeProducts').click(function(e) {
                e.preventDefault();
                $(this).closest('.row').remove();
            });

            // Append the new row to the container
            newRow.appendTo('.products-container');
        });

        $(document).on('click', '.removeProducts', function(e) {
            e.preventDefault();
            $(this).closest('.row').remove(); // Remove the closest row
        });

        $('.addFaqs').click(function(e) {
            e.preventDefault();
            var newRow = $('#faqs-row').clone();
            // Clear the input values
            newRow.find('input').val('');
            newRow.find('textarea').val('');

            // Add remove button functionality
            newRow.find('.removeFaqs').click(function(e) {
                e.preventDefault();
                $(this).closest('.row').remove();
            });

            // Append the new row to the container
            newRow.appendTo('.faqs-container');
        });

        $(document).on('click', '.removeFaqs', function(e) {
            e.preventDefault();
            $(this).closest('.row').remove(); // Remove the closest row
        });

    });
</script>
@endsection
@endsection
