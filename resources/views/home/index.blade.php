@extends('welcome')
@section('content')
<div style="margin-top: 5px;">
    <div class="row">
    <div class="col-md-3">
            <div class="filter_group">
                {{--           тип будівлі--}}

                <label>ТИП БУДІВЛІ</label>

                <div style="margin-left: 10px;">
                    <input type="checkbox" name="" value=""/>
                    <label>БУДИНОК</label>
                    <br>
                    <input type="checkbox" name="" value=""/>
                    <label>КВАРТИРА</label>
                </div>

            </div>
            <div style="margin-top: 5px;"></div>
            <div class="filter_group">
                {{--           кількість кімнат--}}
                <label>КІЛЬКІСТЬ КІМНАТ</label>

                <div style="margin-left: 10px;">
                    <input type="checkbox" name="" value=""/>
                    <label>1</label>
                    <br>
                    <input type="checkbox" name="" value=""/>
                    <label>2</label>
                    <br>
                    <input type="checkbox" name="" value=""/>
                    <label>3</label>
                    <br>
                    <input type="checkbox" name="" value=""/>
                    <label>4+</label>
                </div>
            </div>
        <div style="margin-top: 5px;"></div>

        <div class="filter_group">
                {{--           поверх (якщо квартира)--}}
                <label>ПОВЕРХ</label>

                <div style="margin-right: 10px;">
                    <div class="form-group">
                        <label>ВІД</label>
                        <input class="form-control" style="margin-right: 5px;" type="number" name="" value=""/>
                    </div>

                    <div class="form-group">
                        <label>ДО</label>
                        <input class="form-control" style="margin-right: 5px;" type="number" name="" value=""/>
                    </div>
                </div>
            </div>
        <div style="margin-top: 5px;"></div>

        <div class="filter_group">
                {{--           ціна--}}

                <label>ЦІНА (ВІД ГРН)</label>

                <div style="margin-right: 10px;">
                    <div class="form-group">
                        <label>ВІД</label>
                        <input class="form-control" style="margin-right: 5px;" type="number" name="" value=""/>
                    </div>

                    <div class="form-group">
                        <label>ДО</label>
                        <input class="form-control" style="margin-right: 5px;" type="number" name="" value=""/>
                    </div>
                </div>
            </div>
        <div style="margin-top: 5px;"></div>

        <button class="filter-button">
            ЗНАЙТИ
        </button>
        </div>
    <div class="col-md-9">
        <div style="display:flex; flex-wrap: wrap;">
        @forelse($accessibleFlats as $flat)
                <div style="flex: 0 0 50%;">
                    <img width="350px" height="250px" style="border: 12px solid gray; border-radius: 10px; margin-top: 20px; margin-left: 20px;" src="/images/{{optional($flat->media)->value}}"/>
                    <h4 style="margin-left: 160px;"><strong>₴{{$flat->price}}</strong></h4>
                    <p style="max-width: 350px; margin-left: 30px;"><strong>ОПИС:</strong> {{$flat->description}}</p>
                </div>
        @empty
            <p>Немає наявного житла</p>
        @endforelse
        </div>
    </div>
</div>
</div>

@endsection
