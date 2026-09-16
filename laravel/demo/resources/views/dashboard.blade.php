<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50 font-sans text-slate-800">
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Sidebar -->
        <aside class="w-full md:w-64 bg-slate-900 text-slate-300 flex-shrink-0">
            <div class="p-6 text-xl font-bold text-white tracking-wide border-b border-slate-800">
                <i class="fa-solid fa-chart-line text-indigo-500 mr-2"></i> AdminPanel
            </div>
            <nav class="p-4 space-y-1">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-3 bg-indigo-600 text-white rounded-lg transition">
                    <i class="fa-solid fa-house w-5"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="{{ route('users.index') }}" class="flex items-center space-x-3 px-4 py-3 hover:bg-slate-800 rounded-lg transition">
                    <i class="fa-solid fa-users w-5"></i>
                    <span>Users</span>
                </a>
                <a href="{{ route('categories.index') }}" class="flex items-center space-x-3 px-4 py-3 hover:bg-slate-800 rounded-lg transition">
                    <i class="fa-solid fa-layer-group w-5"></i>
                    <span>Categories</span>
                </a>
                <a href="{{route('products.index') }}" class="flex items-center space-x-3 px-4 py-3 hover:bg-slate-800 rounded-lg transition">
                    <i class="fa-solid fa-box w-5"></i>
                    <span>Products</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 p-6 md:p-10">
            <!-- Header -->
            <header class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900">Overview Dashboard</h1>
                    <p class="text-slate-500 text-sm">Welcome back! Here is what's happening today.</p>
                </div>
                <div class="mt-4 sm:mt-0">
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-lg transition shadow-sm">
                        + Add Product
                    </button>
                </div>
            </header>

            <!-- Metric Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Users -->
                <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex items-center space-x-4">
                    <div class="p-3 bg-blue-100 text-blue-600 rounded-lg">
                        <i class="fa-solid fa-users text-2xl"></i>
                    </div>
                    <div>
                       <a href="{{ route('users.index') }}" class="text-decoration-none"> <p class="text-sm font-medium text-slate-500">All Users</p></a>
                        <p class="text-2xl font-bold text-slate-900">{{ number_format($userCount) }}</p>
                    </div>
                </div>

                <!-- Categories -->
                <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex items-center space-x-4">
                    <div class="p-3 bg-emerald-100 text-emerald-600 rounded-lg">
                        <i class="fa-solid fa-layer-group text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-slate-500">Categories</p>
                        <p class="text-2xl font-bold text-slate-900">{{ number_format($categoryCount) }}</p>
                    </div>
                </div>

                <!-- Products -->
                <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex items-center space-x-4">
                    <div class="p-3 bg-indigo-100 text-indigo-600 rounded-lg">
                        <i class="fa-solid fa-box text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-slate-500">Total Products</p>
                        <p class="text-2xl font-bold text-slate-900">{{ number_format($productCount) }}</p>
                    </div>
                </div>
            </div>

            <!-- Recent Products Table -->
            <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100">
                    <h2 class="font-bold text-slate-800">Recently Added Products</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider">
                                <th class="py-3 px-6">ID</th>
                                <th class="py-3 px-6">Name</th>
                                <th class="py-3 px-6">Price</th>
                                <th class="py-3 px-6">Created At</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            @forelse($latestProducts as $product)
                                <tr class="hover:bg-slate-50">
                                    <td class="py-3 px-6 font-medium text-slate-900">#{{ $product->id }}</td>
                                    <td class="py-3 px-6">{{ $product->name }}</td>
                                    <td class="py-3 px-6">${{ number_format($product->price ?? 0, 2) }}</td>
                                    <td class="py-3 px-6 text-slate-500">{{ $product->created_at->format('M d, Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="py-4 px-6 text-center text-slate-400">No products available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
