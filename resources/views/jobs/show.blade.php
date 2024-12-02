<x-layout>
    @slot('title')
        <pre>About Job page</pre>
    @endslot
    @slot('body')
        <h1>{{$job['title']}}</h1>
        <p>salary : {{$job['salary']}} per year</p>
        <div class="mt-10">
            <a href="/jobs/{{$job['id']}}/edit" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 bg-red-500 hover:bg-gray-700 hover:text-white">Edit</a>
        </div>
    @endslot
</x-layout>
