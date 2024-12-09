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
                        <h4 class="card-title">Laporan Penjualan Tiket</h4>
                        <!-- Data Table -->
                        <div class="table-responsive mt-4">
                        <table class="table table-striped datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Status</th>
                        <th scope="col">Publish Date</th>

                      </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $post)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                            @if ($post->image)
                                <img src="{{ asset('storage/'.$post->image) }}" alt="Post Image" style="width: 100px; height: auto;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->category }}</td>
                        <td>{{ $post->published_date }}</td>

                    </tr>
                    @endforeach
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