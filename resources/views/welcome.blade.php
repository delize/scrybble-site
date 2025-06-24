@extends('layouts.app')

@section('head')
    <meta name="description"
          content="Seamlessly sync your reMarkable tablet notes with Obsidian. Transform handwritten insights into searchable, linkable knowledge. No more isolated notes.">
    <meta name="keywords"
          content="reMarkable Obsidian integration, handwritten notes sync, PKM, digital knowledge management, note-taking workflow, reMarkable tablet, Obsidian plugin">

    <!-- Open Graph -->
    <meta property="og:title" content="Scrybble Sync - Think Analog, Organize Digital">
    <meta property="og:description"
          content="Seamlessly sync your reMarkable tablet notes with Obsidian. Transform handwritten insights into searchable, linkable knowledge.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://scrybble.ink">
@endsection

@section('content')
    <section class="bg-secondary-subtle p-5">
        <div class="container">
            <div class="grid align-items-center">
                <div class="g-col-6">
                    <h1 class="display-1 fw-bolder">Think Analog, Organize Digital</h1>
                    <p class="display-5 text- mb-4" style="--bs-text-opacity: .65;">The missing link between your
                        reMarkable tablet and Obsidian vault</p>
                    <p class="display-6 mb-4 text-black" style="--bs-text-opacity: .65;">Stop losing your
                        handwritten insights in a digital silo. Scrybble
                        seamlessly syncs your reMarkable notes into Obsidian, making them searchable, linkable, and
                        part of your knowledge system.</p>
                    <a class="btn btn-lg btn-primary" role="button" aria-disabled="true"
                       href="https://streamsoft.gumroad.com/l/remarkable-to-obsidian">Get
                        Scrybble Now</a>
                    <a class="btn btn-lg btn-outline-secondary" href="#features" role="button" aria-disabled="true">See
                        How It Works</a>
                </div>
                <div class="g-col-6">
                    <div class="card border-secondary p-4 bg-white shadow">
                        <b>Forever part of your vault</b>
                        <p class="mb-0">Your reMarkable highlights and notes appear in Obsidian as organized,
                            searchable Markdown
                            files with page references and tags intact.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-4">
        <div class="container p-4 d-flex justify-content-center">
            <div class="problem-content w-75">
                <div class="text-center mb-4">
                    <h2>Your Knowledge is Trapped in Silos</h2>
                    <p>You chose reMarkable for distraction-free thinking and Obsidian for powerful knowledge
                        management. But they don't talk to each other.</p>
                </div>

                <div class="grid gap-4">
                    <div class="card card-accent g-col-6">
                        <h3>Isolated Reading Notes</h3>
                        <p>Book highlights and PDF annotations stay locked in your reMarkable, disconnected from
                            your research and ideas.</p>
                    </div>
                    <div class="card card-accent g-col-6">
                        <h3>Lost Handwritten Insights</h3>
                        <p>Your best ideas are written by hand but can't be searched, linked, or integrated with
                            your digital knowledge base.</p>
                    </div>
                    <div class="card card-accent g-col-6">
                        <h3>Manual Export Hell</h3>
                        <p>Constant friction switching between devices, manually exporting files, and recreating
                            connections breaks your flow.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary text-white p-4">
        <div class="container text-center p-4">
            <h1 class="display-3 fw-bold mb-4 text-">One Workflow, Seamless Integration</h1>
            <p class="w-50 mb-0 fs-6 m-auto">Scrybble creates the bridge you've been missing. Write naturally on
                reMarkable, then access, search, and connect your notes instantly in Obsidian. Your analog
                insights become part of your digital knowledge system without losing the benefits of either
                tool.</p>
        </div>
    </section>

    <section class="p-5 bg-body-tertiary" id="features">
        <div class="container">
            <h2 class="mb-4">Everything You Need for Seamless Integration</h2>
            <div class="grid gap-4">
                <div class="grid align-items-center g-col-12 gap-5 justify-content-center">
                    <div class="g-col-6">
                        <img class="w-100" src="/img/docs-for-developers-md.png" alt="">
                    </div>
                    <div class="g-col-6">
                        <h3>Export your highlights</h3>
                        <p>All your reMarkable highlights, searchable Markdown files in Obsidian, organized by page with
                            preserved structure.</p>
                    </div>
                </div>

                <div class="grid align-items-center g-col-12 gap-4">
                    <div class="g-col-3">
                        <h3>Native Obsidian Integration</h3>
                        <p>Browse and sync your entire reMarkable file tree directly from within Obsidian. No more
                            switching to external websites or apps.</p>
                    </div>
                    <div class="g-col-9">
                        <img class="w-100" src="/img/rM-integration.png" alt="">
                    </div>
                </div>

                <div class="grid align-items-center g-col-12 gap-4">
                    <div class="g-col-6">
                        <img class="w-100" src="img/tags.png" alt="">
                    </div>
                    <div class="g-col-6">
                        <h3>Organized with tags</h3>
                        <p>Tags added in reMarkable automatically appear in your Obsidian frontmatter and page headings,
                            resulting in one organization system for both reMarkable and Obsidian.</p>
                    </div>
                </div>

                <div class="grid align-items-center g-col-12 gap-4">
                    <div class="g-col-3">
                        <h3>Handwritten notes for reference</h3>
                        <p>Obsidian becomes your perfect place for both freeform, handwritten thinking and digital
                            thinking.</p>
                    </div>
                    <div class="g-col-9">
                        <img class="w-100" src="/img/bullet-journal-pdf.png" alt="">
                    </div>
                </div>

                <div class="g-col-12 text-center">
                    <h2>Handwriting to markdown text and diagrams.</h2>
                    <p class="note">This will be coming soon. Interested in helping us shape this integration? Share
                        your ideas on our {{ config('app.discord') }}!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="text-center">
                <h2>What Knowledge Workers Are Saying</h2>
                <p class="fst-italic">From our user survey conducted in May, 2025:</p>
            </div>

            <h4 style="color: var(--accent-color-first);">What do you value most about the Scrybble
                reMarkable x Obsidian integration?</h4>
            <div class="testimonials">
                <blockquote class="card-accent big-one">
                    <p>I was this close to giving up and no longer subscribe to reMarkable and sticking with my Kobo
                        instead because of this issue. Scrybble changed my life. I'm so excited about using my
                        reMarkable every day because of this tool.</p>
                    <cite>Kandola Sanjeev — Business Manager, North America</cite>
                </blockquote>

                <blockquote style="grid-area: b;" class="card-accent">
                    <p>The ability to selectively choose what syncs</p>
                    <cite>Matt J. — Academic Researcher, Europe</cite>
                </blockquote>

                <blockquote style="grid-area: a;" class="card-accent">
                    <p>Just the fact that this makes it possible at all.</p>
                    <cite>— Graduate student, Europe</cite>
                </blockquote>
            </div>

            <h4 style="color: var(--accent-color-second);">Why is it important that what you do on
                reMarkable is available within Obsidian?</h4>
            <div class="testimonials rightist">
                <blockquote style="--accent-color: var(--accent-color-second);" class="card card-accent big-one">
                    <p>reMarkable makes up a good chunk of my second brain, and right now it feels very disconnected
                        from the rest of my project and knowledge management. The lack of Obsidian integration (or
                        any integration for that matter) would be a significant reason for switching e-Tablets in
                        the future for me.</p>
                    <cite>J. Ortega, Professor, North America</cite>
                </blockquote>

                <blockquote style="--accent-color: var(--accent-color-third); grid-area: a;"
                            class="card card-accent">
                    <p>Without export reMarkeable is a silo, a graveyard.</p>
                    <cite>Holger Hubs — Creative professional, North America</cite>
                </blockquote>

                <blockquote style="--accent-color: var(--accent-color-first); grid-area: b;"
                            class="card card-accent">
                    <p>It is essential — my use of RMs (I have 2) only took off with this integration and is the
                        only reason I bought the paper pro.</p>
                    <cite>— Creative Professional, Europe</cite>
                </blockquote>
            </div>

            <h4 style="color: var(--accent-color-third);">What do you value most about the Scrybble reMarkable x
                Obsidian integration?</h4>
            <div class="testimonials">
                <blockquote style="--accent-color: var(--accent-color-third);" class="card-accent big-one">
                    <p>Notes on research papers are fairly easy to keep track of</p>
                    <cite>Sl. Colienne — Researcher, North America</cite>
                </blockquote>

                <blockquote style="--accent-color: var(--accent-color-first); grid-area: a;" class="card-accent">
                    <p>It let me work out of my computer on my researchs, with deep concentration, and i can find
                        all my notes in my "second brain" in Obsidian</p>
                    <cite>Audrey Vermeulen — Creative & Researcher, Europe</cite>
                </blockquote>

                <blockquote style="--accent-color: var(--accent-color-second); grid-area: b;" class="card-accent">
                    <p>I love that the highlighted bits are a separate note!</p>
                    <cite>Nancy Melchert — Graduate/PhD student, North America</cite>
                </blockquote>
            </div>
        </div>
    </section>

    <section class="pricing" id="pricing">
        <div class="container">
            <h2 id="plan-heading">Choose Your Plan</h2>

            <div id="billing-toggle" class="d-flex mb-5 justify-content-center" role="radiogroup"
                 aria-labelledby="plan-heading">
                <div class="card p-1 flex-row gap-2">
                    <input type="radio" class="btn-check" name="billing-period" id="monthly" autocomplete="off">
                    <label class="btn btn-outline-danger border-0" for="monthly">Monthly</label>

                    <input type="radio" class="btn-check" name="billing-period" id="yearly" autocomplete="off" checked>
                    <label class="btn btn-outline-danger position-relative border-0" for="yearly">
                        Yearly
                        <span
                            class="position-absolute z-1 top-0 start-100 translate-middle badge rounded-pill bg-primary text-white">-15%</span>
                    </label>

                    <input type="radio" class="btn-check" name="billing-period" id="two-yearly" autocomplete="off">
                    <label class="btn btn-outline-danger position-relative border-0" for="two-yearly">
                        2-Yearly
                        <span
                            class="position-absolute z-1 top-0 start-100 translate-middle badge rounded-pill bg-primary text-white">-25%</span>
                    </label>
                </div>
            </div>

            <div class="pricing-cards">
                <div class="pricing-card" id="academic">
                    <h3>Student & Academic</h3>
                    <div class="price">2.29<span>/month</span></div>
                    <span class="note">Scrybble is discounted for students and academics.</span>

                    <ul class="pricing-features">
                        <li>Full Scrybble Sync functionality</li>
                        <li>Unlimited documents</li>
                        <li>Community support</li>
                    </ul>
                    <a href="https://streamsoft.gumroad.com/l/remarkable-to-obsidian" class="btn btn-primary">View
                        plans</a>
                </div>

                <div class="pricing-card popular" id="professional">
                    <h3>Professional</h3>
                    <div class="price">3.99<span>/month</span></div>
                    <span class="note">For professional use</span>

                    <ul class="pricing-features">
                        <li>Full Scrybble Sync functionality</li>
                        <li>Community support</li>
                        <li>Unlimited documents</li>
                        <li>Priority e-mail support</li>
                    </ul>
                    <a href="https://streamsoft.gumroad.com/l/remarkable-to-obsidian" class="btn btn-primary">View
                        plans</a>
                </div>

                <div class="pricing-card" id="custom">
                    <h3>Custom solutions</h3>
                    <div class="price" style="--symbol: ''">custom<span>/inquiry</span></div>
                    <span
                        class="note">We are always looking to expand the Scrybble knowledge management software suite</span>

                    <ul class="pricing-features">
                        <li>Do you work with specific software that is missing an integration?</li>
                        <li>Zotero x reMarkable?</li>
                        <li>Anki x Obsidian?</li>
                        <li>... x ...?</li>
                    </ul>
                    <a href="mailto:{{ config('app.support_email') }}" class="btn btn-primary">Contact us</a>
                </div>
            </div>
            <p class="mt-4" style="grid-column: 2">30-day free trial • Cancel anytime</p>
            <script>
                const academic = document.querySelector('.pricing-card#academic .price')
                const professional = document.querySelector('.pricing-card#professional .price')
                const radio = document.getElementById('billing-toggle')

                const basePrices = {
                    academic: 2.29,
                    professional: 3.99,
                }

                const multipliers = {
                    monthly: 1,
                    yearly: 0.85,
                    'two-yearly': 0.75,
                }

                radio.addEventListener('change', function(e) {
                    if (e.target.type === 'radio') {
                        const period = e.target.id
                        const multiplier = multipliers[period]

                        academic.innerHTML = `${(basePrices.academic * multiplier).toFixed(2)}<span>/month</span>`
                        professional.innerHTML = `${(basePrices.professional * multiplier).toFixed(2)}<span>/month</span>`
                    }
                })
            </script>
        </div>
    </section>
@endsection
