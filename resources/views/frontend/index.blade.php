@extends('frontend.layout')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <h4>Section 1</h4>
      <h6>Recent {{ $section_1_contents->count() }} content(s)</h6>
      <div class="row">
        <div class="col-md-6">
          @include('frontend.focused', ['content' => $section_1_contents->first()])
        </div>
        <div class="col-md-6">
          @include('frontend.normal', ['contents' => $section_1_contents->skip(1)])
        </div>
      </div>
    </div>

    <div class="col-md-4 border-left pl-3">
      <h4>Section 2</h4>
      <h6>Recent {{ $section_2_contents->count() }} content(s)</h6>
      @include('frontend.focused', ['content' => $section_2_contents->first()])
      @include('frontend.normal', ['contents' => $section_2_contents->skip(1)])
    </div>
  </div>
@endsection
