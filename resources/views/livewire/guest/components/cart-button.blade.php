<button  aria-describedby="Add to cart"
         class=" p-2 rounded-full text-gray-200 bg-gradient-to-bl from-red-500 to-orange-400 hover:bg-gradient-to-br
            transition-all duration-100"
         wire:click="addToCart({{$item}})">
    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
         viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
    </svg>
</button>
