@extends('layouts.app')

@push('head')
    <?php $title = "Scrybble - Privacy Policy"; ?>

    <meta name="description"
          content="Privacy Policy for Scrybble - Learn how we collect, use, and protect your personal information when using our reMarkable-Obsidian integration service. Transparent data practices and your privacy rights.">
    <meta name="keywords" content="Scrybble privacy policy, data protection, personal information, GDPR, reMarkable data, privacy rights, data security, cookie policy">

    <!-- Additional privacy-related meta tags -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Streamsoft">

    <!-- Open Graph tags for social sharing -->
    <meta property="og:title" content="Privacy Policy - Scrybble">
    <meta property="og:description" content="Learn how Scrybble protects your privacy and handles your personal data. Clear information about data collection, usage, and your rights.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Privacy Policy - Scrybble">
    <meta name="twitter:description" content="Learn how Scrybble protects your privacy and handles your personal data. Clear information about data collection, usage, and your rights.">
@endpush

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <h1 class="display-4 text-center mb-4">PRIVACY POLICY</h1>

                <p class="text-muted text-center mb-5">
                    <strong>Last updated July 21, 2025</strong>
                </p>

                <section class="mb-5">
                    <p class="lead">
                        This Privacy Notice for <strong>Streamsoft</strong> (<strong>"we,"</strong>
                        <strong>"us,"</strong> or <strong>"our"</strong>), describes how and why we might access,
                        collect, store, use, and/or share (<strong>"process"</strong>) your personal information when
                        you use our services (<strong>"Services"</strong>), including when you:
                    </p>

                    <ul class="list-unstyled ms-3">
                        <li class="mb-2">• Visit our website at <a href="https://www.scrybble.ink"
                                                                   class="text-decoration-none">https://www.scrybble.ink</a>
                            or any website of ours that links to this Privacy Notice
                        </li>
                        <li class="mb-2">• Engage with us in other related ways, including any sales, marketing, or
                            events
                        </li>
                    </ul>

                    <p><strong>Questions or concerns?</strong> Reading this Privacy Notice will help you understand your
                        privacy rights and choices. We are responsible for making decisions about how your personal
                        information is processed. If you do not agree with our policies and practices, please do not use
                        our Services. If you still have any questions or concerns, please contact us at <a
                            href="mailto:mail@scrybble.ink" class="text-decoration-none">mail@scrybble.ink</a>.</p>
                </section>

                <section class="mb-5">
                    <h2 class="h3 mb-4">SUMMARY OF KEY POINTS</h2>

                    <p class="fst-italic"><strong><em>This summary provides key points from our Privacy Notice, but you
                                can find out more details about any of these topics by clicking the link following each
                                key point or by using our </em></strong><a href="#toc"
                                                                           class="text-decoration-none"><strong><em>table
                                    of contents</em></strong></a><strong><em> below to find the section you are looking
                                for.</em></strong></p>

                    <div class="mb-3">
                        <p><strong>What personal information do we process?</strong> When you visit, use, or navigate
                            our Services, we may process personal information depending on how you interact with us and
                            the Services, the choices you make, and the products and features you use. Learn more about
                            <a href="#personalinfo" class="text-decoration-none">personal information you disclose to
                                us</a>.</p>
                    </div>

                    <div class="mb-3">
                        <p><strong>Do we process any sensitive personal information?</strong> Some of the information
                            may be considered "special" or "sensitive" in certain jurisdictions, for example your racial
                            or ethnic origins, sexual orientation, and religious beliefs. We may process sensitive
                            personal information when necessary with your consent or as otherwise permitted by
                            applicable law. Learn more about <a href="#sensitiveinfo" class="text-decoration-none">sensitive
                                information we process</a>.</p>
                    </div>

                    <div class="mb-3">
                        <p><strong>Do we collect any information from third parties?</strong> We do not collect any
                            information from third parties.</p>
                    </div>

                    <div class="mb-3">
                        <p><strong>How do we process your information?</strong> We process your information to provide,
                            improve, and administer our Services, communicate with you, for security and fraud
                            prevention, and to comply with law. We may also process your information for other purposes
                            with your consent. We process your information only when we have a valid legal reason to do
                            so. Learn more about <a href="#infouse" class="text-decoration-none">how we process your
                                information</a>.</p>
                    </div>

                    <div class="mb-3">
                        <p><strong>In what situations and with which parties do we share personal information?</strong>
                            We may share information in specific situations and with specific third parties. Learn more
                            about <a href="#whoshare" class="text-decoration-none">when and with whom we share your
                                personal information</a>.</p>
                    </div>

                    <div class="mb-3">
                        <p><strong>How do we keep your information safe?</strong> We have adequate organizational and
                            technical processes and procedures in place to protect your personal information. However,
                            no electronic transmission over the internet or information storage technology can be
                            guaranteed to be 100% secure, so we cannot promise or guarantee that hackers,
                            cybercriminals, or other unauthorized third parties will not be able to defeat our security
                            and improperly collect, access, steal, or modify your information. Learn more about <a
                                href="#infosafe" class="text-decoration-none">how we keep your information safe</a>.</p>
                    </div>

                    <div class="mb-3">
                        <p><strong>What are your rights?</strong> Depending on where you are located geographically, the
                            applicable privacy law may mean you have certain rights regarding your personal information.
                            Learn more about <a href="#privacyrights" class="text-decoration-none">your privacy
                                rights</a>.</p>
                    </div>

                    <div class="mb-3">
                        <p><strong>How do you exercise your rights?</strong> The easiest way to exercise your rights is
                            by visiting <a href="https://www.scrybble.ink/data-request" class="text-decoration-none">https://www.scrybble.ink/data-request</a>,
                            or by contacting us. We will consider and act upon any request in accordance with applicable
                            data protection laws.</p>
                    </div>

                    <p>Want to learn more about what we do with any information we collect? <a href="#toc"
                                                                                               class="text-decoration-none">Review
                            the Privacy Notice in full</a>.</p>
                </section>

                <section id="toc" class="mb-5">
                    <h2 class="h3 mb-4">TABLE OF CONTENTS</h2>

                    <div class="list-group list-group-flush">
                        <a href="#infocollect" class="list-group-item list-group-item-action border-0 px-0">1. WHAT
                            INFORMATION DO WE COLLECT?</a>
                        <a href="#infouse" class="list-group-item list-group-item-action border-0 px-0">2. HOW DO WE
                            PROCESS YOUR INFORMATION?</a>
                        <a href="#legalbases" class="list-group-item list-group-item-action border-0 px-0">3. WHAT LEGAL
                            BASES DO WE RELY ON TO PROCESS YOUR PERSONAL INFORMATION?</a>
                        <a href="#whoshare" class="list-group-item list-group-item-action border-0 px-0">4. WHEN AND
                            WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</a>
                        <a href="#cookies" class="list-group-item list-group-item-action border-0 px-0">5. DO WE USE
                            COOKIES AND OTHER TRACKING TECHNOLOGIES?</a>
                        <a href="#sociallogins" class="list-group-item list-group-item-action border-0 px-0">6. HOW DO
                            WE HANDLE YOUR SOCIAL LOGINS?</a>
                        <a href="#intltransfers" class="list-group-item list-group-item-action border-0 px-0">7. IS YOUR
                            INFORMATION TRANSFERRED INTERNATIONALLY?</a>
                        <a href="#inforetain" class="list-group-item list-group-item-action border-0 px-0">8. HOW LONG
                            DO WE KEEP YOUR INFORMATION?</a>
                        <a href="#infosafe" class="list-group-item list-group-item-action border-0 px-0">9. HOW DO WE
                            KEEP YOUR INFORMATION SAFE?</a>
                        <a href="#infominors" class="list-group-item list-group-item-action border-0 px-0">10. DO WE
                            COLLECT INFORMATION FROM MINORS?</a>
                        <a href="#privacyrights" class="list-group-item list-group-item-action border-0 px-0">11. WHAT
                            ARE YOUR PRIVACY RIGHTS?</a>
                        <a href="#DNT" class="list-group-item list-group-item-action border-0 px-0">12. CONTROLS FOR
                            DO-NOT-TRACK FEATURES</a>
                        <a href="#uslaws" class="list-group-item list-group-item-action border-0 px-0">13. DO UNITED
                            STATES RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</a>
                        <a href="#policyupdates" class="list-group-item list-group-item-action border-0 px-0">14. DO WE
                            MAKE UPDATES TO THIS NOTICE?</a>
                        <a href="#contact" class="list-group-item list-group-item-action border-0 px-0">15. HOW CAN YOU
                            CONTACT US ABOUT THIS NOTICE?</a>
                        <a href="#request" class="list-group-item list-group-item-action border-0 px-0">16. HOW CAN YOU
                            REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</a>
                    </div>
                </section>

                <section id="infocollect" class="mb-5">
                    <h2 class="h3 mb-4">1. WHAT INFORMATION DO WE COLLECT?</h2>

                    <h3 id="personalinfo" class="h5 mb-3">Personal information you disclose to us</h3>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>We collect personal information that
                            you provide to us.</em></p>

                    <p>We collect personal information that you voluntarily provide to us when you register on the
                        Services, express an interest in obtaining information about us or our products and Services,
                        when you participate in activities on the Services, or otherwise when you contact us.</p>

                    <p><strong>Personal Information Provided by You.</strong> The personal information that we collect
                        depends on the context of your interactions with us and the Services, the choices you make, and
                        the products and features you use. The personal information we collect may include the
                        following:</p>

                    <ul>
                        <li>email addresses</li>
                        <li>usernames</li>
                        <li>passwords</li>
                        <li>contact preferences</li>
                        <li>contact or authentication data</li>
                        <li>mailing addresses</li>
                    </ul>

                    <div id="sensitiveinfo" class="mt-4">
                        <p><strong>Sensitive Information.</strong> When necessary, with your consent or as otherwise
                            permitted by applicable law, we process the following categories of sensitive information:
                        </p>
                        <ul>
                            <li>student data</li>
                        </ul>
                    </div>

                    <p><strong>Payment Data.</strong> We may collect data necessary to process your payment if you
                        choose to make purchases, such as your payment instrument number, and the security code
                        associated with your payment instrument. All payment data is handled and stored by Gumroad. You
                        may find their privacy notice link(s) here: <a href="https://gumroad.com/privacy"
                                                                       class="text-decoration-none">https://gumroad.com/privacy</a>.
                    </p>

                    <p><strong>Social Media Login Data.</strong> We may provide you with the option to register with us
                        using your existing social media account details, like your Facebook, X, or other social media
                        account. If you choose to register in this way, we will receive certain profile information
                        about you from the social media provider, as described in the section called "<a
                            href="#sociallogins" class="text-decoration-none">HOW DO WE HANDLE YOUR SOCIAL LOGINS?</a>"
                        below.</p>

                    <p>All personal information that you provide to us must be true, complete, and accurate, and you
                        must notify us of any changes to such personal information.</p>

                    <h3 class="h5 mt-5 mb-3">Information automatically collected</h3>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>Some information — such as your
                            Internet Protocol (IP) address and/or browser and device characteristics — is collected
                            automatically when you visit our Services.</em></p>

                    <p>We automatically collect certain information when you visit, use, or navigate the Services. This
                        information does not reveal your specific identity (like your name or contact information) but
                        may include device and usage information, such as your IP address, browser and device
                        characteristics, operating system, language preferences, referring URLs, device name, country,
                        location, information about how and when you use our Services, and other technical information.
                        This information is primarily needed to maintain the security and operation of our Services, and
                        for our internal analytics and reporting purposes.</p>

                    <p>Like many businesses, we also collect information through cookies and similar technologies. You
                        can find out more about this in our Cookie Notice: <a
                            href="https://www.scrybble.ink/cookie-policy" class="text-decoration-none">https://www.scrybble.ink/cookie-policy</a>.
                    </p>

                    <p>The information we collect includes:</p>

                    <ul>
                        <li><em>Log and Usage Data.</em> Log and usage data is service-related, diagnostic, usage, and
                            performance information our servers automatically collect when you access or use our
                            Services and which we record in log files. Depending on how you interact with us, this log
                            data may include your IP address, device information, browser type, and settings and
                            information about your activity in the Services (such as the date/time stamps associated
                            with your usage, pages and files viewed, searches, and other actions you take such as which
                            features you use), device event information (such as system activity, error reports
                            (sometimes called "crash dumps"), and hardware settings).
                        </li>
                        <li><em>Device Data.</em> We collect device data such as information about your computer, phone,
                            tablet, or other device you use to access the Services. Depending on the device used, this
                            device data may include information such as your IP address (or proxy server), device and
                            application identification numbers, location, browser type, hardware model, Internet service
                            provider and/or mobile carrier, operating system, and system configuration information.
                        </li>
                        <li><em>Location Data.</em> We collect location data such as information about your device's
                            location, which can be either precise or imprecise. How much information we collect depends
                            on the type and settings of the device you use to access the Services. For example, we may
                            use GPS and other technologies to collect geolocation data that tells us your current
                            location (based on your IP address). You can opt out of allowing us to collect this
                            information either by refusing access to the information or by disabling your Location
                            setting on your device. However, if you choose to opt out, you may not be able to use
                            certain aspects of the Services.
                        </li>
                    </ul>
                </section>

                <section id="infouse" class="mb-5">
                    <h2 class="h3 mb-4">2. HOW DO WE PROCESS YOUR INFORMATION?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>We process your information to
                            provide, improve, and administer our Services, communicate with you, for security and fraud
                            prevention, and to comply with law. We process the personal information for the following
                            purposes listed below. We may also process your information for other purposes only with
                            your prior explicit consent.</em></p>

                    <p><strong>We process your personal information for a variety of reasons, depending on how you
                            interact with our Services, including:</strong></p>

                    <ul>
                        <li><strong>To facilitate account creation and authentication and otherwise manage user
                                accounts.</strong> We may process your information so you can create and log in to your
                            account, as well as keep your account in working order.
                        </li>
                        <li><strong>To deliver and facilitate delivery of services to the user.</strong> We may process
                            your information to provide you with the requested service.
                        </li>
                        <li><strong>To respond to user inquiries/offer support to users.</strong> We may process your
                            information to respond to your inquiries and solve any potential issues you might have with
                            the requested service.
                        </li>
                        <li><strong>To send administrative information to you.</strong> We may process your information
                            to send you details about our products and services, changes to our terms and policies, and
                            other similar information.
                        </li>
                        <li><strong>To fulfill and manage your orders.</strong> We may process your information to
                            fulfill and manage your orders, payments, returns, and exchanges made through the Services.
                        </li>
                        <li><strong>To save or protect an individual's vital interest.</strong> We may process your
                            information when necessary to save or protect an individual's vital interest, such as to
                            prevent harm.
                        </li>
                    </ul>
                </section>

                <section id="legalbases" class="mb-5">
                    <h2 class="h3 mb-4">3. WHAT LEGAL BASES DO WE RELY ON TO PROCESS YOUR PERSONAL INFORMATION?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>We only process your personal
                            information when we believe it is necessary and we have a valid legal reason (i.e., legal
                            basis) to do so under applicable law, like with your consent, to comply with laws, to
                            provide you with services to enter into or fulfill our contractual obligations, to protect
                            your rights, or to fulfill our legitimate business interests.</em></p>

                    <p class="fst-italic"><strong><u>If you are located in the EU or UK, this section applies to
                                you.</u></strong></p>

                    <p>The General Data Protection Regulation (GDPR) and UK GDPR require us to explain the valid legal
                        bases we rely on in order to process your personal information. As such, we may rely on the
                        following legal bases to process your personal information:</p>

                    <ul>
                        <li><strong>Consent.</strong> We may process your information if you have given us permission
                            (i.e., consent) to use your personal information for a specific purpose. You can withdraw
                            your consent at any time. Learn more about <a href="#withdrawconsent"
                                                                          class="text-decoration-none">withdrawing your
                                consent</a>.
                        </li>
                        <li><strong>Performance of a Contract.</strong> We may process your personal information when we
                            believe it is necessary to fulfill our contractual obligations to you, including providing
                            our Services or at your request prior to entering into a contract with you.
                        </li>
                        <li><strong>Legal Obligations.</strong> We may process your information where we believe it is
                            necessary for compliance with our legal obligations, such as to cooperate with a law
                            enforcement body or regulatory agency, exercise or defend our legal rights, or disclose your
                            information as evidence in litigation in which we are involved.
                        </li>
                        <li><strong>Vital Interests.</strong> We may process your information where we believe it is
                            necessary to protect your vital interests or the vital interests of a third party, such as
                            situations involving potential threats to the safety of any person.
                        </li>
                    </ul>

                    <p>In legal terms, we are generally the "data controller" under European data protection laws of the
                        personal information described in this Privacy Notice, since we determine the means and/or
                        purposes of the data processing we perform. This Privacy Notice does not apply to the personal
                        information we process as a "data processor" on behalf of our customers. In those situations,
                        the customer that we provide services to and with whom we have entered into a data processing
                        agreement is the "data controller" responsible for your personal information, and we merely
                        process your information on their behalf in accordance with your instructions. If you want to
                        know more about our customers' privacy practices, you should read their privacy policies and
                        direct any questions you have to them.</p>

                    <p class="fst-italic"><strong><u>If you are located in Canada, this section applies to
                                you.</u></strong></p>

                    <p>We may process your information if you have given us specific permission (i.e., express consent)
                        to use your personal information for a specific purpose, or in situations where your permission
                        can be inferred (i.e., implied consent). You can <a href="#withdrawconsent"
                                                                            class="text-decoration-none">withdraw your
                            consent</a> at any time.</p>

                    <p>In some exceptional cases, we may be legally permitted under applicable law to process your
                        information without your consent, including, for example:</p>

                    <ul>
                        <li>If collection is clearly in the interests of an individual and consent cannot be obtained in
                            a timely way
                        </li>
                        <li>For investigations and fraud detection and prevention</li>
                        <li>For business transactions provided certain conditions are met</li>
                        <li>If it is contained in a witness statement and the collection is necessary to assess,
                            process, or settle an insurance claim
                        </li>
                        <li>For identifying injured, ill, or deceased persons and communicating with next of kin</li>
                        <li>If we have reasonable grounds to believe an individual has been, is, or may be victim of
                            financial abuse
                        </li>
                        <li>If it is reasonable to expect collection and use with consent would compromise the
                            availability or the accuracy of the information and the collection is reasonable for
                            purposes related to investigating a breach of an agreement or a contravention of the laws of
                            Canada or a province
                        </li>
                        <li>If disclosure is required to comply with a subpoena, warrant, court order, or rules of the
                            court relating to the production of records
                        </li>
                        <li>If it was produced by an individual in the course of their employment, business, or
                            profession and the collection is consistent with the purposes for which the information was
                            produced
                        </li>
                        <li>If the collection is solely for journalistic, artistic, or literary purposes</li>
                        <li>If the information is publicly available and is specified by the regulations</li>
                        <li>We may disclose de-identified information for approved research or statistics projects,
                            subject to ethics oversight and confidentiality commitments
                        </li>
                    </ul>
                </section>

                <section id="whoshare" class="mb-5">
                    <h2 class="h3 mb-4">4. WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>We may share information in specific
                            situations described in this section and/or with the following third parties.</em></p>

                    <p><strong>Vendors, Consultants, and Other Third-Party Service Providers.</strong> We may share your
                        data with third-party vendors, service providers, contractors, or agents ("third parties") who
                        perform services for us or on our behalf and require access to such information to do that work.
                        We have contracts in place with our third parties, which are designed to help safeguard your
                        personal information. This means that they cannot do anything with your personal information
                        unless we have instructed them to do it. They will also not share your personal information with
                        any organization apart from us. They also commit to protect the data they hold on our behalf and
                        to retain it for the period we instruct.</p>

                    <p>The third parties we may share personal information with are as follows:</p>

                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="h6"><strong>AI Service Providers</strong></h4>
                            <p class="ms-3">Anthropic</p>

                            <h4 class="h6"><strong>Allow Users to Connect to Their Third-Party Accounts</strong></h4>
                            <p class="ms-3">reMarkable account and Discord account</p>

                            <h4 class="h6"><strong>Cloud Computing Services</strong></h4>
                            <p class="ms-3">TransIP</p>

                            <h4 class="h6"><strong>Data Backup and Security</strong></h4>
                            <p class="ms-3">TransIP</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="h6"><strong>Invoice and Billing</strong></h4>
                            <p class="ms-3">Stripe, PayPal and Gumroad</p>

                            <h4 class="h6"><strong>Web and Mobile Analytics</strong></h4>
                            <p class="ms-3">Ahrefs</p>

                            <h4 class="h6"><strong>Website Hosting</strong></h4>
                            <p class="ms-3">TransIP</p>

                            <h4 class="h6"><strong>Website Performance Monitoring</strong></h4>
                            <p class="ms-3">Sentry</p>

                            <h4 class="h6"><strong>Website Testing</strong></h4>
                            <p class="ms-3">Ahrefs and Google Website Optimizer</p>
                        </div>
                    </div>

                    <p>We also may need to share your personal information in the following situations:</p>

                    <ul>
                        <li><strong>Business Transfers.</strong> We may share or transfer your information in connection
                            with, or during negotiations of, any merger, sale of company assets, financing, or
                            acquisition of all or a portion of our business to another company.
                        </li>
                        <li><strong>Business Partners.</strong> We may share your information with our business partners
                            to offer you certain products, services, or promotions.
                        </li>
                    </ul>
                </section>

                <section id="cookies" class="mb-5">
                    <h2 class="h3 mb-4">5. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>We may use cookies and other tracking
                            technologies to collect and store your information.</em></p>

                    <p>We may use cookies and similar tracking technologies (like web beacons and pixels) to gather
                        information when you interact with our Services. Some online tracking technologies help us
                        maintain the security of our Services and your account, prevent crashes, fix bugs, save your
                        preferences, and assist with basic site functions.</p>

                    <p>We also permit third parties and service providers to use online tracking technologies on our
                        Services for analytics and advertising, including to help manage and display advertisements, to
                        tailor advertisements to your interests, or to send abandoned shopping cart reminders (depending
                        on your communication preferences). The third parties and service providers use their technology
                        to provide advertising about products and services tailored to your interests which may appear
                        either on our Services or on other websites.</p>

                    <p>To the extent these online tracking technologies are deemed to be a "sale"/"sharing" (which
                        includes targeted advertising, as defined under the applicable laws) under applicable US state
                        laws, you can opt out of these online tracking technologies by submitting a request as described
                        below under section "<a href="#uslaws" class="text-decoration-none">DO UNITED STATES RESIDENTS
                            HAVE SPECIFIC PRIVACY RIGHTS?</a>"</p>

                    <p>Specific information about how we use such technologies and how you can refuse certain cookies is
                        set out in our Cookie Notice: <a href="https://www.scrybble.ink/cookie-policy"
                                                         class="text-decoration-none">https://www.scrybble.ink/cookie-policy</a>.
                    </p>
                </section>

                <section id="sociallogins" class="mb-5">
                    <h2 class="h3 mb-4">6. HOW DO WE HANDLE YOUR SOCIAL LOGINS?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>If you choose to register or log in to
                            our Services using a social media account, we may have access to certain information about
                            you.</em></p>

                    <p>Our Services offer you the ability to register and log in using your third-party social media
                        account details (like your Facebook or X logins). Where you choose to do this, we will receive
                        certain profile information about you from your social media provider. The profile information
                        we receive may vary depending on the social media provider concerned, but will often include
                        your name, email address, friends list, and profile picture, as well as other information you
                        choose to make public on such a social media platform.</p>

                    <p>We will use the information we receive only for the purposes that are described in this Privacy
                        Notice or that are otherwise made clear to you on the relevant Services. Please note that we do
                        not control, and are not responsible for, other uses of your personal information by your
                        third-party social media provider. We recommend that you review their privacy notice to
                        understand how they collect, use, and share your personal information, and how you can set your
                        privacy preferences on their sites and apps.</p>
                </section>

                <section id="intltransfers" class="mb-5">
                    <h2 class="h3 mb-4">7. IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>We may transfer, store, and process
                            your information in countries other than your own.</em></p>

                    <p>Our servers are located in the United States. If you are accessing our Services from outside the
                        United States, please be aware that your information may be transferred to, stored by, and
                        processed by us in our facilities and in the facilities of the third parties with whom we may
                        share your personal information (see "<a href="#whoshare" class="text-decoration-none">WHEN AND
                            WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</a>" above), in the United States, and
                        other countries.</p>

                    <p>If you are a resident in the European Economic Area (EEA), United Kingdom (UK), or Switzerland,
                        then these countries may not necessarily have data protection laws or other similar laws as
                        comprehensive as those in your country. However, we will take all necessary measures to protect
                        your personal information in accordance with this Privacy Notice and applicable law.</p>

                    <p><strong>European Commission's Standard Contractual Clauses:</strong></p>

                    <p>We have implemented measures to protect your personal information, including by using the
                        European Commission's Standard Contractual Clauses for transfers of personal information between
                        our group companies and between us and our third-party providers. These clauses require all
                        recipients to protect all personal information that they process originating from the EEA or UK
                        in accordance with European data protection laws and regulations. Our Standard Contractual
                        Clauses can be provided upon request. We have implemented similar appropriate safeguards with
                        our third-party service providers and partners and further details can be provided upon
                        request.</p>
                </section>

                <section id="inforetain" class="mb-5">
                    <h2 class="h3 mb-4">8. HOW LONG DO WE KEEP YOUR INFORMATION?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>We keep your information for as long
                            as necessary to fulfill the purposes outlined in this Privacy Notice unless otherwise
                            required by law.</em></p>

                    <p>We will only keep your personal information for as long as it is necessary for the purposes set
                        out in this Privacy Notice, unless a longer retention period is required or permitted by law
                        (such as tax, accounting, or other legal requirements). No purpose in this notice will require
                        us keeping your personal information for longer than three (3) months past the termination of
                        the user's account.</p>

                    <p>When we have no ongoing legitimate business need to process your personal information, we will
                        either delete or anonymize such information, or, if this is not possible (for example, because
                        your personal information has been stored in backup archives), then we will securely store your
                        personal information and isolate it from any further processing until deletion is possible.</p>
                </section>

                <section id="infosafe" class="mb-5">
                    <h2 class="h3 mb-4">9. HOW DO WE KEEP YOUR INFORMATION SAFE?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>We aim to protect your personal
                            information through a system of organizational and technical security measures.</em></p>

                    <p>We have implemented appropriate and reasonable technical and organizational security measures
                        designed to protect the security of any personal information we process. However, despite our
                        safeguards and efforts to secure your information, no electronic transmission over the Internet
                        or information storage technology can be guaranteed to be 100% secure, so we cannot promise or
                        guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to
                        defeat our security and improperly collect, access, steal, or modify your information. Although
                        we will do our best to protect your personal information, transmission of personal information
                        to and from our Services is at your own risk. You should only access the Services within a
                        secure environment.</p>
                </section>

                <section id="infominors" class="mb-5">
                    <h2 class="h3 mb-4">10. DO WE COLLECT INFORMATION FROM MINORS?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>We do not knowingly collect data from
                            or market to children under 18 years of age or the equivalent age as specified by law in
                            your jurisdiction.</em></p>

                    <p>We do not knowingly collect, solicit data from, or market to children under 18 years of age or
                        the equivalent age as specified by law in your jurisdiction, nor do we knowingly sell such
                        personal information. By using the Services, you represent that you are at least 18 or the
                        equivalent age as specified by law in your jurisdiction or that you are the parent or guardian
                        of such a minor and consent to such minor dependent's use of the Services. If we learn that
                        personal information from users less than 18 years of age or the equivalent age as specified by
                        law in your jurisdiction has been collected, we will deactivate the account and take reasonable
                        measures to promptly delete such data from our records. If you become aware of any data we may
                        have collected from children under age 18 or the equivalent age as specified by law in your
                        jurisdiction, please contact us at Laura Brekelmans.</p>
                </section>

                <section id="privacyrights" class="mb-5">
                    <h2 class="h3 mb-4">11. WHAT ARE YOUR PRIVACY RIGHTS?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>Depending on your state of residence
                            in the US or in some regions, such as the European Economic Area (EEA), United Kingdom (UK),
                            Switzerland, and Canada, you have rights that allow you greater access to and control over
                            your personal information. You may review, change, or terminate your account at any time,
                            depending on your country, province, or state of residence.</em></p>

                    <p>In some regions (like the EEA, UK, Switzerland, and Canada), you have certain rights under
                        applicable data protection laws. These may include the right (i) to request access and obtain a
                        copy of your personal information, (ii) to request rectification or erasure; (iii) to restrict
                        the processing of your personal information; (iv) if applicable, to data portability; and (v)
                        not to be subject to automated decision-making. If a decision that produces legal or similarly
                        significant effects is made solely by automated means, we will inform you, explain the main
                        factors, and offer a simple way to request human review. In certain circumstances, you may also
                        have the right to object to the processing of your personal information. You can make such a
                        request by contacting us by using the contact details provided in the section "<a
                            href="#contact" class="text-decoration-none">HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</a>"
                        below.</p>

                    <p>We will consider and act upon any request in accordance with applicable data protection laws.</p>

                    <p>If you are located in the EEA or UK and you believe we are unlawfully processing your personal
                        information, you also have the right to complain to your <a
                            href="https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm"
                            class="text-decoration-none" target="_blank">Member State data protection authority</a> or
                        <a href="https://ico.org.uk/make-a-complaint/data-protection-complaints/data-protection-complaints/"
                           class="text-decoration-none" target="_blank">UK data protection authority</a>.</p>

                    <p>If you are located in Switzerland, you may contact the <a
                            href="https://www.edoeb.admin.ch/edoeb/en/home.html" class="text-decoration-none"
                            target="_blank">Federal Data Protection and Information Commissioner</a>.</p>

                    <div id="withdrawconsent" class="mt-4">
                        <p><strong><u>Withdrawing your consent:</u></strong> If we are relying on your consent to
                            process your personal information, which may be express and/or implied consent depending on
                            the applicable law, you have the right to withdraw your consent at any time. You can
                            withdraw your consent at any time by contacting us by using the contact details provided in
                            the section "<a href="#contact" class="text-decoration-none">HOW CAN YOU CONTACT US ABOUT
                                THIS NOTICE?</a>" below or updating your preferences.</p>

                        <p>However, please note that this will not affect the lawfulness of the processing before its
                            withdrawal nor, when applicable law allows, will it affect the processing of your personal
                            information conducted in reliance on lawful processing grounds other than consent.</p>

                        <p><strong><u>Opting out of marketing and promotional communications:</u></strong> You can
                            unsubscribe from our marketing and promotional communications at any time by clicking on the
                            unsubscribe link in the emails that we send, or by contacting us using the details provided
                            in the section "<a href="#contact" class="text-decoration-none">HOW CAN YOU CONTACT US ABOUT
                                THIS NOTICE?</a>" below. You will then be removed from the marketing lists. However, we
                            may still communicate with you — for example, to send you service-related messages that are
                            necessary for the administration and use of your account, to respond to service requests, or
                            for other non-marketing purposes.</p>
                    </div>

                    <h3 class="h5 mt-4 mb-3">Account Information</h3>

                    <p>If you would at any time like to review or change the information in your account or terminate
                        your account, you can:</p>

                    <ul>
                        <li>Contact us using the contact information provided.</li>
                        <li>Log in to your account settings and update your user account.</li>
                    </ul>

                    <p>Upon your request to terminate your account, we will deactivate or delete your account and
                        information from our active databases. However, we may retain some information in our files to
                        prevent fraud, troubleshoot problems, assist with any investigations, enforce our legal terms
                        and/or comply with applicable legal requirements.</p>

                    <p><strong><u>Cookies and similar technologies:</u></strong> Most Web browsers are set to accept
                        cookies by default. If you prefer, you can usually choose to set your browser to remove cookies
                        and to reject cookies. If you choose to remove cookies or reject cookies, this could affect
                        certain features or services of our Services. For further information, please see our Cookie
                        Notice: <a href="https://www.scrybble.ink/cookie-policy" class="text-decoration-none">https://www.scrybble.ink/cookie-policy</a>.
                    </p>

                    <p>If you have questions or comments about your privacy rights, you may email us at <a
                            href="mailto:mail@scrybble.ink" class="text-decoration-none">mail@scrybble.ink</a>.</p>
                </section>

                <section id="DNT" class="mb-5">
                    <h2 class="h3 mb-4">12. CONTROLS FOR DO-NOT-TRACK FEATURES</h2>

                    <p>Most web browsers and some mobile operating systems and mobile applications include a
                        Do-Not-Track ("DNT") feature or setting you can activate to signal your privacy preference not
                        to have data about your online browsing activities monitored and collected. At this stage, no
                        uniform technology standard for recognizing and implementing DNT signals has been finalized. As
                        such, we do not currently respond to DNT browser signals or any other mechanism that
                        automatically communicates your choice not to be tracked online. If a standard for online
                        tracking is adopted that we must follow in the future, we will inform you about that practice in
                        a revised version of this Privacy Notice.</p>

                    <p>California law requires us to let you know how we respond to web browser DNT signals. Because
                        there currently is not an industry or legal standard for recognizing or honoring DNT signals, we
                        do not respond to them at this time.</p>
                </section>

                <section id="uslaws" class="mb-5">
                    <h2 class="h3 mb-4">13. DO UNITED STATES RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>If you are a resident of, you may have
                            the right to request access to and receive details about the personal information we
                            maintain about you and how we have processed it, correct inaccuracies, get a copy of, or
                            delete your personal information. You may also have the right to withdraw your consent to
                            our processing of your personal information. These rights may be limited in some
                            circumstances by applicable law. More information is provided below.</em></p>

                    <h3 class="h5 mt-4 mb-3">Categories of Personal Information We Collect</h3>

                    <p>The table below shows the categories of personal information we have collected in the past twelve
                        (12) months. The table includes illustrative examples of each category and does not reflect the
                        personal information we collect from you. For a comprehensive inventory of all personal
                        information we process, please refer to the section "<a href="#infocollect"
                                                                                class="text-decoration-none">WHAT
                            INFORMATION DO WE COLLECT?</a>"</p>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col">Examples</th>
                                <th scope="col">Collected</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>A. Identifiers</td>
                                <td>Contact details, such as real name, alias, postal address, telephone or mobile
                                    contact number, unique personal identifier, online identifier, Internet Protocol
                                    address, email address, and account name
                                </td>
                                <td class="text-center">YES</td>
                            </tr>
                            <tr>
                                <td>B. Protected classification characteristics under state or federal law</td>
                                <td>Gender, age, date of birth, race and ethnicity, national origin, marital status, and
                                    other demographic data
                                </td>
                                <td class="text-center">NO</td>
                            </tr>
                            <tr>
                                <td>C. Commercial information</td>
                                <td>Transaction information, purchase history, financial details, and payment
                                    information
                                </td>
                                <td class="text-center">YES</td>
                            </tr>
                            <tr>
                                <td>D. Biometric information</td>
                                <td>Fingerprints and voiceprints</td>
                                <td class="text-center">NO</td>
                            </tr>
                            <tr>
                                <td>E. Internet or other similar network activity</td>
                                <td>Browsing history, search history, online behavior, interest data, and interactions
                                    with our and other websites, applications, systems, and advertisements
                                </td>
                                <td class="text-center">YES</td>
                            </tr>
                            <tr>
                                <td>F. Geolocation data</td>
                                <td>Device location</td>
                                <td class="text-center">NO</td>
                            </tr>
                            <tr>
                                <td>G. Audio, electronic, sensory, or similar information</td>
                                <td>Images and audio, video or call recordings created in connection with our business
                                    activities
                                </td>
                                <td class="text-center">NO</td>
                            </tr>
                            <tr>
                                <td>H. Professional or employment-related information</td>
                                <td>Business contact details in order to provide you our Services at a business level or
                                    job title, work history, and professional qualifications if you apply for a job with
                                    us
                                </td>
                                <td class="text-center">YES</td>
                            </tr>
                            <tr>
                                <td>I. Education Information</td>
                                <td>Student records and directory information</td>
                                <td class="text-center">NO</td>
                            </tr>
                            <tr>
                                <td>J. Inferences drawn from collected personal information</td>
                                <td>Inferences drawn from any of the collected personal information listed above to
                                    create a profile or summary about, for example, an individual's preferences and
                                    characteristics
                                </td>
                                <td class="text-center">NO</td>
                            </tr>
                            <tr>
                                <td>K. Sensitive personal Information</td>
                                <td>Account login information</td>
                                <td class="text-center">YES</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <p>We only collect sensitive personal information, as defined by applicable privacy laws or the
                        purposes allowed by law or with your consent. Sensitive personal information may be used, or
                        disclosed to a service provider or contractor, for additional, specified purposes. You may have
                        the right to limit the use or disclosure of your sensitive personal information. We do not
                        collect or process sensitive personal information for the purpose of inferring characteristics
                        about you.</p>

                    <p>We may also collect other personal information outside of these categories through instances
                        where you interact with us in person, online, or by phone or mail in the context of:</p>

                    <ul>
                        <li>Receiving help through our customer support channels;</li>
                        <li>Participation in customer surveys or contests; and</li>
                        <li>Facilitation in the delivery of our Services and to respond to your inquiries.</li>
                    </ul>

                    <p>We will use and retain the collected personal information as needed to provide the Services or
                        for:</p>

                    <ul>
                        <li>Category A - As long as the user has an account with us</li>
                        <li>Category C - As long as the user has an account with us</li>
                        <li>Category E - As long as the user has an account with us</li>
                        <li>Category H - As long as the user has an account with us</li>
                        <li>Category K - As long as the user has an account with us</li>
                    </ul>

                    <h3 class="h5 mt-4 mb-3">Sources of Personal Information</h3>

                    <p>Learn more about the sources of personal information we collect in "<a href="#infocollect"
                                                                                              class="text-decoration-none">WHAT
                            INFORMATION DO WE COLLECT?</a>"</p>

                    <h3 class="h5 mt-4 mb-3">How We Use and Share Personal Information</h3>

                    <p>Learn more about how we use your personal information in the section, "<a href="#infouse"
                                                                                                 class="text-decoration-none">HOW
                            DO WE PROCESS YOUR INFORMATION?</a>"</p>

                    <p>We collect and share your personal information through:</p>

                    <ul>
                        <li>Beacons/Pixels/Tags</li>
                    </ul>

                    <p><strong>Will your information be shared with anyone else?</strong></p>

                    <p>We may disclose your personal information with our service providers pursuant to a written
                        contract between us and each service provider. Learn more about how we disclose personal
                        information to in the section, "<a href="#whoshare" class="text-decoration-none">WHEN AND WITH
                            WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</a>"</p>

                    <p>We may use your personal information for our own business purposes, such as for undertaking
                        internal research for technological development and demonstration. This is not considered to be
                        "selling" of your personal information.</p>

                    <p>We have not sold or shared any personal information to third parties for a business or commercial
                        purpose in the preceding twelve (12) months. We have disclosed the following categories of
                        personal information to third parties for a business or commercial purpose in the preceding
                        twelve (12) months:</p>

                    <ul>
                        <li>Category A. Identifiers</li>
                        <li>Category E. Internet or other electronic network activity information</li>
                        <li>Category K. Sensitive personal information</li>
                    </ul>

                    <p>The categories of third parties to whom we disclosed personal information for a business or
                        commercial purpose can be found under "<a href="#whoshare" class="text-decoration-none">WHEN AND
                            WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</a>"</p>

                    <h3 class="h5 mt-4 mb-3">Your Rights</h3>

                    <p>You have rights under certain US state data protection laws. However, these rights are not
                        absolute, and in certain cases, we may decline your request as permitted by law. These rights
                        include:</p>

                    <ul>
                        <li><strong>Right to know</strong> whether or not we are processing your personal data</li>
                        <li><strong>Right to access</strong> your personal data</li>
                        <li><strong>Right to correct</strong> inaccuracies in your personal data</li>
                        <li><strong>Right to request</strong> the deletion of your personal data</li>
                        <li><strong>Right to obtain a copy</strong> of the personal data you previously shared with us
                        </li>
                        <li><strong>Right to non-discrimination</strong> for exercising your rights</li>
                        <li><strong>Right to opt out</strong> of the processing of your personal data if it is used for
                            targeted advertising, the sale of personal data, or profiling in furtherance of decisions
                            that produce legal or similarly significant effects ("profiling")
                        </li>
                    </ul>

                    <h3 class="h5 mt-4 mb-3">How to Exercise Your Rights</h3>

                    <p>To exercise these rights, you can contact us by visiting <a
                            href="https://www.scrybble.ink/data-request" class="text-decoration-none">https://www.scrybble.ink/data-request</a>,
                        by emailing us at <a href="mailto:mail@scrybble.ink" class="text-decoration-none">mail@scrybble.ink</a>,
                        by visiting <a href="https://www.scrybble.ink/contact-compliance" class="text-decoration-none">https://www.scrybble.ink/contact-compliance</a>,
                        or by referring to the contact details at the bottom of this document.</p>

                    <p>Under certain US state data protection laws, you can designate an authorized agent to make a
                        request on your behalf. We may deny a request from an authorized agent that does not submit
                        proof that they have been validly authorized to act on your behalf in accordance with applicable
                        laws.</p>

                    <h3 class="h5 mt-4 mb-3">Request Verification</h3>

                    <p>Upon receiving your request, we will need to verify your identity to determine you are the same
                        person about whom we have the information in our system. We will only use personal information
                        provided in your request to verify your identity or authority to make the request. However, if
                        we cannot verify your identity from the information already maintained by us, we may request
                        that you provide additional information for the purposes of verifying your identity and for
                        security or fraud-prevention purposes.</p>

                    <p>If you submit the request through an authorized agent, we may need to collect additional
                        information to verify your identity before processing your request and the agent will need to
                        provide a written and signed permission from you to submit such request on your behalf.</p>
                </section>

                <section id="policyupdates" class="mb-5">
                    <h2 class="h3 mb-4">14. DO WE MAKE UPDATES TO THIS NOTICE?</h2>

                    <p class="fst-italic"><strong><em>In Short:</em></strong> <em>Yes, we will update this notice as
                            necessary to stay compliant with relevant laws.</em></p>

                    <p>We may update this Privacy Notice from time to time. The updated version will be indicated by an
                        updated "Revised" date at the top of this Privacy Notice. If we make material changes to this
                        Privacy Notice, we may notify you either by prominently posting a notice of such changes or by
                        directly sending you a notification. We encourage you to review this Privacy Notice frequently
                        to be informed of how we are protecting your information.</p>
                </section>

                <section id="contact" class="mb-5">
                    <h2 class="h3 mb-4">15. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</h2>

                    <p>If you have questions or comments about this notice, you may contact our Data Protection Officer
                        (DPO) by email at Laura Brekelmans, by phone at +31 0681004456, or contact us by post at:</p>

                    <address class="mt-3">
                        <strong>Streamsoft</strong><br>
                        Data Protection Officer<br>
                        Hertogstraat 74<br>
                        Eindhoven, Noord-Brabant 5611pc<br>
                        Netherlands
                    </address>

                    <p>If you are a resident in the European Economic Area or Switzerland, we are the "data controller"
                        of your personal information. We have appointed Laura Brekelmans to be our representative in the
                        EEA and Switzerland. You can contact them directly regarding our processing of your information,
                        by email at <a href="mailto:mail@scrybble.ink"
                                       class="text-decoration-none">mail@scrybble.ink</a>, by visiting <a
                            href="https://www.scrybble.ink/eea"
                            class="text-decoration-none">https://www.scrybble.ink/eea</a>, by phone at +31 0681004456, or
                        by post to:</p>

                    <address class="mt-3">
                        Hertogstraat 74<br>
                        Eindhoven, Noord-Brabant 5611pc<br>
                        Netherlands
                    </address>
                </section>

                <section id="request" class="mb-5">
                    <h2 class="h3 mb-4">16. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</h2>

                    <p>You have the right to request access to the personal information we collect from you, details
                        about how we have processed it, correct inaccuracies, or delete your personal information. You
                        may also have the right to withdraw your consent to our processing of your personal information.
                        These rights may be limited in some circumstances by applicable law. To request to review,
                        update, or delete your personal information, please visit: <a
                            href="https://www.scrybble.ink/data-request" class="text-decoration-none">http://www.scrybble.ink/data-request</a>.
                    </p>
                </section>

            </div>
        </div>
    </div>
@endsection
