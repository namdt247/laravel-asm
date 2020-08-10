<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/7/20
 */
?>
@extends('admin.layout_admin_master')

@section('main-header')
    <h1>Sản phẩm <small>chỉnh sửa</small></h1>
@endsection

@section('main-content')
    <form action="/admin/product/edit" method="post" class="p-3 mb-3" id="product_form" style="background-color: white">
        @csrf
        <input type="text" name="id" value="{{ $product->id }}" hidden />
        <div class="row mt-3">
            <div class="col-2">
                Tên sản phẩm
            </div>
            <div class="col-10">
                <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm"
                       value="{{ $product->name }}" />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-2">
                Dòng sản phẩm
            </div>
            <div class="col-10">
                <div class="form-group">
                    <select class="form-control" name="cateId">
                        @foreach($listCate as $cate)
                            <option value="{{ $cate->id }}" class="form-control"
                                @if ($product->categoryId == $cate->id) selected
                                @endif
                            >
                                {{ $cate->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-2">
                Giá
            </div>
            <div class="col-10">
                <input type="text" name="price" class="form-control price" placeholder="Nhập giá sản phẩm"
                       value="{{ $product->price }}" />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-2">
                Ảnh sản phẩm
            </div>
            <div class="col-10">
                <div class="form-group">
                    <button type="button" id="upload_widget" class="btn btn-primary">Upload
                        files
                    </button>
                    <div class="thumbnails">
                        @foreach($product->large_photos as $p)
                            <img src="{{$p}}" alt=""  width="150" height="150">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-2">
                Mô tả
            </div>
            <div class="col-10">
                <div class="form-group">
                    <textarea id="editor" name="description" class="form-control"
                              placeholder="Mô tả chi tiết sản phầm">
                        {{$product->description}}
                    </textarea>
                </div>
            </div>
        </div>

        <div class="row mt-3 px-5">
            <div class="col-6">
                <input type="submit" value="Cập nhật" class="btn btn-primary form-control"/>
            </div>
            <div class="col-6">
                <input type="reset" value="Hủy" class="btn btn-secondary form-control" />
            </div>
        </div>
    </form>
@endsection

@section('main-script')
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget(
            {
                cloudName: 'namdt247',
                uploadPreset: 'yfb575vu',
                multiple: true,
                form: '#product_form',
                fieldName: 'thumbnails[]',
                thumbnails: '.thumbnails'
            }, function (error, result) {
                if (!error && result && result.event === "success") {
                    console.log('Done! Here is the image info: ', result.info.url);
                    var arrayThumnailInputs = document.querySelectorAll('input[name="thumbnails[]"]');
                    for (let i = 0; i < arrayThumnailInputs.length; i++) {
                        arrayThumnailInputs[i].value = arrayThumnailInputs[i].getAttribute('data-cloudinary-public-id');
                    }
                }
            }
        );
        $('#upload_widget').click(function () {
            myWidget.open();
        })
        // xử lý js trên dynamic content.
        $('body').on('click', '.cloudinary-delete', function () {
            var splittedImg = $(this).parent().find('img').attr('src').split('/');
            var imgName = splittedImg[splittedImg.length - 1];
            imgName = imgName.replace('.jpg', '');
            $('input[data-cloudinary-public-id="' + imgName + '"]').remove();
        });
    </script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection



