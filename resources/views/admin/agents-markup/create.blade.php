@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="#">
            @csrf
            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <span class="fas fa-info-circle"></span> Add New B2B User
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Person Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Person Email Address
                        </div>
                        <div class="col-12 pt-3">
                            <input type="email" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Person Phone Number
                        </div>
                        <div class="col-12 pt-3">
                            <input type="tel" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Management Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Management Email Address
                        </div>
                        <div class="col-12 pt-3">
                            <input type="email" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Management Phone Number
                        </div>
                        <div class="col-12 pt-3">
                            <input type="tel" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            UserName
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Password
                        </div>
                        <div class="col-12 pt-3">
                            <input type="password" name="password"  class="form-control" required minlength="8" >
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Confirm Password
                        </div>
                        <div class="col-12 pt-3">
                            <input type="password" name="password"  class="form-control" required minlength="8" >
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Reg No.
                        </div>
                        <div class="col-12 pt-3">
                            <input type="number" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Nature Of Business
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="tag_id[]"  size="1" style="height:30px;opacity: 0;">
                                <option value="">Wholesalers</option>
                                <option value="">Travel Agents</option>
                                <option value="">Tour Operation</option>
                                <option value="">Corporates</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Address
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Country
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="tag_id[]"  size="1" style="height:30px;opacity: 0;">
                                <option value="">USA</option>
                                <option value="">Morroco</option>
                                <option value="">Spain</option>
                                <option value="">Egypt</option>
                                <option value="">Portugal</option>
                                <option value="">Tunisia</option>
                                <option value="">Jordan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            City
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Currency
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="tag_id[]"  size="1" style="height:30px;opacity: 0;">
                                <option value="">USD</option>
                                <option value="">EUR</option>
                                <option value="">GBP</option>
                                <option value="">BOB</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Pincode/Zipcode
                        </div>
                        <div class="col-12 pt-3">
                            <input type="number" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Website
                        </div>
                        <div class="col-12 pt-3">
                            <input type="url" name="slug" required maxlength="190" class="form-control" value="{{old('slug')}}">
                        </div>
                    </div>
                    {{-- <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            الوسوم
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="tag_id[]"  size="1" style="height:30px;opacity: 0;">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Status
                        </div>
                        <div class="col-12 pt-3">
                            <div class="form-switch">
                                <input name="open_url_in" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" {{old('open_url_in')=="NEW_WINDOW"?"checked":""}} style="width: 50px;height:25px" value="NEW_WINDOW">
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-3">
                <button class="btn btn-success" id="submitEvaluation">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
