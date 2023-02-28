<div>
    <button type="button"
        wire:click="$toggle('showDiv')"
        class="btn btn-primary"><i class="bi bi-pencil-square"></i>
    </button>
    <div class="container" style="padding-top:10px;">
        @if ($showDiv)
        <div class="row">
            <div class="col-10">
                <input  type="text"
                        style="
                            width:100%;
                            padding: 8px 15px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: none;
                            border-bottom: 2px solid white;
                            background: transparent;
                            color: white;
                            outline: none;"
                        wire:model="cmsText.title"
                />
                @error('cmsText.title') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-2">
                <button class="btn btn-primary" wire:click="saveTitle">Save</button>
            </div>
        </div>
        @endif
    </div>
</div>