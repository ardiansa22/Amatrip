@extends('vendor.layouts.app')


@section('content')
    <h1>{{ isset($blog) ? 'Edit' : 'Create' }} Blog</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @isset($blog)
            @method('PUT')
        @endisset
        <input type="text" name="title" value="{{ old('title', $blog->title ?? '') }}" placeholder="Title" required>
        <input type="text" name="slug" value="{{ old('slug', $blog->slug ?? '') }}" placeholder="Slug" required>
        <textarea name="content" placeholder="Content" required>{{ old('content', $blog->content ?? '') }}</textarea>
        <input type="file" name="image">
        <textarea name="excerpt" placeholder="Excerpt">{{ old('excerpt', $blog->excerpt ?? '') }}</textarea>
        <select name="wisata_id">
            @foreach ($wisatas as $wisata)
                <option value="{{ $wisata->id }}" {{ isset($blog) && $blog->wisata_id == $wisata->id ? 'selected' : '' }}>
                    {{ $wisata->name }}
                </option>
            @endforeach
        </select>
        <select name="status">
            <option value="active" {{ isset($blog) && $blog->status == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ isset($blog) && $blog->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
        <button type="submit">{{ isset($blog) ? 'Update' : 'Create' }} Blog</button>
    </form>
@endsection
