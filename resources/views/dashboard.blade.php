<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-green-600 text-white p-6">
        <h1 class="text-2xl font-bold mb-8">Brand</h1>
        <ul class="space-y-4">
            <li><a href="#" class="hover:underline">📊 Dashboard</a></li>
            <li><a href="#" class="hover:underline">👨‍🎓 Students</a></li>
            <li><a href="#" class="hover:underline">💰 Payments</a></li>
            <li><a href="#" class="hover:underline">👩‍🏫 Teachers</a></li>
            <li><a href="#" class="hover:underline">🏫 Schools</a></li>
            <li><a href="#" class="hover:underline">📈 Income</a></li>
            <li><a href="#" class="hover:underline">⚙️ Settings</a></li>
        </ul>
    </aside>

    <!-- Main content -->
    <div class="flex-1 bg-green-100 p-6">
        <!-- Topbar -->
        <div class="flex justify-between items-center mb-6">
            <input type="text" placeholder="Search..." class="p-2 rounded border border-gray-300 w-1/3" />
            <div class="flex items-center space-x-4">
                <button class="bg-green-500 text-white px-4 py-1 rounded">Add New</button>
                <span class="bg-white p-2 rounded-full">🔔</span>
                <span class="bg-white p-2 rounded-full">👤</span>
            </div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-4 gap-4 mb-6">
            <div class="bg-white p-4 shadow rounded text-center">
                <div class="text-2xl font-bold">2194</div>
                <div>Students</div>
            </div>
            <div class="bg-white p-4 shadow rounded text-center">
                <div class="text-2xl font-bold">53</div>
                <div>Teachers</div>
            </div>
            <div class="bg-white p-4 shadow rounded text-center">
                <div class="text-2xl font-bold">6</div>
                <div>Schools</div>
            </div>
            <div class="bg-white p-4 shadow rounded text-center">
                <div class="text-2xl font-bold">$360000</div>
                <div>Income</div>
            </div>
        </div>

        <!-- Tables -->
        <div class="grid grid-cols-2 gap-6">
            <!-- Recent Payments -->
            <div class="bg-white p-4 shadow rounded">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold">Recent Payments</h3>
                    <a href="#" class="text-green-500 hover:underline">View All</a>
                </div>
                <table class="w-full text-sm text-left">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>College</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (range(1, 5) as $i)
                            <tr class="border-b">
                                <td>John Doe</td>
                                <td>St. James College</td>
                                <td>$100</td>
                                <td>9/10</td>
                                <td><button class="bg-green-500 text-white px-2 rounded">Delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- New Students -->
            <div class="bg-white p-4 shadow rounded">
                <h3 class="font-bold mb-4">New Students</h3>
                <ul class="space-y-3">
                    @foreach (range(1, 5) as $i)
                        <li class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="bg-blue-500 text-white p-2 rounded-full">👤</span>
                                <span>Student {{ $i }}</span>
                            </div>
                            <span class="text-green-500">✔</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
