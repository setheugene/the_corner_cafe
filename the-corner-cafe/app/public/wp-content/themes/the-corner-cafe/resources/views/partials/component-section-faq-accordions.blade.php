@php 
$headquarters_info = get_field('headquarters_location', 'option');

  $entry = [];
    while(have_rows('accordions')) {
      the_row();
      $entry[] = [
        'question' => get_sub_field('question'),
        'answer' => get_sub_field('answer')
    ];
  }

$count = -1;
$half = ceil(count($entry)/2);
$last = count($entry);
@endphp

{{-- COUNTS HALF OF THE ENTRIES AND BREAKS THEM INTO SEPERATE AND EVEN COLUMNS --}}
<div class="section-faq-accordions">
    <div class="accordions-container">
        @foreach ($entry as $accordion)
        @php $count++ @endphp
        @if ($count != $half)
        <div class="accordion-wrap">
            <div class="accordion-question"><div class="question">{{ $accordion['question'] }}</div><span class="circle plus"></span></div>
            <div class="panel"> 
                {!! $accordion['answer'] !!}
            </div>
        </div>
        @elseif ($count == $half)
    </div>
    <div class="accordions-container">
        <div class="accordion-wrap">
            <div class="accordion-question"><div class="question">{{ $accordion['question'] }}</div><span class="circle plus"></span></div>
            <div class="panel"> 
                {!! $accordion['answer'] !!}
            </div>
        </div>
        @elseif ($count == $last)
        <div class="accordion-wrap">
            <div class="accordion-question"><div class="question">{{ $accordion['question'] }}</div><span class="circle plus"></span></div>
            <div class="panel"> 
                {!! $accordion['answer'] !!}
            </div>
        </div>
    </div>
        @endif
        @endforeach
    </div>
</div>
