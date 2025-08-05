<template>
    <div>
        <nav
            class="navbar navbar-expand-lg fixed-top shadow-sm"
            style="background-color: #ffc107"
        >
            <div
                class="container px-3 d-flex justify-content-between align-items-center"
            >
                <!-- Logo + Brand -->
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <div class="logo-circle me-2">
                        <img src="/images/logoldi.png" alt="Logo" height="48" />
                    </div>
                    <span
                        class="brand-text fw-medium fs-2 fs-md-5 fs-lg-1"
                        style="font-family: Roboto; font-size: 0.9rem"
                    >
                        <span class="text-black me-1"
                            >Leonardo Distributors,</span
                        >
                        <span class="inc-card">Inc.</span>
                    </span>
                </a>

                <!-- OPEN BUTTON (menu) -->
                <button
                    id="menuOpenBtn"
                    class="navbar-toggler border-0"
                    type="button"
                    @click="menuOpenFunc()"
                >
                    <i class="bi bi-list fs-2"></i>
                </button>

                <!-- CLOSE BUTTON (X) -->
                <button
                    id="menuCloseBtn"
                    class="navbar-toggler border-0 d-none"
                    type="button"
                >
                    <i class="bi bi-x fs-2"></i>
                </button>

                <!-- Nav Links -->
                <div
                    class="collapse navbar-collapse pt-1"
                    id="navbarNav"
                    style="font-family: sans-serif"
                >
                    <ul
                        class="navbar-nav ms-auto text-center mb-4 mb-lg-0 d-flex gap-4"
                        style="
                            font-weight: 600;
                            font-size: 0.85rem;
                            font-family: sans-serif;
                        "
                    >
                        <li class="nav-item">
                            <a
                                class="nav-link nav-custom active text-black"
                                href="#home"
                                >HOME</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link nav-custom text-black"
                                href="#about"
                                >ABOUT</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link nav-custom text-black"
                                href="#products"
                                >PRODUCTS</a
                            >
                        </li>

                        <li
                            class="nav-item w-100 d-flex d-lg-block justify-content-center justify-content-lg-start"
                        >
                            <a
                                href="#"
                                class="nav-link register-link d-flex align-items-center gap-2 px-3 py-2 bg-warning"
                                style="border-radius: 6px; font-weight: 700"
                                @click.prevent="openInquiryModal"
                            >
                                <i class="bi bi-person-plus-fill"></i>
                                REGISTER
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <nav
            class="navbar navbar-expand-lg fixed-top shadow-sm"
            style="background-color: #ffc107"
        >
            <div class="container px-0 d-flex flex-wrap flex-lg-nowrap w-100"> -->
        <!-- LEFT: Logo + Brand -->
        <!-- <div class="navbar-left d-flex align-items-center px-4 py-2">
                    <a
                        class="navbar-brand d-flex align-items-center mb-0"
                        href="#"
                        style="
                            font-size: 30px;
                            font-weight: 500;
                            font-family: Roboto;
                        "
                    >
                        <div class="logo-circle me-2">
                            <img
                                src="/images/logoldi.png"
                                alt="Logo"
                                height="48"
                            />
                        </div>
                        <span class="brand-text d-flex flex-wrap">
                            <span class="text-black me-1"
                                >Leonardo Distributors,</span
                            >
                            <span class="inc-card">Inc.</span>
                        </span>
                    </a>
                </div> -->

        <!-- RIGHT: Nav Links + Toggle -->
        <!-- <div class="navbar-right flex-grow-1 px-3">
                    <button
                        class="navbar-toggler custom-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i class="bi bi-list toggle-icon fs-2"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul
                            class="navbar-nav ms-auto mb-2 mb-lg-0"
                            style="font-weight: bold; font-size: 0.8rem"
                        >
                            <li class="nav-item">
                                <a
                                    class="nav-link nav-custom active mx-3 text-black"
                                    href="#home"
                                    >HOME</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link nav-custom mx-3 text-black"
                                    href="#about"
                                    >ABOUT</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link nav-custom mx-3 text-black"
                                    href="#products"
                                    >PRODUCTS</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav> -->

        <div>
            <!-- Privacy Consent Modal -->
            <div
                v-if="showModal"
                id="modal-overlay"
                role="dialog"
                aria-modal="true"
                aria-labelledby="modal-title"
            >
                <div id="consent-modal">
                    <h2 id="modal-title">DATA PRIVACY CONSENT</h2>
                    <p>
                        I, understand and agree that by providing my personal
                        data or by clicking the applicable icon or button, I am
                        agreeing to the Privacy Notice and giving my full
                        consent to Alturas Group of Companies (AGC), its
                        respective subsidiaries, affiliates, associated
                        companies and jointly controlled entities as well as its
                        partners and service providers, if any, to collect,
                        store, access and/or process any personal data I may
                        provide herein, such as but not limited to my name and
                        email address, whether manually or electronically, for
                        the period allowed under the applicable law and
                        regulations.
                    </p>
                    <p>
                        I, acknowledge that the collection and processing of my
                        personal data is necessary for the purposes detailed in
                        the Privacy Notice. I am aware of my right to be
                        informed, to access, to object, to erasure or blocking,
                        to damages, to file a complaint, to rectify and to data
                        portability, and I understand that there are procedures,
                        conditions and exceptions to be complied with in order
                        to exercise or invoke such rights.
                    </p>
                    <button
                        id="agree-btn"
                        @click="acceptConsent"
                        aria-label="Agree to data privacy consent"
                    >
                        I AGREE
                    </button>
                </div>
            </div>

            <!-- Main Website Content -->
            <div v-show="!showModal" id="main-content">
                <slot></slot>
            </div>
        </div>

        <!-- Hero Section home -->
        <section
            id="home"
            class="hero-section d-flex flex-column align-items-start justify-content-start px-4 px-md-5"
            style="padding-top: 7rem"
        >
            <h1
                class="display-5 w-100"
                style="
                    font-weight: 500;
                    font-size: clamp(1.45rem, 2.2vw + 0.25rem, 2.2rem);
                    font-family: sans-serif;
                    text-align: start;
                    max-width: 700px;
                    margin-top: 6rem;
                    padding: 0 1.5rem;

                    line-height: 2.6rem;
                "
            >
                <i
                    class="fas fa-quote-left text-black"
                    aria-hidden="true"
                    style="margin-right: 0.5rem"
                ></i>
                Great supply is not just about delivery<br />
                — it’s about delivering trust, consistency,<br />
                and value every single time.
                <i
                    class="fas fa-quote-right text-black"
                    aria-hidden="true"
                    style="margin-left: 0.5rem"
                ></i>
            </h1>
        </section>

        <!-- About Us Header Section -->
        <section id="about" class="py-5" style="background-color: #f0f0f0">
            <div class="container text-center">
                <!-- Title -->
                <h2
                    class="mb-3"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    style="
                        font-size: 21px;
                        font-family: sans-serif;
                        font-weight: 600;
                    "
                >
                    ABOUT OUR COMPANY
                </h2>

                <!-- Description -->
                <p
                    class="mb-4 text-muted text-center"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    style="font-size: 16px; font-family: Roboto, sans-serif"
                >
                    "Shaping your business future with tailored solutions and
                    proven excellence"
                </p>

                <!-- One-line Minimalist Stats Card with Thin Black Dividers -->
                <div
                    class="container my-4 p-3 rounded shadow-sm"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    style="
                        background-color: #e9ebee;
                        border: 1px solid #dee2e6;
                        font-family: Roboto, sans-serif;
                        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3) !important;
                    "
                >
                    <div
                        class="d-flex flex-column flex-md-row justify-content-between align-items-center text-center gap-3 gap-md-0"
                    >
                        <!-- Stat 1 -->
                        <div class="flex-fill px-md-3">
                            <div class="fw-bold fs-4 text-secondary">
                                20,000+
                            </div>
                            <div class="small text-dark">
                                Products distributed annually
                            </div>
                        </div>
                        <!-- Responsive Divider -->
                        <!-- Mobile: horizontal line -->
                        <div
                            class="d-block d-md-none w-75"
                            style="height: 1px; background-color: gray"
                        ></div>
                        <!-- Desktop: vertical line -->
                        <div
                            class="d-none d-md-block"
                            style="
                                width: 1px;
                                height: 50px;
                                background-color: gray;
                            "
                        ></div>

                        <!-- Stat 2 -->
                        <div class="flex-fill px-md-3">
                            <div class="fw-bold fs-4 text-secondary">20+</div>
                            <div class="small text-dark">
                                Years of experience
                            </div>
                        </div>

                        <!-- Responsive Divider -->
                        <!-- Mobile: horizontal line -->
                        <div
                            class="d-block d-md-none w-75"
                            style="height: 1px; background-color: gray"
                        ></div>
                        <!-- Desktop: vertical line -->
                        <div
                            class="d-none d-md-block"
                            style="
                                width: 1px;
                                height: 50px;
                                background-color: gray;
                            "
                        ></div>

                        <!-- Stat 3 -->
                        <div class="flex-fill px-md-3">
                            <div class="fw-bold fs-4 text-secondary">100+</div>
                            <div class="small text-dark">
                                Employees delivering quality
                            </div>
                        </div>

                        <!-- Responsive Divider -->
                        <!-- Mobile: horizontal line -->
                        <div
                            class="d-block d-md-none w-75"
                            style="height: 1px; background-color: gray"
                        ></div>
                        <!-- Desktop: vertical line -->
                        <div
                            class="d-none d-md-block"
                            style="
                                width: 1px;
                                height: 50px;
                                background-color: gray;
                            "
                        ></div>

                        <!-- Stat 4 -->
                        <div class="flex-fill px-md-3">
                            <div class="fw-bold fs-4 text-secondary">
                                1,000+
                            </div>
                            <div class="small text-dark">
                                Clients across Bohol
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            id="about"
            class="py-5"
            data-aos="fade-up"
            data-aos-delay="200"
            style="background-color: #f0f0f0"
        >
            <div id="mission" class="container px-4 px-md-5">
                <div class="row align-items-center g-4">
                    <!-- Image on the left -->
                    <div
                        class="col-md-6 d-flex justify-content-center"
                        style="margin-left: 0"
                    >
                        <img
                            src="/images/1.png"
                            alt="Our Mission"
                            class="img-fluid rounded"
                            style="
                                object-fit: cover;
                                max-height: 400px;
                                width: 80%;
                                max-width: 80%;
                                margin-left: auto;
                                margin-right: auto;
                            "
                        />
                    </div>

                    <!-- Card on the right -->
                    <div class="col-md-6">
                        <div
                            class="card shadow p-4 h-100"
                            style="border-radius: 0.75rem"
                        >
                            <h3
                                class="fw-semibold mb-3"
                                style="font-family: Roboto; font-size: 24px"
                            ></h3>
                            <p
                                style="
                                    font-family: Roboto;
                                    font-size: 16px;
                                    line-height: 1.6;
                                    margin-bottom: 0;
                                "
                            >
                                As the leading provider of distribution
                                management in Bohol, we shall be known for our
                                continuous search for best in class business
                                practices thru:
                            </p>
                            <ul
                                style="
                                    padding-left: 1.2rem;
                                    margin-top: 1rem;
                                    font-size: 16px;
                                    font-family: Roboto;
                                "
                            >
                                <li>
                                    Leadership strategic alliance with our
                                    principal thru defined and shared business
                                    principles, that will drive the strategic
                                    alignment in our business.
                                </li>
                                <li>
                                    Organizational effectiveness thru continuous
                                    development of people and business
                                    processes.
                                </li>
                                <li>
                                    Financial management effectiveness to ensure
                                    sustained profitability for our shareholders
                                    and business partners , that will drive the
                                    long term vitality of the business
                                    partnership.
                                </li>
                                <li>
                                    Nourishing a culture driven by pursuit of
                                    excellence.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT US SECTION  -->

        <section
            id="about"
            class="py-5"
            data-aos="fade-up"
            data-aos-delay="200"
            style="background-color: #f0f0f0"
        >
            <div id="vision" class="container px-4 px-md-5">
                <div
                    class="row align-items-center g-4 flex-column-reverse flex-md-row"
                >
                    <!-- Card on the left -->
                    <div class="col-md-6">
                        <div
                            class="card shadow p-4 h-100"
                            style="border-radius: 0.75rem"
                        >
                            <h3
                                class="fw-semibold mb-3"
                                style="font-family: Roboto; font-size: 24px"
                            ></h3>
                            <p
                                style="
                                    font-family: Roboto;
                                    font-size: 16px;
                                    line-height: 1.6;
                                    margin-bottom: 0;
                                "
                            >
                                Our first business partners are our principals,
                                for whom we will adopt and develop leading
                                state-of-the-art technology to achieve
                                world-class distribution excellence while
                                sustaining profitability.
                            </p>
                            <p
                                style="
                                    font-family: Roboto;
                                    font-size: 16px;
                                    line-height: 1.6;
                                    margin-top: 1rem;
                                "
                            >
                                Our second business partners are our customers
                                in the modern and general trade, and we share
                                the same vision of sustained business growth
                                thru efficient and effective use of technology
                                and best-in-class customer service.
                            </p>
                            <p
                                style="
                                    font-family: Roboto;
                                    font-size: 16px;
                                    line-height: 1.6;
                                    margin-top: 1rem;
                                "
                            >
                                Our strategic business partners will ensure that
                                the Boholano consumer is king, through more
                                value choices for their hard-earned money.
                            </p>
                        </div>
                    </div>

                    <!-- Image on the right -->
                    <div class="col-md-6 d-flex justify-content-center">
                        <img
                            src="/images/2.png"
                            alt="Our Vision"
                            class="img-fluid rounded"
                            style="
                                object-fit: cover;
                                max-height: 400px;
                                width: 80%;
                                max-width: 80%;
                                margin-left: auto;
                                margin-right: auto;
                            "
                        />
                    </div>
                </div>
            </div>
        </section>

        <section
            id="about"
            class="py-5"
            data-aos="fade-up"
            data-aos-delay="200"
            style="background-color: #f0f0f0"
        >
            <div id="values" class="container px-4 px-md-5">
                <div class="row align-items-center g-4">
                    <!-- Image on the left -->
                    <div
                        class="col-md-6 d-flex justify-content-center"
                        style="margin-left: 0"
                    >
                        <img
                            src="/images/3.png"
                            alt="Our Mission"
                            class="img-fluid rounded"
                            style="
                                object-fit: cover;
                                max-height: 400px;
                                width: 80%;
                                max-width: 80%;
                                margin-left: auto;
                                margin-right: auto;
                            "
                        />
                    </div>

                    <!-- Card on the right -->
                    <div class="col-md-6">
                        <div
                            class="card shadow p-4 h-100"
                            style="border-radius: 0.75rem"
                        >
                            <ul
                                style="
                                    padding-left: 1.2rem;
                                    margin-top: 1rem;
                                    font-size: 16px;
                                    font-family: Roboto;
                                "
                            >
                                <li>Pioneering and Innovativeness</li>
                                <li>Productivity and Excellence</li>
                                <li>Industriousness</li>
                                <li>Integrity</li>
                                <li>Customer Satisfaction</li>
                                <li>Social Responsibility</li>
                                <li>Faith in the Almighty</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Meet Our Leaders & Connect Section -->
        <section
            id="about"
            class="leadership-contact-section py-5 position-relative pt-5 pt-md-9"
            data-aos="fade-up"
            data-aos-delay="200"
            style="background-color: #f0f0f0; font-family: Roboto"
        >
            <div class="container position-relative z-2">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div
                            class="rounded-4 custom-card-shadow mt-5 p-4 p-md-5"
                            style="
                                background-color: rgba(182, 185, 190, 0.3);
                                box-shadow: 0 12px 28px rgba(10, 31, 68, 0.5);
                            "
                            data-aos="fade-up"
                        >
                            <!-- Section Heading -->
                            <div class="text-center mb-5">
                                <h2 class="section-title text-black">
                                    Meet Our Leaders &amp; Connect
                                </h2>
                                <p class="text-muted mt-2">
                                    At Leonardo Distributors Inc., we value
                                    people-first leadership, clear
                                    communication, and a commitment to
                                    excellence through integrity and innovation.
                                </p>
                            </div>

                            <!-- Cards Row -->
                            <div class="row g-4">
                                <!-- Leadership Card -->
                                <div
                                    class="col-md-6"
                                    data-aos="fade-up"
                                    data-aos-delay="100"
                                >
                                    <div
                                        class="card h-100 border-0 shadow-lg rounded-4 bg-light hover-shadow transition"
                                    >
                                        <div
                                            class="card-body text-center px-4 py-5 position-relative"
                                        >
                                            <div
                                                class="image-hover-wrapper mb-4"
                                            >
                                                <img
                                                    src="/images/ceo.jpg"
                                                    alt="CEO"
                                                    class="rounded-circle shadow img-ceo"
                                                />
                                            </div>
                                            <h5
                                                class="card-title fw-bold text-navy mb-1"
                                                style="font-size: 18px"
                                            >
                                                Uy, Raymond Darunday
                                            </h5>
                                            <p class="small fw-medium">
                                                Group Managing Director
                                            </p>
                                            <p
                                                class="card-text"
                                                style="text-align: justify"
                                            >
                                                A strategic leader focused on
                                                operational excellence and
                                                long-term growth, Raymond brings
                                                clear direction and people-first
                                                leadership to Leonardo
                                                Distributors Inc.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contact Card -->
                                <div
                                    class="col-md-6"
                                    data-aos="zoom-in"
                                    data-aos-delay="200"
                                >
                                    <div
                                        class="card h-100 border-0 shadow-lg rounded-4"
                                        style="background-color: #fdfdfd"
                                    >
                                        <div
                                            class="card-body px-4 py-5 text-center"
                                        >
                                            <p
                                                class="mt-4 fw-bold"
                                                style="font-size: 23px"
                                            >
                                                Leonardo Distributors Inc.
                                            </p>
                                            <p class="mb-3">
                                                <i
                                                    class="bi bi-geo-alt-fill text-dark me-2"
                                                ></i>
                                                Upper De La Paz, Cortes,<br />
                                                <span style="margin-left: 20px"
                                                    >Bohol 6341,
                                                    Philippines</span
                                                >
                                            </p>
                                            <p class="mb-3">
                                                <i
                                                    class="bi bi-telephone-fill text-orange me-2"
                                                ></i>
                                                (038) 501-3043 local 500
                                            </p>

                                            <p class="mb-1">
                                                <i
                                                    class="bi bi-clock-fill text-orange me-2"
                                                    style="margin-left: -23px"
                                                ></i>
                                                Monday to Saturday,<br />
                                                <span>8:00 AM to 5:00 PM</span>
                                            </p>

                                            <!-- Updated Button -->
                                            <!-- <a
                                                href="#contact"
                                                class="btn mt-5 px-4 py-2 rounded-pill shadow-sm"
                                                style="
                                                    background-color: #ffb300;
                                                    color: #212529;
                                                    font-weight: 500;
                                                "
                                            >
                                                Contact Us
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <div class="product-section grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
   <div
    v-for="product in mgaProducts.filter(p => p.department === 'LDI')"
    :key="product.id" -->
        <!-- class="product-card bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200"
  > -->
        <!-- <img
      :src="'https://prebooking.ldi.sale/' + product.productImage"
      alt="Product Image"
      class="w-full h-48 object-cover"
    /> -->
        <!-- <div class="p-4 text-center">
      <h2 class="text-lg font-semibold text-gray-800">{{ product.unitOfMeasure }}</h2> -->
        <!-- <p class="text-sm text-gray-600">{{ product.unitOfMeasure }}</p>
       <p class="text-sm text-gray-600">{{ product.searchKeywords}}</p> -->
        <!-- </div>
  </div>
