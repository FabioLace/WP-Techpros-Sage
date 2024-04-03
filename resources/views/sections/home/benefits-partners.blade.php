<section class="benefits-partners">
    <div class="container">
        <div class="benefits">
            <img src="@asset('images/why-choose.png')">
            <div class="text">
                <div class="title-line">
                    <div class="title-5">Our benefits</div>
                    <div class="line"></div>
                </div>
                <div class="title-3">Few Reasons Why You<br>Should Choose Us</div>
                <p>Our team applies its wide-ranging experience to determining the strategies that will best enable our clients to achieve clear, long-term objectives.</p>
                <div class="paragraphs">
                    <div class="paragraph">
                        <span class="icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </span>
                        <div class="paragraph-text">
                            <div class="title-2">Product Designs</div>
                            <p>High standards of professionalism, integrity. Establishment of close working relationships.</p>
                        </div>
                    </div>
                    <div class="paragraph">
                        <span class="icon">
                            <i class="fa-regular fa-handshake"></i>
                        </span>
                        <div class="paragraph-text">
                            <div class="title-2">Big Data Analysis</div>
                            <p>Statistical analysis to help an organization to gain insights from large information web sets.</p>
                        </div>
                    </div>
                    <div class="paragraph">
                        <span class="icon">
                            <i class="fa-regular fa-handshake"></i>
                        </span>
                        <div class="paragraph-text">
                            <div class="title-2">Mantain App Data</div>
                            <p>We Create the optimal platform to develop and run digital applications for our clients app.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partners mt-5">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @php
                        $image_files = ['brand1.png', 'brand2.png', 'brand3.png', 'brand4.png', 'brand5.png', 'brand6.png'];
                        $template_directory_uri = esc_url(get_template_directory_uri());
                    @endphp
                    @foreach ($image_files as $image_file)
                        @php
                            $image_url = $template_directory_uri . '/resources/images/' . $image_file;
                        @endphp
                        <div class="swiper-slide">
                            <img src="{{ $image_url }}" alt="{{ $image_file }}">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>