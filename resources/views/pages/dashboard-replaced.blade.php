@extends('layouts.app')

@push('head')
    <?php $title = "Scrybble - Dashboard Moved"; ?>

    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
@endpush

@section('content')
    <section class="p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold text-warning mb-4">Dashboard Has Moved</h1>
                    <p class="fs-5 mb-4">
                        Hi! The dashboard feature has been moved to the Obsidian plugin.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-body-tertiary p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-primary">
                        <div class="card-body text-center p-5">
                            <h2 class="card-title mb-4">Find It in the Obsidian Plugin</h2>
                            <p class="card-text fs-6 mb-4">
                                All dashboard functionality has been moved to the newer Scrybble Obsidian plugin.
                                This provides a better, more integrated experience for your knowledge management workflow.
                            </p>
                            <p>To install the plugin, you can <a href="https://obsidian.md/plugins?id=scrybble.ink" class="btn btn-primary">click this link</a>, or search for <strong>scrybble</strong> in the Obsidian plugins section within Obsidian.</p>
                            <hr>
                            <div class="d-flex gap-3 justify-content-center">
                                <a href="/" class="btn btn-secondary">Return to Home</a>
                                <a href="/support" class="btn btn-warning">Get Support</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
