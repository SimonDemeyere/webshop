<div class="d-none">{!! array_push($arr, $child_category) !!}</div>
<td>{{ $child_category->id }}</td>
<td>
    {{ $category->category . ' / ' }}
    @foreach($arr as $arrCategory)
        @if($loop->last)
            {{ $arrCategory['category'] }}
        @else
            {{ $arrCategory['category'] . ' / ' }}
        @endif
    @endforeach
</td>
<td>{{ $child_category->created_at ? $category->created_at : '/'}}</td>
<td>{{ $child_category->updated_at ? $category->updated_at : '/'}}</td>
<td><a class="btn btn-outline-warning rounded-pill w-50 mb-1" href="{{ route('categories.edit', $child_category->id) }}"><i class="fas fa-edit"></i></a></td>
@if ($child_category->categories)
    <tr>
        @foreach ($child_category->categories as $childCategory)
            @include('admin.categories.child_category', ['child_category' => $childCategory])
        @endforeach
    </tr>
@endif

