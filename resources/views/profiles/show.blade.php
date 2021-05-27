<x-app>
    <header class = "mb-6">
        <div class="relative">
            <img
                src="/images/default-profile-banner.jpg"
                alt=""
                class="mb-2 relative"
            >

            <img
                src="{{ $user->avatar }}"
                alt=""
                class="w-32 h-32 border border-2 border-gray-200 rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"

            >
        </div>
        <div class="flex justify-between items-center mb-6">
            <div>
               <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit',$user)
                    <a
                        href="{{ $user->path('edit') }}"
                        class="rounded-full border border-gray-300 py-2 px-4 text-black-50 text-xs"
                    >
                        Edit Profile
                    </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
             "Eh...What's up, doc?"
        </p>

    </header>

@include('_timeline',[
    'tweets' => $user->tweets
])
</x-app>>
