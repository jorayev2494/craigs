<div class="sidebar-category sidebar-category-visible">
    <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">

            <!-- Main -->
            <li class="navigation-header">
                <span>Main</span>
                <i class="icon-menu" title="Main pages"></i>
            </li>

            @foreach ($admin_menus as $menu)

                @if ($menu->active)
                    <li>
                        <a href="#">
                            <i class="{{ $menu->icon }}"></i>
                            <span>@lang("lang." . $menu->slug)</span>
                        </a>

                        @if (count($menu->selectees) !== 0)
                            {{-- {{ $menu->forget() }} --}}
                            {{-- @dd($menu->selecteesActive[0]->MySelect) --}}
                            <ul>
                                @foreach ($menu->selectees as $select)
                                    @if ($select->active)
                                        <li>
                                            <a href="{{ ($select->slug !== 'test') ? route('admin.' . $select->slug . '.index') : '#test' }}">@lang("lang." . $select->slug)</a>
                                            @if (count($select->MySelect))
                                                <ul>
                                                    @foreach ($select->MySelect as $oneSelect)
                                                        @if ($oneSelect->active)
                                                            <li>
                                                                <a href="{{ ($oneSelect->slug !== 'test') ? route($oneSelect->slug) : '#test' }}">@lang("lang." . $oneSelect->slug)</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif

                    </li>
                @endif

            @endforeach

        </ul>
    </div>
</div>
