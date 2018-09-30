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
                        @php($phone1viber_active = str_contains($settings->phone1, [':v', ':viber']))
                    <li><a href="tel:{{$settings->phone1}}"><strong>{{preg_replace('/(:viber|:v)/i', '', $settings->phone1)}}</strong>
                        @if($phone1viber_active)
                                <svg fill="#665CA7" xmlns="http://www.w3.org/2000/svg" aria-label="Viber" role="img" viewBox="0 0 512 512" width="15px">
                                    <path d="M435.5,57.1C423.1,45.7,372.9,9.2,261,8.7c0,0-131.9-8-196.2,51c-35.8,35.8-48.4,88.1-49.7,153.1c-1.3,64.9-3,186.6,114.3,219.6c0,0,0.1,0,0.1,0l-0.1,50.3c0,0-0.7,20.4,12.7,24.5c16.2,5,25.8-10.5,41.3-27.2c8.5-9.2,20.2-22.6,29.1-32.9c80.2,6.7,141.9-8.7,148.9-11c16.2-5.3,107.9-17,122.8-138.7C499.6,172.2,476.7,92.9,435.5,57.1zM449.1,288.6c-12.6,101.6-86.9,108-100.6,112.4c-5.8,1.9-60,15.4-128.2,10.9c0,0-50.8,61.3-66.6,77.2c-2.5,2.5-5.4,3.5-7.3,3c-2.7-0.7-3.5-3.9-3.4-8.6c0-6.8,0.4-83.7,0.4-83.7c-0.1,0-0.1,0,0,0C44.1,372.3,49.9,268.7,51,214.5c1.1-54.2,11.3-98.7,41.6-128.6C146.9,36.7,259,44,259,44c94.6,0.4,139.9,28.9,150.4,38.4C444.3,112.4,462.1,183.9,449.1,288.6z"/>
                                    <path d="M307.1,216.4c-3.3,0-6.1-2.6-6.3-6c-1.1-21.5-11.2-32-31.8-33.1c-3.5-0.2-6.2-3.2-6-6.7c0.2-3.5,3.2-6.2,6.7-6c27.2,1.5,42.4,17.1,43.8,45.1c0.2,3.5-2.5,6.5-6,6.6C307.3,216.4,307.2,216.4,307.1,216.4z"/>
                                    <path d="M339.5,227.2c0,0-0.1,0-0.1,0c-3.5-0.1-6.3-3-6.2-6.5c0.5-21.6-5.7-39.1-18.9-53.5c-13.1-14.4-31.2-22.2-55.1-23.9c-3.5-0.3-6.1-3.3-5.8-6.8c0.3-3.5,3.3-6.1,6.8-5.8c27,2,48.3,11.4,63.5,28c15.3,16.7,22.7,37.6,22.2,62.3C345.8,224.5,342.9,227.2,339.5,227.2z"/>
                                    <path d="M372.7,240.2c-3.5,0-6.3-2.8-6.3-6.3c-0.3-38.7-11.4-68.2-34-90.3c-22.3-21.8-50.6-32.9-83.9-33.2c-3.5,0-6.3-2.9-6.3-6.4c0-3.5,2.9-6.3,6.3-6.3c0,0,0,0,0,0c36.7,0.3,67.9,12.6,92.6,36.8c24.8,24.2,37.5,57.6,37.9,99.2C379.1,237.3,376.3,240.2,372.7,240.2C372.8,240.2,372.8,240.2,372.7,240.2z"/>
                                    <path d="M270.5,294.7c0,0,8.9,0.8,13.7-5.1l9.3-11.7c4.5-5.8,15.4-9.5,26-3.6c5.9,3.3,16.6,9.9,23.2,14.8c7.1,5.2,21.5,17.2,21.6,17.3c6.9,5.8,8.5,14.3,3.8,23.4c0,0,0,0.1,0,0.2c-4.8,8.5-11.3,16.5-19.4,23.9c-0.1,0-0.1,0.1-0.2,0.1c-6.7,5.6-13.3,8.8-19.7,9.5c-0.8,0.2-1.7,0.2-2.9,0.2c-2.8,0-5.6-0.4-8.4-1.3l-0.2-0.3c-10-2.8-26.6-9.8-54.2-25.1c-18-9.9-32.9-20-45.6-30.1c-6.7-5.3-13.5-11.2-20.5-18.2c-0.2-0.2-0.5-0.5-0.7-0.7c-0.2-0.2-0.5-0.5-0.7-0.7l0,0c0,0,0,0,0,0c-0.2-0.2-0.5-0.5-0.7-0.7c-0.2-0.2-0.5-0.5-0.7-0.7c-6.9-7-12.9-13.8-18.2-20.5c-10.1-12.6-20.2-27.6-30.1-45.6c-15.3-27.7-22.3-44.3-25.1-54.2l-0.3-0.2c-0.9-2.8-1.3-5.6-1.3-8.4c0-1.2,0-2.1,0.2-2.9c0.8-6.5,4-13,9.5-19.7c0-0.1,0.1-0.1,0.1-0.2c7.4-8.2,15.4-14.6,23.9-19.4c0,0,0.1,0,0.2,0c9-4.7,17.5-3.1,23.4,3.8c0,0,12.1,14.5,17.3,21.6c4.9,6.7,11.5,17.3,14.8,23.2c5.9,10.6,2.2,21.5-3.6,26l-11.7,9.3c-5.9,4.8-5.1,13.7-5.1,13.7S205.5,278.2,270.5,294.7z"/>
                                </svg>

                            @endif
                        </a>
                    @endisset
                    @isset($settings->phone2)
                        @php($phone2viber_active = str_contains($settings->phone2, [':v', ':viber']))
                    <li><a href="tel:{{$settings->phone2}}"><strong>{{preg_replace('/(:viber|:v)/i', '', $settings->phone2)}}</strong>
                            @if($phone2viber_active)
                                <svg fill="#665CA7" xmlns="http://www.w3.org/2000/svg" aria-label="Viber" role="img" viewBox="0 0 512 512" width="15px">
                                    <path d="M435.5,57.1C423.1,45.7,372.9,9.2,261,8.7c0,0-131.9-8-196.2,51c-35.8,35.8-48.4,88.1-49.7,153.1c-1.3,64.9-3,186.6,114.3,219.6c0,0,0.1,0,0.1,0l-0.1,50.3c0,0-0.7,20.4,12.7,24.5c16.2,5,25.8-10.5,41.3-27.2c8.5-9.2,20.2-22.6,29.1-32.9c80.2,6.7,141.9-8.7,148.9-11c16.2-5.3,107.9-17,122.8-138.7C499.6,172.2,476.7,92.9,435.5,57.1zM449.1,288.6c-12.6,101.6-86.9,108-100.6,112.4c-5.8,1.9-60,15.4-128.2,10.9c0,0-50.8,61.3-66.6,77.2c-2.5,2.5-5.4,3.5-7.3,3c-2.7-0.7-3.5-3.9-3.4-8.6c0-6.8,0.4-83.7,0.4-83.7c-0.1,0-0.1,0,0,0C44.1,372.3,49.9,268.7,51,214.5c1.1-54.2,11.3-98.7,41.6-128.6C146.9,36.7,259,44,259,44c94.6,0.4,139.9,28.9,150.4,38.4C444.3,112.4,462.1,183.9,449.1,288.6z"/>
                                    <path d="M307.1,216.4c-3.3,0-6.1-2.6-6.3-6c-1.1-21.5-11.2-32-31.8-33.1c-3.5-0.2-6.2-3.2-6-6.7c0.2-3.5,3.2-6.2,6.7-6c27.2,1.5,42.4,17.1,43.8,45.1c0.2,3.5-2.5,6.5-6,6.6C307.3,216.4,307.2,216.4,307.1,216.4z"/>
                                    <path d="M339.5,227.2c0,0-0.1,0-0.1,0c-3.5-0.1-6.3-3-6.2-6.5c0.5-21.6-5.7-39.1-18.9-53.5c-13.1-14.4-31.2-22.2-55.1-23.9c-3.5-0.3-6.1-3.3-5.8-6.8c0.3-3.5,3.3-6.1,6.8-5.8c27,2,48.3,11.4,63.5,28c15.3,16.7,22.7,37.6,22.2,62.3C345.8,224.5,342.9,227.2,339.5,227.2z"/>
                                    <path d="M372.7,240.2c-3.5,0-6.3-2.8-6.3-6.3c-0.3-38.7-11.4-68.2-34-90.3c-22.3-21.8-50.6-32.9-83.9-33.2c-3.5,0-6.3-2.9-6.3-6.4c0-3.5,2.9-6.3,6.3-6.3c0,0,0,0,0,0c36.7,0.3,67.9,12.6,92.6,36.8c24.8,24.2,37.5,57.6,37.9,99.2C379.1,237.3,376.3,240.2,372.7,240.2C372.8,240.2,372.8,240.2,372.7,240.2z"/>
                                    <path d="M270.5,294.7c0,0,8.9,0.8,13.7-5.1l9.3-11.7c4.5-5.8,15.4-9.5,26-3.6c5.9,3.3,16.6,9.9,23.2,14.8c7.1,5.2,21.5,17.2,21.6,17.3c6.9,5.8,8.5,14.3,3.8,23.4c0,0,0,0.1,0,0.2c-4.8,8.5-11.3,16.5-19.4,23.9c-0.1,0-0.1,0.1-0.2,0.1c-6.7,5.6-13.3,8.8-19.7,9.5c-0.8,0.2-1.7,0.2-2.9,0.2c-2.8,0-5.6-0.4-8.4-1.3l-0.2-0.3c-10-2.8-26.6-9.8-54.2-25.1c-18-9.9-32.9-20-45.6-30.1c-6.7-5.3-13.5-11.2-20.5-18.2c-0.2-0.2-0.5-0.5-0.7-0.7c-0.2-0.2-0.5-0.5-0.7-0.7l0,0c0,0,0,0,0,0c-0.2-0.2-0.5-0.5-0.7-0.7c-0.2-0.2-0.5-0.5-0.7-0.7c-6.9-7-12.9-13.8-18.2-20.5c-10.1-12.6-20.2-27.6-30.1-45.6c-15.3-27.7-22.3-44.3-25.1-54.2l-0.3-0.2c-0.9-2.8-1.3-5.6-1.3-8.4c0-1.2,0-2.1,0.2-2.9c0.8-6.5,4-13,9.5-19.7c0-0.1,0.1-0.1,0.1-0.2c7.4-8.2,15.4-14.6,23.9-19.4c0,0,0.1,0,0.2,0c9-4.7,17.5-3.1,23.4,3.8c0,0,12.1,14.5,17.3,21.6c4.9,6.7,11.5,17.3,14.8,23.2c5.9,10.6,2.2,21.5-3.6,26l-11.7,9.3c-5.9,4.8-5.1,13.7-5.1,13.7S205.5,278.2,270.5,294.7z"/>
                                </svg>

                            @endif
                        </a>
                    @endisset

                    <li><a href="tel:380669223946"><small>(відділення онкогематології)</small><br/><strong>+380669223946</strong>
                                <svg fill="#665CA7" xmlns="http://www.w3.org/2000/svg" aria-label="Viber" role="img" viewBox="0 0 512 512" width="15px">
                                    <path d="M435.5,57.1C423.1,45.7,372.9,9.2,261,8.7c0,0-131.9-8-196.2,51c-35.8,35.8-48.4,88.1-49.7,153.1c-1.3,64.9-3,186.6,114.3,219.6c0,0,0.1,0,0.1,0l-0.1,50.3c0,0-0.7,20.4,12.7,24.5c16.2,5,25.8-10.5,41.3-27.2c8.5-9.2,20.2-22.6,29.1-32.9c80.2,6.7,141.9-8.7,148.9-11c16.2-5.3,107.9-17,122.8-138.7C499.6,172.2,476.7,92.9,435.5,57.1zM449.1,288.6c-12.6,101.6-86.9,108-100.6,112.4c-5.8,1.9-60,15.4-128.2,10.9c0,0-50.8,61.3-66.6,77.2c-2.5,2.5-5.4,3.5-7.3,3c-2.7-0.7-3.5-3.9-3.4-8.6c0-6.8,0.4-83.7,0.4-83.7c-0.1,0-0.1,0,0,0C44.1,372.3,49.9,268.7,51,214.5c1.1-54.2,11.3-98.7,41.6-128.6C146.9,36.7,259,44,259,44c94.6,0.4,139.9,28.9,150.4,38.4C444.3,112.4,462.1,183.9,449.1,288.6z"/>
                                    <path d="M307.1,216.4c-3.3,0-6.1-2.6-6.3-6c-1.1-21.5-11.2-32-31.8-33.1c-3.5-0.2-6.2-3.2-6-6.7c0.2-3.5,3.2-6.2,6.7-6c27.2,1.5,42.4,17.1,43.8,45.1c0.2,3.5-2.5,6.5-6,6.6C307.3,216.4,307.2,216.4,307.1,216.4z"/>
                                    <path d="M339.5,227.2c0,0-0.1,0-0.1,0c-3.5-0.1-6.3-3-6.2-6.5c0.5-21.6-5.7-39.1-18.9-53.5c-13.1-14.4-31.2-22.2-55.1-23.9c-3.5-0.3-6.1-3.3-5.8-6.8c0.3-3.5,3.3-6.1,6.8-5.8c27,2,48.3,11.4,63.5,28c15.3,16.7,22.7,37.6,22.2,62.3C345.8,224.5,342.9,227.2,339.5,227.2z"/>
                                    <path d="M372.7,240.2c-3.5,0-6.3-2.8-6.3-6.3c-0.3-38.7-11.4-68.2-34-90.3c-22.3-21.8-50.6-32.9-83.9-33.2c-3.5,0-6.3-2.9-6.3-6.4c0-3.5,2.9-6.3,6.3-6.3c0,0,0,0,0,0c36.7,0.3,67.9,12.6,92.6,36.8c24.8,24.2,37.5,57.6,37.9,99.2C379.1,237.3,376.3,240.2,372.7,240.2C372.8,240.2,372.8,240.2,372.7,240.2z"/>
                                    <path d="M270.5,294.7c0,0,8.9,0.8,13.7-5.1l9.3-11.7c4.5-5.8,15.4-9.5,26-3.6c5.9,3.3,16.6,9.9,23.2,14.8c7.1,5.2,21.5,17.2,21.6,17.3c6.9,5.8,8.5,14.3,3.8,23.4c0,0,0,0.1,0,0.2c-4.8,8.5-11.3,16.5-19.4,23.9c-0.1,0-0.1,0.1-0.2,0.1c-6.7,5.6-13.3,8.8-19.7,9.5c-0.8,0.2-1.7,0.2-2.9,0.2c-2.8,0-5.6-0.4-8.4-1.3l-0.2-0.3c-10-2.8-26.6-9.8-54.2-25.1c-18-9.9-32.9-20-45.6-30.1c-6.7-5.3-13.5-11.2-20.5-18.2c-0.2-0.2-0.5-0.5-0.7-0.7c-0.2-0.2-0.5-0.5-0.7-0.7l0,0c0,0,0,0,0,0c-0.2-0.2-0.5-0.5-0.7-0.7c-0.2-0.2-0.5-0.5-0.7-0.7c-6.9-7-12.9-13.8-18.2-20.5c-10.1-12.6-20.2-27.6-30.1-45.6c-15.3-27.7-22.3-44.3-25.1-54.2l-0.3-0.2c-0.9-2.8-1.3-5.6-1.3-8.4c0-1.2,0-2.1,0.2-2.9c0.8-6.5,4-13,9.5-19.7c0-0.1,0.1-0.1,0.1-0.2c7.4-8.2,15.4-14.6,23.9-19.4c0,0,0.1,0,0.2,0c9-4.7,17.5-3.1,23.4,3.8c0,0,12.1,14.5,17.3,21.6c4.9,6.7,11.5,17.3,14.8,23.2c5.9,10.6,2.2,21.5-3.6,26l-11.7,9.3c-5.9,4.8-5.1,13.7-5.1,13.7S205.5,278.2,270.5,294.7z"/>
                                </svg>
                        </a>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.824509806457!2d30.480247115729014!3d50.38846987946683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c8dd278a7e5d%3A0x9b298682892d1b10!2sVasylkivska+St%2C+45%2C+Kyiv%2C+02000!5e0!3m2!1sen!2sua!4v1538336624186" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="container text-right">
            <button type="submit" class="btn js-open-map">згорнути мапу</button>
        </div>
    </div>
    <!-- /.map -->

</footer>
@push('scripts')
    <script defer src="{{mix('/assets/pages/footer.js', 'client')}}"></script>
@endpush
