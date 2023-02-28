<div>

    <div class="p-4 w-full">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
            <textarea class="form-control" rows="10" cols="95" name="message" id="message" maxlength="1000" wire:model="cmsText.aboutUsText"   class="mt-1 form-control block w-full border border-black shadow-sm text-md border-gray-600 rounded-md"></textarea>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-bold text-success">
                <div id="counter" class="place-items-start">
            </div> 
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-end">
                <button class="btn btn-primary px-5"  wire:click="save">Save</button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('livewire:load', function () {
            const messageEle = document.getElementById('message');
            const counterEle = document.getElementById('counter');
        
        messageEle.addEventListener('input', function (e) {
                const target = e.target;
                    
                // Count the current number of characters
                const currentLength = 1000-target.value.length;
            
                counterEle.innerHTML = `Total Characters : ${currentLength} / 1000`;
            });
        })
    </script>
</div>


