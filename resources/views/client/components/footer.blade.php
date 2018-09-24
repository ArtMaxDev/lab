<footer class="footer" id="footer">
    <div class="container section">
        <div class="info">
            <div>
                @if($settings->getLocalizedProperty('address') !== null)
                <address class="address">{{$settings->getLocalizedProperty('address')}}</address>
                <a href="#" class="js-open-map">Показати на мапі</a>
                @endisset
            </div>
            <div>
                <ul class="phone">
                    @isset($settings->phone1)
                    <li><a href="tel:{{$settings->phone1}}"><strong>{{$settings->phone1}}</strong></a>
                    @endisset
                    @isset($settings->phone2)
                    <li><a href="tel:{{$settings->phone2}}"><strong>{{$settings->phone2}}</strong></a>
                    @endisset
                </ul>
                <!-- /.phone -->
                @isset($settings->email)
                <a href="mailto:{{$settings->email}}">{{$settings->email}}</a>
                @endisset
                @isset($settings->skype)
                <a href="skype:{{$settings->skype}}" class="skype"><b>Skype:</b> {{$settings->skype}}</a>
                @endisset
            </div>

            <ul class="socials">
                @isset($settings->facebook)
                <li><a href="{{$settings->facebook}}" target="_blank"><i class="icon icon-facebook"></i>Facebook</a></li>
                @endisset
                @isset($settings->linkedin)
                <li><a href="{{$settings->linkedin}}" target="_blank"><i class="icon icon-linkedin"></i>Linked In</a></li>
                @endisset
                @isset($settings->google)
                <li><a href="{{$settings->google}}" target="_blank"><i class="icon icon-googleplus"></i>Google</a></li>
                @endisset
            </ul>
            <!-- /.socials -->
        </div>
        <!-- /.info -->
        <div class="form">
            <h5 class="title">зворотний зв’язок</h5>
            <form action="{{route('client.feedback.store')}}" id="feedback-form" method="post">
                <div class="row">
                    <div class="form-group">
                        <label for="footer-name">Ваше ім’я</label>
                        <input type="text" class="form-control" id="footer-name" name="fullname" required placeholder="Ваше ім’я">
                    </div>
                    <div class="form-group">
                        <label for="footer-phone">Ваш телефон</label>
                        <input type="text" class="form-control" id="footer-phone" placeholder="(0XX) XXX-XX-XX" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="footer-email">Ваш e-mail</label>
                        <input type="email" class="form-control" id="footer-email" name="email" placeholder="Ваш e-mail">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" id="footer-text" name="message" maxlength="1000" placeholder="Повiдомлення.."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn">Відправити</button>
            </form>
        </div>
        <!-- /.form -->
    </div>
    <!-- /.container -->

    <div class="map" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.5131238539216!2d30.51805691602726!3d50.45016887947527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce50966d68eb%3A0x818b61bfa0baa78a!2s3A%2C+Borysa+Hrinchenka+St%2C+3%D0%90%2C+Kyiv%2C+02000!5e0!3m2!1sen!2sua!4v1537127121067" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="container text-right">
            <button type="submit" class="btn js-open-map">згорнути мапу</button>
        </div>
    </div>
    <!-- /.map -->

</footer>
@push('scripts')
    <script defer src="{{mix('/assets/pages/footer.js', 'client')}}"></script>
@endpush
