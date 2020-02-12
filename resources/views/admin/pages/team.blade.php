@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div class="content">

        <!-- Dynamic Table -->
        <div class="block" id="mainBlock">
            <div class="block-header block-header-default d-block d-md-flex">
                <h3 class="block-title pr-3">Комманда
                    <small>({{$team->count()}})</small>
                </h3>
                <div class="block-options form-inline pl-0">
                    <button type="button" class="btn btn-sm btn-success mr-2" data-toggle="modal"
                            data-target="#modalApi">
                        <i class="fa fa-user-plus mr-2"></i>Добавить
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full invisible" data-toggle="appear" id="content">
                <!-- Image Zoom In -->
                <div class="row items-push">
                    @foreach($team as $member)
                        <div class="col-md-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in ribbon-success">
                                <img class="img-fluid options-item d-block mx-auto" src="{{"$member->image.jpg"}}" alt="{{$member->name}}" style="min-height: 150px">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5 p-2">{{$member->name_uk}}</h3>
                                        <h4 class="h6 text-white-op mb-15 p-2">{{$member->description_uk}}</h4>
                                        <button class="btn btn-sm btn-rounded btn-alt-primary min-width-75" data-toggle="modal"
                                                data-target="#modalApi" data-edit="true" data-id="{{$member->id}}">
                                            <i class="fa fa-pencil"></i> Редактировать
                                        </button>
                                        <button class="btn btn-sm btn-rounded btn-alt-danger min-width-75 js-remove" data-id="{{$member->id}}">
                                            <i class="fa fa-times"></i> Удалить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- END Image Zoom In -->
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
                        <div class="block-header bg-gd-emerald">
                            <h3 class="block-title"></h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row gutters-tiny">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="name_uk" class="col-12">Имя [UK]<span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="name_uk" name="name_uk" placeholder="..">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="name_en" class="col-12">Имя [EN]<span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="name_en" name="name_en" placeholder="..">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-tiny">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="description_uk" class="col-12">Описание [UK]<span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <textarea class="form-control" id="description_uk" name="description_uk" rows="2" placeholder=".."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="description_en" class="col-12">Описание [EN]<span
                                                class="text-danger">*</span></label>
                                        <div class="col-12">
                                            <textarea class="form-control" id="description_en" name="description_en" rows="2" placeholder=".."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input js-preview" id="image" name="image" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="image"></label>
                                </div>
                            </div>
                            <img src="" id="preview" alt="Загрузите изображение" class="img-fluid mx-auto mb-3">
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
    <script>
        window.app_data = {
            team: {!! json_encode($team) !!},
        }
    </script>
    <script defer src="{{mix('/assets/pages/team.js', 'admin')}}"></script>
@endpush
@push('styles')
    <link rel="stylesheet" href="{{mix('/assets/pages/sliders.css', 'admin')}}">
@endpush
