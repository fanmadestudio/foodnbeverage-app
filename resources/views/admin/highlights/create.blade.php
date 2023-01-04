<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Highlight') }}
        </h2>
    </x-slot>

    <div class="h-fit w-screen p-6 mt-4 mx-2 bg-white border-b border-gray-200 rounded-xl shadow-md sm:px-6 lg:px-8">

        <!-- Subtitle -->
        <h3 class="text-3xl">Highlight</h3>

        <div class="flex mt-10 m-2 p-2">
            <a href="{{ route('admin.highlight.index') }}" class="bg-sky-500 hover:bg-sky-500/60 text-white px-4 py-2 rounded-lg">Highlight</a>
        </div>


        <!-- Form -->
        <div class="m-4">
            <form method="POST" action="{{ route('admin.highlight.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="mb-8">
                    <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                    <input id="name" name="name" type="text" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Highlight Name" required="" />
                </div>

                <!-- Image Upload -->
                <div class="mb-8">
                    <label for="image" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Upload Image</label>

                    <input id="image" name="image" type="file" class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400" aria-describedby="image_help" required="" />

                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_help">An image or photo is for highlight.</div>
                </div>

                <!-- Description -->
                <div class="mb-8">
                    <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                    <input id="description" name="description" type="description" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Description for highlight" required="" />
                </div>

                <!-- Button save and cancel -->
                <button type="submit" class="rounded-lg bg-sky-500 mr-3 px-5 py-2 text-center text-sm font-medium text-white hover:bg-sky-500/60 focus:outline-none focus:ring-4 focus:ring-sky-300 dark:bg-sky-500 dark:hover:bg-sky-500/60 dark:focus:ring-sky-300 sm:w-auto">Save</button>

                <a href="{{ route('admin.categories.index') }}" class="rounded-lg bg-rose-500 mr-3 px-5 py-2 text-center text-sm font-medium text-white hover:bg-rose-500/60 focus:outline-none focus:ring-4 focus:ring-rose-300 dark:bg-rose-500 dark:hover:bg-rose-500/60 dark:focus:ring-rose-300 sm:w-auto">Cancel</a>
            </form>
        </div>
    </div>
</x-admin-layout>