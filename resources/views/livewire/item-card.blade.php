<div
    class="w-full
 bg-gray-100 shadow-md rounded-lg font-lex h-auto border hover:border-pink-600 hover:shadow-blue-200 transition-all duration-500 ease-in-out ">
    <a href="{{ route('product.details') }}">
        <div class="overflow-hidden rounded">
            <img src="{{ asset('images/prod-1.webp') }}" alt="product-image"
                class=" w-full h-52 object-cover transition duration-500 ease-in-out hover:scale-105">
        </div>
    </a>
    <div class=" text-xs text-gray-600 tracking-wider leading-loose  p-3 space-y-5">
        <div class="line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae blanditiis dicta
            dolorum, earum eius et
            eum expedita in ipsum magni molestiae officia, sed vitae? Hic, officiis.
        </div>
        <div class="flex items-center justify-between">
            <div class="bg-indigo-100 rounded py-1 px-2 border text-xs max-w-max">Outfit</div>
            <div class="text-xs font-semibold">$4.99</div>
        </div>
        <div class=" bg-blue-600 text-white text-xs py-4 text-center rounded">
            <a href="" class="w-full inline-flex items-center gap-x-3 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>

                <span>Add To Cart</span>
            </a>
        </div>
    </div>

</div>
