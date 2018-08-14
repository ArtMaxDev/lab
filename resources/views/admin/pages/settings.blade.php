@extends('admin.master')

@section('content')
  <!-- Page Content -->
  <div class="content">

    <!-- Dynamic Table -->
    <div class="block">
      <div class="block-header block-header-default d-block d-md-flex">
        <h3 class="block-title pr-3">Настройки</h3>
        <div class="block-options form-inline pl-0">
          <button type="button" class="btn btn-sm btn-success mr-2" disabled id="btnSave"><i class="fa fa-user-plus mr-2"></i>Сохранить</button>
          <button type="button" class="btn btn-sm btn-warning" disabled id="btnReset"><i class="fa fa-pencil mr-2"></i>Сбросить</button>
        </div>
      </div>
      <div class="block-content block-content-full invisible" data-toggle="appear">
          <form action="" id="formSettings">

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
