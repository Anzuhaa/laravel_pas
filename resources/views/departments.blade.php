<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <x-slot:css></x-slot:css>
    <h3 class="text-3xl font-bold text-center text-gray-800 my-6">Grade List</h3>
    <table class="min-w-full bg-white border border-gray-200 shadow-lg rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="py-3 px-4 text-left text-sm uppercase font-semibold text-center">No</th>
                <th class="py-3 px-4 text-left text-sm uppercase font-semibold text-center">Department</th>
                <th class="py-3 px-4 text-left text-sm uppercase font-semibold text-center">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border-t py-2 px-4 text-sm text-center">
                    @foreach ($departments as $department)
            <tr class="border-t">
                <td class="py-2 px-4 text-sm text-center ">{{ $department->id }}</td>
                <td class="py-2 px-4 text-sm text-center ">{{ $department->name }}</td>
                <td class="py-2 px-4 text-sm text-center ">{{ $department->desc }}</td>
                </td>
            </tr>
            @endforeach
            </td>
            </td>
            </tr>
        </tbody>
    </table>
</x-layout>
