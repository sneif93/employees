<form class="col" method="{{$method}}" action="{{url($route)}}">

@csrf
    <div class="row justify-content-center">
    <div class="col-6">
        <div class="col-12 m-2">
            <label for="inputEmail4" class="form-label">Name</label>
            <div class="input-group has-validation">
                <input name="name" @if(!empty($city)) value="{{ $city->name}}" @endif type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" >
                @error('name')
                    <div id="inputNameFeedback" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12 m-2">
        <div class="input-group mb-3">
            <div class="input-group has-validation">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                <select name="fk_id_country" class="form-select @error('fk_id_country') is-invalid @enderror" id="inputGroupSelect">
                    <option disabled selected>Select an option</option>
                    @foreach($countries as $country)
                        @if( !empty($city) && $country->id_country == $city->fk_id_country )
                         
                            <option selected value="{{ $country->id_country }}"> {{ $country->name }} </option>
                        @else
                            <option value="{{ $country->id_country }}"> {{ $country->name }} </option>
                        @endif
                    @endforeach
                </select>
                @error('fk_id_country')
                    <div id="inputGroupSelectFeedback" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        </div>
        <!-- @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Add / Update</button>
        </div>
    </div>
    </div>
</form>