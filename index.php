<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/output.css" rel="stylesheet">
    <title>Login</title>
</head>


<body>

    <div class="bg-yellow-400 h-screen overflow-hidden flex items-center justify-center">
        <div class="bg-white lg:w-5/12 md:6/12 w-10/12 shadow-3xl">
            <div class="bg-gray-800 absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded-full p-4 md:p-8">
                
            </div>
            <form  class="p-12 md:p-24">
                <div class="flex items-center text-lg mb-6 md:mb-8">
                     
                    <input type="text" name="username"  id="username" class="bg-gray-200 pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Username" />
                </div>
                <div class="flex items-center text-lg mb-6 md:mb-8">
                    
                    <input type="password"  name="password" id="password" class="bg-gray-200 pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Password" />
                </div>
                <button class="bg-gradient-to-b from-gray-700 to-gray-900 font-medium p-2 md:p-4 text-white uppercase w-full">Login</button>
            </form>
        </div>
    </div>

</body>

</html>