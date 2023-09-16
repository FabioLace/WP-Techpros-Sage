<div class="our-services">
    <div class="services-content">
        <div class="text-button">
            <div class="text">
                <h5>// Our Services</h5>
                <h3>We Offer A Wide<br>Variety Of IT Services</h3>
            </div>
            <button class="view-services">
                View All Services <i class="fa-solid fa-angle-right"></i>
            </button>
        </div>
        <div class="services-cards">
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const serviceCards = document.getElementsByClassName("card");
                    const circleCards = document.getElementsByClassName("circle");

                    for (let i = 0; i < serviceCards.length; i++) {
                        serviceCards[i].addEventListener("mouseover", function() {
                            if (!serviceCards[i].classList.contains("always-activated")) {
                                serviceCards[i].classList.add("activated");
                                circleCards[i].style.display = "block";
                            }
                        });

                        serviceCards[i].addEventListener("mouseout", function() {
                            if (!serviceCards[i].classList.contains("always-activated")) {
                                serviceCards[i].classList.remove("activated");
                                circleCards[i].style.display = "none";
                            }
                        });
                    }
                });
            </script>

            <div class="card">
                <h2>Cyber Security</h2>
                <span class="icon-card">
                    <span class="circle"></span>
                    <i class="fa-solid fa-network-wired"></i>
                </span>
                <div>
                    Trouble that bound ensue that equaly blame belongs to those through weakness.
                </div>
                <a>Read more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="card always-activated">
                <h2>Web Development</h2>
                <span class="icon-card">
                    <span class="circle"></span>
                    <i class="fa-solid fa-laptop"></i>
                </span>
                <div>
                    Trouble that bound ensue that equaly blame belongs to those through weakness.
                </div>
                <a>Read more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="card">
                <h2>Mobile Development</h2>
                <span class="icon-card">
                    <span class="circle"></span>
                    <i class="fa-solid fa-mobile-alt"></i>
                </span>
                <div>
                    Trouble that bound ensue that equaly blame belongs to those through weakness.
                </div>
                <a href="#">Read more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="card">
                <h2>IT Consultancy</h2>
                <span class="icon-card">
                    <span class="circle"></span>
                    <i class="fa-solid fa-briefcase"></i>
                </span>
                <div>
                    Trouble that bound ensue that equaly blame belongs to those through weakness.
                </div>
                <a>Read more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
