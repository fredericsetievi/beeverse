<footer id="footer" class="mt-5">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>Beeverse</h3>
                        <p class="pb-3"><em>@lang('word.msg_beeverse_tagline')</em></p>
                        <p>Merdeka St. No.63<br>
                            Jakarta<br><br>
                            <strong>@lang('word.Phone')</strong> +62 822 02320392<br>
                            <strong>Email:</strong> beeverse@company.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>@lang('word.useful_links')</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home_page') }}">@lang('word.home')</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a
                                href="{{ route('avatar_page') }}">@lang('word.avatar')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">@lang('word.about_us')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">@lang('word.services')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">@lang('word.terms_of_service')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">@lang('word.privacy_policy')</a></li>
                    </ul>
                </div>


                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>@lang('word.our_newsletter')</h4>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Beeverse</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>
