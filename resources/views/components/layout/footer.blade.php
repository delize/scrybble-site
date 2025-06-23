<footer id="support">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Product</h4>
                <a href="https://github.com/Scrybbling-together/">GitHub</a>
                <a href="https://obsidian.md/plugins?id=scrybble.ink">Download Obsidian Plugin</a>
            </div>

            <div class="footer-section">
                <h4>Support & Community</h4>
                <a href="mailto:mail@scrybble.ink">Email Support</a>
                <a href="{{ config('app.discord_invite') }}">Discord Community</a>
                <a href="https://github.com/Scrybbling-together/scrybble/issues">Report Issues</a>
            </div>

            <div class="footer-section">
                <h4>Company</h4>
{{--                <a href="/about">About</a>--}}
{{--                <a href="/mission">Mission</a>--}}
{{--                <a href="/privacy">Privacy</a>--}}
                <p style="margin-top: 1rem; font-size: 0.9rem; color: #888;">Following the <i>Applied Communication Design</i> method: Creating technology that fosters curiosity, connection, nature and resilience.</p>
            </div>

{{--            <div class="footer-section">--}}
{{--                <h4>Legal</h4>--}}
{{--                <a href="">Privacy policy</a>--}}
{{--                <a href="">EULA</a>--}}
{{--            </div>--}}
        </div>

        <div class="footer-bottom">
            <p>&copy; 2022 - {{ Carbon\Carbon::now()->format("Y") }} Scrybble. Made with care for knowledge workers everywhere.</p>
            <p>Streamsoft is a sole-proprietorship registered in the Netherlands. </p>
            <p>KVK: 65379748</p>
        </div>
    </div>
</footer>
