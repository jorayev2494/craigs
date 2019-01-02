@if (count($breadcrumbs))
    <ul class="breadcrumb">

        {{-- <li>
            <a href="{{ route('index') }}">
                <i class="icon-home2 position-left"></i>
                Home
            </a>
        </li> --}}

        @foreach ($breadcrumbs as $breadcrumb)
        {{-- @dd($loop->last) --}}
            @if ($breadcrumb->url == route("dashboard.index"))

                @if ($breadcrumb->url && !$loop->last)
                    <li>
                        <a href="{{ $breadcrumb->url }}">
                            <i class="icon-home2 position-left"></i>
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @else
                    <i class="icon-home2 position-left active"></i>
                    <li class="active">{{ $breadcrumb->title }}</li>
                @endif

            @elseif($breadcrumb->url && !$loop->last)
                <li>
                    <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                </li>
            @else
                <li class="active">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ul>
@endif
