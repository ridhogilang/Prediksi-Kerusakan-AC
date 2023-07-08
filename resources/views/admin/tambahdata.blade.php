@extends('layout.mainadmin')

@section('container')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <p class="mb-0">Validation</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Tambah Training</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="/tambahdata" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <!-- Loop for G1 to G15 -->
                                            <?php for ($i = 1; $i <= 15; $i++) { ?>
                                            <div class="col-4">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input type="hidden" name="G<?php echo $i; ?>" value="0">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="G<?php echo $i; ?>" name="G<?php echo $i; ?>"
                                                        value="1">
                                                    <label class="custom-control-label" for="G<?php echo $i; ?>">G
                                                        <?php echo $i; ?></label>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="label">Label
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="label" name="label">
                                                        <option value="">Please select</option>
                                                        @foreach ($label as $item)
                                                            <option value="{{ $item->label }}">{{ $item->label }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
