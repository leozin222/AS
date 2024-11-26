<form action="{{ url('categoria') }}" method="POST">

    
    @csrf
    <input type="text" name="descricao" placeholder="Descricao" required>
    
    <button type="submit">Create categoria</button>

   
            
</form>
