<div>

@if($isOpen)
<!-- Modal -->
<div class="modal d-block" id="addProduct" wire:click.self="$set('open', false)" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" wire:click.self="close()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form wire:submit.prevent="createProduct">
      <div class="modal-body">
     
        <div class="row">
            
            <div class="col-md-12">
                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name</label>
                <input type="text" class="form-control" wire:model="name" >
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Category</label>
                    <select wire:model="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Amount</label>
                    <input type="number" class="form-control" wire:model="amount" >
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Short Description</label>
                    <input type="text" class="form-control" wire:model="description" >
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>  
            </div>

        </div>
         

         


               
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" wire:click.self="close()" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>

    </div>
  </div>
</div>
@endif

</div>

<!-- @livewire('category.list-category') -->
