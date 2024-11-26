@foreach($produto as $entity)
    <div>
        <h3>{{ $entity->name }}</h3>
      
        <a href="{{ url('produto/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('produto/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach