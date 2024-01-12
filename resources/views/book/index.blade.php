<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="card-header py-3">
    <h3 class="m-0 font-weight-bold text-primary" style="text-align: center">Sách</h3>
</div>
<div class="wrapper">
    <nav>
        <a href="/book/create" class="btn btn-outline-primary">Thêm mới</a>
    </nav>
</div>


<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Tên sách</th>
                    <th>Mã số sách</th>
                    <th>Tác giả</th>
                    <th>Thể loại</th>
                    <th>Số trang</th>
                    <th>Năm xuất bản</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->book_name }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->genre }}</td>
                        <td>{{ $book->page_count }}</td>
                        <td>{{ $book->publication_year }}</td>
                        <td>
                            <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                                <a href="{{route('book.edit', $book->id)}}" class="btn btn-info">Sủa</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <h3 class="m-0 font-weight-bold text-primary" style="text-align: center">(Tổng số sách: {{ $totalBooks }})</h3>
    {{-- {{ $products->links('pagination::bootstrap-4') }} --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>
    $(document).ready(function() {
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    });
</script>

