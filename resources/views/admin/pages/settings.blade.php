@extends('admin.master')

@section('content')
  <!-- Page Content -->
  <div class="content">

    <!-- Dynamic Table -->
    <div class="block">
      <div class="block-header block-header-default d-block d-md-flex">
        <h3 class="block-title pr-3">Настройки</h3>
        <div class="block-options form-inline pl-0">
          <button type="submit" class="btn btn-sm btn-success mr-2" disabled id="btnSave" form="formSettings"><i class="fa fa-user-plus mr-2"></i>Сохранить</button>
          <button type="reset" class="btn btn-sm btn-warning" disabled id="btnReset" form="formSettings"><i class="fa fa-pencil mr-2"></i>Сбросить</button>
        </div>
      </div>
      <div class="block-content block-content-full invisible" data-toggle="appear">
          <form action="{{URL::current()}}" id="formSettings" class="col-xl-12" method="POST">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <h5 class="lead">Общие настройки</h5>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group row">
                          <label class="col-12" for="email"><i class="fa fa-at"></i> E-mail <span class="text-danger">*</span></label>
                          <div class="col-md-12">
                              <input type="email" class="form-control" id="email" name="email" placeholder="..." required>
                              <div class="form-text text-muted">Этот e-mail будет отображен в футере сайта</div>
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
              </div>
              <!-- /.row -->
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group row">
                          <label class="col-12" for="phone1"><i class="fa fa-phone-square"></i> Контактный номер №1 <span class="text-danger">*</span></label>
                          <div class="col-md-12">
                              <input type="tel" class="form-control js-masked-phoneUA" id="phone1" name="phone1" placeholder=".." required>
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
                  <div class="col-md-6">
                      <div class="form-group row">
                          <label class="col-12" for="phone2"><i class="fa fa-phone-square"></i> Контактный номер №2</label>
                          <div class="col-md-12">
                              <input type="tel" class="form-control js-masked-phoneUA" id="phone2" name="phone2" placeholder="..">
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
              </div>
              <!-- /.row -->
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group row">
                          <label class="col-12" for="address_uk"><i class="fa fa-home"></i> Адрес [UK] <span class="text-danger">*</span></label>
                          <div class="col-md-12">
                              <input type="text" class="form-control" id="address_uk" name="address_uk" placeholder=".." required>
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
                  <div class="col-md-6">
                      <div class="form-group row">
                          <label class="col-12" for="address_en"><i class="fa fa-home"></i> Адрес [EN] <span class="text-danger">*</span></label>
                          <div class="col-md-12">
                              <input type="text" class="form-control" id="address_en" name="address_en" placeholder=".." required>
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
              </div>
              <!-- /.row -->

              <h5 class="lead">Социальные сети</h5>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group row">
                          <label class="col-12" for="skype"><i class="fab fa-skype"></i> Skype</label>
                          <div class="col-md-12">
                              <input type="text" class="form-control" id="skype" name="skype" placeholder="..">
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
                  <div class="col-md-6">
                      <div class="form-group row">
                          <label class="col-12" for="facebook"><i class="fab fa-facebook"></i> Facebook</label>
                          <div class="col-md-12">
                              <input type="text" class="form-control" id="facebook" name="facebook" placeholder="..">
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->

                  <div class="col-md-6">
                      <div class="form-group row">
                          <label class="col-12" for="google"><i class="fab fa-google"></i> Google</label>
                          <div class="col-md-12">
                              <input type="text" class="form-control" id="google" name="google" placeholder="..">
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
                  <div class="col-md-6">
                      <div class="form-group row">
                          <label class="col-12" for="linkedin"><i class="fab fa-linkedin"></i> LinkedIn</label>
                          <div class="col-md-12">
                              <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="..">
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
              </div>
              <!-- /.row -->

              <h5 class="lead">SEO</h5>

              <div class="row">
                  <div class="col-xl-6">
                      <div class="form-group row">
                          <label class="col-12" for="meta_description">Meta-description [UK]<span class="text-danger">*</span></label>
                          <div class="col-md-12">
                              <textarea class="form-control" id="meta_description" name="meta_description" placeholder="..." required></textarea>
                              <div class="form-text text-muted">Описание сайта для поисковых систем. Обычно это 50-250 символов.</div>
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
                  <div class="col-xl-6">
                      <div class="form-group row">
                          <label class="col-12" for="meta_description_en">Meta-description [EN]<span class="text-danger">*</span></label>
                          <div class="col-md-12">
                              <textarea class="form-control" id="meta_description_en" name="meta_description_en" placeholder="..." required></textarea>
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
              </div>
              <!-- /.row -->

              <div class="row">
                  <div class="col-xl-6">
                      <div class="form-group row">
                          <label class="col-12" for="meta_keywords">Meta-keywords [UK] <span class="text-danger">*</span></label>
                          <div class="col-md-12">
                              <textarea class="form-control" id="meta_keywords" name="meta_keywords" placeholder="..." required></textarea>
                              <div class="form-text text-muted">Слова или словосочетания описывающие сайт, вводимые через запятую.</div>
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
                  <div class="col-xl-6">
                      <div class="form-group row">
                          <label class="col-12" for="meta_keywords_en">Meta-keywords [EN] <span class="text-danger">*</span></label>
                          <div class="col-md-12">
                              <textarea class="form-control" id="meta_keywords_en" name="meta_keywords_en" placeholder="..." required></textarea>
                          </div>
                      </div>
                  </div>
                  <!-- /.col-md-6 -->
              </div>
              <!-- /.row -->

          </form>
      </div>
    </div>
    <!-- END Dynamic Table -->

  </div>
  <!-- END Page Content -->
@endsection
@push('scripts')
  <script>
    window.app_data = {};
  </script>
  <script defer src="{{mix('/assets/pages/settings.js', 'admin')}}"></script>
@endpush
