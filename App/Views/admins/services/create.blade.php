<x-layouts.admins.adminLayout>


<section class="dark:bg-gray-800 dark:text-gray-50">
    <div class="mx-auto max-w-screen-2xl mt-6 px-4 md:px-8">

        <div class="flex flex-wrap mb-3">
            <a class="bg-primary text-white py-1 px-3 my-6 rounded-md" href="{{ route('admin.services.index') }}">
            <span class="bg-primary">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>
            </span>
            </a>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 md:mb-2 lg:text-3xl">
            Create New Service
        </h2>

        {{-- <p class="max-w-screen-md text-gray-500 md:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p> --}}
    </div>

	<form novalidate="" action="{{ route('admin.service.store') }}" method="POST" class="container flex flex-col mx-auto space-y-6" enctype="multipart/form-data">
		<fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
			<div class="space-y-2 col-span-full lg:col-span-1">
				<p class="font-bold text-lg text-primary">Service</p>
				<p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci fuga autem eum!</p>
			</div>
			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full sm:col-span-3">
					<label
						for="firstname"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Name
					</label>

					<input
					id="firstname"
					name="name"
					type="text"
					class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
					placeholder="Enter Name"
					>
				</div>
				<div class="col-span-full sm:col-span-3">

					<label
						for="lastname"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Skills
					</label>

					<input
						id="lastname"
						name="skills"
						type="text"
						placeholder="Heading plus"
						class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
						placeholder="Techs & skills"
					>
				</div>
				<div class="col-span-full">

					<label
						for="custom_link_one"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Link
					</label>

					<input
						id="custom_link_one"
						type="text"
						name="link"
						placeholder="Heading plus"
						class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
						placeholder="internal or external link"
					>
				</div>


				</div>
				<div class="col-span-full">
					<label
						for="custom_link_one"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Featured image
					</label>

					<input
						id="featured_image"
						type="file"
						name="featured_image"
                        accept="image/*"
						class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
					>
				</div>


				<div class="col-span-full">

					<label
						for="homepage_hero_settings_description"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Description
					</label>

					<textarea
						id="homepage_hero_settings_description"
						name="description"
						class="mt-2 w-full rounded-lg border-gray-200 align-top shadow-sm sm:text-sm"
						rows="4"
						placeholder="Descripe the work"
					></textarea>
				</div>
				<div class="col-span-full bg-gray-300 p-2 flex flex-wrap items-center justify-start my-3">
					<!-- Base -->

					<button
						class="group relative inline-block text-sm font-medium text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
						type="submit"
					>
						<span
							class="absolute inset-0 translate-x-0.5 translate-y-0.5 bg-indigo-600 transition-transform group-hover:translate-y-0 group-hover:translate-x-0"
						></span>

						<span class="relative block border border-current bg-white px-8 py-3">
							create
						</span>
					</button>

				</div>
			
			</div>
		</fieldset>

	</form>
		{{-- <x-globals.sessions.success-id></x-globals.sessions.success-id> --}}

		<x-globals.sessions.success-id />

</section>
</x-layouts.admins.adminLayout>