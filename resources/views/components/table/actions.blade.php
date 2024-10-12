<div>
    @isset($edit)
        <a href="{{ $edit }}"><i class="fas fa-edit"></i></a>
        
    @endisset
    @isset($show)
        <a href="{{ $show }}"><i class="fas fa-eye"></i></a>
    @endisset
    @isset($delete)
        <form action="{{ $delete }}" method="POST"
            style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="border-0 padding-0 bg-transparent text-danger">
                <i class="fas fa-trash"></i>
            </button>
        </form>
        
    @endisset
</div>
