<div>
    <div x-data="{}" id="tab_wrapper">
        <div class="row mb-2">
            <div class="col-12">
                <label for="title" class="label">
                    <span class="label-text">Titulo do evento</span>
                </label>
                <input wire:model="event.title" type="text" name="title" placeholder="Ex.: Pesquisa de Satisfação" class="input input-bordered w-full" />
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12">
                <button wire:click="initTransmission()" class="btn btn-primary">Init</button>
                <button wire:click="startTransmission()" class="btn btn-primary">Iniciar</button>
                <button wire:click="stopTransmission()" class="btn btn-primary">Parar</button>
            </div>
        </div>
    </div>
</div>