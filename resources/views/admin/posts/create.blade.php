@extends('admin.layouts.layout-admin')
@section('title', 'إنشاء منشور ')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">إضاقة منشور جديد</h3>
            </div> 
            <!--begin::Form-->
            <form action="{{route('admin.posts.store')}}" class="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>العنوان</label>
                            <input required type="text" value="{{old('title')}}" name="title" class="form-control @error('title') is-invalid @enderror" />
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label>التصنيف</label>
                            <select required  name="category_id" class="form-control selectpicker @error('category_id') is-invalid @enderror" data-live-search="true"
                                name="param">
                                <option value=""></option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                 {{old('category_id') == $category->id ? 'selected': ''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mt-5">
                            <label>الوسوم</label>
                            <select name="tags_id[]" class="form-control selectpicker @error('tags_id') is-invalid @enderror" data-live-search="true"
                                name="param" multiple="multiple" required>
                                @foreach($tags as $tag)
                                <option value="{{$tag->id}}" {{(collect(old('tags_id'))->contains($tag->id)) ? 'selected':'' }}  />{{$tag->name}}</option>
                                @endforeach
                            </select>
                            @error('tags_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mt-5">
                            <label>صورة المنشور</label>
                            <div class="custom-file">
                                <input value="{{old('post_img')}}" required name="post_img" type="file" class="custom-file-input @error('post_img') is-invalid @enderror" id="customFileLang"
                                    lang="ar">
                                <label class="custom-file-label" for="customFileLang">اختر الصورة</label>
                                @error('post_img')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label> التفاصيل</label>
                            <div class="card-body">
                                <textarea name="details" id="kt-ckeditor-1">
                                {{old('details')}}
                                </textarea>
                                @error('details')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-5"></div>
                    <div class="col-lg-6 mt-5">
                        <label>الحالة</label>
                        <div class="radio-inline">
                            <label class="radio radio-solid">
                                <input type="radio" name="type" value="0">
                                <span></span>مسودة</label>
                            <label class="radio radio-solid">
                                <input type="radio" name="type" value="1" />
                                <span></span>منشورة</label>
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-10 mt-10">
                        <button type="submit" class="btn btn-success mr-2">حفظ</button>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
</div>
@section('my-scripts')
<script src="{{asset('admin-assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
<script src="{{asset('admin-assets/js/pages/crud/forms/editors/ckeditor-classic.js')}}"></script>
<script src="{{asset('admin-assets//js/pages/crud/forms/widgets/select2.js')}}"></script>
@endsection
@endsection