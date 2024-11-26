@foreach($categoria as $entity)
    <div>
        <h3>{{ $entity->name }}</h3>
      
        <a href="{{ url('categoria/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('categoria/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach