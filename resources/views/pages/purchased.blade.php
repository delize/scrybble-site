@extends('layouts.app')

@push('head')
    <?php $title = "Scrybble - Thank You!"; ?>

    <!-- Prevent indexing of this page -->
    <meta name="robots" content="noindex, nofollow">

    <meta name="description"
          content="Thank you for purchasing Scrybble. Get started with your reMarkable-Obsidian integration.">

    <link rel="canonical" href="{{ url()->current() }}">
@endpush

@section('content')
    <section class="bg-success bg-opacity-10 p-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-4 fw-bolder mb-3">Welcome to Scrybble!</h1>
                <p class="display-6 text-black" style="--bs-text-opacity: .65;">
                    Your purchase is complete. Let's get you started.
                </p>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card border-success mb-5">
                        <div class="card-body text-center p-4">
                            <h2 class="h3 mb-3">You're joining 200+ knowledge workers integrating their devices for a
                                nicer workflow :)</h2>
                            <p class="mb-0">
                                No more lost insights. No more manual copying. Your handwritten thoughts now flow
                                seamlessly into your digital knowledge base.
                            </p>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-4">
                            Install Scrybble in 3 Steps
                        </h2>

                        <div class="alert alert-info mb-4" role="alert">
                            <strong>First time?</strong> The whole setup takes no more than 5 minutes. Your first sync
                            will happen within 10 minutes of connecting.
                        </div>

                        <div class="accordion" id="installationGuide">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#step1" aria-controls="step1">
                                        <strong class="me-2">Step 1:</strong> <a href="/register">Create a Scrybble
                                            account</a>&nbsp;if you don't have one
                                    </button>
                                </h3>
                                <div id="step1" class="accordion-collapse collapse"
                                     data-bs-parent="#installationGuide">
                                    <div class="accordion-body">
                                        <p class="text-muted">The account is used to manage your data and connect with
                                            the Obsidian plugin</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#step2" aria-controls="step2">
                                        <strong class="me-2">Step 2:</strong> Install the Scrybble plugin for Obsidian
                                    </button>
                                </h3>
                                <div id="step2" class="accordion-collapse collapse" data-bs-parent="#installationGuide">
                                    <div class="accordion-body">
                                        <p class="text-muted"><a class="btn btn-primary"
                                                                 href="https://obsidian.md/plugins?id=scrybble.ink">Click
                                                here</a>&nbsp;to request Obsidian to install the plugin</p>
                                        <p class="text-muted">If the link above doesn't work, or you're on mobile, then
                                            you should navigate to the "community plugins" section in Obsidian, and
                                            search for Scrybble and install it.</p>

                                        <div class="d-flex flex-column gap-4">
                                            <h4 class="text-muted">1. Open settings</h4>
                                            <img class="img-fluid" src="img/setup-guide/settings-button.png"
                                                 alt="Find the settings pane in Obsidian">

                                            <h4 class="text-muted">2. Turn on community plugins if you haven't yet</h4>
                                            <img class="img-fluid" src="img/setup-guide/turn-on-community-plugins.png"
                                                 alt="Turn on community plugins">

                                            <h4 class="text-muted">3. Find the Scrybble plugin</h4>
                                            <img class="img-fluid" src="img/setup-guide/browse-plugins.png"
                                                 alt="Find the plugins page">
                                            <img class="img-fluid" src="img/setup-guide/find-scrybble.png"
                                                 alt="Search for Scrybble">

                                            <h4 class="text-muted">4. And... install!</h4>
                                            <img class="img-fluid" src="img/setup-guide/install-scrybble.png"
                                                 alt="Install Scrybble">

                                            <h4 class="text-muted">5. Don't forget to enable</h4>
                                            <img class="img-fluid" src="img/setup-guide/enable-scrybble.png"
                                                 alt="Enable the Scrybble plugin">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#step3" aria-expanded="false" aria-controls="step3">
                                        <strong class="me-2">Step 3:</strong> Setup
                                    </button>
                                </h3>
                                <div id="step3" class="accordion-collapse collapse" data-bs-parent="#installationGuide">
                                    <div class="accordion-body text-muted">
                                        <p>To open Scrybble, look for the <b>Scrybble</b> button in the Obsidian status
                                            bar.</p>
                                        <p>Or find "Scrybble" in the Obsidian command palette</p>

                                        <img class="img-fluid" src="img/setup-guide/scrybble-active-btn.png"
                                             alt="Open the Scrybble sidepane">

                                        <p>The plugin will now guide you through linking your Scrybble account, your
                                            reMarkable account and your Gumroad license.</p>

                                        <p>Once you've finished linking everything, you are ready to go!</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#step4" aria-expanded="false" aria-controls="step4">
                                        <strong class="me-2">Bonus step</strong> Sync your first file
                                    </button>
                                </h3>
                                <div id="step4" class="accordion-collapse collapse" data-bs-parent="#installationGuide">
                                    <div class="accordion-body text-muted">
                                        <p>Once your plugin is completely set-up, you're ready to sync files!</p>
                                        <p>Sync a file by clicking on it</p>
                                        <img class="img-fluid mb-2" src="img/setup-guide/sync-a-file.png"
                                             alt="Sync a file by clicking it">
                                        <p>Once downloaded... <b>Open the Markdown or PDF file</b> by clicking on the PDF or MD button near the file</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-secondary-subtle border-0 text-center p-4">
                        <div class="card-body">
                            <h3 class="h5 mb-3">Spread the Word</h3>
                            <p class="mb-3">
                                Know someone else struggling with disconnected devices making a disconnected workflow?
                                <br>Share your experience and help them discover Scrybble.
                            </p>
                            <div class="d-flex gap-2 justify-content-center flex-wrap">
                                <a href="https://twitter.com/intent/tweet?text=Just%20started%20using%20Scrybble%20to%20sync%20my%20@remarkablepaper%20with%20@obsdmd%20-%20no%20more%20lost%20handwritten%20notes!%20%F0%9F%8E%89&url=https://scrybble.ink"
                                   class="btn btn-secondary btn-sm"
                                   target="_blank">
                                    <i class="bi bi-twitter me-1"></i> Share on Twitter/X
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://scrybble.ink"
                                   class="btn btn-secondary btn-sm"
                                   target="_blank">
                                    <i class="bi bi-linkedin me-1"></i> Share on LinkedIn
                                </a>
                                <a href="https://www.reddit.com/submit?url=https://scrybble.ink&title=Scrybble%20-%20Seamless%20reMarkable%20to%20Obsidian%20sync"
                                   class="btn btn-secondary btn-sm"
                                   target="_blank">
                                    <i class="bi bi-reddit me-1"></i> Share on Reddit
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <h3 class="h5 mb-3">Quick Links</h3>
                        <div class="d-flex gap-3 justify-content-center flex-wrap">
                            <a href="/profile" class="btn btn-primary">
                                Manage Subscription
                            </a>
                            <a href="/support" class="btn btn-primary">
                                Find support
                            </a>
                            <a href="{{ config('app.discord.invite') }}" class="btn btn-primary">
                                Join the <b>{{ config('app.discord.name') }}</b> Discord community
                            </a>
                            <a href="/roadmap" class="btn btn-primary">
                                Check out what's coming next
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
