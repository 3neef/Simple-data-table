<h1 class="text-3xl my-10 text-center font-sans"> Employees </h1>

        <div class="w-full flex pb-10">
            <div class="w-3/6 mx-1">
                <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search users...">
            </div>
            <div class="w-1/6 relative mx-1">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option value="id">ID</option>
                    <option value="name">Name</option>
                    <option value="email">Email</option>
                    <option value="created_at">Sign Up Date</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <div class="w-1/6 relative mx-1">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option value="1">Ascending</option>
                    <option value="0">Descending</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <div class="w-1/6 relative mx-1">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>
        <table class="table-auto w-full mb-6">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{$user->id}}</td>
                    <td class="border px-4 py-2">{{$user->name}}</td>
                    <td class="border px-4 py-2">{{$user->email}}</td>
                    <td class="border px-4 py-2">{{$user->created_at}}</td>
                </tr> 
                @endforeach
                   
                
            </tbody>
        </table>
    
        <div class="justify-center mt-6">
            <form @submit.prevent="uploadExcel" class="flex-wrap justify-between md:flex-row">
                
                <input id="files" type="file" class="">
                
                 <button type="button" class="py-3 mx-2 text-blue-400 focus:outline-none md:mx-0 md:px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                      </svg>
                </button> 
            </form>
         </div>

@section('scripts')
<script>
    const inputElement = document.querySelector('input[id="files"]');
    const pond = FilePond.create( inputElement );
    FilePond.setOptions({
    server: {
        url:'/upload',
        headers:{
            'X-CSRF-TOKEN':'{{csrf_token()}}'
        }
    }
});
 </script>
@endsection