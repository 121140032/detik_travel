<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <title>DetikTravel</title>
</head>
<body class="bg-white">
    <!-- Navbar -->
    <div class="fixed top-0 left-0 w-full z-50">
        @include('layouts.navbar')
    </div>
    
    <div class="h-full bg-cover bg-center flex flex-col items-center justify-center py-5 px-3" style="background-image: linear-gradient(rgba(0, 209, 255, 0.9), rgba(0, 209, 255, 0.8), rgba(0, 209, 255, 0.7)), url('{{ asset('img/trv4back.jpg') }}');">
            <!-- Teks Registrasi dan Instruksi -->
    <div class="text-center text-white pt-5">
        <h1 class="text-4xl font-bold">Registrasi</h1>
        <p class="text-lg">Lengkapi data diri kamu dengan benar</p>
    </div>
        <div class="bg-white p-3 rounded-xl w-3/4">
            <form class="mx-auto py-2">
                <!-- Input Nama -->
                <div class="mb-3">
                    <input type="nama" id="nama" class="shadow-sm bg-gray-50 border Black text-sm rounded-lg block w-full p-2 placeholder-black" placeholder="Nama Lengkap" required />
                </div>
                <!-- Input Email -->
                <div class="mb-3">
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border Black text-sm rounded-lg block w-full p-2 placeholder-black" placeholder="Email" required />
                </div>
                <!-- Input Nomor Telepon -->
                <div class="mb-3">
                    <input type="nomor" id="nomor-telepon" class="shadow-sm bg-gray-50 border Black text-sm rounded-lg block w-full p-2 placeholder-black" placeholder="Nomor Telepon" required />
                    <label for="email" class="block mb-2 text-sm font-light text-gray-400">isi hanya angka</label>
                </div>
                <!-- Input Alasan -->
                <div class="mb-3">
                    <input type="text" id="alasan" class="block w-full py-5 text-black border border-gray-300 rounded-lg bg-gray-50 text-base" placeholder="Alasan mengikuti program *Explore Thailand by Detiktravel*">
                </div>
                <!-- Upload Foto dan Keterangan -->
                <div class="flex items-center my-2">
                    <!-- Input Foto -->
                    <label class="flex flex-col justify-between items-center w-1/2 h-auto bg-gray-100 border-2 border-dashed border-gray-400 rounded-lg cursor-pointer hover:bg-gray-200">
                        <div class="flex flex-col items-center justify-between p-3 my-5">
                            <!-- Icon Plus -->
                            <svg class="w-10 h-10 text-white p-2 rounded-full" style="background-color: aqua;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <p class="text-gray-500 text-end mt-5 text-xs">Upload Foto Profil</p>
                        </div>
                        <input type="file" class="hidden" accept=".png, .jpg, .jpeg" />
                    </label>

                    <!-- Keterangan -->
                    <div class="p-3 w-1/2 text-center text-sm text-gray-600">
                        <p>1. Format file: .png, .jpg, .jpeg</p>
                        <p>2. Maksimal ukuran file 1MB</p>
                        <p>3. Disarankan foto mencakup 3:4 badan</p>
                    </div>
                </div>

                <!-- Input Link Instagram -->
                <div class="mb-3">
                    <input type="instagram" id="instagram" class="shadow-sm bg-gray-50 border Black text-sm rounded-lg block w-full p-2 placeholder-black" placeholder="Link Instagram" required />
                    <label for="instagram" class="block mb-2 text-sm font-light text-gray-400">Contoh: https://www.instagram.com/yourusername</label>
                </div>
                <!-- List Box -->
                <div class="flex items-center mb-3">
                    <div class="flex items-center h-5">
                        <input id="terms" type="checkbox" value="" class="w-4 h-4 border rounded-sm bg-gray-50" required />
                    </div>
                    <label for="terms" class="ms-2 text-sm font-light text-black">Dengan menekan tombol "Daftar", Saya menyetujui <br> <a href="#" class="text-blue-600 hover:underline">syarat dan ketentuan</a>yang berlaku</label>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="text-white font-medium rounded-md text-sm px-5 py-2.5 text-center" style="background-color: aqua;">Daftar</button>
                </div>
            </form>
        </div>
    </div>

    @include('layouts.footer')

    <script>
        feather.replace();
    </script>
</body>
</html>
