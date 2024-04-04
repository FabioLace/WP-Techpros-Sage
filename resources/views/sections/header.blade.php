@php
    /* for($i = 0; $i <= 5; $i++){
        echo '<a href="#">Home '. ($i + 1).'</a>';
    } */
    /* for($j = 0; $j < 3; $j ++){
        echo '<a href="#">Contact Style '.($j +1) .'</a>';
    } */
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
                    <div class="nav-link">
                        <a href="#">Home</a>
                        <div class="dropdown">
                            {{-- HOME --}}
                            <a href="#">FAQ</a>
                        </div>
                    </div>
                    <div class="nav-link">
                        <a href="#">Company</a>
                        <div class="dropdown">
                            <a href="#">About Us Two</a>
                            <a href="#">Why Choose Us</a>
                            <a href="#">Team Member</a>
                            <a href="#">Single Team</a>
                            <a class="link-with-sub-menu" href="#">Portfolio</a>
                                <div class="sub-menu">
                                    <a href="#">Portfolio Two</a>
                                    <a href="#">Portfolio Three</a>
                                </div>
                            <a class="link-with-sub-menu" href="#">Our Service</a>
                                <div class="sub-menu">
                                    <a href="#">Our Service Two</a>
                                    <a href="#">Our Service Three</a>
                                </div>
                            <a href="#">Case study</a>
                            <a href="#">Pricing plan</a>
                            <a href="#">Faq</a>
                        </div>
                    </div>
                    <div class="nav-link">
                        <a href="#">IT Solution</a>
                        <div class="dropdown">
                            <a href="#">IT Services</a>
                            <a href="#">Managed IT Services</a>
                            <a href="#">Industries</a>
                            <a href="#">Business Solutions</a>
                            <a href="#">IT Services Details</a>
                        </div>
                    </div>
                    <div class="nav-link">
                        <a href="#">Elements</a>
                        <div class="dropdown">
                            <a href="#">Services</a>
                            <a href="#">Info Box</a>
                            <a href="#">Pricing Plan</a>
                            <a href="#">Team</a>
                            <a href="#">Countdown</a>
                            <a href="#">Accordion</a>
                        </div>
                    </div>
                    <div class="nav-link">
                        <a href="#">Blog</a>
                        <div class="dropdown">
                            <a href="#">Blog List</a>
                            <a href="#">Blog Grid</a>
                            <a href="#">Blog 2column</a>
                        </div>
                    </div>
                    <div class="nav-link">
                        <a href="#">Contact</a>
                        <div class="dropdown">
                            {{--CONTACT --}}
                        </div>
                    </div>
                </div>
                <div class="col cta-button">
                    <button class="button button-blue">Get a quote</button>
                </div>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="techpros-hamburger">
                <div class="container">
                    <div>TechPros</div>
                    <div id="hamburger">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>
            </div>
            <div class="mobile-nav-links"> {{-- ANIMAZIONE --}}
                <div class="container">
                    <div class="mobile-nav-link">
                        <a href="#">Home</a>
                        <span class="mobile-dropdown-opener">+</span>
                        <div class="mobile-dropdown">
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
                            {{-- CONTACT --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>