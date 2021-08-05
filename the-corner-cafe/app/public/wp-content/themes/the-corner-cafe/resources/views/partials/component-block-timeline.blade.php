@php $section_fields = App::getSectionTimelineFields(); 

  $timeline_item = [];
    while(have_rows('timeline_item')) {
      the_row();
      $timeline_item[] = [
        'year' => get_sub_field('year'),
        'photo' => get_sub_field('photo'),
        'heading' => get_sub_field('heading'),
        'description' => get_sub_field('description'),
    ];
  }

@endphp

<div class="section-timeline">
    <div class="header-center">
        <h2 class="oleo dark">{{$section_fields['timeline_section_heading_top']}}</h2>
        <h2>{{$section_fields['timeline_section_heading_bottom']}}</h2>
    </div>
    <div class="timeline-container">
      @foreach ($timeline_item as $slide)
      @php $image = $slide['photo']; @endphp
      <div class="item">
        <div class="year">{!! $slide['year'] !!}</div>
        <div class="card">
          <hr class="vr">
          <div class="photo">
            <img src="{!! esc_url($image['url']) !!}" alt="{!! esc_attr($image['alt']) !!}">
          </div>
          <div class="heading">{!! $slide['heading'] !!}</div>
          <div class="description">{!! $slide['description'] !!}</div>
        </div>
      </div>
      @endforeach
    </div>
</div>