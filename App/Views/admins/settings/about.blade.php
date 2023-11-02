<x-layouts.admins.adminLayout>

{{-- @dd(Auth()->user()->name) --}}
{{-- @dd($user) --}}
{{-- @dd($_SESSION) --}}
<section class="p-6 py-20 dark:bg-gray-800 dark:text-gray-50">
	<form novalidate="" action="" class="container flex flex-col mx-auto space-y-12">
		<fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
			<div class="space-y-2 col-span-full lg:col-span-1">
				<p class="font-medium">About Settings</p>
				<p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci fuga autem eum!</p>
			</div>
			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full sm:col-span-3">
					<label for="firstname" class="text-sm">First name</label>
					<input id="firstname" type="text" value="{{ $user->name }}" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full sm:col-span-3">
					<label for="lastname" class="text-sm">Last name</label>
					<input id="lastname" type="text" placeholder="Last name" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full sm:col-span-3">
					<label for="email" class="text-sm">Email</label>
					<input id="email" type="email" value="{{ $user->email }}" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full">
					<label for="address" class="text-sm">Address</label>
					<input id="address" type="text" placeholder="" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full sm:col-span-2">
					<label for="city" class="text-sm">City</label>
					<input id="city" type="text" placeholder="" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full sm:col-span-2">
					<label for="state" class="text-sm">State / Province</label>
					<input id="state" type="text" placeholder="" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full sm:col-span-2">
					<label for="zip" class="text-sm">ZIP / Postal</label>
					<input id="zip" type="text" placeholder="" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
			</div>
		</fieldset>

	</form>
</section>

</x-layouts.admins.adminLayout>