@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div class="content">

        <!-- Dynamic Table -->
        <div class="block">
            <div class="block-header block-header-default d-block d-md-flex">
                <h3 class="block-title pr-3">#{{$publication->id ?? ' Новая публикация'}}
                </h3>
                <div class="block-options form-inline pl-0">
                    <button type="submit" class="btn btn-sm btn-success mr-2 js-create" form="formApi">
                        <i class="fa fa-check mr-2"></i>Сохранить
                    </button>
                    @isset($publication->id)
                    <button type="button" class="btn btn-sm btn-danger js-remove" data-id="{{$publication->id}}"><i
                            class="fa fa-trash-alt mr-2"></i>Удалить
                    </button>
                    @endisset
                </div>
            </div>
            <div class="block-content block-content-full">
                <form id="formApi" method="post">
                    <input type="hidden" name="image" value="{{$publication->image ?? null}}">
                    <input type="hidden" name="image_alt" value="{{$publication->image_alt ?? null}}">
                    <div class="row">
                        <div class="form-group col-xl-6">
                            <label for="title_uk">Название [UK] <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title_uk" name="title_uk" placeholder="..." value="{{$publication->title_uk ?? null}}" required>
                        </div>
                        <div class="form-group col-xl-6">
                            <label for="title_en">Название [EN] <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title_en" name="title_en" placeholder="..." value="{{$publication->title_en ?? null}}" required>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="form-group col-xl-6">
                            <label for="text_uk">Текст [UK] <span class="text-danger">*</span></label>
                            <textarea class="js-summernote form-control" id="text_uk" name="text_uk">{!! $publication->text_uk  ?? null!!}</textarea>
                        </div>

                        <div class="form-group col-xl-6">
                            <label for="text_en">Текст [EN] <span class="text-danger">*</span></label>
                            <textarea class="js-summernote form-control" id="text_en" name="text_en">{!! $publication->text_en  ?? null!!}</textarea>
                        </div>
                    </div>
                    <!-- /.row -->



                    <h3 class="lead">SEO</h3>

                    <div class="row">
                        <div class="form-group col-xl-6">
                            <label for="meta_title_uk">Meta-title [UK]</label>
                            <input type="text" class="form-control" id="meta_title_uk" name="meta_title_uk" placeholder="..." value="{{$publication->meta_title_uk ?? null}}">
                            <div class="form-text text-muted">Название публикации для поисковых систем.</div>
                        </div>
                        <div class="form-group col-xl-6">
                            <label for="meta_title_en">Meta-title [EN]</label>
                            <input type="text" class="form-control" id="meta_title_en" name="meta_title_en" placeholder="..." value="{{$publication->meta_title_en ?? null}}">
                        </div>
                        <div class="form-group col-xl-6">
                            <label for="meta_description_uk">Meta-description [UK]</label>
                            <textarea class="form-control" id="meta_description_uk" name="meta_description_uk" placeholder="...">{{$publication->meta_description_uk ?? null}}</textarea>
                            <div class="form-text text-muted">Описание публикации для поисковых систем. Обычно это 50-250 символов.</div>
                        </div>
                        <div class="form-group col-xl-6">
                            <label for="meta_description_en">Meta-description [EN]</label>
                            <textarea class="form-control" id="meta_description_en" name="meta_description_en" placeholder="...">{{$publication->meta_description_en ?? null}}</textarea>
                        </div>

                        <div class="form-group col-xl-6">
                            <label for="meta_keywords_uk">Meta-keywords [UK]</label>
                            <textarea class="form-control" id="meta_keywords_uk" name="meta_keywords_uk" placeholder="...">{{$publication->meta_keywords_uk ?? null}}</textarea>
                            <div class="form-text text-muted">Слова или словосочетания описывающие публикацию, вводимые через запятую.</div>
                        </div>
                        <div class="form-group col-xl-6">
                            <label for="meta_keywords_en">Meta-keywords [EN]</label>
                            <textarea class="form-control" id="meta_keywords_en" name="meta_keywords_en" placeholder="...">{{$publication->meta_keywords_en ?? null}}</textarea>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="publicated_at">Дата публикации</label>
                            <input type="text" class="form-control js-datepicker" id="publicated_at" name="publicated_at" placeholder="DD.MM.YYYY" data-date-format="dd.mm.yyyy" value="{{$publication->publicated_at ?? null}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Изображение<span class="text-danger">*</span></label>
                            <div>
                                <button class="btn btn-alt-info mr-20" type="button" data-toggle="modal" data-target="#modal-image">Изменить</button>
                                <label class="css-control css-control css-control-success css-switch">
                                    <input type="checkbox" class="css-control-input" {{ isset($publication) && $publication->status ? 'checked' : ''}} name="status" value="true" id="publication-status">
                                    <span class="css-control-indicator"></span> Статус публикации
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </form>

            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light d-flex justify-content-end">
                <div class="block-options form-inline">
                    <button type="submit" class="btn btn-sm btn-success mr-2 js-create" form="formApi">
                        <i class="fa fa-check mr-2"></i>Сохранить
                    </button>
                    @isset($publication->id)
                        <button type="button" class="btn btn-sm btn-danger js-remove" data-id="{{$publication->id}}"><i
                                class="fa fa-trash-alt mr-2"></i>Удалить
                        </button>
                    @endisset
                </div>
            </div>
        </div>
        <!-- END Dynamic Table -->

    </div>
    <!-- END Page Content -->
@endsection
@push('modals')
    <div class="modal" id="modal-image" tabindex="-1" role="dialog" aria-labelledby="modal-image" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Изображение для публикации</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label for="image_alt">Альтернативный текст изображение (SEO)</label>
                            <input type="text" class="form-control" id="image_alt" name="image_alt" placeholder=".." value="{{$publication->image_alt ?? null}}">
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input js-preview" id="image" name="image" data-toggle="custom-file-input">
                                <label class="custom-file-label" for="image"></label>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <img src="{{($publication->image ?? null) ? "$publication->image.jpg" : null}}" id="preview" alt="Загрузите изображение" class="img-fluid mx-auto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-alt-success js-update-image">
                        <i class="fa fa-check"></i> Изменить
                    </button>
                </div>
            </div>
        </div>
    </div>
@endpush
@push('scripts')
    <script defer src="{{mix('/assets/pages/publication-create.js', 'admin')}}"></script>
@endpush
@push('styles')
    <link rel="stylesheet" href="{{mix('/assets/pages/publication-create.css', 'admin')}}">
@endpush
