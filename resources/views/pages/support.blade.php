@extends('layouts.app')

@section('head')
    <meta name="description"
          content="Get help with Scrybble. Fast Discord support on workdays, comprehensive email support, and self-service resources for reMarkable-Obsidian integration.">
    <meta name="keywords" content="Scrybble support, reMarkable Obsidian help, sync troubleshooting, contact">
@endsection

@section('content')
    <section class="bg-secondary-subtle p-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-2 fw-bolder">Get Help & Support</h1>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2>Choose Your Support Channel</h2>
                        <p>Different issues need different approaches. Here's when to use what:</p>
                    </div>

                    <div class="grid gap-4 mb-5">
                        <div class="card border-primary g-col-6">
                            <div class="card-header bg-primary text-white">
                                <h3 class="mb-0">Discord Community</h3>
                                <small>Same day response on workdays</small>
                            </div>
                            <div class="card-body">
                                <p><strong>Best for:</strong></p>
                                <ul>
                                    <li>Quick troubleshooting</li>
                                    <li>Setup questions</li>
                                    <li>Feature discussions</li>
                                    <li>Community help</li>
                                </ul>
                                <p class="mb-3"><strong>Response time:</strong> Same day on weekdays (Monday-Friday,
                                    European time)</p>
                                <a href="{{ config('app.discord') }}" class="btn btn-primary">Join the <b>Scrybbling Together</b> Discord</a>
                            </div>
                        </div>

                        <div class="card border-outline-secondary g-col-6">
                            <div class="card-header bg-light">
                                <h3 class="mb-0">Email Support</h3>
                                <small>Within 5 business days</small>
                            </div>
                            <div class="card-body">
                                <p><strong>Best for:</strong></p>
                                <ul>
                                    <li>Billing and account issues</li>
                                    <li>Complex technical problems</li>
                                    <li>Privacy-sensitive questions</li>
                                    <li>Detailed bug reports</li>
                                </ul>
                                <p class="mb-3"><strong>Response time:</strong> Within 5 business days, usually faster
                                </p>
                                <a href="mailto:{{ config('app.support_email') }}">{{ config('app.support_email') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-body-tertiary p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="text-center mb-5">Common Issues & Solutions</h2>

                    <div class="border rounded">
                        <details class="border-bottom">
                            <summary class="p-3 bg-light border-0 fw-semibold" style="cursor: pointer;">
                                My file isn't syncing correctly.
                            </summary>
                            <div class="p-3">
                                <h3>Ran into this issue?</h3>
                                <img class="mw-100" src="/img/document-sync-error.png" alt="An image showing a sync failure for 'The myth of Sisyphus' by Albert Camus">
                                <p>This means our software is unable to process this specific file correctly.</p>
                                <p><b>Give us access to your file and we can fix it:</b></p>
                                <p class="text-muted">We do not have access to your files (for privacy reasons):</p>
                                <ol>
                                    <li>Navigate to to the file within the Obsidian Scrybble plugin</li>
                                    <li>Click the "feedback" action next to the file</li>
                                    <li><img class="mw-100" src="img/feedback%20button.png" alt="An arrow pointing at the 'feedback button' within the Scrybble Obsidian plugin interface"></li>
                                    <li>Fill in the details and share the file</li>
                                    <li>We'll get back to you via e-mail after you shared your file.</li>
                                </ol>

                            </div>
                        </details>

                        <details class="border-bottom">
                            <summary class="p-3 bg-light border-0 fw-semibold" style="cursor: pointer;">
                                I made highlights on my device, but they're not showing. What's up with that?
                            </summary>
                            <div class="p-3">
                                <ol>
                                    <li><b>Is your PDF a scanned document?</b> The text might not be digitally embedded within the PDF document. We will use OCR and/or AI at later stages to simplify this process at a later Scrybble release, but this is not yet supported.</li>
                                    <li>You can run your document through a third-party OCR service and try again that way.</li>
                                </ol>
                                <hr>
                                <ol>
                                    <li>Still having issues?</li>
                                    <li>Click the "feedback" button in the Scrybble sync plugin.</li>
                                    <li>This way, we can look at your document and fix the problem with a new update.</li>
                                </ol>
                            </div>
                        </details>

                        <details class="border-bottom">
                            <summary class="p-3 bg-light border-0 fw-semibold" style="cursor: pointer;">
                                Initial setup and plugin installation
                            </summary>
                            <div class="p-3">
                                <ol>
                                    <li>Install the Obsidian plugin from the Community Plugins directory</li>
                                    <li>Create your Scrybble account and get your API key</li>
                                    <li>Enter your API key in the plugin settings</li>
                                    <li>Configure your sync preferences</li>
                                    <li>Need step-by-step help? Ask in Discord with screenshots of where you're stuck
                                    </li>
                                </ol>
                            </div>
                        </details>

                        <details class="border-bottom">
                            <summary class="p-3 bg-light border-0 fw-semibold" style="cursor: pointer;">
                                Billing, subscription, and account issues
                            </summary>
                            <div class="p-3">
                                <p>For billing questions, subscription changes, or account access issues, email us
                                    directly at <a
                                        href="mailto:{{ config('app.support_email') }}">{{ config('app.support_email') }}</a>
                                </p>
                                <p>Include your account email and describe the specific issue. We'll get back to you
                                    within 5 business days, usually much faster.</p>
                            </div>
                        </details>

                        <details>
                            <summary class="p-3 bg-light border-0 fw-semibold" style="cursor: pointer;">
                                Feature requests and feedback
                            </summary>
                            <div class="p-3">
                                <p>We love hearing your ideas! Discord is the best place for feature discussions where
                                    the community can weigh in and help shape development priorities.</p>
                                <p>For detailed feature proposals or private feedback, email works too.</p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-4">What to Include When Asking for Help</h2>
                    <div class="grid gap-4">
                        <div class="card card-accent g-col-6">
                            <h3>For Technical Issues</h3>
                            <ul class="text-start">
                                <li>What you were trying to do</li>
                                <li>What happened instead</li>
                                <li>Error messages (screenshots help)</li>
                                <li>Your device/OS versions</li>
                            </ul>
                        </div>
                        <div class="card card-accent g-col-6">
                            <h3>For Account Issues</h3>
                            <ul class="text-start">
                                <li>Your account email address</li>
                                <li>When the issue started</li>
                                <li>What you've already tried</li>
                                <li>Screenshots if applicable</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary text-white p-5">
        <div class="container text-center">
            <h2 class="mb-4">Our Support Philosophy</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="fs-5 mb-4">We're committed to transparent, helpful support that respects your time and
                        intelligence.</p>
                    <div class="grid gap-5">
                        <div class="g-col-6">
                            <h4>Honest Answers</h4>
                            <p>If we can't fix something or it's not possible, we'll tell you straight up.</p>
                        </div>
                        <div class="g-col-6">
                            <h4>Community First</h4>
                            <p>Our Discord community often has faster answers than we do. We encourage peer support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
