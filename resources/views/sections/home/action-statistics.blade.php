<div class="action-statistics">
    <script>
        function animateCount(element, target, duration) {
            const start = 0;
            const increment = target / (duration / 16); // 16ms è il tempo approssimativo di un frame

            let current = start;
            const interval = setInterval(() => {
                current += increment;
                element.textContent = Math.floor(current);

                if (current >= target) {
                    clearInterval(interval);
                    element.textContent = target;
                }
            }, 16);
        }

        document.addEventListener("DOMContentLoaded", function(){
            const statisticsElement = document.querySelector('.statistics');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if(entry.isIntersecting){
                        const happyCustomersElement = document.querySelector('#happy-customers h1');
                        animateCount(happyCustomersElement, 147, 1000);

                        const accountNumber = document.querySelector('#account-number h1');
                        animateCount(accountNumber, 1280, 1000);

                        const finishedProjects = document.querySelector('#finished-projects h1');
                        animateCount(finishedProjects,10, 1000);

                        const winAwards = document.querySelector('#win-awards h1');
                        animateCount(winAwards,992,1000);

                        observer.unobserve(statisticsElement);
                    }
                });
            });
            observer.observe(statisticsElement);
        });
    </script>
    <div class="cta">
        <h2>We Provide Worldwide IT Service For <br> Small & Mid-Sized Business</h2>
        <p>
            Nectar accumsan id nisi in ullamcorper. Nullam leo maximus vitae interdum non,
            sit amet est. Aenean sagittis tellus eu nicce esedatu occeanas del ano.
        </p>
        <button>See Our Service</button>
    </div>
    <div class="statistics">
        <div id="happy-customers" class="stat-blue">
            <span class="icon">
                <i class="fa-solid fa-layer-group"></i>
            </span>
            <div class="stat-data">
                <div class="d-flex flex-row align-items-center">
                    <h1 class="mr-1">0</h1>
                    <h3>+</h3>
                </div>
                <div>Happy Customers</div>
            </div>
        </div>
        <div id="account-number" class="stat-white">
            <span class="icon">
                <i class="fa-solid fa-layer-group"></i>
            </span>
            <div class="stat-data">
                <div class="d-flex flex-row align-items-center">
                    <h1 class="mr-1">0</h1>
                    <h3>+</h3>
                </div>
                <div>Account number</div>
            </div>
        </div>
        <div id="finished-projects" class="stat-purple">
            <span class="icon">
                <i class="fa-solid fa-layer-group"></i>
            </span>
            <div class="stat-data">
                <div class="d-flex flex-row align-items-center">
                    <h1 class="mr-1">0</h1>
                    <h3>K</h3>
                </div>
                <div>Finished Projects</div>
            </div>
        </div>
        <div id="win-awards" class="stat-white">
            <span class="icon">
                <i class="fa-solid fa-layer-group"></i>
            </span>
            <div class="stat-data">
                <h1 class="mr-1">0</h1>
                <div>Win Awards</div>
            </div>
        </div>
    </div>
</div>