<div>
    <div class="container">
        <div class="card"> 
            <div class="card-header">
                <div class="card-title">specification uni
                    
                </div>
            </div>
            <div class="card-body">
                <div><p>استان خود را انتخاب کنید</p>
                    <select wire:model="ostanSelectedById" id="ostan">
                        <option value="{{$ostan['id']}}">{{$ostan['name']}}</option>
                    </select></div>
                <div><p>شهر خود را انتخاب کنید</p></div>
                <div><p>دانشگاه خود را انتخاب کنید</p></div>

            </div>
        </div>
    </div>
</div>
