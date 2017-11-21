<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Reviews</th>
    </tr>
    </thead>
    <tbody>
@foreach($products AS $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>
            <table border="1">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Text</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($product->reviews()->get() AS $review)
                        <tr>
                            <td> {{ $review->id }}</td>
                            <td> {{ $review->review }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No reviews</td>
                        <tr>
                    @endforelse
                </tbody>
            </table>
        </td>
    </tr>

@endforeach
    </tbody>
</table>

