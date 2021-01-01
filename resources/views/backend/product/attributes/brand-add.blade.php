@extends('backend.master')

@section('breadcumb')
    Brand Add
@endsection

@section('attributes_active')
    active  show-sub
@endsection

@section('content')
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>{{ __('Add New Brand') }}</h5>
        </div><!-- sl-page-title -->
        <div class="row row-sm mg-t-20">
            
            <div class="col-xl-6 text-center mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">

                    @if (session('add_brand'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>{{ session('add_brand') }}</strong>
                        </div>
                    @endif


                    <form action="{{ route('AddBrandPost') }}" method="POST">
                        @csrf
                        <div class="row">
                            <label for="brand_name" class="col-sm-4 form-control-label">Brand Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                              <input type="text" name="brand_name" class="form-control" placeholder="ex: Nike">
                            </div>
                          </div><!-- row -->
                          <div class="form-layout-footer mg-t-30">
                              <button type="submit" class="btn btn-info mg-r-5">Add Brand</button>
                          </div><!-- form-layout-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection