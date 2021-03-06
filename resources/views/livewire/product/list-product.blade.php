<div>

<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Products</h1>
          <p>List of products</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
      
          <button type="button" class="btn btn-primary"  wire:click="$emit('openCreateProductModal')" data-toggle="modal" data-target="#adCategory">
            Add Product
            </button>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                      
                    <tr>
                      <th>S/N</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Amount</th>
                      <th>Description</th>
                      <th>Created At</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <?php $sn = 1;?>
                      @foreach($products as $product)
                    <tr>
                      <td>{{$sn++ }}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->category->name}}</td>
                      <td>{{$product->amount}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->created_at}}</td>
                      <td><button type="button" wire:click="$emit('openUpdateProductModal','{{$product}}')" class="btn btn-info">Update</button></td>
                    </tr>
                    @endforeach
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

</div>


@livewire('product.create-product')
@livewire('product.update-product')

