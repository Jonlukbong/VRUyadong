<div class="form-group  {{ $errors->has('nameproduct') ? 'has-error' : ''}}">
    <label for="nameproduct" class="control-label">{{ 'ชื่อสินค้า' }}</label>
    <input class="form-control " name="nameproduct" type="text" id="nameproduct" value="{{ isset($product->nameproduct) ? $product->nameproduct : ''}}" >
    {!! $errors->first('nameproduct', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    <label for="amount" class="control-label">{{ 'จำนวน(ลิตร)' }}</label>
    <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($product->amount) ? $product->amount : ''}}" >
    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'ราคา(ต่อลิตร)' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($product->price) ? $product->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