</div>  -->

        <!-- PRODUCT SECTION -->

        <section id="products" class="pt-5 pt-md-9 mb-3 pb-5">
            <div
                class="container my-4 p-3 border rounded"
                style="
                    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
                    background-color: whitesmoke;
                    border: 0.5px gray !important;
                "
            >
                <!-- Full-Width Header With Background Image -->
                <div class="container-fluid p-0">
                    <div
                        class="filter-header text-white px-4 py-4"
                        style="
                            background-image: url(&quot;images/headernichuy.png&quot;);
                            background-size: cover;
                            background-position: center;
                            margin-bottom: 1rem;
                            border-radius: 0;
                        "
                    >
                        <div
                            style="
                                background-color: rgba(0, 0, 0, 0.2);
                                padding: 1rem;
                                border-radius: 0.5rem;
                                font-family: Roboto;
                            "
                        >
                            <div class="mb-3">
                                <h5 class="fw-bold mb-0">
                                    <img
                                        src="images/MyNetGosyo Logo.png"
                                        alt="MyNetGosyo logo"
                                        style="
                                            height: 1.5em;
                                            vertical-align: middle;
                                        "
                                    />
                                    MyNetGosyo Products
                                </h5>

                                <p class="text-light small mb-0">
                                    Discover items easily-search by product name
                                    or explore by category.
                                </p>
                            </div>
                            <!-- Filters Row -->
                            <div class="row gy-2 gx-3 align-items-center">
                                <!-- Category Dropdown -->
                                <div
                                    class="col-12 col-sm-6 d-flex flex-column flex-sm-row align-items-start align-sm-items-center gap-2"
                                >
                                    <label
                                        for="categoryFilter"
                                        class="form-label fw-semibold mb-1 mb-sm-0 text-white"
                                        style="
                                            font-size: 0.9rem;
                                            margin-top: 3px;
                                            font-family: sans-serif;
                                        "
                                    >
                                        Category:
                                    </label>
                                    <select
                                        id="categoryFilter"
                                        v-model="selectedCategory"
                                        @change="onCategoryChange"
                                        class="form-select form-select-sm bg-dark text-white border-light"
                                        style="
                                            font-size: 0.7rem;
                                            height: 27px;
                                            min-width: 0;
                                            max-width: 140px;
                                            font-family: sans-serif;
                                        "
                                    >
                                        <option value="">All</option>
                                        <option
                                            v-for="category in uniqueCategories"
                                            :key="category"
                                            :value="category"
                                        >
                                            {{ category }}
                                        </option>
                                    </select>
                                </div>

                                <!-- Product Search -->
                                <div
                                    class="col-12 col-sm-6 d-flex flex-column flex-sm-row align-items-start align-sm-items-center gap-2"
                                >
                                    <label
                                        for="productNameSearch"
                                        class="form-label fw-semibold mb-1 mb-sm-0 text-white"
                                        style="
                                            font-size: 0.9rem;
                                            margin-top: 3px;
                                            font-family: sans-serif;
                                        "
                                    >
                                        Search:
                                    </label>
                                    <div
                                        class="position-relative"
                                        style="width: 250px"
                                    >
                                        <input
                                            id="productNameSearch"
                                            type="text"
                                            v-model="productNameSearch"
                                            @input="onProductInput"
                                            @focus="showSuggestions = true"
                                            @blur="hideSuggestions"
                                            class="form-control form-control-sm bg-dark text-white border-light pe-4"
                                            placeholder="Type product name..."
                                            style="
                                                font-size: 0.7rem;
                                                height: 32px;
                                                font-family: sans-serif;
                                            "
                                        />

                                        <!-- × Clear Button -->
                                        <button
                                            v-if="productNameSearch"
                                            @click="clearSearch"
                                            class="btn btn-sm position-absolute d-flex align-items-center justify-content-center"
                                            style="
                                                top: 8px;
                                                right: 6px;
                                                width: 20px;
                                                height: 15px;
                                                padding: 0;
                                                background: transparent;
                                                border: none;
                                                color: #fff;
                                            "
                                            type="button"
                                        >
                                            &times;
                                        </button>

                                        <!-- Suggestions Dropdown -->
                                        <ul
                                            v-if="
                                                filteredSuggestions.length &&
                                                showSuggestions
                                            "
                                            class="list-group position-absolute w-100 mt-1 shadow"
                                            style="z-index: 10"
                                        >
                                            <li
                                                v-for="(
                                                    item, index
                                                ) in filteredSuggestions.slice(
                                                    0,
                                                    5,
                                                )"
                                                :key="index"
                                                class="list-group-item list-group-item-dark list-group-item-action"
                                                style="
                                                    cursor: pointer;
                                                    font-size: 0.8rem;
                                                "
                                                @mousedown.prevent="
                                                    selectSuggestion(item)
                                                "
                                            >
                                                {{ item.productName }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="row overflow-auto" style="max-height: 520px">
                    <template v-if="filteredProducts.length">
                        <div
                            v-for="product in filteredProducts"
                            :key="product.productCode"
                            class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3"
                        >
                            <div
                                class="card h-100 border border-light rounded-3 overflow-hidden d-flex flex-column"
                                @click="handleCardClick(product)"
                                style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5)"
                            >
                                <div class="d-flex flex-column h-100">
                                    <!-- Image -->
                                    <div
                                        class="product-img-container border rounded p-2 bg-light d-flex align-items-center justify-content-center mb-2"
                                        style="height: 150px"
                                    >
                                        <img
                                            :src="`https://prebooking.ldi.sale/${product.productImage}`"
                                            :alt="product.productName"
                                            class="img-fluid zoom-hover"
                                            style="
                                                max-height: 100%;
                                                max-width: 100%;
                                                object-fit: contain;
                                            "
                                        />
                                    </div>

                                    <!-- Divider line -->
                                    <div
                                        style="
                                            height: 1px;
                                            background-color: black;
                                            margin: 0 1rem 0.5rem;
                                        "
                                    ></div>

                                    <!-- Info -->
                                    <div
                                        class="card-body p-2 d-flex flex-column justify-content-between"
                                        style="font-family: Roboto"
                                    >
                                        <h6
                                            class="product-name mb-1"
                                            :title="product.productName"
                                        >
                                            {{ product.productName }}
                                        </h6>
                                        <p class="text-muted small mb-0">
                                            Unit: {{ product.unitOfMeasure }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>

                    <template v-else>
                        <div
                            class="col-12 d-flex justify-content-center align-items-center flex-column"
                            style="height: 100px"
                        >
                            <div
                                v-if="loading"
                                class="d-flex align-items-center gap-2"
                            >
                                <div
                                    class="spinner-border text-black"
                                    role="status"
                                    style="width: 2rem; height: 2rem"
                                ></div>
                                <span class="text-muted fw-semibold"
                                    >Loading Products...</span
                                >
                            </div>

                            <div v-else>
                                <p class="text-muted fs-6">
                                    No products available.
                                </p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- 📸 IMAGE ZOOM MODAL -->
            <!-- <div
                ref="imageModal"
                class="modal fade"
                tabindex="-1"
                aria-hidden="true"
            >
                <div
                    class="modal-dialog modal-dialog-centered"
                    style="
                        max-height: 60vh; /* reduced height */
                        max-width: 90vw; /* keep width responsive */
                        overflow: hidden;
                    "
                >
                    <div
                        class="modal-content"
                        style="
                            border-radius: 12px;
                            box-shadow: 0 8px 32px rgba(255, 255, 255, 0.2);
                            height: 100%; /* fill dialog height */
                            overflow: hidden;
                        "
                    > -->
            <!-- Modal Header -->
            <!-- <div
                            class="modal-header"
                            style="
                                border-bottom: 1px solid #ddd;
                                padding: 0.75rem 1rem;
                                flex-shrink: 0;
                            "
                        >
                            <h5
                                class="modal-title"
                                style="margin: 0; font-weight: 600"
                            ></h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div> -->

            <!-- Modal Body -->
            <!-- <div
                            class="modal-body d-flex align-items-center justify-content-center p-3"
                            style="
                                border-top: none;
                                max-height: calc(
                                    60vh - 56px
                                ); /* header height subtraction */
                                overflow: hidden;
                                flex-grow: 1;
                            "
                        >
                            <div
                                style="
                                    width: 100%;
                                    max-width: 100%;
                                    max-height: 100%;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    overflow: hidden;
                                    position: relative;
                                    border: 1px solid #ddd;
                                    padding: 10px;
                                    border-radius: 10px;
                                    box-sizing: border-box;
                                    background-color: #fff;
                                "
                            >
                                <img
                                    :src="`https://prebooking.ldi.sale/${selectedProduct.productImage}`"
                                    :alt="selectedProduct.productName"
                                    ref="zoomImage"
                                    style="
                                        max-width: 100%;
                                        max-height: 100%;
                                        object-fit: contain;
                                        display: block;
                                        transition: transform 0.3s ease;
                                        cursor: grab;
                                        user-select: none;
                                    "
                                    draggable="false"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Inquiry Modal -->
            <div
                class="modal fade"
                id="inquiryModal"
                tabindex="-1"
                ref="inquiryModal"
                aria-hidden="true"
                style="font-family: Roboto"
            >
                <!-- Modal Dialog -->
                <div
                    class="modal-dialog modal-dialog-centered modal-dialog-scrollable mx-auto"
                    role="document"
                    style="max-width: 420px; width: 95%"
                >
                    <div
                        class="modal-content border shadow-sm d-flex flex-column w-100"
                        style="
                            max-height: 95vh;
                            font-size: 0.9rem;
                            padding: 0;
                            overflow: hidden;
                        "
                    >
                        <!-- Modal Header (Full Width, No Padding) -->
                        <div
                            class="bg-warning w-100"
                            style="
                                padding: 0;
                                margin: 0;
                                width: 100%;
                                border-top-left-radius: 0.5rem;
                                border-top-right-radius: 0.5rem;
                            "
                        >
                            <div
                                class="d-flex justify-content-center align-items-center position-relative"
                                style="height: 56px"
                            >
                                <img
                                    src="images/MyNetGosyo Logo.png"
                                    alt="MyNetGosyo logo"
                                    class="me-2"
                                    style="height: 24px"
                                />
                                <span
                                    class="fw-bold text-dark"
                                    style="
                                        font-size: 1rem;
                                        font-family: sans-serif;
                                    "
                                >
                                    Register to MyNetGosyo
                                </span>
                                <button
                                    type="button"
                                    class="btn-close position-absolute end-0 top-50 translate-middle-y me-2"
                                    @click="closeInquiryModal"
                                    aria-label="Close"
                                ></button>
                            </div>
                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body px-4 py-3">
                            <form
                                @submit.prevent="submitInquiryForm"
                                novalidate
                            >
                                <!-- First & Last Name -->
                                <div class="row g-3 mb-3">
                                    <div class="col-12 col-md-6">
                                        <label
                                            for="firstName"
                                            class="form-label small"
                                            >First Name:</label
                                        >
                                        <input
                                            type="text"
                                            id="firstName"
                                            class="form-control form-control-sm"
                                            v-model="inquiryForm.firstName"
                                            @keypress="blockNumbers"
                                            :class="{
                                                'is-invalid': errors.firstName,
                                            }"
                                            @focus="clearError('firstName')"
                                            required
                                        />
                                        <div class="invalid-feedback">
                                            {{ errors.firstName }}
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label
                                            for="lastName"
                                            class="form-label small"
                                            >Last Name:</label
                                        >
                                        <input
                                            type="text"
                                            id="lastName"
                                            class="form-control form-control-sm"
                                            v-model="inquiryForm.lastName"
                                            @keypress="blockNumbers"
                                            :class="{
                                                'is-invalid': errors.lastName,
                                            }"
                                            @focus="clearError('lastName')"
                                            required
                                        />
                                        <div class="invalid-feedback">
                                            {{ errors.lastName }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label small">
                                        Email
                                        <span class="text-muted"
                                            >(Optional)</span
                                        >
                                    </label>
                                    <input
                                        type="email"
                                        id="email"
                                        class="form-control form-control-sm"
                                        v-model="inquiryForm.email"
                                        :class="{ 'is-invalid': errors.email }"
                                        @focus="clearError('email')"
                                    />
                                    <div class="invalid-feedback">
                                        {{ errors.email }}
                                    </div>
                                </div>

                                <!-- Contact Number -->
                                <div class="mb-3">
                                    <label
                                        for="contact"
                                        class="form-label small"
                                        >Contact Number:</label
                                    >
                                    <input
                                        type="tel"
                                        id="contact"
                                        class="form-control form-control-sm"
                                        v-model="inquiryForm.contact"
                                        :class="{
                                            'is-invalid': errors.contact,
                                        }"
                                        @focus="clearError('contact')"
                                        maxlength="11"
                                        @input="onContactInput"
                                        inputmode="numeric"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        {{ errors.contact }}
                                    </div>
                                </div>

                                <!-- Store Address -->
                                <div class="mb-3">
                                    <label
                                        for="address"
                                        class="form-label small"
                                        >Store Address:</label
                                    >
                                    <input
                                        type="text"
                                        id="address"
                                        class="form-control form-control-sm"
                                        v-model="inquiryForm.address"
                                        :class="{
                                            'is-invalid': errors.address,
                                        }"
                                        @focus="clearError('address')"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        {{ errors.address }}
                                    </div>
                                </div>

                                <!-- Store Photo Upload -->
                                <div class="mb-3">
                                    <label
                                        for="photoUpload"
                                        class="form-label small"
                                        >Store Photo:</label
                                    >
                                    <input
                                        type="file"
                                        ref="photoInput"
                                        id="photoUpload"
                                        class="form-control form-control-sm"
                                        accept="image/*"
                                        :class="{
                                            'is-invalid': errors.photoFile,
                                        }"
                                        @change="
                                            handleFileUpload(
                                                $event,
                                                'photoFile',
                                                'photoName',
                                            )
                                        "
                                    />
                                    <div class="invalid-feedback">
                                        {{ errors.photoFile }}
                                    </div>
                                    <small
                                        v-if="inquiryForm.photoName"
                                        class="text-muted d-block mt-1"
                                    >
                                        Selected: {{ inquiryForm.photoName }}
                                    </small>
                                </div>

                                <!-- Permit Photo Upload -->
                                <div class="mb-3">
                                    <label
                                        for="permitPhoto"
                                        class="form-label small"
                                        >Store Permit Photo:</label
                                    >
                                    <input
                                        type="file"
                                        ref="permitPhotoInput"
                                        id="permitPhoto"
                                        class="form-control form-control-sm"
                                        accept="image/*"
                                        :class="{
                                            'is-invalid': errors.permitPhoto,
                                        }"
                                        @change="
                                            handleFileUpload(
                                                $event,
                                                'permitPhoto',
                                                'permitPhotoName',
                                            )
                                        "
                                    />
                                    <div class="invalid-feedback">
                                        {{ errors.permitPhoto }}
                                    </div>
                                    <small
                                        v-if="inquiryForm.permitPhotoName"
                                        class="text-muted d-block mt-1"
                                    >
                                        Selected:
                                        {{ inquiryForm.permitPhotoName }}
                                    </small>
                                </div>

                                <!-- Optional Message -->
                                <div class="mb-3">
                                    <label
                                        for="message"
                                        class="form-label small"
                                    >
                                        Send Message
                                        <span class="text-muted"
                                            >(Optional)</span
                                        >
                                    </label>
                                    <textarea
                                        class="form-control form-control-sm"
                                        id="message"
                                        rows="2"
                                        v-model="inquiryForm.message"
                                        placeholder="Tell us any specific concerns, requests, or delivery notes..."
                                    ></textarea>
                                </div>

                                <!-- Submit -->
                                <div class="text-end mt-3">
                                    <button
                                        type="submit"
                                        class="btn custom-brown-btn px-2 py-1"
                                        style="
                                            font-size: 0.85rem;
                                            font-family: sans-serif;
                                        "
                                    >
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Location Section -->

        <!-- <section
    id="location"
    class="location-section d-flex flex-column align-items-center justify-content-start mt-5 "
    style="padding: 4rem 0; background-color: #F0F0F0;"
