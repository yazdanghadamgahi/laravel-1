<x-layout>
    @slot('title')
        <pre>Edit Job Page</pre>
    @endslot
    @slot('body')
        <form method="POST" action="/jobs/{{$job->id}}">
            @csrf
            @method('PATCH')

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Job</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of details from you.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="title" id="title"
                                           class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                           placeholder="{{$job->title}}" value="{{$job->title}}" required>
                                </div>
                                @error('title')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="salary" id="salary"
                                           class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                           placeholder="{{$job->salary}}" value="{{$job->salary}}" required>
                                </div>
                                @error('salary')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between gap-x-6">

                <div class="flex items-center">
                    <button type="submit" class="text-red-500 text-sm font-bold" form="delete-form">Delete</button>
                </div>
                <div class="flex items-center gap-x-6">
                    <a href="/jobs/{{$job->id}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <button type="submit" class="text-blue-500 text-sm font-bold">Edit</button>
                </div>
            </div>
        </form>
        <form method="POST" action="/jobs/{{$job->id}}" id="delete-form" class="hidden">
            @csrf
            @method('DELETE')
        </form>
        {{--        @if($errors->any())--}}
        {{--            <h1>all errors</h1>--}}
        {{--            <ul>--}}
        {{--                @foreach($errors->all() as $error)--}}
        {{--                    <li class="text-red-500 italic">--}}
        {{--                        {{$error}}--}}
        {{--                    </li>--}}
        {{--                @endforeach--}}
        {{--            </ul>--}}
        {{--        @endif--}}
    @endslot
</x-layout>

