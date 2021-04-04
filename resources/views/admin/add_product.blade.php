@extends('layouts.app')
@section('content')

    <div class="wrapper ">
        @include('admin.partials.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
        @include('admin.partials.navbar')

        <!-----Main Content---->

            <br><br><br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <form action="">
                        <div class="form-group">
                            <label for="product-name">Product Name</label>
                            <input type="text" name="product-name" placeholder="Product Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="product-Price">Product Price</label>
                            <input type="text" name="product-price" placeholder="Product Price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="product-category">Product Name</label>
                            <input type="text" name="product-category" placeholder="Product Category"
                                   class="form-control">
                        </div>

                        <label for="product-image">Product Image</label>
                        <input type="file" name="product-image" class="form-control">
                        <br>
                        <div class="form-group">
                            <label for="product-detail">Product Detail</label>
                            <textarea name="product-detail" class="form-control" rows="7"
                                      placeholder="Product Detail"></textarea>
                        </div>
                    </form>
                </div>
            </div>

            <!-----End Main Content----->
            @include('admin.partials.footer')
        </div>
    </div>
@endsection