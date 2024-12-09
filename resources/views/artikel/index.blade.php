@extends('vendor.layouts.app')

@section('style')
<style>
    .thumbnail {
        width: 100px;
        height: auto;
    }
</style>
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('sona-master/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Artikel</h4>     
                        <!-- Data Table -->
                        <div class="table-responsive mt-4">
                            <table class="table table-striped datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Slug</th>
                                        <th>Konten</th>
                                        <th>Gambar</th>
                                        <th>Excerpt</th>
                                        <th>Views</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- End Recent Sales -->
        </div>
    </div>
</div>
@endsection
