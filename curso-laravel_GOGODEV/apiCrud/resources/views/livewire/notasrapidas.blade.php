<?php
use function Livewire\Volt\{state};
state(['nota' => '', 'notas' => []]);

$agregarNota = function () {
    if ($this->nota != '') {
        $this->notas[] = $this->nota;
        $this->nota = '';
    }
};
?>

<div>
    <h3 class="text-xl font-semibold text-neutral-900 dark:text-white mb-6">Mis Notas con Volt</h3>

    <div class="flex gap-3 mb-6">
        <input type="text" 
               wire:model="nota" 
               class="flex-1 rounded-lg border-neutral-300 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white focus:ring-blue-500" 
               placeholder="Escribe una idea nueva...">
        
        <button wire:click="agregarNota" 
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium transition">
            Añadir
        </button>
    </div>

    <div class="space-y-2">
        @foreach($notas as $n)
            <div class="p-3 bg-neutral-50 dark:bg-neutral-800 rounded-lg border border-neutral-200 dark:border-neutral-700 text-neutral-700 dark:text-neutral-300">
                {{ $n }}
            </div>
        @endforeach
    </div>
</div>