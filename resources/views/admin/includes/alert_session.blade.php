@if (session()->has("primary"))
    <div class="panel-heading">
        <div class="alert bg-primary alert-styled-left">
            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
                <span class="sr-only">Close</span>
            </button>
            {{-- <span class="text-semibold">Morning!</span> Were glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day. --}}
            <ul>
                <li>{{ session()->pull("primary") }}</li>
            </ul>
        </div>
    </div>
@endif

@if (session()->has("success"))
    <div class="panel-heading">
        <div class="alert bg-success alert-styled-left">
            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <ul>
                <li>{{ session()->pull("success") }}</li>
            </ul>
        </div>
    </div>
@endif

@if (session()->has("warning"))
    <div class="panel-heading">
        <div class="alert bg-warning alert-styled-left">
            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <ul>
                <li>{{ session()->pull("warning") }}</li>
            </ul>
        </div>
    </div>
@endif

@if (session()->has("info"))
    <div class="panel-heading">
        <div class="alert bg-info alert-styled-left">
            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
                <span class="sr-only">Close</span>
            </button>
            {{-- <span class="text-semibold">Heads up!</span> This alert needs your attention, but its not <a href="#" class="alert-link">super important</a>. --}}
            <ul>
                <li>{{ session()->pull("info") }}</li>
            </ul>
        </div>
    </div>
@endif

@if (session()->has("teal"))
    <div class="panel-heading">
        <div class="alert bg-teal alert-styled-left alert-styled-custom">
            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
                <span class="sr-only">Close</span>
            </button>
            {{-- <span class="text-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color. --}}
            <ul>
                <li>{{ session()->pull("teal") }}</li>
            </ul>
        </div>
    </div>
@endif
{{-- <div class="alert bg-danger alert-styled-left">
    <button type="button" class="close" data-dismiss="alert">
        <span>&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <span class="text-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
</div> --}}

@if ($errors->any())
    <div class="panel-heading">
        <div class="alert bg-danger alert-styled-left">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
            {{-- <span class="text-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>. --}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
