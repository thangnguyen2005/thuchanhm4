
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary" style="text-align: center">Cập nhật sách</h3>
    </div>
    <hr>
    <form action="{{ route('book.update', $book->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="book_name" class="form-label">Tên sách</label>
        <input type="text"  name="book_name" value="{{ $book->book_name }}"><br>
        @error('book_name')
            <div style="color: red">{{ $message }}</div>
        @enderror

        <label for="isbn" class="form-label">Mã sách</label>
        <input type="text"  name="isbn" value="{{ $book->isbn }}"><br>
        @error('isbn')
            <div style="color: red">{{ $message }}</div>
        @enderror

        <label for="author" class="form-label">Tác giả</label>
        <input type="text"  name="author" value="{{ $book->author }}"><br>
        @error('author')
            <div style="color: red">{{ $message }}</div>
        @enderror

        <label for="genre" class="form-label">Thể Loại</label>
        <input type="text"  name="genre" value="{{ $book->genre }}"><br>
        @error('genre')
            <div style="color: red">{{ $message }}</div>
        @enderror

        <label for="page_count" class="form-label">Số Trang</label>
        <input type="text"  name="page_count" value="{{ $book->page_count }}"><br>
        @error('page_count')
            <div style="color: red">{{ $message }}</div>
        @enderror

        <label for="publication_year" class="form-label">Năm xuất bản</label>
        <input type="text"  name="publication_year" value="{{ $book->publication_year }}"><br>
        @error('publication_year')
            <div style="color: red">{{ $message }}</div>
        @enderror

        <input type="submit" class="btn btn-outline-success" value="Xác nhận">

        <a class="btn btn-outline-danger" href="{{ route('book.index') }}">Hủy</a>

    </form>

    <style>
        /* Định dạng tiêu đề */
        .form-label {
            font-weight: bold;
        }

        /* Định dạng nút "Thêm" */
        .btn-outline-success {
            border-color: #28a745;
            color: #28a745;
        }

        .btn-outline-success:hover {
            background-color: #28a745;
            color: #fff;
        }

        /* Định dạng nút "Hủy" */
        .btn-outline-danger {
            border-color: #dc3545;
            color: #dc3545;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: #fff;
        }

        /* Định dạng đường viền và khoảng cách giữa các phần tử */
        form {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 6px 12px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
