{{-- header --}}
@include('layouts.header')

{{-- sidebar  --}}
@include('layouts.sidebar')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endif
    {{ $slot }}
</div>
    {{-- footer --}}
    @include('layouts.footer')
