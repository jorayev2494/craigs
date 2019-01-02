<div class="sidebar-category sidebar-category-visible">
    <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">

            <!-- Main -->
            <li class="navigation-header">
                <span>Main</span>
                <i class="icon-menu" title="Main pages"></i>
            </li>

            @foreach ($admin_menus as $menu)

                @if (!$menu->active)
                    @continue
                @endif

                <li>
                    <a href="#">
                        <i class="{{ $menu->icon }}"></i>
                        <span>@lang("lang." . $menu->slug)</span>
                    </a>

                    @if (count($menu->selectees) !== 0)
                        <ul>
                            @foreach ($menu->selectees as $select)

                                @if (!$select->active)
                                    @continue
                                @endif

                                <li>
                                    <a href="{{ ($select->slug !== 'test') ? route($select->slug) : '#test' }}">@lang("lang." . $select->slug)</a>

                                    @if (count($select->MySelect) && count($select->MySelect))
                                        <ul>
                                            @foreach ($select->MySelect as $oneSelect)
                                                {{-- @dd($oneSelect->active) --}}
                                                @if ($oneSelect->active)
                                                    <li>
                                                        <a href="{{ ($oneSelect->slug !== 'test') ? route($oneSelect->slug) : '#test' }}">@lang("lang." . $oneSelect->slug)</a>
                                                    </li>
                                                @endif

                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </li>

            @endforeach

            {{-- <li>
                <a href="#"><i class="icon-stack2"></i> <span>Page layouts</span></a>
                <ul>
                    <li>
                        <a href="layout_navbar_fixed.html">Fixed navbar</a>
                    </li>
                    <li>
                        <a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a>
                    </li>
                    <li>
                        <a href="layout_sidebar_fixed_native.html">Fixed sidebar native scroll</a>
                    </li>
                    <li>
                        <a href="layout_navbar_hideable.html">Hideable navbar</a>
                    </li>
                    <li class="active">
                        <a href="layout_navbar_hideable_sidebar.html">Hideable &amp; fixed sidebar</a>
                    </li>
                    <li>
                        <a href="layout_footer_fixed.html">Fixed footer</a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li>
                        <a href="boxed_default.html">Boxed with default sidebar</a>
                    </li>
                    <li>
                        <a href="boxed_mini.html">Boxed with mini sidebar</a>
                    </li>
                    <li>
                        <a href="boxed_full.html">Boxed full width</a>
                    </li>
                </ul>
            </li> --}}

        </ul>
    </div>
</div>
