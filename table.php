<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/output.css" rel="stylesheet">
    <title>Lista de Productos</title>
</head>


<body>


    <section class="h-screen bg-gray-100 px-4 text-gray-600 antialiased" x-data="app">
        <div class="flex h-full flex-col justify-center">
            <!-- Table -->
            <div class="mx-auto w-full max-w-2xl rounded-sm border border-gray-200 bg-white shadow-lg">
                <header class="border-b border-gray-100 px-5 py-4">
                    <div class="font-semibold text-gray-800">Manage Carts</div>
                </header>

                <div class="overflow-x-auto p-3">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-400">
                            <tr>


                                <th class="p-2">
                                    <div class="text-left font-semibold">Id</div>
                                </th>

                                <th class="p-2">
                                    <div class="text-left font-semibold">Correo</div>
                                </th>

                                <th class="p-2">
                                    <div class="text-center font-semibold">Action</div>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100 text-sm">
                            <!-- record 1 -->
                            <tr>

                                <td class="p-2">
                                    <div class="font-medium text-gray-800">1</div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left">joregesosa@gmail.com</div>
                                </td>

                                <td class="p-2">
                                    <div class="flex justify-center">
                                        <a href="#">
                                            <svg class="h-8 w-8 rounded-full p-1 hover:bg-gray-100 hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>
                <div class="flex justify-end p-4">
                    <a href="#" class="text-blue-300">Logout</a>
                </div>

            </div>
        </div>
    </section>

</body>

</html>