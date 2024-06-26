@php
    if(has_nav_menu('header')){
        $headerItems = wp_get_nav_menu_items('header');
    }
    $hasHeaderMenu = isset($headerItems) && !empty($headerItems);
    //$hasHeaderMenu = true;
@endphp

<header>
    <div class="contacts-social">
        <div class="container">
            <div class="row">
                <div class="col contacts">
                    <a href="mailto:example@example.com">
                        <i class="fa-regular fa-envelope"></i>
                        <span>example@example.com</span>
                    </a>
                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>1st Floor New World.</span>
                    </div>
                    <a href="tel:+1234567890">
                        <i class="fa fa-phone"></i>
                        <span>+123456789</span>
                    </a>
                </div>
                <div class="col social">
                    <div>Follow us: </div>
                    <a href="#" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a class="dribbble social-icon" href="#" title="Dribbble"><i class="fa-brands fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </div>

    <nav>
        <div class="container">
            <div class="row">
                <div class="col logo-img">
                    <img id="logo" src="@asset('images/main-logo.png')">
                </div>
                <div class="col nav-links">
                    @if($hasHeaderMenu)
                        @foreach($headerItems as $item)
                            @if($item->menu_item_parent == 0)
                                @php
                                    $subMenuItems1 = array_filter($headerItems, function($headerItem) use ($item) {
                                        return $headerItem->menu_item_parent == $item->ID;
                                    });
                                @endphp
                                <div class="nav-link">
                                    {!! $item->url !== "#" ? '<a href="' . $item->url . '">' . $item->post_title . '</a>' : '<div class="menu-item">' . $item->post_title . '</div>' !!}
                                    @if($subMenuItems1)
                                        <span class="angle-down"><i class="fa-solid fa-angle-down"></i></span>
                                        <div class="dropdown">
                                            @foreach($subMenuItems1 as $subMenuItem1)
                                                @php
                                                    $subMenuItems2 = array_filter($headerItems, function($headerItem) use ($subMenuItem1) {
                                                        return $headerItem->menu_item_parent == $subMenuItem1->ID;
                                                    });
                                                @endphp
                                                @if(!empty($subMenuItems2))
                                                    <div class="nav-link has-sub-menu">
                                                        <div class="menu-item"> {{ $subMenuItem1->post_title }}</div>
                                                        <span class="angle-right"><i class="fa-solid fa-angle-right"></i></span>
                                                        <div class="sub-menu">
                                                            @foreach($subMenuItems2 as $subMenuItem2)
                                                                <a href="{{ $subMenuItem2->url }}">{{ $subMenuItem2->post_title }}</a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @else
                                                    <a href="{{ $subMenuItem1->url }}">{{ $subMenuItem1->post_title }}</a>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="nav-link">
                            <div class="menu-item">Home</div>
                            <span class="angle-down"><i class="fa-solid fa-angle-down"></i></span>
                            <div class="dropdown">
                                @for($i = 0; $i <= 4; $i++)
                                    <a href="#">Link {{ $i + 1 }}</a>
                                @endfor
                            </div>
                        </div>
                        <div class="nav-link">
                            <div class="menu-item">Company</div>
                            <span class="angle-down"><i class="fa-solid fa-angle-down"></i></span>
                            <div class="dropdown">
                                <a href="#">About Us</a>
                                <a href="#">Why Choose Us</a>
                                <div class="nav-link has-sub-menu">
                                    <div class="menu-item">
                                        Portfolio
                                        <span class="angle-right"><i class="fa-solid fa-angle-right"></i></span>
                                    </div>
                                     <div class="sub-menu">
                                        <a href="#">Portfolio Two</a>
                                        <a href="#">Portfolio Three</a>
                                    </div> 
                                </div>
                                <a href="#">Team Member</a>
                                <a href="#">Single Team</a>
                            </div>
                        </div>
                        <div class="nav-link">
                            <div class="menu-item">IT Solution</div>
                            <div class="dropdown">
                                <a href="#">IT Services</a>
                                <a href="#">Managed IT Services</a>
                                <a href="#">Industries</a>
                                <a href="#">Business Solutions</a>
                                <a href="#">IT Services Details</a>
                            </div>
                        </div>
                        <div class="nav-link">
                            <div class="menu-item">Elements</div>
                            <div class="dropdown">
                                <a href="#">Services</a>
                                <a href="#">Info Box</a>
                                <a href="#">Pricing Plan</a>
                                <a href="#">Team</a>
                                <a href="#">Countdown</a>
                                <a href="#">Accordion</a>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col cta-button">
                    <button class="button button-blue">Get a quote</button>
                </div>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="title-hamburger">
                <div class="container">
                    <div>TechPros</div>
                    <div id="hamburger" class="hamburger">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>
            </div>
            <div class="mobile-nav-links">
                <div class="container">
                    @if($hasHeaderMenu)
                        @foreach($headerItems as $item)
                            @if($item->menu_item_parent == 0)
                                @php
                                    $subMenuItems1 = array_filter($headerItems, function($headerItem) use ($item) {
                                        return $headerItem->menu_item_parent == $item->ID;
                                    });
                                @endphp
                                <div class="mobile-nav-link">
                                    {!! $item->url !== "#" ? '<a href="' . $item->url . '">' . $item->post_title . '</a>' : '<div class="menu-item">' . $item->post_title . '</div>' !!}
                                    @if(!empty($subMenuItems1))
                                        <span class="angle-down"><i class="fa-solid fa-angle-down"></i></span>
                                        <div class="mobile-dropdown">
                                            @foreach($subMenuItems1 as $subMenuItem1)
                                                {{-- @php
                                                    $subMenuItems2 = array_filter($headerItems, function($headerItem) use ($subMenuItem1) {
                                                        return $headerItem->menu_item_parent == $subMenuItem1->ID;
                                                    });
                                                @endphp
                                                @if(!empty($subMenuItems2))
                                                    <div class="mobilre-nav-link has-sub-menu">
                                                        <div class="menu-item">
                                                            {{ $subMenuItem1->post_title }}
                                                            <span class="angle-right"><i class="fa-solid fa-angle-right"></i></span>
                                                        </div>
                                                        <div class="mobile-sub-menu">
                                                            @foreach($subMenuItems2 as $subMenuItem2)
                                                                <a href="{{ $subMenuItem2->url }}">{{ $subMenuItem2->post_title }}</a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @else --}}
                                                    <a href="{{ $subMenuItem1->url }}">{{ $subMenuItem1->post_title }}</a>
                                                {{-- @endif --}}
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="mobile-nav-link">
                            <a href="#">Home</a>
                            <span class="mobile-dropdown-opener">+</span>
                            <div class="mobile-dropdown">
                                @for($i = 0; $i <= 5; $i++)
                                    <a href="#">Home {{ $i + 1 }}</a>
                                @endfor
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                        <div class="mobile-nav-link">
                            <a href="#">Company</a>
                            <span class="mobile-dropdown-opener">+</span>
                            <div class="mobile-dropdown">
                                <a href="#">About Us Two</a>
                                <a href="#">Why Choose Us</a>
                                <a href="#">Team Member</a>
                                <a href="#">Single Team</a>
                                {{-- <div class="mobile-nav-link">
                                    <a href="#">Portfolio</a>
                                    <span class="mobile-dropdown-opener">+</span>
                                </div>
                                <div class="mobile-dropdown">
                                    <a href="#">Portfolio Two</a>
                                    <a href="#">Portfolio Three</a>
                                </div>
                                <div class="mobile-nav-link">
                                    <a href="#">Our Service</a>
                                    <span class="mobile-dropdown-opener">+</span>
                                </div>
                                <div class="mobile-dropdown">
                                    <a href="#">Our Service Two</a>
                                    <a href="#">Our Service Three</a>
                                </div> --}}
                                <a href="#">Case study</a>
                                <a href="#">Pricing plan</a>
                                <a href="#">Faq</a>
                            </div>
                        </div>
                        <div class="mobile-nav-link">
                            <a href="#">IT Solution</a>
                            <span class="mobile-dropdown-opener">+</span>
                            <div class="mobile-dropdown">
                                <a href="#">IT Services</a>
                                <a href="#">Managed IT Services</a>
                                <a href="#">Industries</a>
                                <a href="#">Business Solutions</a>
                                <a href="#">IT Services Details</a>
                            </div>
                        </div>
                        <div class="mobile-nav-link">
                            <a href="#">Elements</a>
                            <span class="mobile-dropdown-opener">+</span>
                            <div class="mobile-dropdown">
                                <a href="#">Services</a>
                                <a href="#">Info Box</a>
                                <a href="#">Pricing Plan</a>
                                <a href="#">Team</a>
                                <a href="#">Countdown</a>
                                <a href="#">Accordion</a>
                            </div>
                        </div>
                        <div class="mobile-nav-link">
                            <a href="#">Blog</a>
                            <span class="mobile-dropdown-opener">+</span>
                            <div class="mobile-dropdown">
                                <a href="#">Blog List</a>
                                <a href="#">Blog Grid</a>
                                <a href="#">Blog 2column</a>
                            </div>
                        </div>
                        <div class="mobile-nav-link">
                            <a href="#">Contact</a>
                            <span class="mobile-dropdown-opener">+</span>
                            <div class="mobile-dropdown">
                                @for($i = 0; $i <= 5; $i++)
                                    <a href="#">Contact {{ $i + 1 }}</a>
                                @endfor
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>