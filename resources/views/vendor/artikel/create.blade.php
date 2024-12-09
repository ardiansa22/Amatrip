@extends('vendor.layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header text-dark">
            <h2>Create Post</h2>
        </div>
        <div class="card-body">
            <form action="{{route('vendor.storeartikel')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Title and Slug -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Enter title" required>
                    </div>
                    <div class="col-md-6">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" id="slug" name="slug" class="form-control" placeholder="Enter slug">
                    </div>
                </div>

                <!-- Content -->
                <div class="mb-3">
                    <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                    <!-- Quill Editor Container -->
                    <div id="quill-editor" style="height: 200px;"></div>
                    <!-- Hidden Input to Send Content -->
                    <input type="hidden" id="content" name="content">
                </div>


                <!-- Author, Category -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="author" class="form-label">Author <span class="text-danger">*</span></label>
                        <select id="author" name="author" class="form-select" required>
                            <option value="" disabled selected>Select an author</option>
                            <option value="1">Author 1</option>
                            <option value="2">Author 2</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                        <select id="category" name="category" class="form-select" required>
                            <option value="" disabled selected>Select a category</option>
                            <option value="Biotik">Biotik</option>
                            <option value="Abiotik">Abiotik</option>
                            <option value="Cultural">Cultural</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="wisata_id" class="form-label">Wisata <span class="text-danger">*</span></label>
                    <select id="wisata_id" name="wisata_id" class="form-select" required>
                        <option value="" disabled selected>Select Wisata</option>
                        @foreach($wisatas as $wisata)
                            <option value="{{ $wisata->id }}">{{ $wisata->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Published Date and Tags -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="published_date" class="form-label">Published Date</label>
                        <input type="date" id="published_date" name="published_date" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" id="tags" name="tags" class="form-control" placeholder="Enter tags (comma-separated)">
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Inisialisasi Quill Editor
        const quill = new Quill('#quill-editor', {
            theme: 'snow',
            placeholder: 'Write content here...',
            modules: {
                toolbar: [
                    [{ header: [1, 2, 3, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ list: 'ordered' }, { list: 'bullet' }],
                    ['link', 'image'],
                    ['clean']
                ]
            }
        });

        // Sinkronkan konten Quill ke dalam hidden input
        const contentInput = document.querySelector('#content');
        quill.on('text-change', function () {
            contentInput.value = quill.root.innerHTML;
        });
    });
</script>

@endsection