@props([
    'companyName' => 'Laracasts',
    'companyLogo' => '',
    'title' => 'Video Producer',
    'jobType' => 'Full Time',
    'salary' => '0.00',
    'tags' => '',
])

<div class="p-4 bg-white/5 rounded-xl">
    <span class="text-sm font-bold">{{ $companyName }}</span>

    <div class="py-4 font-bold text-center grid place-content-center">
        <h3 class="text-2xl">{{ $title }}</h3>
        <p class="font-normal">{{ $jobType }} - From ${{ $salary }}</p>
    </div>

    <div class="flex items-center justify-between font-bold mt-auto">
        <div class="inline-flex items-center text-2xs space-x-2">
            <x-tag tagTitle="Frontend"/>
            <x-tag tagTitle="Backend"/>
            <x-tag tagTitle="API"/>
        </div>

        <a href="#">
            <img class="rounded-xl" src="http://picsum.photos/seed/{{ rand() }}/42/42" alt="">
        </a>
    </div>
</div>
