@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div class="content">

        <!-- Dynamic Table -->
        <div class="block">
            <div class="block-header block-header-default d-block d-md-flex">
                <h3 class="block-title pr-3">#{{$service->id ?? ' Новая услуга'}}
                </h3>
                <div class="block-options form-inline pl-0">
                    <button type="submit" class="btn btn-sm btn-success mr-2 js-create" form="formApi">
                        <i class="fa fa-check mr-2"></i>Сохранить
                    </button>
                    @isset($service->id)
                    <button type="button" class="btn btn-sm btn-danger js-remove" data-id="{{$service->id}}"><i
                            class="fa fa-trash-alt mr-2"></i>Удалить
                    </button>
                    @endisset
                </div>
            </div>
            <div class="block-content block-content-full">
                <form id="formApi" method="post">
                    <input type="hidden" name="image" value="{{$service->image ?? null}}">
                    <input type="hidden" name="image_alt" value="{{$service->image_alt ?? null}}">
                    <div class="row">
                        <div class="form-group col-xl-6">
                            <label for="title_uk">Название [UK] <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title_uk" name="title_uk" placeholder="..." value="{{$service->title_uk ?? null}}" required>
                        </div>
                        <div class="form-group col-xl-6">
                            <label for="title_en">Название [EN] <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title_en" name="title_en" placeholder="..." value="{{$service->title_en ?? null}}" required>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="form-group col-xl-6">
                            <label for="text_uk">Текст [UK] <span class="text-danger">*</span></label>
                            <textarea class="js-summernote form-control" id="text_uk" name="text_uk">{!! $service->text_uk  ?? null!!}</textarea>
                        </div>

                        <div class="form-group col-xl-6">
                            <label for="text_en">Текст [EN] <span class="text-danger">*</span></label>
                            <textarea class="js-summernote form-control" id="text_en" name="text_en">{!! $service->text_en  ?? null!!}</textarea>
                        </div>
                    </div>
                    <!-- /.row -->



                    <h3 class="lead">SEO</h3>

                    <div class="row">
                        <div class="form-group col-xl-6">
                            <label for="meta_title_uk">Meta-title [UK]</label>
                            <input type="text" class="form-control" id="meta_title_uk" name="meta_title_uk" placeholder="..." value="{{$service->meta_title_uk ?? null}}">
                            <div class="form-text text-muted">Название услуги для поисковых систем.</div>
                        </div>
                        <div class="form-group col-xl-6">
                            <label for="meta_title_en">Meta-title [EN]</label>
                            <input type="text" class="form-control" id="meta_title_en" name="meta_title_en" placeholder="..." value="{{$service->meta_title_en ?? null}}">
                        </div>
                        <div class="form-group col-xl-6">
                            <label for="meta_description_uk">Meta-description [UK]</label>
                            <textarea class="form-control" id="meta_description_uk" name="meta_description_uk" placeholder="...">{{$service->meta_description_uk ?? null}}</textarea>
                            <div class="form-text text-muted">Описание услуги для поисковых систем. Обычно это 50-250 символов.</div>
                        </div>
                        <div class="form-group col-xl-6">
                            <label for="meta_description_en">Meta-description [EN]</label>
                            <textarea class="form-control" id="meta_description_en" name="meta_description_en" placeholder="...">{{$service->meta_description_en ?? null}}</textarea>
                        </div>

                        <div class="form-group col-xl-6">
                            <label for="meta_keywords_uk">Meta-keywords [UK]</label>
                            <textarea class="form-control" id="meta_keywords_uk" name="meta_keywords_uk" placeholder="...">{{$service->meta_keywords_uk ?? null}}</textarea>
                            <div class="form-text text-muted">Слова или словосочетания описывающие услугу, вводимые через запятую.</div>
                        </div>
                        <div class="form-group col-xl-6">
                            <label for="meta_keywords_en">Meta-keywords [EN]</label>
                            <textarea class="form-control" id="meta_keywords_en" name="meta_keywords_en" placeholder="...">{{$service->meta_keywords_en ?? null}}</textarea>
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
                    @isset($service->id)
                        <button type="button" class="btn btn-sm btn-danger js-remove" data-id="{{$service->id}}"><i
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
@push('scripts')
    <script defer src="{{mix('/assets/pages/service-create.js', 'admin')}}"></script>
@endpush
@push('styles')
    <link rel="stylesheet" href="{{mix('/assets/pages/service-create.css', 'admin')}}">
@endpush
