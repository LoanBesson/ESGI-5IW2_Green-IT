<div>
    <div class="text-white">
        <h1 class="text-3xl font-mono"><span class="text-blue-600">INDICATEUR</span> PERFORMANCE <span class="text-red-600">ÉNERGÉTIQUE</span></h1>

        <div class="mt-6">
            @if($scoring && strlen($search) > 2)
                <div class="w-1/2 mx-auto mt-6 mb-8 ">
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <h3 class="text-lg leading-6 font-medium text-white">
                            @switch($type)
                                @case(1)
                                    Commune de {{ $scoring->libcom }}
                                    @break
                                @case(2)
                                    Département de {{ $scoring->libdep }}
                                    @break
                                @case(3)
                                    Région {{ $scoring->libreg }}
                                    @break
                            @endswitch
                        </h3>
                    </div>

                    <h3 class="mt-6 text-3xl font-extrabold">SCORE GLOBAL</h3>

                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->score_global_departement, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libdep }}</span>
                            </div>
                        </div>
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->score_global_epci, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libcom }}</span>
                            </div>
                        </div>
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->score_global_region, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libreg }}</span>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-6 text-3xl font-extrabold">ACCÈS À L'INFORMATION</h3>

                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->acces_a_l_information_departement, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libdep }}</span>
                            </div>
                        </div>
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->acces_a_l_information_epci, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libcom }}</span>
                            </div>
                        </div>
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->acces_a_l_information_region, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libreg }}</span>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-6 text-3xl font-extrabold">ACCÈS AUX INTERFACES NUMÉRIQUES</h3>

                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->acces_aux_interfaces_numeriques_departement, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libdep }}</span>
                            </div>
                        </div>
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->acces_aux_interfaces_numeriques_epci, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libcom }}</span>
                            </div>
                        </div>
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->acces_aux_interfaces_numeriques_region, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libreg }}</span>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-6 text-3xl font-extrabold">COMPÉTENCES ADMINISTRATIVES</h3>

                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->competences_administratives_departement, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libdep }}</span>
                            </div>
                        </div>
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->competences_administratives_epci, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libcom }}</span>
                            </div>
                        </div>
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->competences_administratives_region, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libreg }}</span>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-6 text-3xl font-extrabold">COMPÉTENCES NUMÉRIQUES SCOLAIRES</h3>

                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->competences_numeriques_scolaires_departement, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libdep }}</span>
                            </div>
                        </div>
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->competences_numeriques_scolaires_epci, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libcom }}</span>
                            </div>
                        </div>
                        <div class="bg-gray-700 px-4 py-6 rounded-lg flex flex-col justify-center">
                            <div>
                                <span class="text-xl font-extrabold">{{ number_format($scoring->competences_numeriques_scolaires_region, 2) }}</span>
                                <br>
                                <span class="text-sm text-gray-300">{{ $scoring->libreg }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <input wire:model.500ms="search" type="text" autofocus class="text-black rounded-3xl w-1/2 px-4 border-2 border-blue-500" placeholder="Ex: Grenoble, Lyon, Marseille, Paris">

            @if (strlen($search) > 2)
                <div class="mt-4 text-left w-1/2 mx-auto">
                    <h2>
                        Résultats pour la recherche "<span class="font-semibold">{{ $search }}</span>" :
                    </h2>

                    <ul class="mt-2">
                        @if ($cities->isNotEmpty())
                            Villes : <br>
                            @foreach ($cities as $city)
                                <li>- <button wire:click="scoring({{ $city->id }}, 1)">{{ $city->libcom }}</button></li>
                            @endforeach
                            <br>
                        @endif

                        @if ($departments->isNotEmpty())
                            Département : <br>
                            @foreach ($departments as $department)
                                <li>- <button wire:click="scoring({{ $department->id }}, 2)">{{ $department->libdep }}</button></li>
                            @endforeach
                            <br>
                        @endif

                        @if ($states->isNotEmpty())
                            Région : <br>
                            @foreach ($states as $state)
                                <li>- <button wire:click="scoring({{ $state->id }}, 3)">{{ $state->libreg }}</button></li>
                            @endforeach
                            <br>
                        @endif
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
