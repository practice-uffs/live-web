@extends('layouts.base')
@section('content')

<section>
    @if(Route::has('streamer.test'))
        <a href="{{ route('streamer.test', $event) }}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Testar o streamer
        </a>
    @endif
    <div x-data="{}" class="container">
        <header class="section-header"></header>
        @livewire('event.edit', ['event' => $event])
    </div>
</section>
@endsection

@section('scripts')

<script>
    $(function () {
        PracticeLive.init({
            eventId: '{{ $event->id }}',
        });
    });
</script>

@endsection