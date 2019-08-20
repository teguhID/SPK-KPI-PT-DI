@extends('layouts.layoutApp')
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
            <form action="{{ url('nilaiBobot/' . $data->id) }}" method="post" style="padding: 70px">
                {{ method_field('PUT') }} 
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">General Knowledge</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="generalKnowledge" name="generalKnowledge" value="{{ $data->generalKnowledge }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Basic</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic" name="basic" value="{{ $data->basic }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Intermediate</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="intermediate" name="intermediate" value="{{ $data->intermediate }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Advance</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="advance" name="advance" value="{{ $data->advance }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Edit Data</button>
            </form>    
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

  </div>
@endsection