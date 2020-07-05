<x-app>

    <div>
        @foreach($users as $user)
            <div class=" flex justify-between items-center">
                <a href="{{$user->path()}}" class="flex items-center mb-5" >

                   <img src="{{$user->avatar}}"
                        alt="{{$user->username}}'s avatar"
                        width="60"
                        class="object-cover rounded-full w-20 h-20 mr-4">

                        <h4 class="font-bold">{{'@' . $user->username}}</h4>
                </a>

                    <x-follow-button :user="$user"></x-follow-button>


            </div>


        @endforeach

        {{$users->links()}}
    </div>
</x-app>
