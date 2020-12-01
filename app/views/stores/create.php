<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create store</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Your CSS */
    </style>
    <script>
        /* Your JavaScript */
    </script>
</head>
<body>
<div class="main-container flex justify-center py-8 px-4">
    <div class="w-full sm:w-1/2">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Create a new store
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Fill all the fields to create a new store
            </p>
        </div>

        <form action="/stores/save" method="post" class="mt-6">

            <div class="mt-6 sm:mt-5">
                <label for="name" class="block text-sm font-medium text-gray-700">Store Name</label>
                <div class="mt-1">
                    <input type="text" name="name" id="name"
                           class="shadow-sm border focus:ring-indigo-500
                           focus:border-indigo-500 block w-full
                            sm:text-sm border-gray-300 rounded-md py-2 px-3"
                           placeholder="">
                </div>
            </div>

            <div class="mt-6 sm:mt-5">
                <label for="code" class="block text-sm font-medium text-gray-700">Store Code</label>
                <div class="mt-1">
                    <input type="text" name="code" id="code"
                           class="shadow-sm border focus:ring-indigo-500
                           focus:border-indigo-500 block w-full
                            sm:text-sm border-gray-300 rounded-md py-2 px-3"
                           placeholder="">
                </div>
            </div>

            <div class="mt-6 sm:mt-5">
                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                <div class="mt-1">
                    <select name="country" id="country" class="shadow-sm border focus:ring-indigo-500
                           focus:border-indigo-500 block w-full
                            sm:text-sm border-gray-300 rounded-md py-2 px-3">
                        <option value="">Select a coutry</option>
                        <?php foreach ($data['countries'] as $country) { ?>
                            <option value="<?= $country->id ?>"><?= $country->name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="mt-6 sm:mt-5">
                <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                <div class="mt-1">
                    <select name="state" id="state" class="shadow-sm border focus:ring-indigo-500
                           focus:border-indigo-500 block w-full
                            sm:text-sm border-gray-300 rounded-md py-2 px-3">
                        <option value="">Select a country first</option>
                        <?php foreach ($data['states'] as $state) { ?>
                            <option value="<?= $state->id ?>"><?= $state->name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="mt-6 sm:mt-5">
                <label for="city_id" class="block text-sm font-medium text-gray-700">City</label>
                <div class="mt-1">
                    <select name="city_id" id="city_id" class="shadow-sm border focus:ring-indigo-500
                           focus:border-indigo-500 block w-full
                            sm:text-sm border-gray-300 rounded-md py-2 px-3">
                        <option value="">Select a state first</option>
                        <?php foreach ($data['cities'] as $city) { ?>
                            <option value="<?= $city->id ?>"><?= $city->name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="mt-6 sm:mt-5">
                <div class="mt-1">
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>
</body>
</html>

