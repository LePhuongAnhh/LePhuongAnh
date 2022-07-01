<input type="hidden" name="Elec_id" value="{{old('Elec_id')?? $product->Elec_id}}">
<div class="form-group">
    <label for="Elec_Name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="Elec_Name" name="Elec_Name" value="{{old('Elec_Name')?? $product->Elec_Name}}">
</div>

{{--<div class="form-group">--}}
{{--    <label for="Cate_id" class="font-weight-bold">Category ID</label>--}}
{{--    <input type="text" class="form-control" id="Cate_id" name="Cate_id" value="{{old('Cate_id')?? $product->Cate_id}}">--}}
{{--</div>--}}

{{--@php--}}
{{--    $Cate_id = old('category') ?? $product->Cate_id?? null;--}}
{{--@endphp--}}

{{--<div class="form-group">--}}
{{--    <label for="Cate_id" class="font-weight-bold">Category ID</label>--}}
{{--    <select name="Cate_id" class="form-control" id="Cate_id" >--}}
{{--        <option value="0">Please select a category ID</option>--}}
{{--        @foreach($category as $c)--}}
{{--            <option value="{{ $c->Cate_id }}"--}}
{{--                {{ ($Cate_id != null && $c->Cate_id == $Cate_id) ? 'selected' : '' }}--}}
{{--            >{{ $c->Cate_Name }}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--</div>--}}

@php
    $Cate_id = old('category') ?? $product->Cate_id?? null;
@endphp

<div class="form-group">
    <label for="Cate_id" class="font-weight-bold">Category ID</label>
    <select name="Cate_id" class="form-control" id="Cate_id" required>
        <option value="0">Please select a category</option>
        @foreach($category as $c)
            <option value="{{ $c->Cate_id }}"
                {{ ($Cate_id != null && $c->Cate_id == $Cate_id) ? 'selected' : '' }}
            >{{ $c->Cate_Name }}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <label for="Price" class="font-weight-bold">Price</label>
    <input type="text" class="form-control" id="Price" name="Price" value="{{old('Price')?? $product->Price}}">
</div>

<div class="form-group">
    <label for="Brand" class="font-weight-bold">Brand</label>
    <input type="text" class="form-control" id="Brand" name="Brand" value="{{old('Brand')?? $product->Brand}}">
</div>

<div class="form-group">
    <label for="Elec_Description" class="font-weight-bold">Description</label>
    <input type="text" class="form-control" id="Elec_Description" name="Elec_Description" value="{{old('Elec_Description')?? $product->Elec_Description}}">
</div>

<div class="form-group">
    <label for="img" class="font-weight-bold">Image</label><br>
    <img class="img-fluid" alt="" width="230" height="120" src="{{asset('storage/'.$product->Elec_Images )}}" alt="">
    <input type="file" id="img" name="Elec_Images"  value="{{old('img')?? $product->Elec_Images}}">
</div>




