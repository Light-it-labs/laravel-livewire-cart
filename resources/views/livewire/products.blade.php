<div>
    <div class="w-full flex justify-center">
        <input wire:model="search" type="text" placeholder="Search posts by title...">
    </div>

    <div class="w-full flex justify-center">
        <div class="flex flex-col md:flex-wrap md:flex-row p-5">
            @foreach ($products as $product)

                <div class="w-full md:w-1/2 lg:w-1/3 md:px-2 py-2">
                    <div class="bg-white rounded shadow p-5 h-full relative">
                        <h5 class="font-black uppercase text-2xl mb-4">
                            {{ $product->name }}
                        </h5>
                        <h6 class="font-bold text-gray-700 text-xl mb-3">U$S {{ $product->price }}</h6>
                        <p class="text-gray-900 font-normal mb-12">
                            {{ $product->description }}
                        </p>
                        <div class="flex justify-end mt-5 absolute w-full bottom-0 left-0 pb-5">
                            <a href="#" class="block uppercase font-bold text-green-600 hover:text-green-500 mr-4">Add to cart</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

    <div class="w-full flex justify-center">
        {{ $products->links() }}
    </div>
</div>
