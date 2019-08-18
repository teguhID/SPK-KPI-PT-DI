@extends('layouts.layoutApp')
@section('content')
    
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8" style="margin-top: 5vw; margin-left: 2vw">
                    <label class="col-sm-4 col-form-label"><strong><h4>Bobot {{$data->jabatan}}</h4></strong></label>
                    <div class="card">
                    <div class="card-body">
                        <div class="form-group row" style="margin: -5px">
                            <label class="col-sm-4 col-form-label"><strong>General Knowledge </strong></label>
                            <label class="col-sm-2 col-form-label">
                                <strong>: {{ $data->generalKnowledge }}</strong>
                            </label>
                        </div>
                        <div class="form-group row" style="margin: -5px">
                            <label class="col-sm-4 col-form-label"><strong>Basic </strong></label>
                            <label class="col-sm-2 col-form-label">
                                <strong>: {{ $data->basic }}</strong>
                            </label>
                        </div>
                        <div class="form-group row" style="margin: -5px">
                            <label class="col-sm-4 col-form-label"><strong>Intermediate </strong></label>
                            <label class="col-sm-2 col-form-label">
                                <strong>: {{ $data->intermediate }}</strong>
                            </label>
                        </div>
                        <div class="form-group row" style="margin: -5px">
                            <label class="col-sm-4 col-form-label"><strong>Advance </strong></label>
                            <label class="col-sm-2 col-form-label">
                                <strong>: {{ $data->advance }}</strong>
                            </label>
                        </div>

                        <a href="{{ url('nilaiBobot/1/edit') }}" class="float-right btn btn-primary">Edit</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright © Your Website 2019</span>
        </div>
      </div>
    </footer>
@endsection