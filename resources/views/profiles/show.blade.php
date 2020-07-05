<x-app>

    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/profile-banner.jpg" alt="" class="w-full rounded-lg mb-2">

            <img src="{{ $user->avatar }}" alt="Avatar" class="object-cover rounded-full w-40 h-40 mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"  style="left: 50%">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                <a href="{{ $user->path('edit')}}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                    Edit Profile</a>
                @endcan


                <x-follow-button :user="$user"> </x-follow-button>

            </div>
        </div>

        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque veritatis perferendis aspernatur illum sed mollitia autem neque fuga consequatur optio eius ea quibusdam natus hic asperiores odio, sunt tenetur ipsa. Saepe voluptatem, ut sunt rerum dolorum tempore numquam ullam. Autem.</p>





    </header>


    @include ('_timeline', [
    'tweets' => $tweets])

</x-app>
