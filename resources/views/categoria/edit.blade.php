<form action="{{ url('categoria/'.$categoria->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <input type="text" name="descricao" placeholder="descricao" value="{{ $categoria->descricao }}" required>

    <button type="submit">Update Descricao</button>
</form>