<form action="{{ url('produto/'.$produto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $produto->name }}" required>
    
    <input type="number" name="preco" placeholder="Preco" value="{{ $protudo->preco }}" required>
    <button type="submit">Update Produto</button>
</form>