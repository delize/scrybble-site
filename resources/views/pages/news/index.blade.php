@extends('layouts.app')

@section('head')
    <meta name="description"
          content="Stay updated with our latest news, insights, and announcements. Read our latest articles and stay informed.">
    <meta name="keywords" content="news, blog, articles, updates, insights">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="News & Updates">
    <meta property="og:description" content="Stay updated with our latest news, insights, and announcements.">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="News & Updates">
    <meta name="twitter:description" content="Stay updated with our latest news, insights, and announcements.">

    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-secondary-subtle p-3 p-lg-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-2 fw-bolder mb-4">News & Updates</h1>
            </div>
        </div>
    </section>

    <section class="p-3 p-lg-5">
        <div class="container">
            @if($posts->count() > 0)
                <div class="d-flex flex-column gap-4">
                    @foreach($posts as $post)
                        <div>
                            <a href="{{ route('news.show', $post->slug) }}">
                                <article class="card h-100 shadow-sm">
                                    @if($post->banner_url)
                                        <img src="{{ $post->banner_url }}"
                                             class="card-img-top"
                                             alt="{{ $post->title }}"
                                             style="height: 200px; object-fit: cover;">
                                    @endif

                                    <div class="card-body d-flex flex-column">
                                        @if($post->category)
                                            <div class="mb-2">
                                                <span class="badge bg-primary">{{ $post->category->name }}</span>
                                            </div>
                                        @endif

                                        <h3 class="card-title h5">
                                            <a href="{{ route('news.show', $post->slug) }}"
                                               class="text-decoration-none text-dark">
                                                {{ $post->title }}
                                            </a>
                                        </h3>

                                        @if($post->excerpt)
                                            <p class="card-text text-muted flex-grow-1">{{ $post->excerpt }}</p>
                                        @endif

                                        <div class="mt-auto">
                                            <div class="d-flex justify-content-between align-items-center text-muted small">
                                                @if($post->author)
                                                    <span>By {{ $post->author->name }}</span>
                                                @endif
                                                <span>{{ $post->published_at->format('M j, Y') }}</span>
                                            </div>

                                            <div class="mt-2">
                                                <a href="{{ route('news.show', $post->slug) }}"
                                                   class="btn btn-primary btn-sm">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        </div>
                    @endforeach
                </div>

                @if($posts->hasPages())
                    <div class="d-flex justify-content-center mt-5">
                        {{ $posts->appends(request()->query())->links() }}
                    </div>
                @endif
            @else
                <div class="text-center py-5">
                    <h3 class="text-muted">No posts found</h3>
                    <p class="text-muted">
                        Check back soon for updates!
                    </p>
                </div>
            @endif
        </div>
    </section>
@endsection
