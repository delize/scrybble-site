@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            {{ __('Profile') }}
                        </h4>
                    </div>

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-9">
                                <div class="user-info">
                                    <div class="mb-3">
                                        <label class="form-label text-muted small mb-1">
                                            {{ __('Name') }}
                                        </label>
                                        <div class="fs-5">{{ auth()->user()->name }}</div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-muted small mb-1">
                                            {{ __('Email Address') }}
                                        </label>
                                        <div>{{ auth()->user()->email }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="subscription-section">
                            <h5 class="mb-3">
                                <label class="form-label text-muted small mb-1">
                                    {{ __('Your Subscription') }}
                                </label>
                            </h5>

                            <div class="subscription-status">
                                @if($licenseData['lifetime'])
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-infinity text-success me-2 fs-4"></i>
                                        <div>
                                            <div
                                                class="text-muted small mt-1">{{ __('You have unlimited access forever') }}</div>
                                        </div>
                                    </div>
                                @elseif($licenseData['exists'])
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            @if($licenseData['licenseInformation']['active'])
                                                <div>
                                                    <span class="badge bg-success fs-6">
                                                        {{ __('Active') }}
                                                    </span>
                                                    <div
                                                        class="text-muted small mt-1">{{ __('Your subscription is active') }}</div>
                                                </div>
                                            @else
                                                <i class="fas fa-exclamation-circle text-danger me-2 fs-4"></i>
                                                <div>
                                                    <span class="badge bg-danger fs-6 px-3 py-2">
                                                        <i class="fas fa-pause me-1"></i>{{ __('Inactive') }}
                                                    </span>
                                                    <div
                                                        class="text-muted small mt-1">{{ __('Your subscription needs attention') }}</div>
                                                </div>
                                            @endif
                                        </div>

                                        @if(isset($licenseData['licenseInformation']['subscription_id']))
                                            <div>
                                                <a href="https://app.gumroad.com/subscriptions/{{ $licenseData['licenseInformation']['subscription_id'] }}/manage"
                                                   class="btn btn-outline-primary">
                                                    <i class="fas fa-cog me-1"></i>{{ __('Manage Subscription') }}
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-question-circle text-warning me-2 fs-4"></i>
                                        <div>
                                            <span
                                                class="text-muted">{{ __('Unable to load license information') }}</span>
                                            <div
                                                class="text-muted small mt-1">{{ __('Please try refreshing the page') }}</div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
