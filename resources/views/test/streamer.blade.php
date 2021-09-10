@extends('layouts.base')
@section('content')

<section>
    Teste do streamer (olhe o console)
</section>
@endsection

@section('scripts')

<script>
    $(function () {
        Echo.channel('event.{{ $event->id }}').listen('FormReplied', (e) => {
            console.log(e);
        });
    });
</script>

@endsection