<x-app-layout>
    <div class="flex justify-end my-10">
        <a href="{{route('specializations.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Create</a></div>
<table class="table-auto border border-y w-full">
  <thead>
    <tr>
      <th class="border border-l-gray-400">SL</th>
      <th class="border border-l-gray-400">Title</th>
      <th class="border border-l-gray-400">description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rows as $data)
    <tr>
      <td class="border border-l-gray-400 text-center">{{$data->id}}</td>
      <td class="border border-l-gray-400 text-center">{{$data->title}}</td>
      <td class="border border-l-gray-400 text-center">{{$data->description}}</td>
      <td class="border border-l-gray-400 text-center">
        <a onclick="return confirm('Are you sure?')" href="{{route('specializations.delete', $data->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</x-app-layout>                                                                                                                                                                                                                                                                                                                                                                                 