@extends('layouts.template')

@section('content')
    <h2> Halaman CREATE</h2>

@endsection

@push('scripts')
<script>
    var wrappers = document.getElementsByClassName('wrappers');
    var items = ['ini', 'contoh'];

    console.log(items);
</script>
@endpush
