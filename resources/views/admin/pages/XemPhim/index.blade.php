@extends('admin.share.master')
@section('content')
    <div class="row" id="app">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Thêm Phim</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">ID Phim</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Link Phim</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
