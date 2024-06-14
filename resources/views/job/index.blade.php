<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => '#']"/>
    @foreach ($jobs as $job)
        <x-job-card :$job>
            <div>
                <x-link-button :href="route('jobs.show', $job)">View</x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
