@extends('backend.layout')

@section('content')

<h4>Content List</h4>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Content Type</th>
      <th scope="col">Attachment</th>
      <th scope="col">Description</th>
      <th scope="col">Section</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
      <th scope="col">Is Published ?</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($contents as $content)
      <tr>
        <th scope="row">{{ $content->id }}</th>
        <td>{{ $content->title }}</td>
        <td>{{ $content->type ? 'Post' : 'Video' }}</td>
        @if ($content->type)
          <td><a href="{{ Storage::url($content->attachment) }}">Click to view</a></td>
        @else
          <td><a href="{{ $content->attachment }}">Click to view</a></td>
        @endif
        <td>{{ Str::words($content->description, 20, '  .....') }}</td>
        <td>{{ $content->section ? 'Section 1' : 'Section 2' }}</td>
        <td>{{ $content->created_at }}</td>
        <td>{{ $content->updated_at }}</td>
        <td>
          <form method="POST" action="{{ route('contents.update', $content->id) }}">
            @method('PATCH')
            @csrf
            <button type="sumbit" class="btn btn-link"><input type="checkbox" id="checkbox{{ $content->id }}" {{ $content->is_published ? "checked" : '' }}></button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

{{ $contents->links() }}

@endsection