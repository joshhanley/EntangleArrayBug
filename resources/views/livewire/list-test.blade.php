<div
    x-data="{ list: @entangle('list'), search: @entangle('search') }"
    class="relative w-full h-screen p-4 flex flex-col  items-center bg-gray-100"
>
    <div class="flex space-x-4">

        <div class="relative space-y-4">
            <div class="font-bold">Alpine</div>

            <ul class="list-disc">
                <template x-for="item in list">
                    <li x-text="item"></li>
                </template>
            </ul>

            <div class="font-bold">Livewire</div>

            <ul class="list-disc">
                @foreach($list as $item)
                    <li>{{ $item}}</li>
                @endforeach
            </ul>

            <input
                x-model="search"
                placeholder="Type anything here..."
                class="w-64 p-4 border border-gray-500 rounded bg-white"
            />
        </div>

    </div>
</div>
