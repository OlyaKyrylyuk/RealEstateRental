@extends('welcome')
@section('content')
    <div class="container" style="padding-bottom: 35px;">

        <div class="container mt-5 mp-5">
            <h3 style="text-align: center">РЕДАГУВАТИ ОРЕНДУ НЕРУХОМОСТІ</h3>

            <div class="register_block">
                <form method="POST" action="{{ route('estates.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" style="margin-right: 5px;">
                        <label for="inputState">АДРЕСА</label>
                        <select name="address_id" class="form-control" style="height: 34px !important;">
                            @foreach($addresses as $address)
                                <option value="{{$address->id}}">{{$address->street}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputZip">ТИП ОРЕНДИ НЕРУХОМОСТІ</label>
                        <select name="type" class="form-control" style="height: 34px !important;">
                            @foreach(\App\Models\Estate::$types as $key=>$type)
                                <option value="{{$key}}">{{$type}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="number_of_rooms">КІЛЬКІСТЬ КІМНАТ</label>
                        <input name="number_of_rooms"
                               type="number"
                               class="form-control"
                               value="{{$estate->number_of_rooms}}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="ground">ПОВЕРХ</label>
                        <input name="ground"
                               type="number"
                               class="form-control"
                               value="{{$estate->ground}}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="communals_price">ОПЛАТА ЗА КОМУНАЛЬНІ</label>
                        <input name="communals_price"
                               type="number"
                               class="form-control"
                               value="{{$estate->communals_price}}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="ground">ОПИС</label>
                        <textarea  class="form-control" name="description"> {{$estate->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="area">КВ.М.</label>
                        <input name="area"
                               type="number"
                               class="form-control"
                               value="{{$estate->area}}"
                        >
                    </div>
                    <div class="form-group">
                        <i class="fa fa-cloud"></i>
                        <label for="picture_input">ЗОБРАЖЕННЯ</label>
                        <div class="wrapper">
                            <div class="file-upload">
                                <input type="file" class="upload" value="{{$estate->media->value}}" name="photo" id="picture_input" accept="image/png, image/jpeg, image/jpg"/>
                                <input id="photo_path" type="hidden" name="photo_path" />
                                <div class="file-upload__image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-light">Додати нерухомість для оренди</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('JS')
    <script type="text/javascript" >

        $(document).ready(function(){

            $('input.upload').on('change', addFile);

            // document.querySelector('.form').addEventListener('submit',()=>{
            //
            //     let formData = new FormData(document.querySelector('.form'))
            //     // formData.set('photo', document.querySelector('.form .upload').files[0].name);
            //     let base_URL= document.querySelector('.file-upload__image img').src;
            //     console.log(document.querySelector('.form .upload').files[0])
            //     console.log(formData.get('photo'))
            //
            //     console.log(formData.get('_token'))
            //     $.ajax({
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         },
            //         type:'POST',
            //         url:'/books',
            //         processData: false,
            //         contentType: false,
            //         data : formData,
            //         success:function(data){
            //             console.log(data);
            //         }
            //     });
            // })
        });
        function addFile (event) {
            document.getElementById("uploadfile_text").style.display = 'none';
            var jqDisplay = $('div.file-upload__image');
            var reader = new FileReader();
            var selectedFile = event.target.files[0];

            reader.onload = function (event) {
                var imageSrc = event.target.result;
                document.getElementById("photo_path").value = imageSrc;
                jqDisplay.html('<img src="' + imageSrc + '"  alt="uploaded Image" class="uploaded_image">');

            };
            reader.readAsDataURL(selectedFile);
        }
    </script>
@endsection
