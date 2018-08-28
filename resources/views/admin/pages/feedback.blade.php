@extends('admin.master')
@php($feedback = [])
@php($statusList = [
    0 => "Новая",
    1 => "В работе",
    2 => "Завершенная",
    3 => "Отклоненная",
])
@section('content')
    <!-- Page Content -->
    <div class="content">

        <!-- Dynamic Table -->
        <div class="block">
            <div class="block-header block-header-default d-block d-md-flex">
                <h3 class="block-title pr-3">Обратная связь
                    <small>({{count($feedback)}})</small>
                </h3>
                <div class="block-options form-inline pl-0">
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
                            <th class="text-center" hidden>№</th>
                            <th class="nowrap">Дата</th>
                            <th class="font-w600">Ф.И.О.</th>
                            <th>Email</th>
                            <th>Сообщение</th>
                            <th>Ответ</th>
                            <th>Статус</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($feedback as $item)
                            <tr>
                                <td class="text-center" hidden>{{$item->id}}</td>
                                <td class="nowrap">{{$item->date}}</td>
                                <td class="font-w600">{{$item->fullname}}</td>
                                <td class="font-w600">{{$item->phone}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->message}}</td>
                                <td>{{$item->admin_message}}</td>
                                <td>{{$item->status}}</td>
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="formApi" method="post">
                    <input type="hidden" name="id">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-gd-leaf">
                            <h3 class="block-title">Редактирование заявки №<small id="feedbackNumber"></small></h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <input type="hidden" name="id" id="feedbackId">
                            <div class="font-size-lg text-black mb-5" id="userName">John Smith</div>
                            <address>
                                <i class="fa fa-calendar-alt mr-5"></i> <span id="userDate">25-12-2018</span><br>
                                <i class="fa fa-phone mr-5"></i> <span id="userPhone">(999) 111-222222</span><br>
                                <i class="fa fa-envelope mr-5"></i> <a href="javascript:void(0)" id="userEmail">company@example.com</a>
                            </address>

                            <p id="userMessage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis deserunt illum itaque iure laborum maiores nobis nulla officiis placeat possimus praesentium quaerat quo rem reprehenderit sit totam, ut. Praesentium.</p>
                            <div class="form-group row">
                                <label for="userAdminMessage" class="col-12">Ответ</label>
                                <div class="col-12">
                                    <textarea class="form-control" id="userAdminMessage" name="admin_message" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="userStatus" class="col-12">Статус заявки <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-8 col-lg-4">
                                    <select name="status" id="userStatus" class="form-control">
                                        @foreach($statusList as $id => $status)
                                            <option value="{{$id}}">{{$status}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Отмена</button>
                            <button type="submit" class="btn btn-alt-success">
                                <i class="fa fa-check"></i> <span>Сохранить</span>
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
    <script>
        window.app_data = {
            statusList: {!! json_encode($statusList) !!},
        }
    </script>
    <script defer src="{{mix('/assets/pages/feedback.js', 'admin')}}"></script>
@endpush
