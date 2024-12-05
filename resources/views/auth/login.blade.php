<x-layout>
    @slot('title')
        <p>Login page</p>
    @endslot
    @slot('body')
        <form method="POST" action="/login">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="email" name="email" id="email" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required>
                                </div>
                                @error('email')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="password" name="password" id="password" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  required>
                                </div>
                                @error('password')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
            <div class="mt-6 flex items-center justify-center gap-x-6">
                <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
            </div>
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


