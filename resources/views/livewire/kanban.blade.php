<div class="w-full h-full absolute top-0 left-0">
    <x-board :lists="$lists"/>
    <x-modal-create-card :hidden="$hidden" :loading="$loading" />
</div>
