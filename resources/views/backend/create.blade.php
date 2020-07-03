@extends('backend.layout')

@section('content')
  <h4>Create Content</h4>

  <form method="POST" action="{{ route('contents.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter a suitable title for the content" required="">
    </div>

    <div class="form-group">
      <label for="type">Seletct Content Type</label>
      <select class="form-control" id="type" name="type" required="" autocomplete='off'>
        <option value="" disabled="" selected="">Please select</option>
        <option value="1">Post</option>
        <option value="0">Video</option>
      </select>
    </div>

    <div class="form-group" id="attach"></div>
    
    <div class="form-group">
      <label for="section">Seletct Section</label>
      <select class="form-control" id="section" name="section" required="" autocomplete='off'>
        <option value="" disabled="" selected="">Please select</option>
        <option value="1">Section 1</option>
        <option value="0">Section 2</option>
      </select>
    </div>

    <div class="form-group">
      <label for="is_published">Publish ?</label>
      <select class="form-control" id="is_published" name="is_published" required="" autocomplete='off'>
        <option value="" disabled="" selected="">Please select</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" rows="3" name="description" required=""></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @push('scripts')
    <script type="text/javascript">
      $(document).ready(function ()
      {
        $('#type').change(function ()
          {
            let html;
            switch ($(this).val())
            {
              case '1':
                html = 
                  `<label for="attachment">Attach Image</label>
                  <input type="file" class="form-control-file" id="attachment" name="attachment" required="">`;
                  break;
              case '0':
                html = 
                  `<label for="attachment">Attach Youtube Video Url</label>
                  <input type="text" class="form-control" id="attachment" name="attachment" placeholder="Enter a valid youtube  video url" required="">`;
            }
            $('#attach').html(html);
          });
      });
    </script>
  @endpush
@endsection