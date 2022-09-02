<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Coupon;

class ShowCoupons extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    
    protected $listeners = ['render']; //para escuchar el evento emitido de createCoupon

    public function render()
    {
        $coupons = Coupon::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('description', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)->get();

        return view('livewire.coupon.show-coupons', compact('coupons'));
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
               $this->direction = 'asc'; 
            }else{
                $this->direction = 'desc';
            }
        }else{
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

} //class
