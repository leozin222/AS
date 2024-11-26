<form action="{{ url('produto') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="descricao" required>
  
    <input type="number" name="preco" placeholder="preco" required>
    <button type="submit">Create Produto</button>

    <label for="categoria_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
            <select name="categoria_id" id="categoria_id" required>
                <option value="">Select a categoria</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                @endforeach
            </select>
   




</form>