>
    <div class="text-center w-75 text-black mb-5">
        <h2
            class="mb-4"
            style="
                font-weight: 600;
                font-size: 22px;
                font-family: Roboto;
            "
        >
            📍 WHERE TO FIND US?
        </h2>
        <p
            style="
                font-size: 16px;
                line-height: 1.6;
                font-family: Roboto;
                
           
            "
        >
           Leonardo Distributors Incorporated (LDI) is located at Upper De La Paz, Cortes, Bohol 6341, Philippines. For inquiries or assistance, please contact us at (038) 501-3043 local 500. We are committed to providing reliable and professional service.

        </p>
    </div> -->

        <!-- Text and Map Row -->
        <!-- <div class="container">
    <div class="row align-items-center" style="min-height: 100%;"> -->
        <!-- Left Column: Text (moved to bottom) -->
        <!-- <div class="col-md-6 d-flex flex-column justify-content-center text-black" style="font-family: Roboto; height: 100%;">
            <div>
                <h4 style="font-weight: 600; font-size: 20px; text-align: center; font-family: Roboto;">🕒 When to Visit?</h4>
                <p style="font-size: 16px; line-height: 1.6; font-family: Roboto; ">
                    <br>
                    Our office is open from <strong>Monday to Saturday, 8:00 AM to 5:00 PM</strong>.
                    We welcome walk-ins, scheduled appointments, and visits from both our retail and wholesale partners.
                </p>

                <h4 class="mt-4" style="font-weight: 600; font-size: 20px; text-align: center; font-family: Roboto;" >📞 How to Get in Touch?</h4>
                <p style="font-size: 16px; line-height: 1.6;">
                  For any inquiries, partnership opportunities, or if you like to learn more about our services, feel free to click the link below to get in touch with us!
                </p>

                <div style="text-align: center;">
                    <a href="#contact" style="color: #007BFF; text-decoration: underline;">
                    Click here to send us your questions or feedback!
                    </a>
                </div>
            </div>
        </div> -->

        <!-- Right Column: Map -->
        <!-- <div class="col-md-6 mt-4 mt-md-0">
  <div style="position: relative; width: 100%; padding-bottom: 70%;  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); border-radius: 10px; overflow: hidden;">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31461.2198268351!2d123.83175750188286!3d9.710671999236963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aa4b6d4ef462f9%3A0xabac23adb0c09a64!2sLDI!5e0!3m2!1sen!2sph!4v1752116326626!5m2!1sen!2sph"
       style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; pointer-events: auto;"
  allowfullscreen=""
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
  </div>
