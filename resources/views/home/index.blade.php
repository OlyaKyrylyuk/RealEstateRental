@extends('welcome')
@section('content')
<div style="margin-top: 5px;">
    <div class="row">
    <div class="col-md-3">
            <div class="filter_group">
                {{--           тип будівлі--}}

                <label>Тип будівлі</label>

                <div style="margin-left: 10px;">
                    <input type="checkbox" name="" value=""/>
                    <label>Будинок</label>
                    <br>
                    <input type="checkbox" name="" value=""/>
                    <label>Квартира</label>
                </div>

            </div>
            <div style="margin-top: 5px;"></div>
            <div class="filter_group">
                {{--           кількість кімнат--}}
                <label>Кількість кімнат</label>

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
                <label>Поверх</label>

                <div style="margin-left: 10px;">
                    <input type="number" name="" value=""/>
                    <label>від</label>
                    <br>
                    <input type="number" name="" value=""/>
                    <label>до</label>
                </div>
            </div>
        <div style="margin-top: 5px;"></div>

        <div class="filter_group">
                {{--           ціна--}}

                <label>Ціна (від грн)</label>

                <div style="margin-left: 10px;">
                    <input type="number" name="" value=""/>
                    <label>від</label>
                    <br>
                    <input type="number" name="" value=""/>
                    <label>до</label>
                </div>
            </div>
        <div style="margin-top: 5px;"></div>

        <button class="filter-button">
            Знайти
        </button>
        </div>
    <div class="col-md-9">
        @forelse($accessibleFlats as $flat)
            {{$flat}}
        @empty
            <p>Немає наявного житла</p>
        @endforelse
    </div>
</div>
</div>

@endsection
