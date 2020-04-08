<form action="{{route('postForm')}}" method="post">
    @csrf
    <input type="text" name="Hoten">
    <input type="submit">
</form>