<a href="#" onclick="deleteData({{ $id }})" class="btn btn-danger waves-effect waves-light btn-sm">
    <i class="fas fa-eraser me-1"></i>
    {{ $title }}
</a>
<form id="delete-form-{{ $id }}" action="{{ $url }}" method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>
