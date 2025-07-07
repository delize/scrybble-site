@extends('layouts.app')

@section('content')
    <div class="container mb-4">
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
                                @if(is_null($licenseData))
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="badge bg-warning fs-6 px-3 py-2">
                                                {{ __('No license') }}
                                            </span>
                                            <div class="text-muted small mt-1">{{ __('You have no subscription linked to your account') }}</div>

                                            <div>Install <a href="https://obsidian.md/plugins?id=scrybble.ink">the
                                                    Obsidian plugin</a> and follow the steps to get started with your account.
                                            </div>
                                        </div>
                                    </div>
                                @elseif($licenseData['lifetime'])
                                    <div class="d-flex align-items-center">
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
                                                    <span class="badge bg-success fs-6 px-3 py-2">
                                                        {{ __('Active') }}
                                                    </span>
                                                    <div
                                                        class="text-muted small mt-1">{{ __('Your subscription is active') }}</div>
                                                </div>
                                            @else
                                                <div>
                                                    <span class="badge bg-danger fs-6 px-3 py-2"></span>
                                                    <div
                                                        class="text-muted small mt-1">{{ __('Your subscription needs attention') }}</div>
                                                </div>
                                            @endif
                                        </div>

                                        @if(isset($licenseData['licenseInformation']['subscription_id']))
                                            <div>
                                                <a href="https://app.gumroad.com/subscriptions/{{ $licenseData['licenseInformation']['subscription_id'] }}/manage"
                                                   class="btn btn-outline-primary">
                                                    {{ __('Manage Subscription') }}
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <div class="d-flex align-items-center">
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
