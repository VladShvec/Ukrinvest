<footer>
    <div class="footer-container">
        <div class="footer-social">
            <div class="social">
                @foreach($icons as $icon)
                    <a href="{{$icon->link_path}}"><img src="{{$icon->img_path}}" alt=""></a>
                @endforeach
            </div>
        </div>
        <div class="footer-links">
            <div class="footer-link-container">
                <div class="links-store">
                    <ul>
                        @foreach($footer as $footer_link)
                            <li>
                                <a href="{{$footer_link->url}}">{{$footer_link->text_en ?? $footer_link->text_ru ?? $footer_link->text_arm}}</a>
                            </li>
                        @endforeach
                    </ul>


                </div>
            </div>
        </div>
        <div class="footer-reserved">
            <p>@ 2019 UkrInvest - All rights reserved</p>
        </div>

    </div>
</footer>