</div>

        </div>
    </div>
</section> -->

        <!-- <section id="services" class="py-5"  style="background-image: url('/images/illuss.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color: #343a40; font-size: 22px;">🛠️ OUR SERVICES</h2>
      <p class="text-muted" style="max-width: 700px; margin: 0 auto;">
        At Leonardo Distributors Inc., we provide a range of tailored distribution services built for performance and efficiency.
      </p>
    </div>

    <div class="row justify-content-center gx-4 gy-5"> -->
        <!-- Service 1 -->
        <!-- <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
        <div class="diamond-wrapper">
          <div class="diamond-content text-center">
            <i class="bi bi-search diamond-icon"></i>
            <h6 class="fw-bold mt-3">Product Sourcing</h6>
            <p class="small text-muted">Finding quality, cost-effective products tailored to your needs.</p>
          </div>
        </div>
      </div> -->

        <!-- Service 2 -->
        <!-- <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
        <div class="diamond-wrapper">
          <div class="diamond-content text-center">
            <i class="bi bi-globe diamond-icon"></i>
            <h6 class="fw-bold mt-3">Import / Export</h6>
            <p class="small text-muted">Smooth cross-border logistics for all your shipments.</p>
          </div>
        </div>
      </div> -->

        <!-- Service 3 -->
        <!-- <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
        <div class="diamond-wrapper">
          <div class="diamond-content text-center">
            <i class="bi bi-box-seam diamond-icon"></i>
            <h6 class="fw-bold mt-3">Bulk Orders</h6>
            <p class="small text-muted">Reliable high-volume order fulfillment for partners.</p>
          </div>
        </div>
      </div> -->

        <!-- Service 4 -->
        <!-- <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
        <div class="diamond-wrapper">
          <div class="diamond-content text-center">
            <i class="bi bi-truck diamond-icon"></i>
            <h6 class="fw-bold mt-3">Logistics</h6>
            <p class="small text-muted">Comprehensive delivery and storage logistics.</p>
          </div>
        </div>
      </div> -->

        <!-- Service 5 -->
        <!-- <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
        <div class="diamond-wrapper">
          <div class="diamond-content text-center">
            <i class="bi bi-box diamond-icon"></i>
            <h6 class="fw-bold mt-3">Packaging</h6>
            <p class="small text-muted">Sustainable and secure packaging options.</p>
          </div>
        </div>
      </div> -->

        <!-- Service 6 -->
        <!-- <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
        <div class="diamond-wrapper">
          <div class="diamond-content text-center">
            <i class="bi bi-people diamond-icon"></i>
            <h6 class="fw-bold mt-3">Business Support</h6>
            <p class="small text-muted">Strategic support to help your business grow smarter.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

        <!-- FOOTER SECTION -->

        <footer class="footer bg-dark-custom text-white py-4">
            <div class="container px-lg-3">
                <div class="row gy-4 gx-4 text-center text-md-start">
                    <!-- 1. Company Info (offset for balanced left margin) -->
                    <div
                        class="col-12 col-md-6 col-lg-2 offset-lg-1 d-flex flex-column align-items-center align-items-md-start"
                        style="font-family: sans-serif"
                    >
                        <div class="d-flex align-items-center mb-2">
                            <img
                                src="/images/logoldi.png"
                                alt="Logo"
                                class="me-2"
                                style="
                                    height: 48px;
                                    width: auto;
                                    background-color: white;
                                    border-radius: 50%;
                                "
                            />
                            <h6 class="fw-bold mb-0 fs-6 border-bottom pb-2">
                                Leonardo Distributors, Inc.
                            </h6>
                        </div>
                        <small class="text-light mb-2">
                            Trusted quality products for Bohol homes and
                            businesses.
                        </small>
                        <a
                            href="https://www.google.com/maps/place/LDI/@9.7021283,123.8692532,909m/data=!3m1!1e3!4m6!3m5!1s0x33aa4b6d4ef462f9:0xabac23adb0c09a64!8m2!3d9.702123!4d123.8718281!16s%2Fg%2F11v6d9rf8g?entry=ttu&g_ep=EgoyMDI1MDcyMC4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn btn-outline-light mt-2 text-light custom-hover-yellow"
                            style="font-size: 0.85rem; padding: 0.25rem 0.6rem"
                        >
                            <i class="bi bi-geo-alt-fill me-1"></i> See Map
                        </a>
                    </div>

                    <!-- 2. Quick Links with bigger left margin -->
                    <div
                        class="col-12 col-md-6 col-lg-2 ms-lg-5 d-flex flex-column align-items-center align-items-md-start"
                        style="font-family: sans-serif"
                    >
                        <h6 class="fw-semibold mb-3 border-bottom pb-2">
                            Quick Links
                        </h6>
                        <ul class="list-unstyled small mb-0">
                            <li><a href="#home" class="quick-link">Home</a></li>

                            <li>
                                <a href="#about" class="quick-link">About Us</a>
                            </li>
                            <li>
                                <a href="#products" class="quick-link"
                                    >Products</a
                                >
                            </li>
                        </ul>
                    </div>

                    <!-- 3. Stay Connected -->
                    <div
                        class="col-12 col-md-6 col-lg-2 d-flex flex-column align-items-center align-items-md-start stay-connected-adjust"
                    >
                        <h6
                            class="fw-semibold mb-3 border-bottom pb-2"
                            style="font-family: sans-serif"
                        >
                            Stay Connected!
                        </h6>
                        <small
                            class="text-light mb-2"
                            style="font-family: sans-serif; margin-bottom: 20px"
                        >
                            Follow us on social media to stay updated with our
                            latest <br />
                            news, offers, and content.
                        </small>
                        <div
                            class="d-flex gap-1 justify-content-center justify-content-md-start flex-wrap"
                        >
                            <a
                                href="https://www.facebook.com/login.php"
                                class="social-icon"
                                aria-label="Facebook"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a
                                href="https://mail.google.com"
                                class="social-icon"
                                aria-label="Email"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <i class="bi bi-envelope-fill"></i>
                            </a>
                            <a
                                href="https://www.instagram.com/accounts/login"
                                class="social-icon"
                                aria-label="Instagram"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a
                                href="https://twitter.com/login"
                                class="social-icon"
                                aria-label="Twitter"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <i class="bi bi-twitter"></i>
                            </a>
                        </div>
                    </div>

                    <!-- 4. Why Choose LDI -->
                    <div
                        class="col-12 col-md-6 col-lg-2 d-flex flex-column align-items-center align-items-md-start"
                        style="font-family: sans-serif"
                    >
                        <h6 class="fw-semibold mb-3 border-bottom pb-2">
                            Why Choose LDI?
                        </h6>
                        <ul class="list-unstyled small mb-0">
                            <li>
                                <a href="#mission" class="quick-link"
                                    >Mission</a
                                >
                            </li>
                            <li>
                                <a href="#vision" class="quick-link">Vision</a>
                            </li>
                            <li>
                                <a href="#values" class="quick-link">Values</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 5. Get the App -->
                    <div
                        class="col-12 col-md-6 col-lg-2 d-flex flex-column align-items-center align-items-md-start"
                        style="font-family: sans-serif"
                    >
                        <h6 class="fw-semibold mb-2 border-bottom pb-2">
                            Get the App?
                        </h6>
                        <small class="text-light mb-2">
                            Click or Scan to download<br />
                            <strong>MyNetGosyo</strong> App.
                        </small>
                        <a
                            href="https://prebooking.ldi.sale/downloads/MyNETgosyo.apk"
                            target="_blank"
                            rel="noopener"
                        >
                            <img
                                src="images/qr.png"
                                alt="Get App"
                                class="img-fluid qr-button"
                                style="width: 120px; height: auto"
                            />
                        </a>
                    </div>
                </div>

                <hr class="border-secondary my-3" />
                <div
                    class="text-center small text-light mb-0"
                    style="font-size: 15px; font-family: sans-serif"
                >
                    &copy; {{ currentYear }} Leonardo Distributors, Inc. All
                    rights reserved.
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            mgaProducts: [],
            selectedCategory: "",
            selectedUnit: "",
            productNameSearch: "", // changed from brandSearch to productNameSearch
            selectedProductIds: [],
            selectionHistory: [],
            selectedProduct: {},
            loading: true,
            showModal: true,
            showSuggestions: false,

            inquiryForm: {
                firstName: "",
                lastName: "",
                email: "",
                contact: "",
                address: "",
                message: "",
                photoFile: null, // ✅ changed from photoFile
                photoName: "",
                permitPhoto: null, // ✅ changed from permitPhotoFile
                permitPhotoName: "",
            },

            errors: {},

            zoomedImage: null,
        };
    },

    computed: {
        currentYear() {
            return new Date().getFullYear();
        },

        uniqueCategories() {
            return [
                ...new Set(
                    this.mgaProducts
                        .map((p) => p.searchKeywords?.trim())
                        .filter(Boolean),
                ),
            ].sort();
        },
        uniqueUnits() {
            const list = this.selectedCategory
                ? this.mgaProducts.filter(
                      (p) => p.searchKeywords?.trim() === this.selectedCategory,
                  )
                : this.mgaProducts;
            return [
                ...new Set(
                    list
                        .map((p) => p.unitOfMeasure?.toUpperCase())
                        .filter(Boolean),
                ),
            ].sort();
        },
        filteredProducts() {
            return this.mgaProducts.filter((p) => {
                const categoryMatch = this.selectedCategory
                    ? p.searchKeywords?.trim() === this.selectedCategory
                    : true;
                const unitMatch = this.selectedUnit
                    ? p.unitOfMeasure?.toUpperCase() === this.selectedUnit
                    : true;
                const productNameMatch = this.productNameSearch
                    ? p.productName
                          ?.toLowerCase()
                          .includes(this.productNameSearch.toLowerCase())
                    : true;
                return categoryMatch && unitMatch && productNameMatch;
            });
        },

        filteredSuggestions() {
            if (!this.productNameSearch) return [];
            return this.mgaProducts.filter((p) =>
                p.productName
                    ?.toLowerCase()
                    .includes(this.productNameSearch.toLowerCase()),
            );
        },
    },

    watch: {
        selectedProductIds(newIds) {
            this.selectionHistory = this.mgaProducts.filter((p) =>
                newIds.includes(p.productCode),
            );
        },
    },
    //
    methods: {
        handleFileUpload(event, fileKey, nameKey) {
            const file = event.target.files[0];
            if (file) {
                this.inquiryForm[fileKey] = file;
                this.inquiryForm[nameKey] = file.name;
                this.clearError(fileKey);
            }
        },

        clearError(field) {
            this.errors[field] = null;
        },

        // async submitInquiryForm() {
        //     const formData = new FormData();
        //     formData.append("firstName", this.inquiryForm.firstName);
        //     formData.append("lastName", this.inquiryForm.lastName);
        //     formData.append("email", this.inquiryForm.email || "");
        //     formData.append("contact", this.inquiryForm.contact);
        //     formData.append("address", this.inquiryForm.address);
        //     formData.append("photoFile", this.inquiryForm.photoFile);
        //     formData.append("permitPhoto", this.inquiryForm.permitPhoto);
        //     formData.append("message", this.inquiryForm.message || "");

        //     try {
        //         console.log("e try ug mugana bani");
        //         await axios.post("/api/register", formData);
        //         alert("Registration successful!");
        //         this.resetForm();
        //     } catch (error) {
        //         if (error.response && error.response.status === 422) {
        //             this.errors = error.response.data.errors;
        //         } else {
        //             alert("Something went wrong. Please try again.");
        //         }
        //     }
        // },

        resetForm() {
            this.inquiryForm = {
                firstName: "",
                lastName: "",
                email: "",
                contact: "",
                address: "",
                message: "",
                photoFile: null,
                permitPhotoFile: null,
                photoName: "",
                permitPhotoName: "",
            };

            this.errors = {};

            // Clear file input elements manually
            this.$nextTick(() => {
                if (this.$refs.photoInput) {
                    this.$refs.photoInput.value = null;
                }
                if (this.$refs.permitPhotoInput) {
                    this.$refs.permitPhotoInput.value = null;
                }
            });
        },

        acceptConsent() {
            this.showModal = false;
            document.body.style.overflow = "auto";
        },
        menuOpenFunc() {
            const menu = document.getElementById("navbarNav");
            const menuOpenBtn = document.getElementById("menuOpenBtn");
            const menuCloseBtn = document.getElementById("menuCloseBtn");
            const collapse = new bootstrap.Collapse(menu, { toggle: false });
            collapse.show();
            menuOpenBtn.classList.add("d-none");
            menuCloseBtn.classList.remove("d-none");
        },
        // enableZoomOnImage() {
        //     const img = this.$refs.zoomImage;
        //     const container = img.parentElement;

        //     let scale = 1;
        //     let isZoomed = false;
        //     let isDragging = false;
        //     let startX, startY;
        //     let currentX = 0,
        //         currentY = 0;

        //     container.style.overflow = "hidden";
        //     container.style.position = "relative";

        //     img.style.transformOrigin = "center center";
        //     img.style.transition = "transform 0.3s ease";
        //     img.style.cursor = "grab";
        //     img.draggable = false;

        // Resize reset
        // const resizeObserver = new ResizeObserver(() => {
        //     if (!isZoomed) {
        //         currentX = 0;
        //         currentY = 0;
        //         scale = 1;
        //         img.style.transform = `scale(${scale}) translate(0px, 0px)`;
        //     }
        // });
        // resizeObserver.observe(container);

        // --- Zoom toggle (desktop & mobile) ---
        // img.addEventListener("dblclick", (e) => {
        //     e.preventDefault();
        //     toggleZoom();
        // });

        // let lastTap = 0;
        // img.addEventListener("touchend", (e) => {
        //     const currentTime = new Date().getTime();
        //     const tapLength = currentTime - lastTap;
        //     if (tapLength < 300 && tapLength > 0) {
        //         e.preventDefault();
        //         toggleZoom();
        //     }
        //     lastTap = currentTime;
        // });

        // function toggleZoom() {
        //     isZoomed = !isZoomed;
        //     scale = isZoomed ? 2 : 1;

        //     if (!isZoomed) {
        //         currentX = 0;
        //         currentY = 0;
        //     }

        //     img.style.transform = `scale(${scale}) translate(${currentX}px, ${currentY}px)`;
        //     img.style.cursor = isZoomed ? "grab" : "grab";
        // }

        // --- Mouse drag ---
        // img.addEventListener("mousedown", (e) => {
        //     if (!isZoomed) return;
        //     e.preventDefault();
        //     isDragging = true;
        //     startX = e.clientX - currentX;
        //     startY = e.clientY - currentY;
        //     img.style.cursor = "grabbing";
        // });

        // window.addEventListener("mousemove", (e) => {
        //     if (!isDragging || !isZoomed) return;

        //     currentX = e.clientX - startX;
        //     currentY = e.clientY - startY;

        //     applyTransformWithinBounds();
        // });

        // window.addEventListener("mouseup", () => {
        //     if (!isDragging) return;
        //     isDragging = false;
        //     img.style.cursor = "grab";
        // });

        // --- Touch drag ---
        // img.addEventListener("touchstart", (e) => {
        //     if (!isZoomed) return;
        //     if (e.touches.length !== 1) return; // only one finger
        //     isDragging = true;
        //     const touch = e.touches[0];
        //     startX = touch.clientX - currentX;
        //     startY = touch.clientY - currentY;
        // });

        // img.addEventListener("touchmove", (e) => {
        //     if (!isDragging || !isZoomed) return;
        //     if (e.touches.length !== 1) return;

        //     e.preventDefault(); // prevent scrolling
        //     const touch = e.touches[0];
        //     currentX = touch.clientX - startX;
        //     currentY = touch.clientY - startY;

        //     applyTransformWithinBounds();
        // });

        //     img.addEventListener("touchend", () => {
        //         if (!isDragging) return;
        //         isDragging = false;
        //     });

        //     function applyTransformWithinBounds() {
        //         const bounds = {
        //             x: (img.clientWidth * scale - container.clientWidth) / 2,
        //             y: (img.clientHeight * scale - container.clientHeight) / 2,
        //         };

        //         currentX = Math.max(-bounds.x, Math.min(currentX, bounds.x));
        //         currentY = Math.max(-bounds.y, Math.min(currentY, bounds.y));

        //         img.style.transform = `scale(${scale}) translate(${currentX}px, ${currentY}px)`;
        //     }
        // },

        openImageModal() {
            // Hide inquiry modal without destroying it
            if (this.$refs.inquiryModal) {
                $(this.$refs.inquiryModal).css("display", "none");
            }

            // Open image modal
            const modalEl = this.$refs.imageModal;
            if (modalEl) {
                const imageModal = new bootstrap.Modal(modalEl, {
                    backdrop: true,
                    keyboard: true,
                });
                imageModal.show();

                // Enable zoom after modal is shown
                this.$nextTick(() => {
                    this.enableZoomOnImage(); // Call zoom setup
                });

                // Re-show the inquiry modal when image modal closes
                modalEl.addEventListener(
                    "hidden.bs.modal",
                    () => {
                        if (this.$refs.inquiryModal) {
                            $(this.$refs.inquiryModal).css("display", "block");
                        }
                    },
                    { once: true },
                );
            }
        },

        onProductInput() {
            this.showSuggestions = true;
        },
        hideSuggestions() {
            setTimeout(() => {
                this.showSuggestions = false;
            }, 150); // short delay to allow suggestion click
        },
        selectSuggestion(product) {
            this.productNameSearch = product.productName;
            this.showSuggestions = false;
        },
        clearSearch() {
            this.productNameSearch = "";
            this.showSuggestions = false;
        },
        onCategoryChange() {
            this.selectedUnit = "";
            this.selectedProductIds = [];
            this.selectionHistory = [];
        },

        removeProduct(productCode) {
            this.selectedProductIds = this.selectedProductIds.filter(
                (code) => code !== productCode,
            );
        },

        handleCardClick(product) {
            Swal.fire({
                title: "Interested in this item?",
                text: "Register now to get more details.",
                imageUrl: `https://prebooking.ldi.sale/${product.productImage}`,
                imageAlt: product.productName,

                showCancelButton: true,
                confirmButtonText: "Yes, Register",
                cancelButtonText: "No, Maybe Later",
                customClass: {
                    popup: "minimal-popup",
                    confirmButton: "btn-sm btn-success",
                    image: "swal-product-img",
                    cancelButton: "btn-sm btn-outline-secondary",
                },
                buttonsStyling: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    this.openInquiryModal(product);
                }
            });
        },

        openInquiryModal(product) {
            this.selectedProduct = product;

            $(this.$refs.inquiryModal).modal("show");
        },

        closeInquiryModal() {
            // Reset form data
            this.inquiryForm = {
                firstName: "",
                lastName: "",
                email: "",
                contact: "",
                address: "",
                photoFile: null,
                photoName: "",
                permitPhoto: null,
                permitPhotoName: "",
                message: "",
            };

            // Clear file inputs from DOM (this is the key part)
            if (this.$refs.photoInput) {
                this.$refs.photoInput.value = ""; // Or null
            }

            if (this.$refs.permitPhotoInput) {
                this.$refs.permitPhotoInput.value = ""; // Or null
            }

            // Clear errors
            this.errors = {};

            // Close the modal
            $(this.$refs.inquiryModal).modal("hide");
        },

        handlePhotoUpload(event) {
            const file = event.target.files[0];
            if (file) {
                this.inquiryForm.photoUpload = file; // ✅ must match Laravel field
                this.inquiryForm.photoName = file.name;
                this.clearError("photoUpload"); // ✅ updated error key
            } else {
                this.inquiryForm.photoUpload = null;
                this.inquiryForm.photoName = "";
            }
        },
        handlePermitPhotoUpload(event) {
            const file = event.target.files[0];
            if (file) {
                this.inquiryForm.permitPhoto = file; // ✅ must match Laravel field
                this.inquiryForm.permitPhotoName = file.name;
                this.errors.permitPhoto = ""; // ✅ updated error key
            }
        },

        blockNumbers(event) {
            const key = event.key;

            // Allow only letters, spaces, apostrophes, hyphens, and dots
            const validChars = /^[a-zA-Z .'-]$/;

            if (!validChars.test(key)) {
                event.preventDefault(); // Block invalid keys
            }
        },

        onContactInput(e) {
            let value = e.target.value.replace(/\D/g, "").slice(0, 11);
            this.inquiryForm.contact = value;
        },

        // New method to restrict first and last name input to letters only, no numbers or symbols
        onNameInput(field, event) {
            let value = event.target.value;

            // Prevent space as the first character
            if (value.length === 1 && value === " ") {
                value = "";
            }

            // Allow letters, spaces, periods, apostrophes, and hyphens only
            let filtered = value.replace(/[^a-zA-Z .'-]/g, "");

            this.inquiryForm[field] = filtered;
            this.clearError(field);
        },

        clearError(field) {
            if (this.errors[field]) {
                this.$set(this.errors, field, "");
            }
        },

        validateForm() {
            this.errors = {};

            if (
                !this.inquiryForm.firstName ||
                !this.inquiryForm.firstName.trim()
            ) {
                this.errors.firstName = "First name is required.";
            } else {
                const firstName = this.inquiryForm.firstName.trim();

                // Regex explanation:
                // ^                - start of string
                // [A-Z]            - first character uppercase letter
                // ([a-zA-Z]+       - one or more letters
                //  ( [a-zA-Z]+)* ) - zero or more groups of: space + one or more letters
                // $                - end of string
                const validNameRegex = /^[A-Z]([a-zA-Z]*( [a-zA-Z]+)*)$/;

                if (!validNameRegex.test(firstName)) {
                    this.errors.firstName = "Start with a capital letter.";
                }
            }

            // Validate Last Name
            if (
                !this.inquiryForm.lastName ||
                !this.inquiryForm.lastName.trim()
            ) {
                this.errors.lastName = "Last name is required.";
            } else {
                const lastName = this.inquiryForm.lastName.trim();

                if (!/^[A-Z][a-zA-Z .'-]*$/.test(lastName)) {
                    this.errors.lastName = "Start with a capital letter.";
                }
            }

            if (!this.inquiryForm.address || !this.inquiryForm.address.trim()) {
                this.errors.address = "Address is required.";
            } else {
                const address = this.inquiryForm.address.trim();

                if (!/^[a-zA-Z0-9\s.,#\-]+$/.test(address)) {
                    this.errors.address =
                        "Address contains invalid characters.";
                }
            }

            // Validate Photo Upload (required)
            if (!this.inquiryForm.photoFile) {
                this.errors.photoFile = "Photo is required.";
            }

            if (!this.inquiryForm.permitPhoto) {
                this.errors.permitPhoto = "Permit photo is required.";
            }

            // Validate Email (optional)
            if (this.inquiryForm.email && this.inquiryForm.email.trim()) {
                const email = this.inquiryForm.email.trim();
                const emailRegex = /^\S+@\S+\.\S+$/;
                if (!emailRegex.test(email)) {
                    this.errors.email = "Please enter a valid email address.";
                }
            }

            // Validate Contact Number
            const contact = this.inquiryForm.contact?.trim();
            if (!contact) {
                this.errors.contact = "Contact number is required.";
            } else {
                const isMobile = /^09\d{9}$/.test(contact); // e.g. 09171234567
                const isLandline = /^(0\d{1,3})\d{6,7}$/.test(contact); // e.g. 0287654321 or 0321234567

                if (!isMobile && !isLandline) {
                    this.errors.contact =
                        "Enter a valid mobile or landline number.";
                }
            }

            // Validate Message (required)

            return Object.keys(this.errors).length === 0;
        },
        submitInquiryForm() {
            if (!this.validateForm()) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Please fill out all required fields.",
                    customClass: {
                        popup: "minimal-popup",
                        confirmButton: "swal-error-ok-btn",
                    },
                    confirmButtonText: "OK",
                });
                return;
            }

            Swal.fire({
                title: "Confirm Registration",
                text: `Ready to register with MyNetGosyo?`,
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Yes, register",
                cancelButtonText: "No, cancel",
                customClass: {
                    popup: "minimal-popup",
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-secondary ms-2",
                },
                buttonsStyling: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    const formData = new FormData();
                    formData.append("firstName", this.inquiryForm.firstName);
                    formData.append("lastName", this.inquiryForm.lastName);
                    formData.append("email", this.inquiryForm.email || "");
                    formData.append("contact", this.inquiryForm.contact);
                    formData.append("address", this.inquiryForm.address);
                    formData.append("photoFile", this.inquiryForm.photoFile);
                    formData.append(
                        "permitPhoto",
                        this.inquiryForm.permitPhoto,
                    );
                    formData.append("message", this.inquiryForm.message || "");

                    try {
                        console.log("e try ug mugana bani");
                        axios.post("/register", formData);
                        alert("Registration successful!");
                        this.resetForm();

                        // Simulate success (you can add your actual API call here)
                        Swal.fire(
                            "Registration Submitted",
                            "Thank you. Your registration has been successfully submitted.",
                            "success",
                        );

                        // ✅ Reset the form after successful submission
                        this.inquiryForm = {
                            firstName: "",
                            lastName: "",
                            email: "",
                            contact: "",
                            message: "",
                            photoFile: null,
                            photoName: "",
                            address: "",
                            permitPhotoFile: null,
                            permitPhotoName: "",
                        };

                        this.errors = {};

                        // ✅ Clear file inputs manually
                        this.$nextTick(() => {
                            if (this.$refs.photoInput) {
                                this.$refs.photoInput.value = null;
                            }
                            if (this.$refs.permitPhotoInput) {
                                this.$refs.permitPhotoInput.value = null;
                            }
                        });

                        // ✅ Close the modal
                        $(this.$refs.inquiryModal).modal("hide");
                    } catch (error) {
                        if (error.response && error.response.status === 422) {
                            this.errors = error.response.data.errors;
                        } else {
                            alert("Something went wrong. Please try again.");
                        }
                    }
                }
            });
        },
    },

    mounted() {
        document.body.style.overflow = "hidden";

        this.loading = true; // Start loading before API call

        axios
            .get("/api")
            .then((res) => {
                const data = Array.isArray(res.data)
                    ? res.data
                    : res.data.data || [];
                this.mgaProducts = data;
            })
            .catch((err) => console.error(err))
            .finally(() => {
                this.loading = false; // End loading after request finishes
            });

        // Modal handling remains the same
        $(document).on("show.bs.modal", ".modal", () => {
            setTimeout(() => {
                $("body").addClass("modal-open").css("padding-right", "");
            }, 0);
        });

        $(this.$refs.inquiryModal).on("hidden.bs.modal", () => {
            const anyModalOpen = $(".modal.show").length > 0;
            $("body").toggleClass("modal-open", anyModalOpen);
            if (!anyModalOpen) {
                $("body").css("padding-right", "");
            }
        });
    },
};
</script>
