<h1>delete page</h1>

<form action="delete_route" method="POST">
    <button type="submit" value="Delete">CLICK</button>
    @method('delete')
    @csrf
</form>