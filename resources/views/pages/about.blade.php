@extends('layouts.app')

@push('head')
    <?php $title = "Scrybble - About"; ?>

    <meta name="description"
          content="Meet the team behind Scrybble - the reMarkable-Obsidian integration that bridges analog and digital thinking. Built with transparency, community, and respect for your workflow.">
    <meta name="keywords" content="Scrybble team, about, reMarkable x Obsidian, Applied Communication Design">
@endpush

@section('content')
    <section class="bg-secondary-subtle p-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-2 fw-bolder">About Scrybble</h1>
                <p class="display-6 text-black" style="--bs-text-opacity: .65;">
                    Building bridges between analog and digital thinking, one workflow at a time.
                </p>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-4">Why Scrybble Exists</h2>
                    <p class="fs-5 mb-4">
                        There are many amazing tools and software in the world. reMarkable has created an amazing device for focused reading and writing work, but it doesn't connect well with the rest of the world.
                    </p>
                    <p class="mb-4">
                        Scrybble was born out of frustration for lack of further integration between devices and systems for knowledge workers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-body-tertiary p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="text-center mb-5">Meet the Team</h2>

                    <div class="grid gap-5 align-items-start">
                        <div class="g-col-12 text-center">
                            <div class="card border-0 bg-transparent">
                                <div class="card-body">
                                    <div class="bg-secondary rounded mb-3 overflow-hidden" style="height: 200px; width: 200px; margin: 0 auto;">
                                        <img width="1497" height="1500" class="img-fluid" src="img/portraits/Laura.webp" alt="Photo of Laura Brekelmans">
                                    </div>
                                    <h3>Laura Brekelmans</h3>
                                    <p class="text-muted">Founder & Developer</p>
                                    <p>Bsc in Embedded Systems & Computer Science. Believes technology should enhance human thinking, not replace it.</p>
                                </div>
                            </div>
                        </div>

                        <div class="g-col-12">
                            <h3 class="mb-4">The part of the team that actually does the important work</h3>
                            <div class="grid gap-4">
                                <div class="card border-primary g-col-lg-6 g-col-sm-12">
                                    <div class="card-body text-center">
                                        <div class="bg-primary rounded-circle mb-3 overflow-hidden" style="height: 200px; width: 200px; margin: 0 auto;">
                                            <img width="901" height="901" src="img/portraits/Pineapple.webp" class="img-fluid" alt="A photo of Pineapple, tortoiseshell cat">
                                        </div>
                                        <h5>Pineapple</h5>
                                        <p class="text-muted mb-2">Chief Security Officer & Strategic Operations Director</p>
                                        <small>Pineapple brings over 5 years of executive experience in high-stakes operational environments.
                                            She has successfully managed critical infrastructure protection across multiple facilities, implemented
                                            zero-breach security protocols, and directed strategic workforce optimization initiatives. Her leadership
                                            in crisis management and ability to maintain 24/7 operational awareness has been instrumental in
                                            preventing data loss incidents and maintaining organizational focus during critical development phases.
                                            Pineapple specializes in executive protection, perimeter security, and maintaining operational continuity
                                            in fast-paced technology environments.</small>
                                    </div>
                                </div>

                                <div class="card border-primary g-col-lg-6 g-col-sm-12">
                                    <div class="card-body text-center">
                                        <div class="bg-primary rounded-circle mb-3 overflow-hidden" style="height: 200px; width: 200px; margin: 0 auto;">
                                            <img width="1500" height="2000" src="img/portraits/Lemon.webp" class="img-fluid" alt="A photo of Lemon, tortoiseshell cat">
                                        </div>

                                        <h5>Lemon</h5>
                                        <p class="text-muted mb-2">Office cat</p>
                                        <small>Doesn't actually have any meaningful technical skills, but she's very sweet and makes the people around her happier.</small>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-5">
                        <h2 class="mb-4">Our Values</h2>
                        <p class="mb-0">
                            Scrybble is the first product under <a href="https://applied-communication.design">Applied Communication Design</a>—a strongly principled approach to building media and technology
                            guided by core values that prioritize actual human needs over growth metrics and engagement hacking.
                        </p>
                    </div>

                    <div class="grid gap-4 mb-5">
                        <div class="card border-primary g-col-6">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Genuine Collaboration</h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-3"><strong>What we look for:</strong></p>
                                <ul class="mb-3">
                                    <li>❗ <strong>Real problems</strong> - When we see people struggle, their problems are worth solving together</li>
                                    <li>🌟 <strong>Opportunities</strong> - By proposing solutions, we can invite meaningful contribution</li>
                                    <li>💝 <strong>Appreciation and acknowledgement</strong> - People working and delivering are rewarded with time, knowledge, privacy, recognition or whatever they ask for</li>
                                </ul>
                                <small class="text-muted">Important for being: connected, seen, helpful, productive</small>
                            </div>
                        </div>

                        <div class="card border-success g-col-6">
                            <div class="card-header bg-success text-white">
                                <h4 class="mb-0">Humane Business</h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-3"><strong>What we look for:</strong></p>
                                <ul class="mb-3">
                                    <li>⚖️ <strong>Transparent expectations</strong> - People understand upfront what they're getting, what it costs, and what problems it actually solves</li>
                                    <li>🌿 <strong>Respectful presence</strong> - Showing up in ways that feel natural and welcome rather than intrusive or pushy</li>
                                    <li>🧭 <strong>Informed decisions</strong> - People have enough information to decide for themselves whether our product fits their needs</li>
                                </ul>
                                <small class="text-muted">Important for being: honest, helpful, trustworthy</small>
                            </div>
                        </div>

                        <div class="card border-warning g-col-6">
                            <div class="card-header bg-warning text-dark">
                                <h4 class="mb-0">Thoughtful Service</h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-3"><strong>What we look for:</strong></p>
                                <ul class="mb-3">
                                    <li>🤲🏼 <strong>Invitations over broadcasts</strong> - Creating room for dialogue rather than one-way communication</li>
                                    <li>✨ <strong>Sparks of resonance</strong> - Find people whose eyes light up at possibilities and shared vision</li>
                                    <li>🌀 <strong>Continuity over episodes</strong> - Building on previous interactions over time</li>
                                </ul>
                                <small class="text-muted">Important for being: connected, part-of-a-greater-whole</small>
                            </div>
                        </div>

                        <div class="card border-info g-col-6">
                            <div class="card-header bg-info text-dark">
                                <h4 class="mb-0">Radical openness</h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-3"><strong>What we look for:</strong></p>
                                <ul class="mb-3">
                                    <li>📖 <strong>Open wherever possible</strong> - When creating or learning something, look for opportunities to package and share it with the wider community under the most permissive license possible</li>
                                    <li>💬 <strong>Business in conversation</strong> - Notice business and/or technical challenges or decisions that you could handle internally, and look for opportunities to involve the community or customers instead</li>
                                    <li>🧱 <strong>Cemented value-system</strong> - Notice opportunities to embed core values into organizational systems, legal structures, and processes rather than relying on cultural memory or individual choice</li>
                                </ul>
                                <small class="text-muted">Important for being: connected, part-of-a-greater-whole</small>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <p class="mb-4">
                            This isn't about being nice for marketing reasons. It's about proving that you can build sustainable,
                            profitable technology without exploiting your users' attention, data, or trust.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary text-white p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center mb-5">Community & Contributors</h2>
                    <p class="text-center mb-5">
                        Scrybble wouldn't exist without the contributions of developers, testers, and community members
                        who've helped shape it into what it is today.
                    </p>

                    <h3 class="mb-4">Open Source Contributors</h3>
                    <p class="mb-4">
                        Thank you to everyone who has contributed code, bug reports, feature requests, and testing to our open source components:
                    </p>

                    <div class="grid gap-3 mb-5">
                        <div class="g-col-6">
                            <div class="text-center p-3 bg-white bg-opacity-10 rounded">
                                <strong><a class="text-white" href="https://github.com/zegevlier">@Zegevlier</a></strong><br>
                                <small>Feature suggestions, solutions for rendering problems in <a href="https://github.com/Scrybbling-together/remarks" class="text-white">remarks</a></small>
                            </div>
                        </div>
                        <div class="g-col-6">
                            <div class="text-center p-3 bg-white bg-opacity-10 rounded">
                                <strong><a href="https://github.com/chemag" class="text-white"></a>@chemag</strong><br>
                                <small>Collaborated on data structure parsing in <a class="text-white" href="https://github.com/ricklupton/rmscene">rmscene</a></small>
                            </div>
                        </div>
                        <div class="g-col-6">
                            <div class="text-center p-3 bg-white bg-opacity-10 rounded">
                                <strong><a href="https://github.com/der-lu" class="text-white"></a>@der-lu</strong><br>
                                <small>Helped a lot with testing and feedback for the <a class="text-white" href="https://github.com/Scrybbling-together/zotero2remarkable_bridge">Zotero x reMarkable integration</a></small>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <p class="mb-3">Want to contribute? We welcome:</p>
                        <ul class="list-unstyled mb-4">
                            <li>• Bug reports and testing</li>
                            <li>• Feature ideas and use case feedback</li>
                            <li>• Documentation improvements</li>
                            <li>• Community support and discussion</li>
                        </ul>
                        <a href="{{ config('app.discord.invite') }}" class="btn btn-outline-light btn-lg">Join <strong>Scrybbling Together</strong> Discord Community</a>
                        <a class="btn btn-outline-light btn-lg" href="https://github.com/scrybbling-together">Check out the <strong>Scrybbling Together</strong> Github organization</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Questions?</h2>
                    <p class="mb-4">
                        Want to know more about our approach, have feedback about Scrybble, or just want to chat about
                        knowledge management workflows?
                    </p>
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="/support" class="btn btn-primary">Get Support</a>
                        <a href="mailto:{{ config('app.support_email') }}" class="btn btn-outline-secondary">Send Email</a>
                        <a class="btn btn-outline-primary" href="{{ config('app.discord.invite') }}">Join our <b>{{ config('app.discord.name') }}</b> Discord.</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
