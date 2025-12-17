<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - ShipX Leads</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-3xl font-bold mb-6">Dashboard - Submitted Leads</h1>

    <table class="min-w-full bg-white rounded-lg shadow overflow-hidden">
        <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="py-2 px-4">Name</th>
                <th class="py-2 px-4">Business Name</th>
                <th class="py-2 px-4">Email</th>
                <th class="py-2 px-4">Phone</th>
                <th class="py-2 px-4">Message</th>
                <th class="py-2 px-4">Attachment</th>
                <th class="py-2 px-4">Submitted At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($leads as $lead)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $lead->name }}</td>
                    <td class="py-2 px-4">{{ $lead->business_name }}</td>
                    <td class="py-2 px-4">{{ $lead->email }}</td>
                    <td class="py-2 px-4">{{ $lead->phone }}</td>
                    <td class="py-2 px-4">{{ $lead->message }}</td>
                    <td class="py-2 px-4">
                        @if($lead->attachment)
                            <a href="{{ asset('storage/'.$lead->attachment) }}" class="text-blue-500 underline" target="_blank">View</a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="py-2 px-4">{{ $lead->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center py-4">No leads submitted yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
