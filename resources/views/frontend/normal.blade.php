@foreach ($contents->chunk(2) as $chunk)
  <div class="row">
    @foreach ($chunk as $content)
      <div class="col-md-6">
      {{-- if the content type is 'post' --}}
      @if ($content->type == 1)
        <a href="{{ route('contents.show', $content->id) }}"><img src="{{ Storage::url($content->attachment) }}" class="img-fluid"></a>
      @else
        {{-- if the content type is 'video' --}}
        <div class="position-relative">
          <a href="{{ route('contents.show', $content->id) }}"><img src="{{ $content->video_thumbnail() }}" class="img-fluid"></a>
          <span class="position-absolute" style="z-index: 1; right: 0; bottom: 0; background: white;">&nbsp;&#x25B7;</span>
        </div>
      @endif

      <h4 class="mt-3"><a href="{{ route('contents.show', $content->id) }}">{{ $content->title }}</a></h4>
      </div>
    @endforeach
  </div>
@endforeach