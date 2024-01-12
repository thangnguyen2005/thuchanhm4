<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="card-header py-3">
    <h3 class="m-0 font-weight-bold text-primary" style="text-align: center">them sach</h3>
</div>

<div class="mb-3">
    <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="book_name" class="form-label">Tên sách</label>
        <input type="text" name="book_name" id="book_name">
        @error('book_name')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br>
        <label for="isbn" class="form-label">Mã sách</label>
        <input type="text" name="isbn" id="isbn">
        @error('isbn')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br>
        <label for="author" class="form-label">Tác giả</label>
        <input type="text" name="author" id="author">
        @error('author')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br>
        <label for="genre" class="form-label">Thể loại</label>
        <input type="text" name="genre" id="genre">
        @error('genre')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br>
        <label for="page_count" class="form-label">Số trang</label>
        <input type="text" name="page_count" id="page_count">
        @error('page_count')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br>
        <label for="publication_year" class="form-label">Năm xuất bản</label>
        <input type="text" name="publication_year" id="publication_year">
        @error('publication_year')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" class="btn btn-outline-success" value="Thêm mới">

        <a class="btn btn-outline-danger" href="{{ route('book.index') }}">Hủy</a>

    </form>
</div>
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
