@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div class="content">

        <!-- Dynamic Table -->
        <div class="block">
            <div class="block-header block-header-default d-block d-md-flex">
                <h3 class="block-title pr-3">Публикации
                    <small>({{$publications->count()}})</small>
                </h3>
                <div class="block-options form-inline pl-0">
                    <button type="button" class="btn btn-sm btn-success mr-2 js-create">
                        <i class="fa fa-user-plus mr-2"></i>Добавить
                    </button>
                    <button type="button" class="btn btn-sm btn-warning mr-2 js-edit" data-edit="true" disabled>
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
                            <th class="text-center" hidden>№</th>
                            <th>Изображение</th>
                            <th class="nowrap">Дата</th>
                            <th class="font-w600">Наименование</th>
                            <th>Статус</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($publications as $item)
                            <tr>
                                <td class="text-center" hidden>{{$item->id}}</td>
                                <td>{{$item->image}}</td>
                                <td class="nowrap">{{$item->date}}</td>
                                <td class="font-w600">{{$item->title_uk}}</td>
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
@push('scripts')
    <script>
        window.app_data = {
            statusList: {!! json_encode($statusList) !!},
        }
    </script>
    <script defer src="{{mix('/assets/pages/publications.js', 'admin')}}"></script>
@endpush
