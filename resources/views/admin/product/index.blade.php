 <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Date Create</th>
                            <th style="width: 30%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product['id']}}</td>
                                <td>{{$product['title']}}</td>
                                <td>{{$product['price']}}</td>
                                <td>
                                    @if($product['status'] == 1)
                                    <span class="bg-success">Enabled</span>
                                    @else
                                        <span class="bg-danger">Disabled</span>
                                    @endif
                                </td>
                                <td>{{$product['description']}}</td>
                                <td>{{$product['created_at']}}</td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{route('product.edit', $product['id'] )}}">
                                        <i class="fas fa-pencil-alt"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-success btn-sm" href="{{route('product.show', $product['id'] )}}">
                                        <i class="fas fa-eye"></i>
                                        Show
                                    </a>
                                    <form action="{{route('product.destroy', $product['id'])}}" method="POST"
                                          style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
