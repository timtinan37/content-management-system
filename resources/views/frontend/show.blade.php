@extends('frontend.layout')

@section('content')
  <div class="col-md-6 offset-md-3">
    <h3>{{ $content->title }}</h3>
 
    @if ($content->type==1)
      @include('frontend.image')
    @else
      @include('frontend.video')
    @endif

    <p class="mt-5 mb-5">{{ $content->description }}</p>
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('contents.show', $content->id) }}" target="_blank"><i data-feather="facebook" class="mr-3"></i></a>
    <a href="https://twitter.com/intent/tweet?url={{ route('contents.show', $content->id) }}&text={{ $content->title }}" target="_blank"><i data-feather="twitter" class="mr-3"></i></a>
  </div>

  @push('scripts')
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script>
      feather.replace()
    </script>
  @endpush
@endsection
