<tr>
    <td>{{ $category_item->id }}</td>
    <td>{{ $category_item->title }}</td>
    <td>@if($category_item->status) Опубликован @else Черновик @endif</td>
    <td>{{ $category_item->created_at }}</td>
    <td>{{ $category_item->updated_at }}</td>
    <td>
        <a href="{{ route('portfolio.index') }}" class="btn btn-sm btn-info" target="_blank"><i class="fa fa-eye"></i></a>
        <a href="{{ route('admin.portfolio_category.edit', $category_item->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
        <form method="post" class="form-delete"
              action="{{ route('admin.portfolio_category.destroy', $category_item->id) }}">
            @method('DELETE')
            @csrf
            <button type="submit"
                    class="btn btn-sm btn-danger btn-delete point_c" onclick="return confirm('Действительно хотите удалить запись?');"><i class="fa fa-trash"></i></button>
        </form>
    </td>
</tr>
