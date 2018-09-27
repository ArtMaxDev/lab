@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div class="content">

        <!-- Dynamic Table -->
        <div class="block">
            <div class="block-header block-header-default d-block d-md-flex">
                <h3 class="block-title pr-3">Users
                    <small>({{$users->count()}})</small>
                </h3>
                <div class="block-options form-inline pl-0">
                    <button type="button" class="btn btn-sm btn-success mr-2" data-toggle="modal"
                            data-target="#modalApi">
                        <i class="fa fa-user-plus mr-2"></i>Добавить
                    </button>
                    <button type="button" class="btn btn-sm btn-warning mr-2" data-toggle="modal"
                            data-target="#modalApi" data-edit="true" disabled>
                        <i class="fa fa-pencil-alt mr-2"></i>Редактировать
                    </button>
                    <button type="button" class="btn btn-sm btn-danger js-remove" data-remove="true" disabled><i
                            class="fa fa-trash-alt mr-2"></i>Удалить
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full invisible" data-toggle="appear">
                <!-- DataTables init on table by adding .js-dataTable-full class -->
                <div class="table-responsive">
                    <table class="table table-vcenter js-dataTable-full">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 1%;">№</th>
                            <th>Имя</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{$user->id}}</td>
                                <td class="font-w600">{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Dynamic Table -->

    </div>
    <!-- END Page Content -->
@endsection
@push('modals')
    <!-- Fade In Modal -->
    <div id="modalApi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="formApi" method="post">
                    <input type="hidden" name="id">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-gd-emerald">
                            <h3 class="block-title"></h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label for="name" class="col-12">Имя <span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <div class="row gutters-tiny">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="email" class="col-12">Email <span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-tiny">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="password" class="col-12">Пароль <span
                                                class="text-danger js-pass-required">*</span></label>
                                        <div class="col-12">
                                            <input type="password" class="form-control" id="password"
                                                   name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="password_confirmation" class="col-12">Подтверждение пароля <span
                                                class="text-danger js-pass-required">*</span></label>
                                        <div class="col-12">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                   name="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Отмена</button>
                            <button type="submit" class="btn btn-alt-success">
                                <i class="fa fa-check"></i> <span>Добавить</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Fade In Modal -->

@endpush
@push('scripts')
    <script defer src="{{mix('/assets/pages/users.js', 'admin')}}"></script>
@endpush
