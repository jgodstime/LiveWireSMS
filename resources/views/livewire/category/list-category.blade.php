<div>

<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Categories</h1>
          <p>List of category</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
      
          <button type="button" class="btn btn-primary"  wire:click="$emit('openCreateCategoryModal')" data-toggle="modal" data-target="#addCategory">
            Add Category
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
                      <th>Category Name</th>
                      <th>Created At</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <?php $sn = 1;?>
                      @foreach($categories as $category)
                    <tr>
                      <td>{{$sn++ }}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->created_at}}</td>
                      <td><button type="button" wire:click="$emit('openUpdateCategoryModal','{{$category}}')" class="btn btn-info">Update</button></td>
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


@livewire('category.create-category')
@livewire('category.update-category')

