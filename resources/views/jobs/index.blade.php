<x-layout>
    @slot('title')
        <pre>Jobs list </pre>
        <a href="/jobs/create" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Create Jobs</a>
    @endslot
        @slot('body')
            <ul>
                @foreach($jobs as $job)
                    <div  class="block px-4 py-6 border border-gray-220 rounded-lg hover:text-blue-600">
                        <p>{{$job->employer->name}}</p>
                        <li>
                            <a href="/jobs/{{$job['id']}}"><strong> {{$job['title']}} :</strong> pays {{$job['salary']}} per year</a>
                        </li>
                    </div>
                @endforeach
            </ul>
            <br>
            <br>
            <div>
                {{$jobs->links()}}
            </div>
        @endslot
</x-layout>
