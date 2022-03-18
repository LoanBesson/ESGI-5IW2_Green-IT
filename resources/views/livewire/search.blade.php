<div>
    <div class="text-white">
        <h1 class="text-3xl font-mono"><span class="text-blue-600">INDICATEUR</span> PERFORMANCE <span class="text-red-600">ÉNERGÉTIQUE</span></h1>

        <div class="mt-8">
            <input wire:model.500ms="search" type="text" class="text-black rounded-3xl w-1/2 px-4" placeholder="Ex: Grenoble, Lyon, Marseille, Paris">

            @if (strlen($search) > 2)
                <div class="mt-4 text-left w-1/2 mx-auto">
                    <h2>
                        Résultats pour la recherche "<span class="font-semibold">{{ $search }}</span>" :
                    </h2>

                    <ul class="mt-2">
                        @if ($cities->isNotEmpty())
                            Villes : <br>
                            @foreach ($cities as $city)
                                <li>- <button wire:click="$emit('openModal', 'show-city', {{ json_encode(['id' => $city->id]) }})">{{ $city->libcom }}</button></li>
                            @endforeach
                            <br>
                        @endif

                        @if ($departments->isNotEmpty())
                            Département : <br>
                            @foreach ($departments as $department)
                                <li>- <button>{{ $department->libdep }}</button></li>
                            @endforeach
                            <br>
                        @endif

                        @if ($states->isNotEmpty())
                            Région : <br>
                            @foreach ($states as $state)
                                <li>- <button>{{ $state->libreg }}</button></li>
                            @endforeach
                            <br>
                        @endif
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
