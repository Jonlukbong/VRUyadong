
<!-- <div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="control-label">{{ 'เดือน' }}</label>
    <select name="month" class="form-control" id="month" required>
        <option selected disabled>กรุณาเลือกเดือน</option>
        @foreach (json_decode('{"มกราคม":"มกราคม","กุมภาพันธ์":"กุมภาพันธ์","มีนาคม":"มีนาคม","เมษายน":"เมษายน","พฤษภาคม":"พฤษภาคม","มิถุนายน":"มิถุนายน","กรกฎาคม":"กรกฎาคม","สิงหาคม":"สิงหาคม","กันยายน":"กันยายน"
        ,"ตุลาคม":"ตุลาคม","พฤศจิกายน":"พฤศจิกายน","ธันวาคม":"ธันวาคม"}', true) as $optionKey => $optionvalue)
        <option value="{{ $optionKey }}" {{ (isset($finance2->month) && $finance2->month == $optionKey) ? 'selected' : ''}}>{{ $optionvalue }}</option>
        @endforeach
    </select>
    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
</div> -->

<div class="form-group {{ $errors->has('sum2') ? 'has-error' : ''}}">
    <label for="sum2" class="control-label">{{ 'ผลรวมกำไรทั้งหมด' }}</label>
    <input class="form-control" name="sum2" type="number" id="sum2" value="{{ isset($finance2->sum2) ? $finance2->sum2 : ''}}">
    {!! $errors->first('sum2', '<p class="help-block">:message</p>') !!}
</div>

<!-- <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($finance2->user_id) ? $finance2->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div> -->

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>