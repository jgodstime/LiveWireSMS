<?php

namespace App\Http\Livewire\Sale;

use Livewire\Component;

class SellModal extends Component
{

    public $product_name, $amount, $product_id, $quantity, $amount_sold;
    public $sale_item = [];

    public $isOpenSellModal = false;
    public $isOpenUpdateSellModal = false;

    protected $listeners = ['openSellModal'=>'openSellModal',
                            'openCreateSaleModal'=>'openCreateSaleModal',
                            'isOpenUpdateSellModal'=>'isOpenUpdateSellModal'
                        ];

  
    public function openSellModal($data)
    {
        
        $product = json_decode($data, true);
        $this->product_name = $product['name'];
        $this->amount = $product['amount'];
        $this->product_id = $product['id'];

        //if product_id exist open the update form else open the sell form
        if($this->checkDuplicateSaleItem('product_id', $this->product_id)){
            $this->isOpenUpdateSellModal = true;
        }else{
            $this->isOpenSellModal = true;
        }
    }
    

    public function openCreateSaleModal()
    {
        $this->emit("alert", ["success", dd($this->sale_item)]);

    }
    // public function updated($field)
    // {
    //     dd($field);
    // }

    public function getSaleItem($productId)
    {
        $key = array_search($productId, array_column($this->sale_item, 'product_id')); //get the array key
        return $this->sale_item[$key]; //get the sale_item for a particular item
    }

    public function sellNow()
    {
        $validatedData = $this->validate([
            'product_id' => 'required|exists:products,id',
            'amount_sold' => 'required|numeric',
            'quantity' => 'required',
        ]);


        $validatedData['product_id'] = $this->product_id;
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['product_name'] = $this->product_name;
        
        array_push($this->sale_item, $validatedData);
    
        $this->amount_sold = null;
        $this->quantity = null;
        $this->isOpenSellModal = false;

        $this->emit("alert", ["success", "Sale successfully added"]);

    }

    public function close()
    {
        $this->isOpenSellModal = false;
        $this->isOpenUpdateSellModal = false;
    }
 
   
    public function render()
    {
        return view('livewire.sale.sell-modal');
    }


    public function checkDuplicateSaleItem($key, $val){
        foreach ($this->sale_item as $item)
            if (isset($item[$key]) && $item[$key] == $val)
                return true;
        return false;        
    }

}
