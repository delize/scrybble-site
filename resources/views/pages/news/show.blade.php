@extends('layouts.app')

@section('head')
    <meta name="description" content="{{ $post->excerpt ?: Str::limit(strip_tags($post->content), 160) }}">
    <meta name="keywords" content="news, {{ $post->category?->name }}, {{ $post->title }}">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ $post->excerpt ?: Str::limit(strip_tags($post->content), 160) }}">
    @if($post->banner_url)
        <meta property="og:image" content="{{ $post->banner_url }}">
    @endif
    <meta property="article:published_time" content="{{ $post->published_at->toISOString() }}">
    @if($post->author)
        <meta property="article:author" content="{{ $post->author->name }}">
    @endif
    @if($post->category)
        <meta property="article:section" content="{{ $post->category->name }}">
    @endif

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ $post->excerpt ?: Str::limit(strip_tags($post->content), 160) }}">
    @if($post->banner_url)
        <meta name="twitter:image" content="{{ $post->banner_url }}">
    @endif

    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
    <!-- Breadcrumb -->
    <section class="bg-body-tertiary p-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('news.index') }}">News</a></li>
                    @if($post->category)
                        <li class="breadcrumb-item">
                            <a href="{{ route('news.index', ['category' => $post->category->slug]) }}">
                                {{ $post->category->name }}
                            </a>
                        </li>
                    @endif
                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Article Header -->
    <section class="p-3 p-lg-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <article>
                        <header class="mb-4">
                            @if($post->category)
                                <div class="mb-3">
                                    <span class="badge bg-primary fs-6">{{ $post->category->name }}</span>
                                </div>
                            @endif

                            <h1 class="display-4 fw-bold mb-4">{{ $post->title }}</h1>

                            @if($post->excerpt)
                                <p class="lead text-muted mb-4">{{ $post->excerpt }}</p>
                            @endif

                            <div class="d-flex flex-wrap align-items-center gap-3 text-muted mb-4">
                                @if($post->author)
                                    <div class="d-flex align-items-center">
                                        @if($post->author->photo_url)
                                            <img src="{{ $post->author->photo_url }}"
                                                 alt="{{ $post->author->name }}"
                                                 class="rounded-circle me-2"
                                                 width="32" height="32">
                                        @endif
                                        <span>By {{ $post->author->name }}</span>
                                    </div>
                                @endif

                                <div>
                                    <i class="bi bi-calendar3"></i>
                                    {{ $post->published_at->format('F j, Y') }}
                                </div>

                                <div>
                                    <i class="bi bi-clock"></i>
                                    {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read
                                </div>
                            </div>

                            @if($post->banner_url)
                                <div class="mb-4">
                                    <img src="{{ $post->banner_url }}"
                                         alt="{{ $post->title }}"
                                         class="img-fluid rounded shadow">
                                </div>
                            @endif
                        </header>

                        <!-- Article Content -->
                        <div class="article-content mb-5">
                            {!! (new Parsedown())->text($post->content); !!}
                        </div>

                        <!-- Tags -->
                        @if($post->tags->count() > 0)
                            <div class="mb-4">
                                <h6 class="fw-bold">Tags:</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach($post->tags as $tag)
                                        <span class="badge bg-secondary">{{ $tag->name }}</span>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Author Bio -->
                        @if($post->author && $post->author->bio)
                            <div class="card bg-body-tertiary border-0 p-4 mb-5">
                                <div class="d-flex align-items-start gap-3">
                                    @if($post->author->photo_url)
                                        <img src="{{ $post->author->photo_url }}"
                                             alt="{{ $post->author->name }}"
                                             class="rounded-circle"
                                             width="64" height="64">
                                    @endif

                                    <div class="flex-grow-1">
                                        <h6 class="fw-bold mb-2">About {{ $post->author->name }}</h6>
                                        <p class="mb-2">{{ $post->author->bio }}</p>

                                        @if($post->author->github_handle || $post->author->twitter_handle)
                                            <div class="d-flex gap-3">
                                                @if($post->author->github_handle)
                                                    <a href="https://github.com/{{ $post->author->github_handle }}"
                                                       class="text-decoration-none" target="_blank">
                                                        <i class="bi bi-github"></i> GitHub
                                                    </a>
                                                @endif
                                                @if($post->author->twitter_handle)
                                                    <a href="https://twitter.com/{{ $post->author->twitter_handle }}"
                                                       class="text-decoration-none" target="_blank">
                                                        <i class="bi bi-twitter"></i> Twitter
                                                    </a>
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Posts -->
    @if($relatedPosts->count() > 0)
        <section class="bg-body-tertiary p-3 p-lg-5">
            <div class="container">
                <h3 class="mb-4">Related Articles</h3>
                <div class="row g-4">
                    @foreach($relatedPosts as $relatedPost)
                        <div class="col-12 col-md-4">
                            <article class="card h-100 border-0 shadow-sm">
                                @if($relatedPost->banner_url)
                                    <img src="{{ $relatedPost->banner_url }}"
                                         class="card-img-top"
                                         alt="{{ $relatedPost->title }}"
                                         style="height: 150px; object-fit: cover;">
                                @endif

                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">
                                        <a href="{{ route('news.show', $relatedPost->slug) }}"
                                           class="text-decoration-none text-dark">
                                            {{ $relatedPost->title }}
                                        </a>
                                    </h5>

                                    @if($relatedPost->excerpt)
                                        <p class="card-text text-muted small flex-grow-1">
                                            {{ Str::limit($relatedPost->excerpt, 100) }}
                                        </p>
                                    @endif

                                    <div class="mt-auto">
                                        <small class="text-muted">{{ $relatedPost->published_at->format('M j, Y') }}</small>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="p-3 p-lg-4">
        <div class="container text-center">
            <a href="{{ route('news.index') }}" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> Back to News
            </a>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .article-content {
            font-size: 1.125rem;
            line-height: 1.7;
        }

        .article-content h2,
        .article-content h3,
        .article-content h4 {
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .article-content p {
            margin-bottom: 1.5rem;
        }

        .article-content blockquote {
            border-left: 4px solid var(--bs-primary);
            padding-left: 1rem;
            margin: 2rem 0;
            font-style: italic;
            background-color: var(--bs-light);
            padding: 1rem;
            border-radius: 0.375rem;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 0.375rem;
            margin: 1.5rem 0;
        }

        .article-content code {
            background-color: var(--bs-light);
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.875em;
        }

        .article-content pre {
            background-color: var(--bs-dark);
            color: var(--bs-light);
            padding: 1rem;
            border-radius: 0.375rem;
            overflow-x: auto;
            margin: 1.5rem 0;
        }

        .article-content pre code {
            background: none;
            padding: 0;
            color: inherit;
        }
    </style>
@endpush
