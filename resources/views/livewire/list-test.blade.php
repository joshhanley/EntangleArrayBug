<div
    x-data="{ list: @entangle('list'), search: @entangle('search') }"
    class="relative w-full h-screen p-4 flex flex-col  items-center bg-gray-100"
>
    <div class="flex flex-col space-x-4">

        <div class="relative flex justify-around">
            <div class="space-y-4">
                <div class="font-bold">Alpine</div>

                <p>Alpine Search: "<span x-text="search"></span>"</p>
                <p>Alpine List:</p>

                <ul class="list-disc">
                    <template x-for="item in list">
                        <li x-text="item"></li>
                    </template>
                </ul>
            </div>

            <div class="space-y-4">
                <div class="font-bold">Livewire</div>

                <p>Livewire Search: "{{ $search }}"</p>

                <p>Livewire List:</p>

                <ul class="list-disc">
                    @foreach($list as $item)
                        <li>{{ $item}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-4 flex justify-center">
            <input
                x-model="search"
                placeholder="Type anything here..."
                class="w-64 p-4 border border-gray-500 rounded bg-white"
            />
        </div>

        <div class="space-y-4">
            <div class="font-bold">Instructions</div>

            <p>Entering anything into the input and changes should happen automatically.</p>

            <div class="font-bold">Desired result</div>

            <p>When entering into the input field, the livewire list should be filtered and alpine kept in sync</p>

            <div class="font-bold">Problem</div>

            <p>Currently both search fields are kept in sync, but not the lists</p>

        </div>

    </div>
</div>
