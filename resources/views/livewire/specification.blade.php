<div>
    <div class="container">
        <div class="card"> 
            <div class="card-header">
                <div class="card-title">specification uni
                    
                </div>
            </div>
            <div class="card-body">
                <div><p>استان خود را انتخاب کنید</p>
                
                    <select wire:model="selectedOstanId" id="ostan" class="select2" >//wire:change
                        <option value="">select one</option>

                        @forelse ($ostans as $ostan)
                      
                        <option value="{{$ostan['id']}}">{{$ostan['name']}}</option>
                        @empty
                            
                        @endforelse
                       
                    </select></div>
                    {{-- @dd($cities) --}}
                <div><p>شهر خود را انتخاب کنید</p>

                    <select wire:model="selectedCityId" id="city" class="select2" >
                    <option value=" "></option>
                    @forelse ($cities as $city)
                  
                    <option value="{{$city['id']}}">{{$city['name']}}</option>
                    @empty
                        
                    @endforelse
                   
                </select></div></div>
                <div><p>دانشگاه خود را انتخاب کنید</p></div>

            </div>
        </div>
    </div>
</div>

@push('js/select2')
<script>
    $(document).ready(function(){
        $('.select2').select2();

        $('#ostan').on('change',function(){
         let id = $(this).val();
         @this.set('selectedOstanId',id) ;
         livewire.emit('getCityByOstanId');
        
         $('#city').on('change',function(){
            let id = $(this).val();
            @this.set('selectedCityId',id)
            livewire.emit('getUniversityByCityId')
        })
         
        })
    })



    
</script>
@endpush