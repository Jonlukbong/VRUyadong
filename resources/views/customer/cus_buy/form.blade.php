

<div class="form-group {{ $errors->has('nameproduct') ? 'has-error' : ''}}">
    <label for="nameproduct" class="control-label">{{ 'ชื่อสินค้า' }}<span class="text-danger"> * </span></label>
    <select id="nameproduct" name="nameproduct" class="form-control" required onchange="document.querySelector('#idproduct').value = document.querySelector('#nameproduct').value;">
        @if(!empty($cusbuy))
            <option value="{{ $cusbuy->idproduct }}" selected >{{ $cusbuy->nameproduct }}</option>
        @else
            <option value="" selected disabled>กรุณาเลือกสินค้า</option>
        @endif

    </select>
</div>
<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    <label for="amount" class="control-label">{{ 'จำนวน(ลิตร)' }}<span class="text-danger"> * </span></label>
    <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($cusbuy->amount) ? $cusbuy->amount : ''}}" required>
    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
</div>
<div class="d-none form-group {{ $errors->has('idproduct') ? 'has-error' : ''}}">
    <input readonly class="form-control" name="idproduct" type="number" id="idproduct" value="{{ isset($cusbuy->idproduct) ? $cusbuy->idproduct : ''}}">
    {!! $errors->first('idproduct', '<p class="help-block">:message</p>') !!}
</div>
<!-- <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'ราคา' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($cusbuy->price) ? $cusbuy->price : ''}}">
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div> -->

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'เลือกสินค้า' }}">
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        // console.log("START");
        nameproduct();
    });

    function nameproduct() {
        //PARAMETERS
        fetch("{{ url('/') }}/api/nameproduct")
            .then(response => response.json())
            .then(result => {
                // console.log(result);
                //UPDATE SELECT OPTION
                let nameproduct = document.querySelector("#nameproduct");
                // console.log(nameproduct);
                // nameproduct.innerHTML = '<option value="" selected disabled>กรุณาเลือกสินค้า</option>';
                for (let item of result) {
                    let option = document.createElement("option");
                    option.text = item.nameproduct;
                    option.value = item.id;
                    nameproduct.appendChild(option);
                }
            });
    }
</script>