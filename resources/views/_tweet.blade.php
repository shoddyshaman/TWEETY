<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img
                src="{{ $tweet->user->avatar }}"
                alt=""
                class="w-12 h-12 rounded-full mr-2 border border-2 border-gray-200 "

            >
        </a>
    </div>

    <div>

        <h5 class="font-bold mb-4">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>
        </h5>

        <p class="text-sm">
            {{ $tweet->body }}
        </p>

    </div>
</div>
