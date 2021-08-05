@php $section_fields = App::getTestimonialFields(); 
  $quote = [];
    while(have_rows('testimonial_quotes')) {
      the_row();
      $quote[] = [
        'quote' => get_sub_field('quote'),
        'name' => get_sub_field('name')
    ];
  }
@endphp

<style>
  .testimonial-section-bg::before {
    background-image: url( {{ $section_fields['testimonial_background'] }} );
  }
</style>

<div class="testimonial-section">
    <div class="testimonial-section-bg">
        <div class="testimonial-section-left">
            <h2>{{$section_fields['testimonial_heading']}}</h2>
            <div class="dish">
                <img src="{{$section_fields['testimonial_dish']}}" alt="full plate of food">
            </div>
        </div>
        <div class="testimonial-section-right">
            <div class="carousel-container">
                <div class="testimonial-slider">
                    @foreach ($quote as $slide)
                    <div class="slide">
                        <div class="icon"></div>
                        <div class="quote">{!! $slide['quote'] !!}</div>
                        <div class="name">- {!! $slide['name'] !!}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>