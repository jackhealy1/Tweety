             <div class="border border-blue-400 rounded-lg px-8  py-6 mb-8">

                 <form method="POST" action="/tweets">
                     @csrf

                     <textarea name="body" class="w-full" placeholder="What's up doc?" required autofocus>

                     </textarea>

                     <hr class="my-4">

                     <footer class="flex justify-between items-center">
                         <img src="{{ current_user()->avatar }}" alt="Avatar" class="object-cover rounded-full mr-2 w-20 h-20" >

                         <button type="submit" class=" bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-white text-sm h-10">
                             Publish</button>
                     </footer>
                 </form>

                 @error('body')
                 <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                 @enderror
             </div>
