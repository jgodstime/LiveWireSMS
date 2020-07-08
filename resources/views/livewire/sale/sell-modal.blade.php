<div>
   

@if($isOpenSellModal)
<div class="modal d-block" id="addCategory"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sell Item</h5>
        <button type="button" class="close" data-dismiss="modal" wire:click.self="close()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form wire:submit.prevent="sellNow">
      <div class="modal-body">

        <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Product Name</label>
                <input type="text" class="form-control" wire:model="product_name" disabled>
            </div>
          </div>
          
          <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount</label>
            <input type="number" class="form-control" wire:model="amount" disabled>
          </div>
          </div>

          <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount Sold</label>
            <input type="number" class="form-control" wire:model="amount_sold">
          </div>
          </div>

          <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Quantity</label>
            <input type="text" class="form-control" wire:model="quantity">
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



  

@if($isOpenUpdateSellModal)
<div class="modal d-block" id="addCategory"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Sell Item</h5>
        <button type="button" class="close" data-dismiss="modal" wire:click.self="close()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form wire:submit.prevent="sellNow">
      <div class="modal-body">

        <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Product Name</label>
                <input type="text" class="form-control" wire:model="product_name" disabled>
            </div>
          </div>
          
          <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount</label>
            <input type="number" class="form-control" wire:model="amount" disabled>
          </div>
          </div>

          <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount Sold</label>
            <input type="number" class="form-control" value="{{ getSaleItem($product_id)}}">
          </div>
          </div>

          <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Add Quantity</label>
            <input type="number" class="form-control" wire:model="quantity">
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
