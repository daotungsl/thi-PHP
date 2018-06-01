<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="col-md-3">
        <a class="navbar-brand" href="#"><i class="fab fa-adversal fa-4x"></i></a>
        <span class="text-muted">Site Slogan</span>
    </div>

</nav>
<div class="container-fluid row mt-2">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <main class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">
                        Newest Home
                    </h3>
                    <div class="clearfix"></div>
                    <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
                    <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
                    <table class="table table-striped">
                        <thead>
                        <tr class="row">
                            <th class="col-md-1">Trạng thái</th>
                            <th class="col-md-2">Địa chỉ</th>
                            <th class="col-md-2">Tên chung cư</th>
                            <th class="col-md-1">Giá bán</th>
                            <th class="col-md-2">Thông tin chung</th>
                            <th class="col-md-2">Thông tin chi tiết</th>
                            <th class="col-md-2">HÌnh địa diện</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list_apartments as $item)
                            <tr id="{{$item->id}}" class="row">
                                 <th class="col-md-1">{{$item->status}}</th>
                                <th class="col-md-2">{{$item->address}}</th>
                                <th class="col-md-2">{{$item->name}}</th>
                                <th class="col-md-1">{{$item->price}}</th>
                                <th class="col-md-2">{{$item->info}}</th>
                                <th class="col-md-2">{{$item->detail}}</th>
                                <th class="col-md-2">
                                    <div class="card"
                                         style="background-image: url('{{$item->avatar}}'); background-size: cover; width: 60px; height: 60px;">
                                    </div>

                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        {{ $list_apartments->links() }}
                    </div>
                </div>
            </div>
    </main>
</div>
<footer class="container-fluid mt-3 mb-3">
    <p class="text-center">Copyright @2017</p>
</footer>
<script>
    var deleteId = '';
    $('.btn-delete').click(function () {
        deleteId = $(this).attr("id").replace('delete-', '');
        var name = $('#name-' + deleteId).text();
        name = "Sản phẩm với tên là: '" + name + "'";
        $('#modalContent').text(name);
        $('#exampleModal').modal('show');
    });
    $('#btnConfirmDelete').click(function () {
        $.ajax({
            type: 'DELETE',
            url: '/products/' + deleteId,
            data: {
                "_token": "{{ csrf_token() }}",
            },
            success: function () {
                $('#messageSuccess').text('Action success!');
                $('#exampleModal').modal('hide');
                $('#messageSuccess').removeClass('d-none');
                $('#' + deleteId).hide();
            },
            error: function () {
                $('#messageError').removeClass('d-none');
                $('#messageError').text('Action fails! Please try again later!');
                $('#exampleModal').modal('hide');
            }
        });
    });

</script>
</body>
</html>