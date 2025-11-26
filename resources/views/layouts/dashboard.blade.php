<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
    html {
        scroll-behavior: smooth;
    }
    </style>
</head>
<body class="">
    <div class="flex  relative  min-h-screen bg-cover bg-center" 
     style="background-image: url('{{ asset('images/OfficeSet.jpg') }}')">
        {{-- The sidebar --}}
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="grid grid-col">
            @yield('sidebar')
        </div>

           

        {{-- Main content     --}}
        <div class="">
          <h1 class="text-3xl font-semibold py-3 px-3 text-[#cbc8d7]">
             Welcome, {{Auth::user()->fname}}
          </h1>
            @yield('content')
        </div>
    </div>

      <script>
    const btn = document.getElementById("menu-btn");
    const sidebar = document.getElementById("sidebar");
    const main = document.getElementById("main-content");

    let sidebarVisible = true;

    btn.addEventListener("click", () => {
        sidebarVisible = !sidebarVisible;
      if (sidebarVisible) {
        sidebar.classList.remove("-translate-x-full");
        main.classList.remove("ml-0");
        main.classList.add("ml-32");
      } else {
        sidebar.classList.add("-translate-x-full");
        main.classList.remove("ml-32");
        main.classList.add("ml-0");
      }
    });
     </script>
    
</body>
</html>