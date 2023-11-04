<div>
    @if (session()->has('message'))
        <div class="p-4 mb-4 text-sm w-2/6 mx-auto text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">
                Success alert!
            </span>
                {{ session('message') }}
        </div>
    @endif
</div>
