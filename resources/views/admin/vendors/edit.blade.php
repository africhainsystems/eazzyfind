@extends('admin.layouts.app')
@section('body')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h5>Edit Provider</h6>
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
                        <a href="{{ route('admin.vendors') }}" class="btn btn-pill btn-air btn-primary"> <i
                                data-feather="plus-square"></i>View Providers
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.vendors.update', $vendor->id) }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h6>Provider Detail</h6>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="names">Names <span class="text-danger">*</span></label>
                                <input type="text" name="names" id="names" class="form-control" required value="{{ $vendorinfo->name }}">
                                @error('names')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="companyname">Company Name <span class="text-danger">*</span></label>
                                <input type="text" name="companyname" id="companyname" class="form-control" required value="{{ $vendor->username }}">
                                @error('companyname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control" required value="{{ $vendor->email }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="number" name="phone" id="phone" class="form-control" required value="{{ $vendor->phone }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="country">Country <span class="text-danger">*</span></label>
                                <select name="country" id="country" class="form-select" required>
                                    <option value="">-- Select Country --</option>
                                    @foreach(\App\Helpers\Countries::$list as $country)
                                        <option value="{{ $country['code'] }}" {{ $country['code'] == 'UG' ? 'selected' : '' }} {{ $vendorinfo->country == $country['code'] ? 'selected' : '' }}>{{ $country['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="city">City <span class="text-danger">*</span></label>
                                <select name="city" id="city" class="form-select" required>
                                    <option value="">-- Select City --</option>
                                    @foreach(\App\Helpers\Cities::$list as $city)
                                        <option value="{{ $city['name'] }}" {{ $vendorinfo->city == $city['name'] ? 'selected' : '' }}>{{ $city['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="address">Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" id="address" class="form-control" required value="{{ $vendorinfo->address }}">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="id_type">Identity Type <span class="text-danger">*</span></label>
                                <select name="id_type" id="id_type" class="form-select" required>
                                    <option value="">-- Select Verification --</option>
                                    @foreach ($identity as $item)
                                        <option value="{{ $item->id }}" {{ $vendorinfo->identity_type == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="kyc_docs">KYC Documents</label>
                                <input type="file" name="kyc_docs" class="form-control" value="{{ old('kyc_docs') }}">
                                <input type="hidden" name="old_kyc_docs" value="{{ $vendorinfo->kyc }}">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="photo">Photo <span class="text-primary">(Optional)</span></label>
                                <input type="file" name="photo" id="photo" class="form-control" value="{{ old('photo') }}">
                                <input type="hidden" name="old_photo" value="{{ $vendor->photo }}">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="details">Details <span class="text-primary">(Optional)</span></label>
                                <textarea name="details" rows="7" class="form-control">{{ $vendorinfo->details }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h6>Login Details <span class="text-primary">(Optional)</span></h6>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-12 mb-3">
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

@endsection
