<div class="flex bg-white/5 rounded-xl p-4 gap-x-5">
    <div>
        <img class="rounded-md" src="http://picsum.photos/seed/{{ rand() }}/100/100" alt="">
    </div>

    <div class="flex-1 flex flex-col">
        <span class="text-xs text-white/75">Gov Exec</span>

        <h3 class="mt-2 text-lg font-bold">Full stack Laravel Developer</h3>
        <p class="mt-auto font-normal text-sm text-white/40">Full Time - From $60,00</p>
    </div>

    <div class="flex flex-col items-end">
        <div class="inline-flex items-center space-x-2">
            <x-tag noHash tagTitle="Remote" class="text-xs" outlined />
            <x-tag noHash class="text-xs" outlined>22h</x-tag>
        </div>

        <div class="flex items-start mt-auto">
            <div class="inline-flex items-center space-x-2">
                <x-tag tagTitle="Frontend" class="text-xs" />
                <x-tag tagTitle="Backend" class="text-xs" />
                <x-tag tagTitle="API" class="text-xs" />
            </div>
        </div>
    </div>
</div>
