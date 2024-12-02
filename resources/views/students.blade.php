<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:css></x-slot:css>

    <h3 class="text-3xl font-bold text-center text-gray-800 my-6">Student List</h3>
    <table class="min-w-full bg-white border border-gray-200 shadow-lg rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="py-3 px-4 text-left text-sm uppercase font-semibold text-center">No</th>
                <th class="py-3 px-4 text-left text-sm uppercase font-semibold text-center">Name</th>
                <th class="py-3 px-4 text-left text-sm uppercase font-semibold text-center">Department</th>
                <th class="py-3 px-4 text-left text-sm uppercase font-semibold text-center">Grade</th>
                <th class="py-3 px-4 text-left text-sm uppercase font-semibold text-center">Email</th>
                <th class="py-3 px-4 text-left text-sm uppercase font-semibold text-center">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td class="border-t py-2 px-4 text-sm text-center">{{ $student->id }}</td>
                    <td class="border-t py-2 px-4 text-sm text-center">{{ $student->name }}</td>
                    <td class="border-t py-2 px-4 text-sm text-center">{{ $student->department->name }}</td>
                    <td class="border-t py-2 px-4 text-sm text-center">{{ $student->grade->name }}</td>
                    <td class="border-t py-2 px-4 text-sm text-center">{{ $student->email }}</td>
                    <td class="border-t py-2 px-4 text-sm text-center">{{ $student->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
