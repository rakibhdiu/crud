<form action="{{ route('deleteData', $item->id) }}" method="POST" style="display:inline;">
    @csrf
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
