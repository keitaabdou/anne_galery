<x-app-layout>

    <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
        <h1 class=" text-5xl uppercase font-bold text-shadow-md pb-14">
            Ajouter des Images
        </h1>

        <form action="/image" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="p-10">
                <input type="text" name="title" placeholder="Titre" class="placeholder-gray-500 placeholder-opacity-100">
            </div>
            <div class="mt-4">
                <input type="file" name="image[]"  multiple>
            </div>
            <button class="uppercase mt-5 bg-blue-500 text-gray-100 text-lg font-extrabold py-2 px-10 rounded-3xl" type="submit">
                Valider
            </button>
        </form>
    </div>


</x-app-layout>
