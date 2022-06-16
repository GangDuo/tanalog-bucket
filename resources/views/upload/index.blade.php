<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ファイルアップロード') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

					<form method="POST" action="/upload" enctype="multipart/form-data">
						{{ csrf_field() }}
						<ul>
							<li class="py-4">
								Tanalog：
								<input type="file" id="file" name="file" class="form-control"></li>
							<li class="py-4">
								Tanalog2：
								<input type="file" id="file2" name="file2" class="form-control"></li>
						</ul>
						<button type="submit">アップロード</button>
					</form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
