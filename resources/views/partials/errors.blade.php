@if(count($errors->all()))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
<!-- check loi khi khong nhap ki tu va do dai ki tu cho title va content -->