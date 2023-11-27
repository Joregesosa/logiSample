<?php


session_start();
// $usuarios = null;
if (isset($_SESSION['listarPersonas'])) {
    $personas = $_SESSION['listarPersonas'];
   
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/output.css" rel="stylesheet">
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
                                    <div class="text-left font-semibold">Nombres</div>
                                </th>

                                <th class="p-2">
                                    <div class="text-left font-semibold">Apellidos</div>
                                </th>

                                <th class="p-2">
                                    <div class="text-left font-semibold">Pais</div>
                                </th>

                                <th class="p-2">
                                    <div class="text-left font-semibold">Hijos</div>
                                </th>

                                <th class="p-2">
                                    <div class="text-center font-semibold">Action</div>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100 text-sm">
                      

                            <?php foreach ($personas as $persona) : ?> 
                                <tr>

                                    
                                      <?php require './scripts/rowTemplate.php'; ?>  
                                    
                                </tr>
                             <?php endforeach; ?>  



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