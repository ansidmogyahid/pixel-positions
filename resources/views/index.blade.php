<x-layouts.main>

    <div class="space-y-10">

        <section class="grid place-content-center text-center">
            <h1 class="text-2xl font-bold">Let's Find You A Great Job</h1>
            <div class="w-[450px] mt-3">
                <input type="text"
                    class="bg-white/5 w-full py-2 rounded-xl px-4 placeholder:text-sm placeholder:text-white/10 border border-white/5 focus:border-white/10"
                    placeholder="I'm looking for...">
            </div>
        </section>

        <!-- Top Jobs -->
        <section>
            <x-section-heading title="Featured Jobs" />

            <!-- Top Card -->
            <div class="grid lg:grid-cols-3 gap-4 mt-6">
                <x-job-card companyName="Gov Exec" title="Full stack Laravel" jobType="Full Time" salary="55,000"/>
                <x-job-card companyName="SundaysBest" title="Video Producer" jobType="Part Time" salary="27,500"/>
                <x-job-card companyName="Ideahub" title="Frontend Developer" jobType="Full Time" salary="49,800"/>
            </div>
        </section>

        <!-- Tags -->
        <section>
            <x-section-heading title="Tags" />

            <div class="mt-6 text-center space-x-2">
                <x-tag tagTitle="Frontend"/>
                <x-tag tagTitle="Backend"/>
                <x-tag tagTitle="Full Time"/>
                <x-tag tagTitle="Part Time"/>
                <x-tag tagTitle="Vue"/>
                <x-tag tagTitle="Laravel"/>
                <x-tag tagTitle="API"/>
                <x-tag tagTitle="Inertia"/>
                <x-tag tagTitle="AWS"/>
                <x-tag tagTitle="Forge"/>
            </div>
        </section>

        <!-- Recent Jobs -->
        <section>
            <div class="flex items-center justify-between">
                <x-section-heading title="Recent Jobs" />
            </div>

            <div class="mt-6 space-y-4">
                <x-recent-job-card />
                <x-recent-job-card />
                <x-recent-job-card />
            </div>
        </section>
    </div>
</x-layouts.main>
