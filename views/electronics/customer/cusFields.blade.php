<input type="hidden" name="Cus_id" value="{{old('Cus_id')?? $customer->Cus_id}}">
<div class="form-group">
    <label for="Cus_Fullname" class="font-weight-bold">Fullname</label>
    <input type="text" class="form-control" id="Cus_Fullname" name="Cus_Fullname" value="{{old('Cus_Fullname')?? $customer->Cus_Fullname}}">
</div>
<div class="form-group">
    <label for="Cus_Username" class="font-weight-bold">Username</label>
    <input type="text" class="form-control" id="Cus_Username" name="Cus_Username" value="{{old('Cus_Username')?? $customer->Cus_Username}}">
</div>

<div class="form-group">
    <label for="Cus_DoB" class="font-weight-bold">Date of Birth</label>
    <input type="date" class="form-control" id="Cus_DoB" name="Cus_DoB" value="{{old('Cus_DoB')?? $customer->Cus_DoB}}">
</div>

<div class="form-group">
    <label for="Cus_Email" class="font-weight-bold">E-mail</label>
    <input type="email" class="form-control" id="Cus_Email" name="Cus_Email" value="{{old('Cus_Email')?? $customer->Cus_Email}}">
</div>
<div class="form-group">
    <label for="Phone" class="font-weight-bold">Phone</label>
    <input type="text" class="form-control" id="Phone" name="Phone" value="{{old('Phone')?? $customer->Phone}}">
</div>

<div class="form-group">
    <label for="Address" class="font-weight-bold">Address</label>
    <input type="text" class="form-control" id="Address" name="Address" value="{{old('Address')?? $customer->Address}}">
</div>
