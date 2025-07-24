@extends('layouts.app')

@push('head')
    <?php $title = "Scrybble - Roadmap"; ?>

        <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="See what's coming next for Scrybble. Our transparent roadmap shows current development priorities, planned features, and community-requested improvements for the reMarkable-Obsidian integration.">
    <meta property="og:image" content="{{ asset('img/scrybble-roadmap-og.jpg') }}">
    <meta property="og:site_name" content="Scrybble">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title }}">
    <meta property="twitter:description" content="See what's coming next for Scrybble. Our transparent roadmap shows current development priorities, planned features, and community-requested improvements for the reMarkable-Obsidian integration.">
    <meta property="twitter:image" content="{{ asset('img/scrybble-roadmap-twitter.jpg') }}">
@endpush

@section('content')
    <section class="bg-secondary-subtle p-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-2 fw-bolder">Development Roadmap</h1>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-5">
                        <h2 class="mb-4">Current Development Focus</h2>
                        <p class="fs-5">We're committed to transparent development. Here's exactly what we're working on and what's coming next.</p>
                    </div>

                    <!-- Status Legend -->
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <span class="badge bg-success fs-6 p-2">Completed</span>
                                <span class="badge bg-primary fs-6 p-2">In Progress</span>
                                <span class="badge bg-warning text-dark fs-6 p-2">Planned</span>
                                <span class="badge bg-info text-dark fs-6 p-2">Under Consideration</span>
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
                    <h2 class="text-center mb-5">Current Focus</h2>

                    <div class="grid gap-4 mb-4">
                        <div class="card border-primary g-col-lg-6 g-col-12">
                            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">End-to-end encryption</h4>
                                <span class="badge bg-warning text-dark text-primary fs-6 p-2">Planned</span>
                            </div>
                            <div class="card-body">
                                <p><strong>Problem:</strong> Your files are currently stored on our servers, but are accessible by the developer. If our server were hacked, your files are accessible by hackers.</p>
                                <p><strong>Solution:</strong> Implement end-to-end encryption so that even in a case of a data leak, your files remain entirely secure.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Expected: Q3 2025</small>
                            </div>
                        </div>

                        <div class="card border-primary g-col-lg-6 g-col-12">
                            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">Improvements to sensitive file handling and security best practices</h4>
                                <span class="badge bg-warning text-dark text-primary fs-6 p-2">Planned</span>
                            </div>
                            <div class="card-body">
                                <p><strong>Problem:</strong> In Scrybble's early stages, security was less important. Your files are stored on a secure server, but there are many ways to harden the security further even beyond E2E encryption.</p>
                                <p><strong>Solution:</strong> Implement various security best-practices</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Expected: Q3 2025</small>
                            </div>
                        </div>

                        <div class="card border-primary g-col-lg-6 g-col-12">
                            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">Zotero x reMarkable integration</h4>
                                <span class="badge bg-primary text-dark fs-6 p-2">In progress</span>
                            </div>
                            <div class="card-body">
                                <p><strong>Problem:</strong> How the server is currently implemented, your file security depends on us not getting hacked.</p>
                                <p><strong>Solution:</strong> Implement end-to-end encryption so that even under awful circumstances, your files remain secure.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Expected: Q3 2025</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Next: Upcoming Quarter -->
    <section class="p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="text-center mb-5">Q4 2025 - Next Up</h2>
                    <div class="grid gap-4 mb-4">
                        <div class="card border-primary g-col-12 g-col-lg-6">
                            <div class="card-header bg-light text-dark d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">Search and sort options for reMarkable notebooks within the Obsidian plugin</h4>
                                <span class="badge bg-info text-dark fs-6 p-2">Exploring</span>
                            </div>
                            <div class="card-body">
                                <p><strong>Problem:</strong> Highlights don't work on scanned PDFs without embedded text</p>
                                <p><strong>Solution:</strong> AI and/or OCR</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Expected: Q4 2025</small>
                            </div>
                        </div>

                        <div class="card border-primary g-col-12 g-col-lg-6">
                            <div class="card-header bg-light text-dark d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">Highlight support for scanned documents</h4>
                                <span class="badge bg-info text-dark fs-6 p-2">Exploring</span>
                            </div>
                            <div class="card-body">
                                <p><strong>Problem:</strong> Highlights don't work on scanned PDFs without embedded text</p>
                                <p><strong>Solution:</strong> AI and/or OCR</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Expected: Q4 2025</small>
                            </div>
                        </div>

                        <div class="card border-primary g-col-12 g-col-lg-6">
                            <div class="card-header bg-light text-dark d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">Automatic sync functionality</h4>
                                <span class="badge bg-warning text-dark fs-6 p-2">Planned</span>
                            </div>
                            <div class="card-body">
                                <p><strong>Problem:</strong> You have to manually click a file to get it synced or updated within Obsidian</p>
                                <p><strong>Goal:</strong> Find documents and annotations quickly</p>
                                <ul class="mb-0">
                                    <li>Select files and or folders which should automatically sync</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Expected: Q4 2025</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary text-white p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="text-center mb-5">Future Possibilities</h2>
                    <p class="text-center mb-5">Ideas we're exploring - timeline depends on community feedback and technical feasibility.</p>

                    <div class="grid gap-4">
                        <div class="card border-0 bg-white bg-opacity-10 g-col-lg-6 g-col-12">
                            <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
                                <h4 class="mb-0 text-white">Convert structured annotations into popular formats</h4>
                                <span class="badge bg-info text-dark fs-6 p-2">Exploring</span>
                            </div>
                            <div class="card-body">
                                <ul class="text-white mb-0">
                                    <li>Drawn diagrams to mermaid diagrams</li>
                                    <li>Tables to markdown tables</li>
                                    <li>Drawn text to structured Markdown?</li>
                                    <li>Other conversions?</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card border-0 bg-white bg-opacity-10 g-col-lg-6 g-col-12">
                            <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
                                <h4 class="mb-0 text-white">Two-way sync from Obsidian back to reMarkable</h4>
                                <span class="badge bg-info text-dark fs-6 p-2">Exploring</span>
                            </div>
                            <div class="card-body">
                                <ul class="text-white mb-0">
                                    <li>Sometimes you need to think with your hands!</li>
                                    <li>It's desirable to sync your files back to the reMarkable, but what would that look like in practice?</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card border-0 bg-white bg-opacity-10 g-col-lg-6 g-col-12">
                            <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
                                <h4 class="mb-0 text-white">Anki x reMarkable integration</h4>
                                <span class="badge bg-info text-dark fs-6 p-2">Exploring</span>
                            </div>
                            <div class="card-body">
                                <ul class="text-white mb-0">
                                    <li>Create anki cards on your tablet </li>
                                    <li>your study, book notes and research notes go directly into your favorite Spaced Repetition program</li>
                                    <li>No more distraction through your phone!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Input -->
    <section class="p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-4">Shape the Future</h2>
                        <p class="fs-5">This roadmap isn't set in stone. Your feedback directly influences our development priorities.</p>
                    </div>

                    <div class="grid gap-4 mb-5">
                        <div class="card border-outline-secondary g-col-6">
                            <div class="card-body text-center">
                                <h4>Get your voice heard</h4>
                                <p>A particular feature particularly important for you? Contact us!</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid d-sm-flex gap-2">
                                    <a href="mailto:{{ config('app.support_email') }}" class="btn btn-outline-secondary">Send Email</a>
                                    <a href="{{ config('app.discord.invite') }}" class="btn btn-primary">Join Discord</a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-outline-secondary g-col-6">
                            <div class="card-body text-center">
                                <h4>Suggest Ideas</h4>
                                <p>Have a feature request? We want to hear it.</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid d-sm-flex gap-2">
                                    <a href="mailto:{{ config('app.support_email') }}" class="btn btn-outline-secondary">Send Email</a>
                                    <a href="{{ config('app.discord.invite') }}" class="btn btn-primary">Join Discord</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="mb-3">Previously Completed</h3>
                        <ul>
                            <li class="badge bg-success fs-6 p-2 mb-2">✓ Type folio & typed text support</li>
                            <li class="badge bg-success fs-6 p-2 mb-2">✓ reMarkable Paper Pro support</li>
                            <li class="badge bg-success fs-6 p-2 mb-2">✓ Improved sync reliability</li>
                            <li class="badge bg-success fs-6 p-2 mb-2">✓ Greatly improved UI within Obsidian</li>
                            <li class="badge bg-success fs-6 p-2 mb-2">✓ Highlight export from device</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
